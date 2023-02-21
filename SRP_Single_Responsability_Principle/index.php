<?php 
require_once __DIR__ . '/vendor/autoload.php';

use App\CarrinhoCompra;

echo "<h1 style='text-align: center;'>ERRADO</h1>";

//Istancia do objeto
$carrinho1 = new CarrinhoCompra();
echo "Valor total: R$ " . $carrinho1->exibirValorTotal() . "<br>";
print_r($carrinho1->exibirItens()); 
echo"<br>";
$carrinho1->adicionarItem('Camiseta', 100);
$carrinho1->adicionarItem('Calça', 200);
print_r($carrinho1->exibirItens());
echo "<br>";
echo "Valor total: R$ " . $carrinho1->exibirValorTotal() . "<br>";
echo "Status: " . $carrinho1->exibirStatus() . "<br>";
if($carrinho1->confirmarPedido()){
    echo "Pedido realizado com sucesso";
} else {
    echo "Erro na confirmação. Carrinho vazio";
}
echo "Status: " . $carrinho1->exibirStatus() . "<br>";