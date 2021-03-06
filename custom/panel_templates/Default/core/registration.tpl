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
                        <h1 class="m-0 text-dark">{$REGISTRATION}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{$PANEL_INDEX}">{$DASHBOARD}</a></li>
                            <li class="breadcrumb-item active">{$CONFIGURATION}</li>
                            <li class="breadcrumb-item active">{$REGISTRATION}</li>
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

                        {include file='includes/success.tpl'}

                        {include file='includes/errors.tpl'}

                        <form id="enableRegistration" action="" method="post">
                            <div class="form-group">
                                {$ENABLE_REGISTRATION}
                                <input type="hidden" name="enable_registration" value="0">
                                <input name="enable_registration" type="checkbox" class="js-switch js-check-change"{if $REGISTRATION_ENABLED eq 1} checked{/if} value="1" />
                            </div>
                            <input type="hidden" name="token" value="{$TOKEN}">
                        </form>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="verification">{$EMAIL_VERIFICATION}</label>
                                <input name="verification" id="verification" type="checkbox" class="js-switch"{if $EMAIL_VERIFICATION_VALUE eq 1} checked{/if} />
                            </div>
                            <div class="form-group">
                                <label for="InputEnableRecaptcha">{$GOOGLE_RECAPTCHA}</label>
                                <input id="InputEnableRecaptcha" name="enable_recaptcha" type="checkbox" class="js-switch" value="1"{if $GOOGLE_RECAPTCHA_VALUE eq 'true'} checked{/if} />
                            </div>
                            <div class="form-group">
                                <label for="InputEnableRecaptchaLogin">{$GOOGLE_RECAPTCHA_LOGIN}</label>
                                <input id="InputEnableRecaptchaLogin" name="enable_recaptcha_login" type="checkbox" class="js-switch" value="1"{if $GOOGLE_RECAPTCHA_LOGIN_VALUE eq 'true'} checked{/if} />
                            </div>
                            <div class="form-group">
                                <label for="InputCaptchaType">{$CAPTCHA_TYPE}</label>
                                <select name="captcha_type" id="InputCaptchaType" class="form-control">
                                    <option value="reCaptcha"{if $CAPTCHA_TYPE_VALUE eq 'reCaptcha'} selected{/if}>Google reCAPTCHA</option>
                                    <option value="hCaptcha"{if $CAPTCHA_TYPE_VALUE eq 'hCaptcha'} selected{/if}>hCaptcha</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="InputRecaptcha">{$RECAPTCHA_SITE_KEY}</label>
                                <input type="text" name="recaptcha" class="form-control" id="InputRecaptcha" placeholder="{$RECAPTCHA_SITE_KEY}" value="{$RECAPTCHA_SITE_KEY_VALUE}">
                            </div>
                            <div class="form-group">
                                <label for="InputRecaptchaSecret">{$RECAPTCHA_SECRET_KEY}</label>
                                <input type="text" name="recaptcha_secret" class="form-control" id="InputRecaptchaSecret" placeholder="{$RECAPTCHA_SECRET_KEY}" value="{$RECAPTCHA_SECRET_KEY_VALUE}">
                            </div>
                            <div class="form-group">
                                <label for="InputRegistrationDisabledMessage">{$REGISTRATION_DISABLED_MESSAGE}</label>
                                <textarea style="width:100%" rows="10" name="message" id="InputRegistrationDisabledMessage">{$REGISTRATION_DISABLED_MESSAGE_VALUE}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="InputValidationPromoteGroup">{$VALIDATE_PROMOTE_GROUP}</label> <span class="badge badge-info" data-toggle="popover" data-title="{$INFO}" data-content="{$VALIDATE_PROMOTE_GROUP_INFO}"><i class="fa fa-question"></i></span>
                                <select class="form-control" id="InputValidationPromoteGroup" name="promote_group">
                                    {foreach from=$GROUPS item=group}
                                        <option value="{$group->id}"{if $group->id eq $VALIDATION_GROUP} selected{/if}>{$group->name|escape}</option>
                                    {/foreach}
                                </select>
                            </div>
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

</body>
</html>