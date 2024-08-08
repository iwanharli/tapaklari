<div class="modal fade modal-login" id="exampleModalToggle" aria-hidden="true" aria-label="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="tfre_login-form">
                <h2>Login:</h2>
                <div class="error_message tfre_message"></div>
                <form class="tfre_login" method="post" enctype="multipart/form-data" id="tfre_custom-login-form">
                    <div class="container">
                        <div class="form-group">
                            <label for="username">User Name:</label>
                            <input type="text" name="username" id="username" placeholder="Email or user name"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" placeholder="Your password"
                                required="">
                        </div>
                        <div>
                            <a href="#" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                                data-bs-dismiss="modal" class="tfre-reset-password" id="tfre-reset-password">Forgot
                                password?</a>
                        </div>
                        <input type="hidden" name="action" value="tfre_login_ajax">
                        <button type="submit" class="flat-button">Login</button>
                    </div>
                </form>
            </div>
            <div class="container tfre_register" id="tfre_register_redirect">
                <p>Don't you have an account? <a href="#" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Register.</a></p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-login" id="exampleModalToggle2" aria-hidden="true" aria-label="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="tfre_registration-form">
                <h2>Register:</h2>
                <div class="error_message tfre_message"></div>
                <form class="tfre_register" method="post" enctype="multipart/form-data" id="tfre_custom-register-form">
                    <div class="container">
                        <div class="form-group">
                            <label for="username">User Name:</label>
                            <input type="text" name="username" id="usernames" placeholder="User name" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email-modal" placeholder="Email " required="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="passwords" placeholder="Your passsword"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password:</label>
                            <input type="password" name="confirm_password" id="confirm_password"
                                placeholder="Confirm password" required="">
                        </div>
                        <input type="hidden" name="action" value="tfre_register_ajax">
                        <button type="submit" class="flat-button">Sign Up</button>
                    </div>
                </form>
            </div>
            <div class="container tfre_signin tfre_login_redirect" id="tfre_login_redirect">
                <p>Already have an account? <a href="#" data-bs-target="#exampleModalToggle"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Sign in.</a></p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-login" id="exampleModalToggle3" aria-hidden="true"
    aria-label="exampleModalToggleLabel3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="tfre-resset-password container">
                <div class="tfre_messages message tfre_messages_reset_password"></div>
                <form method="post" enctype="multipart/form-data">
                    <h4>Forgot your password?</h4>
                    <div class="form-group control-username">
                        <input name="user_login" class="form-control control-icon reset_password_user_login"
                            placeholder="Enter your username or email">
                        <input type="hidden" name="tfre_security_reset_password" value="667584e015">
                        <input type="hidden" name="action" value="tfre_reset_password_ajax">
                        <button type="submit" class="btn flat-button btn-block tfre_forgetpass">Get new
                            password</button>
                    </div>
                </form>
            </div>
            <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"
                class="tfre_login_redirect">Back to Login</a>
        </div>
    </div>
</div>
