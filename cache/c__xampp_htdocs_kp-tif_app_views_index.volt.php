<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Tugas Akhir Sistem-Phalcon</title>
        <?= $this->tag->stylesheetLink('css/bootstrap.css') ?>
        <?= $this->tag->stylesheetLink('css/side-navbar.css') ?>
        <?= $this->tag->stylesheetLink('css/sb-admin-2.css') ?>
        <?= $this->tag->stylesheetLink('css/style.css') ?>
        <?= $this->tag->stylesheetLink(['rel' => 'icon', 'href' => 'img/e-mahasiswa.png', 'type' => 'image/x-icon']) ?>
        <?= $this->tag->stylesheetLink('vendor/metisMenu/metisMenu.css') ?>
        <?= $this->tag->stylesheetLink('vendor/font-awesome/css/font-awesome.css') ?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <?= $this->tag->javascriptInclude('js/jquery-3.2.1.min.js') ?>

    </head>

    <body>
            <?php if($this->session->has('nip_nim')) { ?>
                <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= $this->url->get('') ?>"><big style="color: #1ab7ea">SISTEM TUGAS </big><big><strong style="color: #0d6aad";><i>AKHIR</i></strong></big></a>
            </div>
            <!-- /.navbar-header -->
            
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        

                        <?= $this->session->nip_nim ?> (<?= $this->session->nama ?>)  <i class="fa fa-caret-down"></i>

                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="keluar"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </nav> 
                <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <?= $this->tag->image(['img/e-mahasiswa.png', 'width' => '200', 'heigth' => '160', 'class' => 'offsside']) ?>
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                     
                </div>
                <!-- /input-group -->
            </li>
            <?php if ($this->session->hak_akses == 'administrator') { ?>
                <li>
                    <?= $this->tag->linkTo(['guide', ' Home', 'class' => 'fa fa-home']) ?>
                </li>
                <li>
                    <?= $this->tag->linkTo(['pengguna', ' Pengguna', 'class' => 'fa fa-user']) ?>
                </li>
                <li>
                    <?= $this->tag->linkTo(['setting', ' Settings', 'class' => 'fa fa-gear']) ?>
                </li>
            <?php } elseif ($this->session->hak_akses == 'dosen') { ?>
                    <li>
                        <?= $this->tag->linkTo(['profil', ' Profil', 'class' => 'fa fa-user']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['proposal', ' Syarat Proposal', 'class' => 'fa fa-map']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['mahasiswa', ' Bimbingan Ku', 'class' => 'fa fa-user']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['mahasiswa', ' Reivew Ku', 'class' => 'fa fa-user']) ?>
                    </li>
                <?php } elseif ($this->session->hak_akses == 'mahasiswa') { ?>
                    <li>
                        <?= $this->tag->linkTo(['pengajuan', ' Pengajuan', 'class' => 'fa fa-map']) ?>
                    </li>
                    <?php } elseif ($this->session->hak_akses == 'kordinatorTA') { ?>
                    <li>
                        <?= $this->tag->linkTo(['guide', ' Home', 'class' => 'fa fa-home']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['mahasiswa', ' Mahasiswa', 'class' => 'fa fa-user']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['dosen', ' Dosen', 'class' => 'fa fa-user-plus']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['syarat', ' Syarat Tugas Akhir', 'class' => 'fa fa-file']) ?>
                    </li>
                    <?php } ?>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->

                <div id="page-wrapper">
                    <?= $this->getContent() ?>
                </div>
           
            <?php } else { ?>

                <?php if ($this->session->has('nip_nim')) { ?>
    <?php $this->response->redirect(''); ?>
<?php } else { ?>
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
                        <?= $this->tag->form(['auth/loginproses', 'rule' => 'form']) ?>
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
<?php } ?>

            <?php } ?>

                    
            <!-- Latest compiled and minified JavaScript -->
            <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
            <?= $this->tag->javascriptInclude('js/sb-admin-2.min.js') ?>
            <?= $this->tag->javascriptInclude('vendor/morrisjs/morris.js') ?>
            <?= $this->tag->javascriptInclude('vendor/metisMenu/metisMenu.min.js') ?>
            
            <?= $this->tag->javascriptInclude('js/side-navbar.js') ?>
    </body>
</html>
