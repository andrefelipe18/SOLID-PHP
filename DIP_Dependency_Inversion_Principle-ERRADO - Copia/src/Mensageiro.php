<?php

namespace App;
use App\Email;

class Mensageiro
{
    private $canal;

    public function getCanal(){
        return $this->canal;
    }

    public function setCanal(string $canal){
        $this->canal = $canal;
    }
    
    public function enviarToken() {
        
        $classe = "App\\" . ucfirst($this->getCanal()); //Pegando o nome da classe que será instanciada
        print_r($classe);
        echo "<br>";
        $obj = new $classe();  //Instanciando a classe

        $obj = $obj->enviar();

        return $obj;
    }
}