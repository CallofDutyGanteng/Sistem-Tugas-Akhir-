<?php

$router = $di->getRouter();

$router->add('/','guide::index');
$router->add('/masuk','auth::login');
$router->add('/keluar','auth::logout');


$router->handle();
