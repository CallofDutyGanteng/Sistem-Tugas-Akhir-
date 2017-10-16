<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tugas Akhir Sistem-Phalcon</title>
    <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetLink('css/material-dashboard.css') ?>
    <?= $this->tag->stylesheetLink('css/demo.css') ?>
    <?= $this->tag->stylesheetLink('css/font.css') ?>
    <?= $this->tag->stylesheetLink('css/style.css') ?>
    <?= $this->tag->stylesheetLink('css/jquery.dataTables.min.css') ?>
    <?= $this->tag->stylesheetLink('css/pe-icon-7-stroke.css') ?>
    <?= $this->tag->stylesheetLink(['rel' => 'icon', 'href' => 'img/favicon.png', 'type' => 'image/x-icon']) ?>
    <?= $this->tag->stylesheetLink('vendor/font-awesome/css/font-awesome.css') ?>
    <?= $this->tag->javascriptInclude('js/jquery-3.2.1.min.js') ?>
</head>
<body>
<?php if($this->session->has('nip_nim')) { ?>
    <div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="img/sidebar-4.jpg">

        <div class="logo">
            <a href="<?= $this->url->get('guide') ?>" class="simple-text">
                <span class="text-primary">Tugas Akhir</span>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="<?= $this->url->get('guide') ?>">
                        <i class="pe-7s-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php if ($this->session->hak_akses == 'administrator') { ?>
                <li>
                    <a href="<?= $this->url->get('pengguna') ?>">
                        <i class="pe-7s-users"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                <?php } elseif ($this->session->hak_akses == 'dosen') { ?>
                    <li>
                        <a href="">
                            <i class="pe-7s-users"></i>
                            <p>Bimbingan Ku</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="pe-7s-users"></i>
                            <p>Riviwer Ku</p>
                        </a>
                    </li>
                <?php } elseif ($this->session->hak_akses == 'mahasiswa') { ?>
                <li>
                    <a href="<?= $this->url->get('pengajuan') ?>">
                        <i class="pe-7s-users"></i>
                        <p>Pengajuan</p>
                    </a>
                </li>
                <?php } elseif ($this->session->hak_akses == 'kordinatorTA') { ?>
                    <li>
                        <a href="<?= $this->url->get('mahasiswa') ?>">
                            <i class="pe-7s-users"></i>
                            <p>Data Mahasiswa</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->url->get('dosen') ?>">
                            <i class="pe-7s-users"></i>
                            <p>Data Dosen</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->url->get('pengajuan') ?>">
                            <i class="pe-7s-file"></i>
                            <p>Data Pengajaun</p>
                        </a>
                    </li>
                <?php } ?>
                <li class="active-pro ">
                    <a href="keluar">
                        <i class="pe-7s-rocket "></i>
                        <p class="text-primary">Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navbar-info" href="<?= $this->url->get('guide') ?>"><span class="text-primary">Sistem Informasi Tugas Akhir Mahasiswa </span></a>
        </div>

    </div>
</nav>
        <div class="content">
            <div class="container-fluid">
                <?= $this->getContent() ?>
            </div>
        </div>
        
    
        
            
                
                    
                        
                        
                    
                
                
                    
                        
                        
                    
                
            
        
        
            
            
                
            
            
        
    

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

    <?php } ?>
</div>

<!-- Latest compiled and minified JavaScript -->

<?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
<?= $this->tag->javascriptInclude('js/jquery.dataTables.min.js') ?>
<?= $this->tag->javascriptInclude('js/dataTables.buttons.min.js') ?>
<?= $this->tag->javascriptInclude('js/arrive.min.js') ?>
<?= $this->tag->javascriptInclude('js/materialize.min.js') ?>

<?= $this->tag->javascriptInclude('js/demo.js') ?>
<?= $this->tag->javascriptInclude('js/material.min.js') ?>
<?= $this->tag->javascriptInclude('js/perfect-scrollbar.jquery.min.js') ?>
<?= $this->tag->javascriptInclude('js/material-dashboard.js') ?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#klik").on("click",function(){
            $("#panel").slideDown();
        });
    });

</script>
</body>
</html>
