<?php

namespace App\interfaces;


use App\Componentes\Notificacao;

interface INotificacao {
    public function enviarNotificacao(Notificacao $notificacao);
}