<?php

namespace App\Extrator;

class File{
    private $dados = [];

    public function setDados(string $nome, string $cpf, string $email){
        //Adicionando os dados no array
        array_push($this->dados, [
            'nome' => $nome,
            'cpf' => $cpf,
            'email' => $email
        ]);
    }

    public function getDados(){
        return $this->dados;
    }
}