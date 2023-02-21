<?php

namespace App;

class CarrinhoCompra {
    //atributos
    private $itens;
    private $status;
    private $valorTotal;

    //métodos
    public function __construct()
    {
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItens() {
        return $this->itens;
    }

    public function adicionarItem(string $item, float $valor){
        array_push($this->itens, ["item" => $item, "valor" => $valor]); //adiciona um item ao array
        $this->valorTotal += $valor;
        return true;
    }

    public function exibirValorTotal() {
        return $this->valorTotal;
    }

    public function exibirStatus() {
        return $this->status;
    }

    public function fecharCarrinho() {
        $this->status = 'fechado';
        return true;
    }

    public function confirmarPedido(){
        if(!$this->validarCarrinho()) { //Se o array de itens não tiver itens, retorna false
            return false;
        }
        $this->status = 'confirmado';
        $this->enviarEmailConfirmacao();
    }

    public function enviarEmailConfirmacao(){
        echo 'Email enviado.......';
    }

    public function validarCarrinho() {
        return count($this->itens) > 0; //Caso o array tenha itens, retorna true
    }
}