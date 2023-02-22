<?php
namespace App;

use App\Extrator\FileCSV;
use App\Extrator\FileTXT;
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
        
        if($extensao == 'csv'){
            $file = new FileCSV();
            $file->lerArquivo($caminho);
        }else if($extensao == 'txt'){
            $file = new FileTXT();
            $file->lerArquivo($caminho);
        }else{
            throw new \Exception("Extensão inválida");
        }
    }
}