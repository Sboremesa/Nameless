{include file='header.tpl'}
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    {include file='navbar.tpl'}
    {include file='sidebar.tpl'}

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{$GROUPS}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{$PANEL_INDEX}">{$DASHBOARD}</a></li>
                            <li class="breadcrumb-item active">{$GROUPS}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {include file='includes/update.tpl'}

                <div class="card">
                    <div class="card-body">
                        <h5 style="display:inline">{$PERMISSIONS}</h5>
                        <div class="float-md-right">
                            <a class="btn btn-primary" href="{$BACK_LINK}">{$BACK}</a>
                        </div>
                        <hr />

                        {include file='includes/success.tpl'}

                        {include file='includes/errors.tpl'}

                        <form action="" method="post">
                            {foreach from=$ALL_PERMISSIONS key=key item=item}
                                <div class="table-responsive">
                                    <table id="{$key|escape}" class="table table-striped">
                                        <colgroup>
                                            <col span="1" style="width:70%">
                                            <col span="1" style="width:30%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>{$key|escape}</th>
                                                <th><a href="#" onclick="selectAllPerms('{$key|escape}'); return false;">{$SELECT_ALL}</a> | <a href="#" onclick="deselectAllPerms('{$key|escape}'); return false;">{$DESELECT_ALL}</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach from=$item key=permission item=title}
                                                <tr>
                                                    <td>{$title}</td>
                                                    <td><input type="checkbox" name="permissions[{$permission|escape}]" class="js-switch" value="1"{if is_array($PERMISSIONS_VALUES) && array_key_exists($permission|escape, $PERMISSIONS_VALUES)} checked{/if} ></td>
                                                </tr>
                                            {/foreach}
                                        </tbody>
                                    </table>
                                </div>
                            {/foreach}

                            <div class="form-group">
                                <input type="hidden" name="token" value="{$TOKEN}">
                                <input type="submit" class="btn btn-primary" value="{$SUBMIT}">
                            </div>
                        </form>

                    </div>
                </div>

                <!-- Spacing -->
                <div style="height:1rem;"></div>

            </div>
        </section>
    </div>

    {include file='footer.tpl'}

</div>
<!-- ./wrapper -->

{include file='scripts.tpl'}

<script type="text/javascript">
    function selectAllPerms(section){
        var table= $('table#' + section);
        table.find('tbody tr td .js-switch').each(function () {
            $(this).prop('checked', true);
            onChange(this);
        });
        return false;
    }
    function deselectAllPerms(section){
        var table= $('table#' + section);
        table.find('tbody tr td .js-switch').each(function () {
            $(this).prop('checked', false);
            onChange(this);
        });
        return false;
    }
    function onChange(el) {
        if (typeof Event === 'function' || !document.fireEvent) {
            var event = document.createEvent('HTMLEvents');
            event.initEvent('change', true, true);
            el.dispatchEvent(event);
        } else {
            el.fireEvent('onchange');
        }
    }
</script>

</body>
</html>