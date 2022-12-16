<?php
    require 'conta.php';

   // $usuarioUm = new conta('Nico','111.111.005-00');
   // $usuarioUm->valorDeposito(-500);
   // $usuarioUm->valorDeposito(10000); 
   // $usuarioUm->alteraNome('');
   // $usuarioUm->alteraCPF();
   // $usuarioUm->saque(10);

    $usuarioDois = new conta('ital', '444.444.444-10');
    $usuarioDois->valorDeposito(10000); 
    $usuarioDois->exibeNomeTitular();
//    $usuarioDois->alteraNome();
//    $usuarioDois->alteraCPF();
//    var_dump( $usuarioDois);
//    $usuarioDois->alteraCPF('555.555.404-10');
//    $usuarioDois->transferir(5000, $usuarioUm);
   // var_dump( $usuarioDois);
   // var_dump($usuarioUm);  
//$exibidorSaldo = 'Saldo: ' . $usuarioUm->exibeSaldo();
//echo $exibidorSaldo;

?>

<html>
    <head>
        <title> site do Nicollas</title>
    </head>
    <body>
        <p>
            <div>
        <?php PHP_EOL;
    //    echo 'valor saldo do usuário 1:' . $usuarioUm->exibeSaldo();
        ?>
        </div>
    </body>
</html>