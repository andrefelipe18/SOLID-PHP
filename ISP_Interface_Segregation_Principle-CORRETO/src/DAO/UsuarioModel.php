<?php

namespace App\DAO;
use App\BD;
use App\interfaces\ICadastro;
use App\interfaces\ILog;
use App\interfaces\INotificacao;

use App\Componentes\Log;
use App\Componentes\Notificacao;

Class UsuarioModel extends BD implements ICadastro, ILog, INotificacao {
    public function salvar(){
        return "Salvando contrato";
    }
    public function registrarLog(Log $log){
        return "Registrando log";
    }

    public function enviarNotificacao(Notificacao $notificacao){
        return "Enviando notificação";
    }
}