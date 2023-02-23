<?php

namespace App\DAO;
use App\BD;
use App\interfaces\ICadastro;


Class ContratoModel extends BD implements ICadastro  {
    public function salvar(){
        return "Salvando contrato";
    }
}
