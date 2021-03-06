<?php

/**
 * @param array $info Minecraft server info
 *
 * @return string JSON Array
 */
class ServerInfoEndpoint extends EndpointBase {

    public function __construct() {
        $this->_route = 'serverInfo';
        $this->_module = 'Core';
        $this->_description = 'Update the Minecraft server information NamelessMC tracks';
    }

    public function execute(Nameless2API $api) {
        if ($api->isValidated()) {
            if ($api->validateParams($_POST, ['info'])) {
                if ($api->validateParams($_POST['info'], ['server-id', 'max-memory', 'free-memory', 'allocated-memory', 'tps', 'players', 'groups'])) {

                    $info = json_decode($_POST['info'], true);

                    // Ensure server exists
                    $server_query = $api->getDb()->get('mc_servers', array('id', '=', $info['server-id']));
                    if (!$server_query->count()) $api->throwError(27, $api->getLanguage()->get('api', 'invalid_server_id'));

                    try {
                        $api->getDb()->insert('query_results', array(
                            'server_id' => $info['server-id'],
                            'queried_at' => date('U'),
                            'players_online' => count($info['players']),
                            'extra' => $_POST['info'],
                            'groups' => json_encode($info['groups'])
                        ));

                        if (file_exists(ROOT_PATH . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . sha1('server_query_cache') . '.cache')) {
                            $query_cache = file_get_contents(ROOT_PATH . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . sha1('server_query_cache') . '.cache');
                            $query_cache = json_decode($query_cache);
                            if (isset($query_cache->query_interval))
                                $query_interval = unserialize($query_cache->query_interval->data);
                            else
                                $query_interval = 10;

                            $to_cache = array(
                                'query_interval' => array(
                                    'time' => date('U'),
                                    'expire' => 0,
                                    'data' => serialize($query_interval)
                                ),
                                'last_query' => array(
                                    'time' => date('U'),
                                    'expire' => 0,
                                    'data' => serialize(date('U'))
                                )
                            );

                            // Store in cache file
                            file_put_contents(ROOT_PATH . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . sha1('server_query_cache') . '.cache', json_encode($to_cache));
                        }
                    } catch (Exception $e) {
                        $api->throwError(25, $api->getLanguage()->get('api', 'unable_to_update_server_info'));
                    }

                    // Update usernames
                    try {
                        if (Util::getSetting($api->getDb(), 'username_sync')) {
                            if (count($info['players'])) {
                                foreach ($info['players'] as $uuid => $player) {
                                    $user = new User($uuid, 'uuid');
                                    if (count($user->data())) {
                                        if ($player['name'] != $user->data()->username) {
                                            // Update username
                                            if (!Util::getSetting($api->getDb(), 'displaynames', false)) {
                                                $user->update(array(
                                                    'username' => Output::getClean($player['name']),
                                                    'nickname' => Output::getClean($player['name'])
                                                ), $user->data()->id);
                                            } else {
                                                $user->update(array(
                                                    'username' => Output::getClean($player['name'])
                                                ), $user->data()->id);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    } catch (Exception $e) {
                        $api->throwError(25, $api->getLanguage()->get('api', 'unable_to_update_server_info'));
                    }

                    // Group sync
                    try {
                        $group_sync = $api->getDb()->get('group_sync', array('id', '<>', 0));

                        if ($group_sync->count()) {
                            $group_sync = $group_sync->results();
                            $group_sync_updates = array();
                            foreach ($group_sync as $item) {
                                if ($item->ingame_rank_name == '') continue;
                                $group_sync_updates[strtolower($item->ingame_rank_name)] = array(
                                    'website' => $item->website_group_id
                                );
                            }

                            if (count($info['players'])) {
                                foreach ($info['players'] as $uuid => $player) {
                                    $user = new User($uuid, 'uuid');
                                    if (count($user->data())) {
										// Any synced groups to remove?
										foreach($user->getGroups() as $group) {
											$group_name = strtolower($group->name);
											if (array_key_exists($group_name, $group_sync_updates) && in_array($group_name, $player['groups'])) {
												$user->removeGroup($group->id);
											}
										}
										
										// Any synced groups to add?
										foreach ($player['groups'] as $group) {
											$group_name = strtolower($group);
											if (array_key_exists($group_name, $group_sync_updates)) {
												$group_info = $group_sync_updates[$group_name];
												
												$user->addGroup($group_sync_updates[$group_info]['website']);
											}
										}
                                    }
                                }
                            }
                        }
                    } catch (Exception $e) {
                        $api->throwError(25, $api->getLanguage()->get('api', 'unable_to_update_server_info'));
                    }

                    $api->returnArray(array('message' => $api->getLanguage()->get('api', 'server_info_updated')));
                }
            }
        }
    }
}