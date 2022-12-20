<?php
    require 'conta.php';
    require 'Titular.php';
    require 'Cpf.php';

    $cpftitular1 = new CPF('111.111.005-00');
    $titular1 = new Titular ($cpftitular1,'italooo');
    $usuarioUm = new conta ($cpftitular1, $titular1);
    $usuario2 = new Titular ('124.634.544-10', 'itaaalaa');
    $usuarioDois = new conta($usuario2);
    $usuario3 = new Titular ('923.456.789-10', 'iaatalo00');
    $usuarioTres = new conta($usuario3);
    unset($usuarioTres);
    //$usuarioDois->valorDeposito(10000);
    // $usuarioDois->exibeCpf();
    // $usuarioDois->exibeNome();
    var_dump($usuarioUm);
    var_dump($usuarioDois);
    // echo $usuarioUm->Titular->exibeNomeTitular() . PHP_EOL;
    // echo $usuarioDois->Titular->exibeNomeTitular() . PHP_EOL;
    // echo $usuarioDois->Titular->exibeSaldo() . PHP_EOL;
    echo "Número de contas no banco: " . conta::exibecontadorContas() . PHP_EOL;
    echo "número de contas deletadas: " . conta::exibecontadorDeletes() . PHP_EOL;

?>