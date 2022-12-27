<?php
    require 'conta.php';
    require 'Endereco.php';
    require 'Titular.php';
    require 'Cpf.php';
    



     $cpftitular1 = new CPF('111.111.005-00');
     $enderecoTitular1 = new Endereco('Rua casablancaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '401', 'Pq. Monte Alegre', 'SP', 'Taboão da Serra');
     $titular1 = new Titular ($cpftitular1,'italooo', $enderecoTitular1);
     $usuarioUm = new Conta ($titular1);
     var_dump($usuarioUm);
     PHP_EOL;
    // $usuarioDois = new conta (new Titular (new CPF ('124.634.544-10'), 'itaaalaa'));
    // $usuario3 = new Titular ('923.456.789-10', 'iaatalo00');
    // $usuarioTres = new conta($usuario3);
    //unset($usuarioTres);
    //$usuarioDois->valorDeposito(10000);
    // $usuarioDois->exibeCpf();
    // $usuarioDois->exibeNome();
    // var_dump($usuarioUm);
    // var_dump($usuarioDois);
    // echo $usuarioUm->Titular->exibeNomeTitular() . PHP_EOL;
    // echo $usuarioDois->Titular->exibeNomeTitular() . PHP_EOL;
    // echo $usuarioDois->Titular->exibeSaldo() . PHP_EOL;
    // echo "Número de contas no banco: " . conta::exibecontadorContas() . PHP_EOL;
    // echo "número de contas deletadas: " . conta::exibecontadorDeletes() . PHP_EOL;

?>