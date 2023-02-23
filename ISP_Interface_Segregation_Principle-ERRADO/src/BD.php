<?php

namespace App;

class BD {
    private $conexao;

    protected function conectar(){
        return "Conectado ao banco de dados";
    }
}