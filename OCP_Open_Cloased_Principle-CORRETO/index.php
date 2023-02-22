<?php 
require __DIR__.'/vendor/autoload.php';
use App\Leitor;

echo "<h1 style='text-align: center;'>OCP - ERRADO</h1>";

//------------------------- CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$array_csv = $leitorCSV->lerArquivo();

//------------------------- TXT
$leitor2TXT = new Leitor();
$leitor2TXT->setDiretorio(__DIR__.'/arquivos');
$leitor2TXT->setArquivo('dados.txt');
$array_txt = $leitor2TXT->lerArquivo();

$merge = array_merge($array_csv, $array_txt);

print("<pre>".print_r($merge, true)."</pre>");
?>