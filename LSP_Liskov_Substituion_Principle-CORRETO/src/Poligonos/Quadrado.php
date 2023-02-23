<?php
namespace App\Poligonos;
use App\Poligonos\Retangulo;

class Quadrado{
    private $largura;
    private $altura;

    public function setLargura(float $largura) {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function setAltura(float $altura) {
        $this->altura = $altura;
        $this->largura = $altura;
    }

    public function getLargura() {
        return $this->largura;
    }

    public function getAltura() {
        return $this->altura;
    }
}