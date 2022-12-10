<?php
    class conta
    {
    Public $cpfTitular;
    public $nomeTitular;
    private $saldo;
    

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
            echo "Transferencia superior ao saldo em conta (R$$this->saldo), Valor transferência: R$${valorAtransferir}" . PHP_EOL;
            return;
        }
        $this->saque($valorAtransferir);
        $contaDestino->valorDeposito($valorAtransferir);
        echo 'Foi realizado a transferência de '. $valorAtransferir . ' com sucesso';

    }
    public function exibeSaldo() :float {
        return $this->saldo
    ;} 
    
}
//require 'conta.php';
?>