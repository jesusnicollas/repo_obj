<?php

class Conta
{
    #dados de objeto
    private Titular $titular;
    private $saldo = 0;
    #dados estáticos
    private static $contadorContas = 0;
    private static $contadorDeletes = 0;




    public function __construct($titular)
    {
    #    echo "criando conta" . PHP_EOL;
        $this->titular = $titular;
        self::$contadorContas ++
    ;}
    
    public function __destruct()
    {
        self::$contadorContas --;
        self::$contadorDeletes ++;
    }





    //Metodo saque
    public function saque(float $valorSaque): void
    {
        if ($valorSaque > $this->saldo) {
            echo "Seu saldo é inferior à ${valorSaque}R$ para sacar" . PHP_EOL;
            return;
        }
        $this->saldo -= $valorSaque;

    }
    //metodo de deposito
    public function valorDeposito(float $valorDeposito): void
    {
        if ($valorDeposito < 0) {
            echo "Transaçaõ de valor ${valorDeposito}R$ não autorizada, valor negativo." . PHP_EOL;
            return;
        }
        $this->saldo += $valorDeposito;

    }
    // metodo transferir
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
    # metodos da classe Conta
    public function exibeSaldo(): float
    {
        return $this->saldo
        ;
    }
    # Metodos Getters estáticos
    public static function exibecontadorContas() :int{
       return self::$contadorContas;
    }

    public static function exibecontadorDeletes() :int{
        return self::$contadorDeletes;
     }

     public function exibeCpf() :string {
        return $this->Titular->cpfTitular;
    }
    public function exibeNome() :string {
        return $this->Titular->nomeTitular;
    }
    //public function exibeRua() :string {
    //    return $this->Conta->Endereco->rua;
    //}
}

?>