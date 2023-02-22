<?php

namespace App\Extrator;

class FileTXT extends File{
    public function lerArquivo(string $caminho) {
        $handle = fopen($caminho, 'r');

        while(!feof($handle)){
            $linha = fgets($handle);
            $this->setDados(
                substr($linha, 14, 30), //nome
                substr($linha, 0, 14), //CPF
                substr($linha, 44, 50) //email
            );
        }

        return $this->getDados();
    }
}