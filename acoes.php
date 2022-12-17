<?php
    require 'conta.php';
    require 'Titular.php';

    $usuarioUm = new conta( new Titular ('444.444.444-10', 'italooo'));
    $usuarioDois = new conta( new Titular ('124.634.544-10', 'itaaalaa'));
    $usuarioTres = new conta(new Titular ('923.456.789-10', 'italo00'));
    unset($usuarioTres);
   //$usuarioDois->valorDeposito(10000);
  // $usuarioDois->exibeCpf();
  // $usuarioDois->exibeNome();
    var_dump($usuarioUm);
    var_dump($usuarioDois);
    var_dump($usuarioTres);
    // echo $usuarioUm->Titular->exibeNomeTitular() . PHP_EOL;
    // echo $usuarioDois->Titular->exibeNomeTitular() . PHP_EOL;
    // echo $usuarioDois->Titular->exibeSaldo() . PHP_EOL;
    echo "Número de contas no banco: " . conta::exibecontadorContas() . PHP_EOL;
    echo "número de contas deletadas: " . conta::exibecontadorDeletes();

?>