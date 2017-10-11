<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tugas Akhir Sistem-Phalcon</title>
    {{ stylesheet_link("css/bootstrap.min.css") }}
    {{ stylesheet_link("css/material-dashboard.css") }}
    {{ stylesheet_link("css/demo.css") }}
    {{ stylesheet_link("css/font.css") }}
    {{ stylesheet_link("css/style.css") }}
    {{ stylesheet_link("css/jquery.dataTables.min.css") }}
    {{ stylesheet_link("css/pe-icon-7-stroke.css") }}
    {{ stylesheet_link(["rel":"icon", "href":"img/favicon.png", "type":"image/x-icon"]) }}
    {{ stylesheet_link("vendor/font-awesome/css/font-awesome.css") }}
    {{ javascript_include('js/jquery-3.2.1.min.js') }}
</head>
<body>
<?php if($this->session->has('nip_nim')) { ?>
    {% include "layouts/sidebar.volt" %}
    <div class="main-panel">
        {% include 'layouts/nav.volt' %}
        <div class="content">
            <div class="container-fluid">
                {{ content() }}
            </div>
        </div>
        {% include "layouts/footbar.volt" %}
    </div>
    <?php } else { ?>

    {% include "auth/login.volt" %}
    <?php } ?>
</div>
{#{{ javascript_include('js/jquery-3.2.1.min.js') }}#}
<!-- Latest compiled and minified JavaScript -->

{{ javascript_include('js/bootstrap.min.js') }}
{{ javascript_include('js/jquery.dataTables.min.js') }}
{{ javascript_include('js/dataTables.buttons.min.js') }}
{{ javascript_include('js/arrive.min.js') }}
{{ javascript_include('js/materialize.min.js') }}
{#{{ javascript_include('plugin/datatables-plugins/dataTables.bootstrap.js') }}#}
{{ javascript_include('js/demo.js') }}
{{ javascript_include('js/material.min.js') }}
{{ javascript_include('js/perfect-scrollbar.jquery.min.js') }}
{{ javascript_include('js/material-dashboard.js') }}
{#{{ javascript_include('js/flotdata.js') }}#}
<script type="text/javascript">
    $(document).ready(function() {
        $('#di').DataTable({
            processing :true,
            serverSide: true,
            dataType: "json",
            ajax: {
                url: '/mahasiswa/index',
                method: 'POST'
            },
            columns: [
                {data: "nim", searchable: false},
                {data: "name"},
                {data: "department"}
            ]
        });
    });
</script>
</body>
</html>
