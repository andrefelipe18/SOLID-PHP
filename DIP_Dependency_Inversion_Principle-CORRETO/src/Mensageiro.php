<?php

namespace App;
use App\IMensagemToken;

class Mensageiro
{
    private $canal;

    public function __construct(IMensagemToken $canal)
    {
        $this->setCanal($canal);
    }

    public function getCanal(){
        return $this->canal;
    }

    public function setCanal(IMensagemToken $canal){
        $this->canal = $canal;
    }
    
    public function enviarToken() {
        return $this->canal->enviar();
    }
}