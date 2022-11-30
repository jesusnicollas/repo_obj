<?php

class Conta 
{
    public string $cpf;
    public string $nome; 
    private string $user;
    
    function __construct ($cpf, $nome, $user) {
        if ($this->nome < 3){ 
            echo "Necessário mais de 3 caracteres";
        exit();
    
    }
        else {$this->nome = $nome
        ;}
    }
    private function exibeNome($user){
        echo $this->$user        


        ;}
    }

$conta = new Conta('111.111.005-17', 'Nico', 'jesusateudispor');
var_dump($conta);