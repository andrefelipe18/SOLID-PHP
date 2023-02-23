<?php 
require_once __DIR__ . '/vendor/autoload.php';

use App\DAO\ContratoModel;
use App\DAO\LeadModel;
use App\Componentes\Notificacao;

echo "<h1 style='text-align: center;'>CORRETO</h1>";

$contrato = new ContratoModel();
echo $contrato->salvar();

$lead = new LeadModel();
echo $lead->salvar();

$notificacao = new Notificacao();
echo $lead->enviarNotificacao($notificacao);

