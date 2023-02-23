<?php 

namespace App;

class Poligono {
    private $forma;

    public function setForma(object $forma) {
        $this->forma = $forma;
    }

    public function getForma() {
        return $this->forma;
    }

    public function getArea() {
        return $this->getForma()->getLargura() * $this->getForma()->getAltura();
    }

}