<?php
class conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;


    //Metodo saque
    public function saque(float $valorSaque): void
    {
        if ($valorSaque > $this->saldo) {
            echo "Seu saldo é inferior à ${valorSaque}R$ para sacar" . PHP_EOL;
            return;
        }
        $this->saldo -= $valorSaque;

    }

    public function valorDeposito(float $valorDeposito): void
    {
        if ($valorDeposito < 0) {
            echo "Transaçaõ de valor ${valorDeposito}R$ não autorizada, valor negativo." . PHP_EOL;
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
        echo 'Foi realizado a transferência de ' . $valorAtransferir . ' com sucesso' . PHP_EOL;

    }
    public function alteraNome($nome): void
    {
        $this->nomeTitular = $nome;
    }
    public function alteraCPF($cpf): void
    {
        $this->cpfTitular = $cpf;
    }


    public function exibeSaldo(): float
    {
        return $this->saldo
        ;
    }
    public function exibeCPF(): string
    {
        return $this->cpfTitular
        ;
    }
    public function exibeNomeTitular(): string
    {
        return $this->nomeTitular
        ;
    }

}
?>