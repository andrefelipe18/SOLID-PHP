<?php 
require_once __DIR__ . '/vendor/autoload.php';


echo "<h1 style='text-align: center;'>ERRADO</h1>";

use App\Mensageiro;

//--------- Email
$msgEmail = new Mensageiro();
$msgEmail->setCanal("email");
echo $msgEmail->enviarToken();
echo "<br>";

//--------- SMS
$msgSms = new Mensageiro();
$msgSms->setCanal("sms");
echo $msgSms->enviarToken();
