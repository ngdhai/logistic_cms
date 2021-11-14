<script>mw.moduleCSS("<?php print modules_url(); ?>users/users_modules.css")</script>


<?php if (is_logged() == false): ?>
    <div class="iq-works-box text-start m-40 boots-form">
        <div class="box-static box-border-top padding-30" id="form-holder{rand}">
            <div class="alert alert-mini alert-danger margin-bottom-10" style="margin: 0;display: none;"></div>
            <br/>
            <form method="post" id="user_forgot_password_form{rand}" action="#" autocomplete="off">
                <div class="clearfix">
                    <!-- Email -->
                    <h2 class="text-center mb-5">Forgot Password</h2>
                    <div class="form-group mb-2">
                        <div class="input-group mb-0">
                            <input required="" type="text" class="form-control mb-2" placeholder="<?php _lang("Email", "templates/shopmag"); ?>*" name="username">
                        </div>
                        <b class="tooltip tooltip-bottom-right">"<?php _lang("Needed to verify your account", "templates/shopmag"); ?></b>
                    </div>

                    <module type="captcha"/>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit"></i> <?php print $form_btn_title; ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>
