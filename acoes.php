<?php
    require 'conta.php';

    $usuarioUm = new conta;
    $usuarioUm->valorDeposito(-500);
    $usuarioUm->valorDeposito(10000); 
    $usuarioUm->alteraNome('Nicollas de jesus');
    $usuarioUm->alteraCPF('111.111.005-00');
   // $usuarioUm->saque(10);

    $usuarioDois = new conta;
    $usuarioDois->valorDeposito(10000); 
    $usuarioDois->alteraNome('Italo de jesus');
    $usuarioDois->alteraCPF('444.444.444-10');
    $usuarioDois->alteraCPF('555.555.404-10');
    $usuarioDois->transferir(5000, $usuarioUm);
    var_dump( $usuarioDois);
    var_dump($usuarioUm);  
$exibidorSaldo = 'Saldo: ' . $usuarioUm->exibeSaldo();
echo $exibidorSaldo;


?>

<html>
    <head>
        <title> site do Nicollas</title>
    </head>
    <body>
        <p>
            <div>
        <?php PHP_EOL;
        echo 'valor saldo do usuário 1:' . $usuarioUm->exibeSaldo();
        ?>
        </div>
    </body>
</html>