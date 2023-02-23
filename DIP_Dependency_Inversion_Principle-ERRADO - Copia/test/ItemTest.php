<?php

namespace App\test;

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase{
    public function testEstadoInicialItem(){
        $item = new Item();

        $item->getDescricao();
        $item->getValor();

        //Asserções do PHPUnit
        $this->assertEquals('', $item->getDescricao()); //Verifica se o valor é igual ao esperado
        $this->assertEquals(0, $item->getValor()); //Verifica se o valor é igual ao esperado

    }

    public function testGetSetDescricao(){
        $descricao = 'Cadeira de plásitco';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao()); //Verifica se o valor é igual ao esperado
    }
    /** 
    * @dataProvider dataValores 
    */

    public function testGetSetValor($valor){
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor()); //Verifica se o valor é igual ao esperado
    }

    public static function dataValores(){
        return [
            [100], //cada array vai chamar o método testGetSetValor()
            [0],    
            [-2],
        ];
    }
}