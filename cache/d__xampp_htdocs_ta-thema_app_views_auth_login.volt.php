<?php if ($this->session->has('nip_nim')) { ?>
    <?php $this->response->redirect(''); ?>
<?php } else { ?>
    <html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <br>
    <br>
    <br>
    <div class="wrapper">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h3 class="title">Please Log In</h3>
                    </div>
                    <div class="card-content">
                        <div class="login-panel">
                            <div class="panel-heading">
                                <?= $this->tag->form(['auth/loginproses', 'rule' => 'form']) ?>
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control text-primary" placeholder="NIP / NIM" name="nip_nim" type="text"
                                               autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control text-primary" placeholder="Password" name="password" type="password"
                                               value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type='submit' class="btn btn-lg btn-primary btn-block">Login</button>
                                </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
<?php } ?>
