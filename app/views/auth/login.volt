{% if session.has('nip_nim')%}
    <?php $this->response->redirect(''); ?>
{% else %}
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please LogIn</h3>
                    </div>
                    <div class="panel-body">
                        {{ form('auth/loginproses' , 'rule' : 'form') }}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="NIP / NIM" name="nip_nim" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type='submit' class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
{%endif%}
