<?php

class Celular {
    public $tela;
    public $carcaça;
    public $placa;
    public $bateria;
    public function ligaTela(int $botao) {
        if ($botao === 1){
        echo ('Tela ligada');} 
        else echo ('Tela desligada');
    }

};

 //   $iphone1 = [
 //       $tela => 'NULL',
 //       $carcaça => 'NULL',
 //       $placa => 'NULL'
 //       $bateira => bateria
 //   ];
 //  $iphone1 = array_



echo ($iphone1->ligaTela(1)) . PHP_EOL;


$iphone1 = new Celular();
$iphone2 = new Celular();

$iphone1->tela = 'LED';
$iphone1->carcaça = 'metal';
$iphone1->placa = 'A6 BIONIC';



var_dump ($iphone1);
var_dump ($iphone2);