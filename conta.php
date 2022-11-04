<?php
    class conta
    {
    Public $cpfTitular;
    public $nomeTitular;
    public $saldo;
    

    //Metodo saque
    public function saque(float $valorSaque): void
    {
        if ($valorSaque > $this->saldo) {
            echo "Seu saldo é inferior à ${valorSaque}R$ para sacar";
            return;
        }
        $this->saldo -= $valorSaque;
         
    }
    }
    ;

?>