<?php
    require 'conta.php';

    $usuarioUm = new conta;    

    $usuarioUm->saldo = 10000; 
    $usuarioUm->nomeTitular = 'Nicollas de jesus';
    $usuarioUm->cpfTitular ='111.111.005-00';
    $usuarioUm->saque(10);
    var_dump($usuarioUm);
