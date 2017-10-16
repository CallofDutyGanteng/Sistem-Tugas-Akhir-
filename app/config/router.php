<?php

$router = $di->getRouter();

$router->add('/','guide::index');
$router->add('/masuk','auth::login');
$router->add('/keluar','auth::logout');


$router->add('/proses_review','pengajuan::proses_review');
$router->add('/tunggu_review','pengajuan::tunggu_review');
$router->add('/bimbinganku','pengajuan::bimbinganku');
$router->add('/reviewku','pengajuan::reviewku');


$router->handle();
