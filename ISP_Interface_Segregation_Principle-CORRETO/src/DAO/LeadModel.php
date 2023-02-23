<?php

namespace App\DAO;
use App\BD;
use App\interfaces\INotificacao;
use App\interfaces\ICadastro;
use App\Componentes\Notificacao;

Class LeadModel extends BD implements INotificacao, ICadastro  {
    public function enviarNotificacao(Notificacao $notificacao){
        return "Enviando notificação";
    }

    public function salvar(){
        return "Salvando lead";
    }
}