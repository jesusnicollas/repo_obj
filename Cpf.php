<?php
class CPF {
    private $numero;

    function __construct(string $numero) {
        //$this->validaCPF($numero);
        $this->numero = $numero;
    }
   // public function validaCPF(string $numero) {
   //     preg_replace('/[^0-9]/',' ', $numero);
   //     echo 'Retirado pontos do CPF';
   //     if (strlen($numero == 11)) {
   //         echo "CPF";
   //     $this->numero = $numero;    
   //     } 
   // if (strlen($numero == 14)) {
   // echo 'CNPJ';    
   // $this->numero = $numero;
   // }
};

//$user1 = new CPF('111.111.005-00');

//var_dump($user1);


