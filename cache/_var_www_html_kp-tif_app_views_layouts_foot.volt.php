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