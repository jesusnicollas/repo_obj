<?php

class Conta 
{
    public string $cpf;
    public string $nome = 'Nicollas'; 
    public float $saldo = 0;
    public function sacaValor ($valorAsacar)  :void {
        if ($valorAsacar > $this->saldo) {
            echo "O valor a sacar é maior que o saldo em  conta";
        return;
        }
    $this->saldo -= $valorAsacar;
    }
    public function depositaValor($valorAdepositar) :void {
        if ($valorAdepositar <= 0) {
            echo 'Valor deve ser maior que 0';
        return;}  
    $this->saldo += $valorAdepositar;
    }
    public function transfereSaldo($valorAdepositar, $contaDestino) :void {
        if ($this->saldo < $valorAdepositar) {
        echo "Você não tem saldo para realizar essa transação";
        return;
        }
    $this->sacaValor($valorAdepositar);
    $contaDestino->depositaValor($valorAdepositar);
    }
    private function exibeNome($nome) :void {
    $this->nome = $nome;
    echo "$nome";
    }
    public function defineNome($nome) {
        if (strlen($nome < 3)) {
        echo "Digite o nome completo";
        return;    
        }
    $this->nome = $nome;
    echo "$nome cadastrado com sucesso";
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