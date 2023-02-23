<?php 
require_once __DIR__ . '/vendor/autoload.php';

use App\Retangulo;
use App\Quadrado;
echo "<h1 style='text-align: center;'>ERRADO</h1>";


$retangulo = new Retangulo;

$retangulo->setLargura(10);
$retangulo->setAltura(5);

$quadrado = new Quadrado;
$quadrado->setLargura(10);
$quadrado->setAltura(5);

echo "<h2 style='text-align: center;'>Área do retângulo: " . $retangulo->getArea() . "</h2>";
echo "<h2 style='text-align: center;'>Área do quadrado: " . $quadrado->getArea() . "</h2>";
