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
    <?= $this->tag->stylesheetLink('css/bootstrap-datetimepicker.css') ?>
    <?= $this->tag->stylesheetLink('vendor/metisMenu/metisMenu.css') ?>
    <?= $this->tag->stylesheetLink('vendor/font-awesome/css/font-awesome.css') ?>

    <!--<?= $this->tag->stylesheetLink('css/jquery.modal.css') ?>-->

    <style>
        .navbar {
            background:url("img/background.png");
            background-position: center top;
            background-attachment:fixed;
            background-size:100%;
            color:#ffffff;
        }
    </style>
</head>
    <body>
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
                <a class="navbar-brand" href="<?= $this->url->get('guide') ?>"><big style="color: #ffffff">SISTEM  TUGAS</big><big><strong style="color: #0d6aad";><i> AKHIR</i></strong></big></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-gears"><i class="fa fa-caret-down"></i></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li>
                            <?= $this->tag->linkTo(['auth/login', ' Logout', 'class' => 'fa fa-sign-out fa-fw']) ?>
                            
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <?= $this->tag->image(['img/l_uin.png', 'width' => '100%']) ?>
                </div>
                <!-- /input-group -->
            </li>
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
            <li>
                <?= $this->tag->linkTo(['proposal', ' Syarat Proposal', 'class' => 'fa fa-map']) ?>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
        </nav>
    </div>
        <div id="page-wrapper">
            <?= $this->getContent() ?>
        </div>
   </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?= $this->tag->javascriptInclude('js/jquery-3.2.1.min.js') ?>
        
<!-- Latest compiled and minified JavaScript -->
<?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
        <?= $this->tag->javascriptInclude('js/sb-admin-2.min.js') ?>
        <?= $this->tag->javascriptInclude('vendor/morrisjs/morris.js') ?>
        <?= $this->tag->javascriptInclude('vendor/metisMenu/metisMenu.min.js') ?>
        
        <?= $this->tag->javascriptInclude('js/side-navbar.js') ?>
        <?= $this->tag->javascriptInclude('js/custom.js') ?>
        <?= $this->tag->javascriptInclude('js/style.js') ?>
        <?= $this->tag->javascriptInclude('js/bootstrap-datetimepicker.js') ?>
        <?= $this->tag->javascriptInclude('js/bootstrap-datetimepicker.fr.js') ?>
</body>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
</html>
