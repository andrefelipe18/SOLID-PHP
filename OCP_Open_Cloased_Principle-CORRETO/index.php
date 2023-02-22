<?php 
require __DIR__.'/vendor/autoload.php';
use App\Leitor;

echo "<h1 style='text-align: center;'>OCP - CORRETO</h1>";

//------------------------- CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$leitorCSV->lerArquivo();

//------------------------- TXT
$leitor2TXT = new Leitor();
$leitor2TXT->setDiretorio(__DIR__.'/arquivos');
$leitor2TXT->setArquivo('dados.txt');
$leitor2TXT->lerArquivo();

//$merge = array_merge($array_csv, $array_txt);


?>