<?php

namespace App;
use App\IMensagemToken;

class Sms implements IMensagemToken
{
    public function enviar()
    {
        return "SMS enviado!";
    }
}