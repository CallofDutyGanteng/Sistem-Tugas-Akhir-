<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Tugas Akhir Sistem-Phalcon</title>
        {{ stylesheet_link("css/bootstrap.css") }}
        {{ stylesheet_link("css/side-navbar.css") }}
        {{ stylesheet_link("css/sb-admin-2.css") }}
        {{ stylesheet_link("css/style.css") }}
        {{ stylesheet_link(["rel":"icon", "href":"img/e-mahasiswa.png", "type":"image/x-icon"]) }}
        {{ stylesheet_link("vendor/metisMenu/metisMenu.css") }}
        {{ stylesheet_link("vendor/font-awesome/css/font-awesome.css") }}
        {#{{ stylesheet_link("css/jquery.modal.css") }}#}
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        {{ javascript_include('js/jquery-3.2.1.min.js') }}

    </head>

    <body>
            <?php if($this->session->has('nip_nim')) { ?>
                {% include "layouts/header.volt" %}
                {% include "layouts/sidebar.volt" %}
                <div id="page-wrapper">
                    {{ content() }}
                </div>
           {% include "layouts/footbar.volt" %}
            <?php } else { ?>

                {% include "auth/login.volt" %}
            <?php } ?>

                    {#{{ javascript_include('js/jquery-3.2.1.min.js') }}#}
            <!-- Latest compiled and minified JavaScript -->
            {{ javascript_include('js/bootstrap.min.js') }}
            {{ javascript_include('js/sb-admin-2.min.js') }}
            {{ javascript_include('vendor/morrisjs/morris.js') }}
            {{ javascript_include('vendor/metisMenu/metisMenu.min.js') }}
            {#{{ javascript_include('js/flotdata.js') }}#}
            {{ javascript_include('js/side-navbar.js') }}
    </body>
</html>
