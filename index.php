<?php
require 'vendor/autoload.php';
MercadoPagoConfig::setAccessToken("APP_USR-1664271525797360-071516-b80eab86f6c738f317cacaf0963d8d8b-1896508744");
$notificacion=file_get_contents("php://input");
    $datos=json_decode($notificacion,true);
    $filePath="pagos.txt";
    $file=fopen($filePath,'a');
    fwrite($file,"NOTIFICACION:". $datos . PHP_EOL);
    fclose($file);
    http_response_code(200);
