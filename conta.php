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
    
    public function valorDeposito(float $valorDeposito): void
    {
        if ($valorDeposito < 0) {
            echo "Transaçaõ de valor ${valorDeposito}R$ não autorizada";
            return;
        }
        $this->saldo += $valorDeposito; 
       
    }
    public function transferir(float $valorAtransferir, conta $contaDestino): void
    {
        if ($valorAtransferir > $this->saldo) {
            echo "Transferencia superior ao saldo em conta de: ${valorAtransferir}R$ para transferencia";
            return;
        }
        $this->saque($valorAtransferir);
        $contaDestino->valorDeposito($valorAtransferir);

    }
}
    ;
//require 'conta.php';
?>