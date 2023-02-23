<?php 
require_once __DIR__ . '/vendor/autoload.php';

use App\Poligono;
use App\Poligonos\Retangulo;
use App\Poligonos\Quadrado;

echo "<h1 style='text-align: center;'>CORRETO</h1>";

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo '<pre>';
print_r($poligono->getForma());
echo '</pre>';

//Area do retangulo
echo $poligono->getArea();  

$poligono->setForma(new Quadrado());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo '<pre>';
print_r($poligono->getForma());
echo '</pre>';

//Area do quadrado
echo $poligono->getArea();  