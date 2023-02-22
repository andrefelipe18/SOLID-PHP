<?php

namespace App\Extrator;

class FileCSV extends File{
    public function lerArquivo(string $caminho){
        $handle = fopen($caminho, 'r');

        while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
            $this->setDados($data[0], $data[1], $data[2]);
        }

        fclose($handle);

        return $this->getDados();
        echo "<pre>";
        print_r($this->getDados());
        echo "</pre>";
    }
}