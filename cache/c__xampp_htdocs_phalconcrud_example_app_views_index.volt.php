<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Simple CRUD Phalcon</title>
        <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
        <?= $this->tag->stylesheetLink('css/side-navbar.css') ?>
        <!--<?= $this->tag->stylesheetLink('css/jquery.modal.css') ?>-->
    </head>
    <body>
      <div id="wrapper" class="active">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>-->
            <a class="navbar-brand" href="<?= $this->url->get('') ?>">Simple CRUD Phalcon</a>
          </div>
          <!-- /.navbar-header -->
          <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav">
              <!--<ul class="nav" id="nice-menu">
                <li class="sidebar-brand">
                  <div class="ttdiv">
                    <span class="ttspan-fill">Menu</span>
                    <span class="ttspan-right"><i class="fa fa-align-justify"></i></span>
                  </div>
                </li>
              </ul>-->
              <ul class="nav" id="side-menu">
                <li>
                  <a href="<?= $this->url->get('') ?>"><span class="ttspan-fill">Dashboard</span></a>
                </li>
                <!--<li>
                  <a href="#"><span class="ttspan-fill">List Mahasiswa</span></a>
                </li>-->
                <li>
                  <a href="" data-toggle="modal" data-target="#modalTambah"><span class="ttspan-fill">Tambah Data Mahasiswa</span></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="page-wrapper">
            <?= $this->getContent() ?>
        </div>
      </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <?= $this->tag->javascriptInclude('js/jquery-3.2.1.min.js') ?>
        <!-- Latest compiled and minified JavaScript -->
        <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
        <?= $this->tag->javascriptInclude('js/side-navbar.js') ?>
        <?= $this->tag->javascriptInclude('js/custom.js') ?>
    </body>
</html>
