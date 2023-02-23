<?php

namespace App\interfaces;

use App\Componentes\Log;


interface ILog {
    public function registrarLog(Log $log);
}