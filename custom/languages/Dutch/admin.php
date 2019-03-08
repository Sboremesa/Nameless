<?php
/*
 *	Gemaakt door Samerton
 *  en vertaald en bijgewerkt door Sander Lambrechts, Jesse Geerts, Derkades en smessie
 *
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Nederlandse taal - Admin
 */

$language = array(
	/*
	 *  Admin controle paneel
	 */
	// Login
	're-authenticate' => 'Gelieve opnieuw te verifiëren',

	// Navigatiebalk
	'dashboard' => 'Dashboard',
	'configuration' => 'Configuratie',
	'layout' => 'Stijl',
	'user_management' => 'Gebruikersbeheer',
	'admin_cp' => 'Controle Paneel',
	'administration' => 'Administratie',
	'overview' => 'Overzicht',
	'core' => 'Kern',
	'integrations' => 'Integrations',
	'minecraft' => 'Minecraft',
	'modules' => 'Modules',
	'security' => 'Beveiliging',
	'sitemap' => 'Sitemap',
	'styles' => 'Stijlen',
	'users_and_groups' => 'Gebruikers en groepen',

	// Overzicht
	'running_nameless_version' => 'Website versie: <strong>{x}</strong>', // Verander "{x}" niet
	'running_php_version' => 'PHP versie: <strong>{x}</strong>', // Verander "{x}" niet
	'statistics' => 'Statistieken',
	'registrations' => 'Registraties',
	'topics' => 'Onderwerpen',
	'posts' => 'Posts',
	'notices' => 'Berichten',
	'no_notices' => 'Geen berichten.',
	'email_errors_logged' => 'Email fouten zijn vastgesteld',

	// Kern
	'settings' => 'Instellingen',
	'general_settings' => 'Algemene Instellingen',
	'sitename' => 'Site naam',
	'default_language' => 'Standaard taal',
	'default_language_help' => 'Gebruikers kunnen kiezen uit alle geinstalleerde talen.',
	'install_language' => 'Installeer Taal',
	'update_user_languages' => 'Gebruikerstalen Bijwerken',
	'update_user_languages_warning' => 'Dit zal de taal bijwerken voor alle gebruikers op uw site, zelfs als ze er al een hebben geselecteerd!',
	'updated_user_languages' => 'De gebruikerstalen zijn bijgewerkt.',
	'installed_languages' => 'Alle nieuwe talen zijn toegevoegd.',
	'default_timezone' => 'Standaard tijdzone',
	'registration' => 'Registratie',
	'enable_registration' => 'Schakel registratie in?',
	'verify_with_mcassoc' => 'Verifieer gebruiker accounts met MCAssoc?',
	'email_verification' => 'Schakel email verificatie in?',
	'registration_settings_updated' => 'Registratie-instellingen succesvol bijgewerkt.',
	'homepage_type' => 'Beginpagina type',
	'post_formatting_type' => 'Bericht opmaak soort',
	'portal' => 'Portaal',
	'private_profiles' => 'Privé Profielen',
	'missing_sitename' => 'Graag een sitenaam invullen van 2 tot 64 karakters lang.',
	'missing_contact_address' => 'Gelieve een contact e-mailadres in te vullen dat tussen de 3 en 255 tekens lang is.',
	'use_friendly_urls' => 'Vriendelijke URLs',
	'use_friendly_urls_help' => 'BELANGRIJK: Je webserver/webhosting moet geconfigureerd zijn om gebruik te maken van mod_rewrite en .htaccess vooraleer dit werkt.',
	'config_not_writable' => 'Uw <strong>core/config.php</strong> bestand is niet schrijfbaar. Controleer de permissies.',
	'settings_updated_successfully' => 'Algemene instellingen succesvol bijgewerkt.',
	'social_media' => 'Sociale Media',
	'youtube_url' => 'Youtube URL',
	'discord_id' => 'Discord Server ID',
	'discord_widget_theme' => 'Discord Widget Thema',
	'dark' => 'Donker',
	'light' => 'Licht',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Gebruik het donkere thema voor Twitter?',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'social_media_settings_updated' => 'Social media instellingen succesvol bijgewerkt.',
	'successfully_updated' => 'Succesvol bijgewerkt',
	'debugging_and_maintenance' => 'Debugging en onderhoud',
	'maintenance' => 'Onderhoud',
	'debugging_settings_updated_successfully' => 'Debugging instellingen succesvol bijgewerkt.',
	'enable_debug_mode' => 'Wil je debug modus inschakelen?',
	'force_https' => 'Forceer https?',
	'force_https_help' => 'Als dit aanstaat, worden alle verzoeken naar deze website doorgestuurd via https. Je moet een geldig SSL certificaat hebben die actief is om dit te laten werken.',
	'force_www' => 'Forceer www?',
	'contact_email_address' => 'Emailadres voor contact',
	'emails' => 'Emails',
	'email_errors' => 'Email fouten',
	'registration_email' => 'Registratie email',
	'contact_email' => 'Contact email',
    'forgot_password_email' => 'Vergeten wachtwoord email',
	'unknown' => 'Onbekend',
	'delete_email_error' => 'Fout verwijderen',
	'confirm_email_error_deletion' => 'Weet je zeker dat je deze fout wilt verwijderen?',
	'viewing_email_error' => 'Fout aan het bekijken',
	'unable_to_write_email_config' => 'Kon niet naar het bestand <strong>core/email.php</core> schrijven. Graag de bestandsrechten bekijken.',
	'enable_mailer' => 'PHPMailer inschakelen?',
	'enable_mailer_help' => 'Zet dit aan als de emails standaard niet worden verzonden. Als je gebruik wilt maken van PHPMailer heb je een email dienst nodig waarmee je emails kan verzenden, zoals Gmail of een SMTP provider (Outlook/Hotmail).',
	'outgoing_email' => 'Uitgaand Emailadres',
	'outgoing_email_info' => 'Dit is het email adres waarmee NamelessMC emails gaat verzenden.',
	'mailer_settings_info' => 'De volgende velden zijn nodig als je PHPMailer aan hebt gezet. Voor meer informatie hoe je deze velden moet invullen, bekijk dan <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">de wiki</a>.',
	'host' => 'Host',
	'email_port' => 'Poort',
	'email_password_hidden' => 'Het wachtwoord wordt om veiligheidsredenen niet getoond.',
	'send_test_email' => 'Verzend test email',
	'send_test_email_info' => 'Deze knop zorgt ervoor dat er een email naar het email addres, <strong>{x}</strong> wordt verzonden. Eventuele fouten tijdens het versturen van die e-mail, worden weergegeven.', // Verander {x} niet
	'send' => 'Verzend',
	'test_email_error' => 'Test email fout:',
	'test_email_success' => 'Test email succesvol verzonden!',
	'terms_error' => 'Zorg ervoor dat je algemene voorwaarden niet meer dan 100000 karakters bevat.',
	'privacy_policy_error' => 'Voer een privacybeleid in dat niet langer is dan 100000 tekens.',
	'terms_updated' => 'Algemene voorwaarden succesvol bijgewerkt.',
    'avatars' => 'Avatars',
    'allow_custom_avatars' => 'Toestaan van aangepaste gebruiker avatars?',
    'default_avatar' => 'Standaard avatar',
    'custom_avatar' => 'Aangepaste avatar',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Minecraft avatar bron',
    'built_in_avatars' => 'Ingebouwde avatar dienst',
    'minecraft_avatar_perspective' => 'Minecraft avatar perspectief',
    'face' => 'Gezicht',
    'head' => 'Hoofd',
	'bust' => 'Bust',
    'select_default_avatar' => 'Selecteer een nieuwe standaard avatar:',
    'no_avatars_available' => 'Geen avatars beschikbaar. Graag eerst een niewe afbeelding uploaden hierboven.',
    'avatar_settings_updated_successfully' => 'Avatar instellingen succesvol geüpdatet.',
    'navigation' => 'Navigatie',
    'navbar_order' => 'Navbar ordening',
    'navbar_order_instructions' => 'Je kan elk item een nummer boven de 0 geven om items te ordenen in de navbar, met 1 de eerste en hogere nummers erna.',
    'navbar_icon' => 'Navbar Icon',
    'navbar_icon_instructions' => 'U kunt hier ook een pictogram aan elk item op de navigatiebalk toevoegen, bijvoorbeeld met behulp van <a href="https://fontawesome.com/v4.7.0/" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
    'navigation_settings_updated_successfully' => 'Navigatie-instellingen succesvol bijgewerkt.',
    'dropdown_items' => 'Dropdown Items',
    'enable_page_load_timer' => 'Pagina laad timer inschakelen?',
    'google_recaptcha' => 'Google reCAPTCHA aanzetten?',
    'recaptcha_site_key' => 'reCAPTCHA Site Key',
    'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
    'registration_disabled_message' => 'Bericht voor uitgezette registratie',
    'enable_nicknames_on_registration' => 'Bijnamen inschakelen bij het registreren van gebruikers?',
    'validation_promote_group' => 'Postvalidatie groep',
    'validation_promote_group_info' => 'Dit is de groep waartoe een gebruiker wordt gepromoveerd zodra hij zijn account heeft gevalideerd.',
    'login_method' => 'Login Methode',
    'privacy_and_terms' => 'Privacy & Voorwaarden',

	// Reacties
	'icon' => 'Icoon',
	'type' => 'Type',
	'positive' => 'Positief',
	'neutral' => 'Neutraal',
	'negative' => 'Negatief',
	'editing_reaction' => 'Reactie veranderen',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nieuwe reactie',
	'creating_reaction' => 'Reactie maken',
	'no_reactions' => 'Er zijn nog geen reacties.',
	'reaction_created_successfully' => 'Reactie succesvol geplaatst.',
	'reaction_edited_successfully' => 'Reactie succesvol aangepast.',
	'reaction_deleted_successfully' => 'Reactie succesvol verwijderd.',
	'name_required' => 'Een naam is vereist',
	'html_required' => 'HTML is vereist',
	'type_required' => 'Een type is vereist',
	'name_maximum_16' => 'De naam mag niet meer dan 16 karakters zijn',
	'html_maximum_255' => 'De HTML mag niet meer dan 255 karakters bevatten',
	'confirm_delete_reaction' => 'Weet u zeker dat u deze reactie wilt verwijderen?',

	// Aangepaste profiel velden
	'custom_fields' => 'Aangepaste profiel velden',
	'new_field' => '<i class="fa fa-plus-circle"></i> Nieuw veld',
	'required' => 'Verplicht',
	'editable' => 'Aanpasbaar',
	'public' => 'Openbaar',
	'text' => 'Tekst',
	'textarea' => 'Tekst gebied',
	'date' => 'Datum',
	'creating_profile_field' => 'Maak een profiel veld',
	'editing_profile_field' => 'Profiel veld bewerken',
	'field_name' => 'Veld naam',
	'profile_field_required_help' => 'Verplichte velden moeten door de gebruiker worden ingevuld, en ze verschijnen tijden de registratie.',
	'profile_field_public_help' => 'Openbare velden kunnen alle gebruikers zien, als dit uit staat kunnen alleen beheerders het zien.',
	'profile_field_error' => 'Graag een veld naam invullen tussen de 2 en 16 karakters lang.',
	'description' => 'Beschrijving',
	'display_field_on_forum' => 'Veld laten zien in het forum?',
	'profile_field_forum_help' => 'Als dit aan staat, wordt het veld weergegeven bij de gebruiker naast de forum berichten.',
	'profile_field_editable_help' => 'Indien ingeschakeld, hebben gebruikers toestemming om het veld in hun profielinstellingen te bewerken.',
 	'no_custom_fields' => 'Er zijn nog geen aangepaste velden.',
	'profile_field_updated_successfully' => 'Het profielveld is met succes bijgewerkt.',
	'profile_field_created_successfully' => 'Het profielveld is met succes aangemaakt.',
	'profile_field_deleted_successfully' => 'Het profielveld is met succes verwijderd.',

	// Minecraft
	'enable_minecraft_integration' => 'Minecraft integratie aan?',
	'mc_service_status' => 'Minecraft Dienst Status',
	'service_query_error' => 'Kon de dienst status niet verkrijgen.',
	'authme_integration' => 'AuthMe integratie',
	'authme_integration_info' => 'Wanneer AuthMe integratie aanstaat, kunnen de gebruikers alleen in-game een account maken.',
	'enable_authme' => 'AuthMe integratie aanzetten?',
	'authme_db_address' => 'AuthMe Database Adres',
	'authme_db_port' => 'AuthMe Database Poort',
	'authme_db_name' => 'AuthMe Database Naam',
	'authme_db_user' => 'AuthMe Database Gebruikersnaam',
	'authme_db_password' => 'AuthMe Database Wachtwoord',
	'authme_db_password_hidden' => 'The AuthMe database password is hidden for security reasons.',
	'authme_hash_algorithm' => 'AuthMe Hashing Algoritme',
	'authme_db_table' => 'AuthMe User Table',
	'enter_authme_db_details' => 'Vul geldige database gegevens in.',
	'authme_password_sync' => 'Synchroniseer AuthMe wachtwoord?',
	'authme_password_sync_help' => 'Als het aanstaat, veranderd het wachtwoord op de website, wanneer hij of zij het in-game verandert.',
	'minecraft_servers' => 'Minecraft Servers',
	'account_verification' => 'Minecraft Account Verificatie',
	'server_banners' => 'Server Banners',
	'query_errors' => 'Query Fouten',
	'add_server' => '<i class="fa fa-plus-circle"></i> Server toevoegen',
	'no_servers_defined' => 'Er zijn geen servers gedefinieerd',
	'query_settings' => 'Query instellingen',
	'default_server' => 'Standaard server',
	'no_default_server' => 'Geen standaard server',
	'external_query' => 'Gebruike externe query?',
	'external_query_help' => 'Als de standaard server query niet werkt, gebruik dan deze optie.',
	'adding_server' => 'Server toevoegen',
	'server_name' => 'Server naam',
	'server_address' => 'Server adres',
	'server_address_help' => 'Dit is het IP adres of domein dat wordt gebruikt door de spelers om met de server te verbinden.',
	'server_port' => 'Server poort',
	'parent_server' => 'Hoofd server',
	'parent_server_help' => 'Een hoofd server is gewoonlijk de BungeeCord server waarmee de website is verbonden, als deze er is.',
	'no_parent_server' => 'Geen hoofd server',
	'bungee_instance' => 'BungeeCord Server?',
	'bungee_instance_help' => 'Zet dit aan als de server een BungeeCord server is.',
	'server_query_information' => 'Om een lijst met spelers te laten zien, <strong>moet</strong> je server de optie \'enable-query\' aanzetten in de server\'s <strong>server.properties</strong> bestand',
	'enable_status_query' => 'Status query aanzetten?',
	'status_query_help' => 'Als dit aanstaat, zal er op de status pagina staan of de server online is.',
	'enable_player_list' => 'Spelerslijst aanzetten?',
	'pre_1.7' => 'Is de server ouder dan Minecraft versie 1.7?',
	'player_list_help' => 'Als dit aanstaat, wordt er op de status pagina een lijst van online spelers weergegeven.',
	'server_query_port' => 'Server Query poort',
	'server_query_port_help' => 'Dit is de query.port optie in je server\'s server.properties bestand, zorg er ook voor dat de enable-query optie in hetzelfde bestaand aanstaat (true).',
	'server_name_required' => 'Vul een server naam in.',
	'server_name_minimum' => 'Zorg dat de server naam uit minimaal 1 karakter bestaat.',
	'server_name_maximum' => 'Zorg dat de server naam uit maximaal 20 karakters bestaat.',
	'server_address_required' => 'Vul een server adres in.',
	'server_address_minimum' => 'Zorg dat het server adres uit minimaal 1 karakter bestaat.',
	'server_address_maximum' => 'Zorg dat het server adres uit maximaal 64 karakters bestaat.',
	'server_port_required' => 'Vul een server poort in.',
	'server_port_minimum' => 'Zorg ervoor dat je server port minimaal uit 2 karakters bestaat',
	'server_port_maximum' => 'Zorg ervoor dat je server port is a maximum of 5 karakters bestaat',
	'server_parent_required' => 'Graag een hoofd server selecteren',
	'query_port_maximum' => 'Zorg ervoor dat je query poort maximaal uit 5 karakters bestaat',
	'server_created' => 'Server succesvol aangemaakt.',
	'confirm_delete_server' => 'Weet je zeker dat je deze server wilt verwijderen?',
	'server_updated' => 'Server succesvol bijgewerkt.',
	'editing_server' => 'Server bewerken',
	'server_deleted' => 'Server succesvol verwijderd',
	'unable_to_delete_server' => 'Deze server kan niet worden verwijderd.',
	'leave_port_empty_for_srv' => 'You can leave the port empty if it is 25565, or if your domain uses an SRV record',
	'viewing_query_error' => 'Query fout aan het bekijken',
	'confirm_query_error_deletion' => 'Weet je zeker dat je deze query fout wilt verwijderen?',
	'no_query_errors' => 'Geen query fouten vastgesteld.',
	'new_banner' => '<i class="fa fa-plus-circle"></i> Nieuwe banner',
	'purge_errors' => 'Verwijder fouten',
	'confirm_purge_errors' => 'Weet je zeker dat je alle fouten wilt verwijderen?',
	'email_errors_purged_successfully' => 'E-mailfouten zijn met succes verwijderd.',
	'error_deleted_successfully' => 'De fout is met succes verwijderd.',
	'no_email_errors' => 'Geen e-mailfouten geregistreerd.',
	'email_settings_updated_successfully' => 'De e-mailinstellingen zijn met succes bijgewerkt.',
	'content' => 'Inhoud',
	'mcassoc_help' => 'mcassoc is een externe dienst die gebruikt kan worden om te controleren of gebruikers het Minecraft account hebben gekocht waarmee zij zich hebben geregistreerd. Om deze functie te gebruiken, dien je je aan te melden voor een "shared key". Je kan deze krijgen op de <a href="https://mcassoc.lukegb.com/" target="_blank">mcassoc website</a>.',
	'mcassoc_key' => 'mcassoc Shared Key',
	'mcassoc_instance' => 'mcassoc Instance Key',
	'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Klik om een "instance key" te genereren</a>',
	'mcassoc_error' => 'Zorg ervoor dat je je "shared key" correct hebt ingevuld, en dat je een "instance key" correct hebt gegenereerd.',
	'updated_mcassoc_successfully' => 'mcassoc instellingen succesvol bijgewerkt.',
	'force_premium_accounts' => 'Forceer betaalde Minecraft accounts?',
	'banner_background' => 'Banner achtergrond',
	'query_interval' => 'Query interval (in minuten, moet tussen de 5 en 60)',
	'player_graphs' => 'Speler grafieken',
	'player_count_cronjob_info' => 'Je kan een cron job instellen om je servers op tevragen elke {x} minuten met de volgende commando:',
	'status_page' => 'Statuspagina inschakelen?',
	'minecraft_settings_updated_successfully' => 'Settings updated successfully.',
	'server_id_x' => 'Server ID: {x}', // Don't replace {x}
	'server_information' => 'Server Information',
	'query_information' => 'Query Information',
	'query_errors_purged_successfully' => 'Query errors purged successfully.',
	'query_error_deleted_successfully' => 'Query error deleted successfully.',
	'banner_updated_successfully' => 'Banner updated successfully. It may take a while for your changes to take effect.',

	// Modulen
	'modules_installed_successfully' => 'Alle nieuwe modules zijn succesvol toegevoegd.',
	'enabled' => 'Ingeschakeld',
	'disabled' => 'Uitgeschakeld',
	'enable' => 'Inschakelen',
	'disable' => 'Uitschakelen',
	'module_enabled' => 'Module ingeschakeld.',
	'module_disabled' => 'Module uitgeschakeld.',
	'author' => 'Auteur:',
	'author_x' => 'Auteur: {x}', // Don't replace {x}
	'module_outdated' => 'We have detected that this module is intended for Nameless version {x}, but you are running Nameless version {y}', // Don't replace "{x}" or "{y}"
	'find_modules' => 'Find Modules',
	'view_all_modules' => 'View all modules',
	'unable_to_retrieve_modules' => 'Unable to retrieve modules',
	'module' => 'Module',
	'unable_to_enable_module' => 'Unable to enable incompatible module.',

	// Stijlen
	'templates' => 'Sjablonen',
	'panel_templates' => 'Panel Templates',
	'template_outdated' => 'We hebben ontdekt dat dit sjabloon voor versie {x} is, maar je gebruikt versie {y}', // Verander "{x}" of "{y}" niet
	'active' => 'Actief',
	'deactivate' => 'Deactiveer',
	'activate' => 'Activeer',
	'warning_editing_default_template' => 'Waarschuwing! Het wordt niet aanbevolen om het standaard sjabloon te bewerken.',
	'images' => 'Afbeeldingen',
	'upload_new_image' => 'Upload nieuwe afbeelding',
	'reset_background' => 'Herstel achtergrond naar standaard',
	'install' => '<i class="fa fa-plus-circle"></i> Installeren',
	'template_updated' => 'Sjabloon succesvol bijgewerkt.',
	'default' => 'Standaard',
	'make_default' => 'Maak standaard',
	'default_template_set' => 'Standaard sjabloon verzet naar {x} succesvol.', // Verander "{x}" niet
	'template_deactivated' => 'Sjabloon gedeactiveerd.',
	'template_activated' => 'Sjabloon geactiveerd.',
	'permissions' => 'Toestemmingen',
	'setting_perms_for_x' => 'Instellen van toestemmingen voor sjabloon {x}', // Verander "{x}" niet
	'templates_installed_successfully' => 'Elk nieuw sjabloon is geinstalleerd .',
	'confirm_delete_template' => 'Weet je zeker dat je dit sjabloon wilt verwijderen?',
	'delete' => 'Verwijder',
	'template_deleted_successfully' => 'Sjabloon succesvol verwijderd.',
	'background_image_x' => 'Achtergrondafbeelding: <strong>{x}</strong>', // Don't replace {x}
	'banner_image_x' => 'Banner image: <strong>{x}</strong>', // Don't replace {x}
	'background_directory_not_writable' => 'The <strong>uploads/backgrounds</strong> directory is not writable!',
	'template_banners_directory_not_writable' => 'The <strong>uploads/template_banners</strong> directory is not writable!',
	'template_banner_reset_successfully' => 'Banner reset successfully.',
	'template_banner_updated_successfully' => 'Banner updated successfully.',
	'reset_banner' => 'Reset Banner',
	'find_templates' => 'Find Templates',
	'view_all_templates' => 'View all templates',
	'unable_to_retrieve_templates' => 'Unable to retrieve templates',
	'template' => 'Template',
	'stats' => 'Stats',
	'downloads_x' => 'Downloads: {x}',
	'views_x' => 'Views: {x}',
	'rating_x' => 'Rating: {x}',
	'editing_template_x' => 'Editing template {x}', // Don't replace {x}
	'editing_template_file_in_template' => 'Editing file {x} in template {y}', // Don't replace {x} or {y}
	'cant_write_to_template' => 'Can\'t write to template file! Please check file permissions.',
	'unable_to_delete_template' => 'Unable to fully delete template. Please check file permissions.',
	'background_reset_successfully' => 'Background reset successfully.',
	'background_updated_successfully' => 'Background updated successfully.',
	'unable_to_enable_template' => 'Unable to enable incompatible template.',

	// Gebruikers & groepen
	'users' => 'Gebruikers',
	'groups' => 'Groepen',
	'group' => 'Groep',
	'new_user' => '<i class="fa fa-plus-circle"></i> Nieuwe gebruiker',
	'creating_new_user' => 'Maak een nieuwe gebruiker',
	'registered' => 'Aangemeld',
	'user_created' => 'Gebruiker succesvol aangemaakt.',
	'cant_delete_root_user' => 'Kan de hoofdgebruiker niet verwijderen!',
	'cant_modify_root_user' => 'Kan de groep van de hoofdgebruiker niet wijzigen!',
	'user_deleted' => 'Gebruiker succesvol verwijderd.',
	'confirm_user_deletion' => 'Weet je zeker dat je <strong>{x}</strong> wilt verwijderen?', // Verander "{x}" niet
	'validate_user' => 'Valideer gebruiker',
	'update_uuid' => 'UUID bijwerken',
	'update_mc_name' => 'Minecraft naam bijwerken',
	'reset_password' => 'Herstel wachtwoord',
	'punish_user' => 'Straf gebruiker',
	'delete_user' => 'Verwijder gebruiker',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Andere acties',
	'disable_avatar' => 'Avatar uitschakelen',
	'select_user_group' => 'Je moet een groep slecteren.',
	'uuid_max_32' => 'De UUID mag maar uit 32 karakters bestaan.',
	'title_max_64' => 'De gebruikers titel mag maar uit 64 karakters bestaan.',
	'group_id' => 'Groep ID',
	'name' => 'Naam groep',
	'title' => 'Gebruikers titel',
	'new_group' => '<i class="fa fa-plus-circle"></i> Nieuwe groep',
	'group_name_required' => 'Graag een groepsnaam invoeren.',
	'group_name_minimum' => 'Zorg ervoor dat de groepsnaam minimaal uit 2 karakters bestaat.',
	'group_name_maximum' => 'Zorg ervoor dat de groepsnaam maximaal uit 20 karakters bestaat.',
	'creating_group' => 'Nieuwe groep maken',
	'group_html_maximum' => 'Zorg ervoor dat je groeps HTML code niet langer is dan 1024 karakters.',
	'group_html' => 'Groeps HTML code',
	'group_html_lg' => 'Groeps grotere HTML code',
	'group_username_colour' => 'Groep gebruikersnaam kleur',
	'group_staff' => 'Is de groep voor personeel?',
	'delete_group' => 'Verwijder groep',
	'confirm_group_deletion' => 'Weet je zeker dat je de groep {x} wilt verwijderen?', // Verander "{x}" niet
	'group_not_exist' => 'Die groep bestaat niet.',
	'secondary_groups' => 'Bijkomende groepen',
	'secondary_groups_info' => 'De gebruiker zal de bijkomende toestemmingen van deze groepen ook krijgen',
	'unable_to_update_uuid' => 'De UUID kan niet worden bijgewerkt.',
	'default_group' => 'Is de standaardgroep (voor nieuwe gebruikers)?',
	'user_id' => 'User ID',
	'uuid' => 'UUID',
	'group_order' => 'Groep Volgorde',
	'group_created_successfully' => 'Groep succesvol aangemaakt.',
	'group_updated_successfully' => 'Groep succesvol aangepast.',
	'group_deleted_successfully' => 'Groep succesvol verwijderd.',
	'unable_to_delete_group' => 'Kan een standaardgroep of een groep die de StaffCP kan bekijken, niet verwijderen. Wijzig eerst de instellingen van de groep!',
	'can_view_staffcp' => 'Kan de groep de StaffCP bekijken?',
	'user' => 'User',
	'user_validated_successfully' => 'User validated successfully.',
	'user_updated_successfully' => 'User updated successfully.',
	'editing_user_x' => 'Editing user {x}', // Don't replace {x}
	'details' => 'Details',

	// Permissies
	'select_all' => 'Selecteer Allemaal',
	'deselect_all' => 'Deselecteer Allemaal',
	'background_image' => 'Achtergrondafbeelding',
	'can_edit_own_group' => 'Kan de permissies van je eigen groep niet bewerken.',
	'permissions_updated_successfully' => 'Permissies succesvol geüpdatet.',
	'cant_edit_this_group' => 'Je kan deze groep haar permissies niet aanpassen!',

	// Algemene admin taal
	'task_successful' => 'Taak succesvol.',
	'invalid_action' => 'Ongeldige actie.',
	'enable_night_mode' => 'Zet nachtmodus aan',
	'disable_night_mode' => 'Zet nachtmodus uit',
	'view_site' => 'Terug naar de website',
	'signed_in_as_x' => 'Ingelogd als {x}', // Verander "{x}" niet
	'warning' => 'Waarschuwing',

	// Onderhoud
	'maintenance_mode' => 'Onderhoud modus',
	'maintenance_enabled' => 'Onderhoud modus staat nu aan.',
	'enable_maintenance_mode' => 'Wil je onderhoud modus inschakelen?',
	'maintenance_mode_message' => 'Onderhoud modus bericht',
	'maintenance_message_max_1024' => 'Zorg ervoor dat je onderhoud bericht maximaal uit 1024 karakters bestaat.',

	// Beveiliging
	'acp_logins' => 'Controle paneel aanmeldingen',
	'please_select_logs' => 'Welk logboek wil je bekijken?',
	'ip_address' => 'IP Adres',
	'template_changes' => 'Sjabloon veranderingen',
	'file_changed' => 'Veranderde bestanden',
	'all_logs' => 'Alle Logboeken',
	'action' => 'Actie',
	'action_info' => 'Actie Info',

	// Updates
	'update' => 'Bijwerken',
	'current_version_x' => 'Huidige versie: <strong>{x}</strong>', // Verander "{x}" niet
	'new_version_x' => 'Nieuwe versie: <strong>{x}</strong>', // Verander "{x}" niet
	'new_update_available' => 'Er is een nieuwe versie beschikbaar',
	'new_urgent_update_available' => 'Er is een nieuwe dringende update beschikbaar. Gelieve zo snel mogelijk te updaten!',
	'up_to_date' => 'Deze website draait al de nieuwste versie!',
	'urgent' => 'Je moet je website dringend bijwerken',
	'changelog' => 'Lijst van veranderingen',
	'update_check_error' => 'Er was een fout met het zoeken naar nieuwe versies:',
	'instructions' => 'Instructies',
	'download' => 'Download',
	'install_confirm' => 'Zorg ervoor dat je het bestand hebt gedownload en de bestanden hebt geupload voordat je verder gaat!',
	'check_again' => 'Check again',

	 // Widgets
	'widgets' => 'Widgets',
	'widget_enabled' => 'Widget ingeschakeld.',
	'widget_disabled' => 'Widget uitgeschakeld.',
	'widget_updated' => 'Widget updated.',
	'editing_widget_x' => 'Widget {x} bewerken', // Don't replace {x}
	'module_x' => 'Module: {x}', // Don't replace {x}
	'widget_order' => 'Widget Volgorde',

    // Online users widget
    'include_staff_in_user_widget' => 'Personeelsleden opnemen in user widget?',
    'show_nickname_instead_of_username' => 'Show user\'s nickname instead of username?',

    // aangepaste pagina's
    'pages' => 'Pagina\'s',
    'custom_pages' => 'Pagina\'s',
    'new_page' => '<i class="fa fa-plus-circle"></i> Nieuwe pagina',
    'no_custom_pages' => 'Er zijn nog geen paginas gemaakt.',
    'creating_new_page' => 'Pagina aan het maken',
    'page_title' => 'Pagina titel',
    'page_path' => 'Pagina pad (met vooraf een /, bv /voorbeeld)',
    'page_icon' => 'Pagina icoon',
    'page_link_location' => 'Pagina Link Locatie',
    'page_link_navbar' => 'Navbar',
    'page_link_footer' => 'Voettekst',
    'page_link_more' => '"Meer" Dropdown',
    'page_link_none' => 'Geen link',
    'page_content' => 'Pagina inhoud',
    'page_redirect' => 'Pagina doorsturing?',
    'page_redirect_to' => 'Doorstuur link (met vooraf http://)',
    'unsafe_html' => 'Toestaan van onveilige HTML?',
    'unsafe_html_warning' => 'Dit aanzetten betekent dat je HTML kan gebruiken op je pagina, inclusief potentieel gevaarlijke JavaScript. Alleen aanzetten als je weet dat je HTML veilig is.',
    'include_in_sitemap' => 'Include in sitemap?',
    'sitemap_link' => 'Sitemap link:',
    'page_permissions' => 'Pagina toestemmingen',
    'view_page' => 'Pagina bekijken?',
    'editing_page_x' => 'Pagina {x} aan het bewerken', // Verander {x} niet
    'unable_to_create_page' => 'Kon pagina niet maken:',
    'page_title_required' => 'Een pagina titel is nodig.',
    'page_url_required' => 'Een pagina pad is nodig.',
    'link_location_required' => 'Een link locatie is nodig.',
    'page_title_minimum_2' => 'De pagina titel moet minimaal uit 2 karakters bestaan.',
    'page_url_minimum_2' => 'Het pagina pad moet minimaal uit 2 karakters bestaan.',
    'page_title_maximum_30' => 'De pagina titel moet maximaal uit 30 karakters bestaan.',
    'page_icon_maximum_64' => 'Het pagina icoon moet maximaal uit 64 karakters bestaan.',
    'page_url_maximum_20' => 'Het pagina pad moet maximaal uit 20 karakters bestaan.',
    'page_content_maximum_100000' => 'De pagina inhoud moet minimaal uit 100000 karakters bestaan.',
    'page_redirect_link_maximum_512' => 'De pagina doorstuur link moet minimaal uit 512 karakters bestaan.',
    'confirm_delete_page' => 'Weet je zeker dat je deze pagina wilt verwijderen?',
    'page_created_successfully' => 'Page created successfully.',
    'page_updated_successfully' => 'Page updated successfully.',
    'page_deleted_successfully' => 'Page deleted successfully.',

	// API
	'api' => 'API',
	'enable_api' => 'API aanzetten?',
	'api_info' => 'De API staat toe dat plugins en andere services mogen communiceren met je website, zoals de <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >officiële Nameless plugin</a>.',
	'enable_legacy_api' => 'Legacy API aanzetten?',
	'legacy_api_info' => 'De legacy API staat toe dat plugins die de verouderde versie (1) API gebruiken werken met uw huidige versie (2).',
	'confirm_api_regen' => 'Weet je zeker dat jij jouw API key wilt vernieuwen?',
	'api_key' => 'API Key',
	'api_url' => 'API URL',
	'copy' => 'Kopieer',
	'api_key_regenerated' => 'De API-sleutel is met succes geregenereerd.',
	'api_registration_email' => 'API Registratie Email',
	'show_registration_link' => 'Toon registratie link',
	'registration_link' => 'Registratie Link',
	'link_to_complete_registration' => 'Link voor het voltooien van de registratie: {x}', // Don't replace {x}
	'api_verification' => 'Activeer API verificatie?',
	'api_verification_info' => 'Indien ingeschakeld, kunnen accounts alleen worden geverifieerd via de API, bijvoorbeeld via de officiële Nameless plugin. <strong>Deze optie overschrijft e-mailverificatie en accounts worden automatisch geactiveerd!</strong><br />Je moet je standaard groep instellen om beperkte permissies te hebben, en vervolgens de post-validatie groep in de StaffCP -> Configuration -> Registratie tabblad naar de volledige groep leden met normale permissies bijwerken.',
	'enable_username_sync' => 'Gebruikersnaam synchroniseren?',
	'enable_username_sync_info' => 'Indien ingeschakeld, zullen de gebruikersnamen van de website worden aangepast aan de ingame gebruikersnamen.',
	'api_settings_updated_successfully' => 'API-instellingen succesvol bijgewerkt.',
	'group_sync' => 'Groep synchronisatie',
	'group_sync_info' => 'De groep van een gebruiker op de website zal aangepast worden aan de hand van de in-game groep.',
	'ingame_group' => 'In-game groep',
	'website_group' => 'Website groep',
	'set_as_primary_group' => 'Instellen als primaire groep?',
	'set_as_primary_group_info' => 'Als dit aan staat, zal de primaire groep op de website vervangen worden. Als dit uit staat, zal de groep bijgevoegd worden aan de lijst van secundaire groepen.',
	'ingame_group_maximum' => 'Zorg dat de group naam niet langer is dan 64 tekens.',
	'select_website_group' => 'Selecteer een website groep.',
	'ingame_group_already_exists' => 'Er bestaat al een groep synchronisatie regel voor deze in-game groep.',
	'group_sync_rule_created_successfully' => 'De groep synchronisatie regel is succesvol aangemaakt.',
	'group_sync_rules_updated_successfully' => 'Group synchronisatie regels zijn succesvol bijgewerkt.',
	'group_sync_rule_deleted_successfully' => 'De group synchronisatie regel is succesvol verwijderd.',
	'existing_rules' => 'Bestaande Regels',
	'new_rule' => 'Nieuwe Regel',

	// Bestand uploads
	'drag_files_here' => 'Sleep bestand(en) hier naartoe om te uploaden.',
	'invalid_file_type' => 'Bestandstype is incorrect',
	'file_too_big' => 'Het bestand dat je wilt uploaden is te groot! Je bestand is {{filesize}} en het limiet is {{maxFilesize}} .', // Verander {{filesize}} of {{maxFilesize}} niet
	'allowed_proxies' => 'Toegestane Proxies',
	'allowed_proxies_info' => 'Lijngescheiden lijst van toegestane proxy IP\'s.',

	// Error logs
	'error_logs' => 'Fouten Logs',
	'notice_log' => 'Berichtenlogboek',
	'warning_log' => 'Waarschuwing logboek',
	'custom_log' => 'Aangepast logboek',
	'other_log' => 'Overige logboek',
	'fatal_log' => 'Fataal logboek',
	'log_file_not_found' => 'Logbestand niet gevonden.',
	'log_purged_successfully' => 'Het logboek is met succes gewist.',

	// Hooks
	'discord_hooks' => 'Discord Hooks',
	'discord_hooks_info' => 'Stuur een bericht naar een Discord kanaal wanneer er iets gebeurt op uw site. Maak een Discord hook in uw Discord Server Settings -> Webhooks tabblad.',
	'discord_hook_url' => 'Discord webhook URL',
	'discord_hook_events' => 'Ingeschakelde Discord hook-gebeurtenissen (Ctrl+klik om meerdere gebeurtenissen te selecteren)',
	'register_hook_info' => 'Gebruikersregistratie',
	'validate_hook_info' => 'Gebruikervalidatie',
	'delete_hook_info' => 'Gebruikerverwijdering',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Kan geen sitemap-bestand laden {x}', // Don't replace {x}
	'sitemap_generated' => 'Sitemap succesvol gegenereerd',
	'sitemap_not_writable' => 'De <strong>cache/sitemaps</strong> map is niet beschrijfbaar.',
	'cache_not_writable' => 'De <strong>cache</strong> map is niet beschrijfbaar.',
	'generate_sitemap' => 'Genereer Sitemap',
	'download_sitemap' => 'Download Sitemap',
	'sitemap_not_generated_yet' => 'Een sitemap is nog niet gegenereerd!',
	'sitemap_last_generated_x' => 'De sitemap is als laatste gegenereerd {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Pagina Metagegevens',
	'metadata_page_x' => 'Metagegevens aan het bekijken voor pagina {x}', // Don't replace {x}
	'keywords' => 'Sleutelwoorden',
	'description_max_500' => 'De beschrijving mag maximaal 500 karakters bevatten.',
	'page' => 'Page',
	'metadata_updated_successfully' => 'Metadata updated successfully.',

	// Dashboard
	'total_users' => 'Totaal Aantal Gebruikers',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'Nieuwe Gebruikers',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Gemiddelde Spelers',
	'nameless_news' => 'NamelessMC Nieuws',
	'unable_to_retrieve_nameless_news' => 'Niet in staat om het laatste nieuws op te halen',
	'confirm_leave_site' => 'U staat op het punt deze site te verlaten! Weet u zeker dat u <strong id="leaveSiteURL">{x}</strong> wilt bezoeken?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Server Compatibiliteit',
	'issues' => 'Problemen',

	// Other
	'source' => 'Bron',
	'support' => 'Ondersteuning',
	'admin_dir_still_exists' => 'Waarschuwing! De map <strong>modules/Core/pages/admin</strong> bestaat nog steeds. Gelieve deze te verwijderen.',
	'mod_dir_still_exists' => 'Waarschuwing! De map <strong>modules/Core/pages/mod</strong> bestaat nog steeds. Gelieve deze te verwijderen.'
);
