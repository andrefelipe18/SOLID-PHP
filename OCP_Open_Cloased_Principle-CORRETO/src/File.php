<?php

namespace App;

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
    public function lerArquivoCSV(string $caminho){
        $handle = fopen($caminho, 'r');

        while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
            $this->setDados($data[0], $data[1], $data[2]);
        }

        fclose($handle);

        print("<pre>".print_r($this->dados, true)."</pre>");
    }

    public function lerArquivoTXT(string $caminho) {
        $handle = fopen($caminho, 'r');

        while(!feof($handle)){
            $linha = fgets($handle);
            $this->setDados(
                substr($linha, 14, 30), //nome
                substr($linha, 0, 14), //CPF
                substr($linha, 44, 50) //email
            );
        }

        print("<pre>".print_r($this->dados, true)."</pre>");
    }
}