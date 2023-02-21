<?php 
require_once __DIR__ . '/vendor/autoload.php';

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

echo "<h1 style='text-align: center;'>CORRETO</h1>";

//criando itens
$item1 = new Item();
$item1->setDescricao('Camiseta');
$item1->setValor(100.50);
/*-------------------*/
$item2 = new Item();
$item2->setDescricao('Calça');
$item2->setValor(200.50);
/* ------------------*/
$item3 = new Item();
$item3->setDescricao('Meia');
$item3->setValor(40.50);


//criando um pedido
$pedido = new Pedido();

//adicionando itens ao carrinho de compras
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
$pedido->getCarrinhoCompra()->adicionarItem($item3);


//Exibindo os itens do carrinho de compras
$itens = $pedido->getCarrinhoCompra()->getItens();

echo "<h2>Itens do carrinho de compras</h2>";
foreach($itens as $item){
    echo "Descrição: " . $item->getDescricao() . " - Valor: " . $item->getValor() . "<br>";
}

//Valor total do pedido
$valorTotal = 0;
foreach($itens as $item){
    $valorTotal += $item->getValor();
}
echo "<h2>Valor total do pedido: " . $valorTotal . "</h2>";


//confirmando o pedido
if($pedido->confirmar()){
    echo "<h2>Pedido confirmado com sucesso!</h2>";
    echo EmailService::disparandoEmail();
} else {
    echo "<h2>Não foi possível confirmar o pedido</h2>";
}