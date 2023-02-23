<?php 
require_once __DIR__ . '/vendor/autoload.php';


echo "<h1 style='text-align: center;'>CORRETO</h1>";

use App\Mensageiro;
use App\Email;
use App\Sms;

//--------- Email

$msgEmail = new Mensageiro(new Email());
echo $msgEmail->enviarToken();
echo "<br>";

//--------- SMS
$msgSms = new Mensageiro(new Sms());
echo $msgSms->enviarToken();
