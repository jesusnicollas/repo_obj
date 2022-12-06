<?php

class Conta 
{
    public string $cpf;
    public string $nome; 
    private float $saldo = 0;
    public function sacaValor ($valorAsacar) {
        if ($valorAsacar > $this->saldo) {
            echo "O valor a sacar é maior que o saldo em  conta"
        ;} else {
    $this->saldo -= $valorAsacar;
    }}
    public function depositaValor($valorAdepositar) {
        if ($valorAdepositar <= 0) {
            echo 'Valor deve ser maior que 0';
        } else {  
        $this->saldo += $valorAdepositar;    
        }
    }
}   //  
   // function __construct ($cpf, $nome, $user) {
   //     if ($this->nome < 3){ 
   //         echo "Necessário mais de 3 caracteres";
   //     exit();
   // 
   // }
   //     else {$this->nome = $nome
   //     ;}
   // }
   // private function exibeNome($user){
   //     echo $this->$user        
//
//
   //     ;}
   // }

//$conta = new Conta('111.111.005-17', 'Nico', 'jesusateudispor');
//var_dump($conta);