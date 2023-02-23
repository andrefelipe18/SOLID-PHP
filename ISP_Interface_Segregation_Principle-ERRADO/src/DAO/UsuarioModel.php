<?php

namespace App\DAO;
use App\BD;
use App\interfaces\ICadastro;

use App\Componentes\Log;
use App\Componentes\Notificacao;

Class UsuarioModel extends BD implements ICadastro {
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