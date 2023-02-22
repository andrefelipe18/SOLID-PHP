<?php
namespace App;

use App\File;

class Leitor
{
    private $diretorio;
    private $arquivo;

    public function getDiretorio()
    {
        return $this->diretorio;
    }
    public function getArquivo(){
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio)
    {
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo(){
        $caminho = $this->getDiretorio().'/'.$this->getArquivo(); //pegando o caminho do arquivo

        //vendo se o arquivo é csv ou txt
        $extensao = pathinfo($caminho, PATHINFO_EXTENSION);
        
        $arquivo = new File();

        if($extensao == 'csv'){
            $arquivo->lerArquivoCSV($caminho);
        }else if($extensao == 'txt'){
            $arquivo->lerArquivoTXT($caminho);
        }

    }
}