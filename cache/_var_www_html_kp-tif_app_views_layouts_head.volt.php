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