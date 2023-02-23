<?php

namespace App\interfaces;

use App\Componentes\Log;
use App\Componentes\Notificacao;

interface ICadastro {
    public function salvar();
    public function registrarLog(Log $log);
    public function enviarNotificacao(Notificacao $notificacao);

}