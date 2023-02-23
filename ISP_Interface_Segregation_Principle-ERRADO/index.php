<?php 
require_once __DIR__ . '/vendor/autoload.php';

use App\DAO\LeadModel;
use App\DAO\UsuarioModel;
use App\DAO\ContratoModel;

echo "<h1 style='text-align: center;'>ERRADO</h1>";

$contratoModel = new ContratoModel();
print_r($contratoModel);
echo "<br>";

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo "<br>";

$leadModel = new LeadModel();
print_r($leadModel);
echo "<br>";