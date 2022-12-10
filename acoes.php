<?php
    require 'conta.php';

    $usuarioUm = new conta;    

    $usuarioUm->valorDeposito(10000); 
    $usuarioUm->nomeTitular = 'Nicollas de jesus';
    $usuarioUm->cpfTitular ='111.111.005-00';
   // $usuarioUm->saque(10);

    $usuarioDois = new conta;
    $usuarioDois->valorDeposito(1000); 
    $usuarioDois->nomeTitular = 'Italo de jesus';
    $usuarioDois->cpfTitular ='444.444.444-10';
    $usuarioDois->transferir(5000, $usuarioUm);
    var_dump( $usuarioDois);
    var_dump($usuarioUm);  
$exibidorSaldo = 'Saldo: ' . $usuarioUm->exibeSaldo();
echo $exibidorSaldo;