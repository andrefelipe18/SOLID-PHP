<?php

namespace App;
use App\Item;

class CarrinhoCompra {
    //atributos
    private $itens; 

    //métodos
    public function __construct() {
        $this->itens = [];
    }

    public function getItens(){
        return $this->itens;
    }

    public function adicionarItem(Item $item){
        if($item->validandoItem()){
            array_push($this->itens, $item);
        }
        return false;
    }

    public function validarCarrinho(){
        return count($this->itens) > 0; //se o carrinho tiver itens, retorna true
    }
}