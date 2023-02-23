<?php

namespace App;
use App\IMensagemToken;

class Email implements IMensagemToken
{
    public function enviar()
    {
        return "Email enviado!";
    }
}