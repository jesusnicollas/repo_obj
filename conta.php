<?php
class conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;
    private static $contador = 0;




    public function __construct($cpfTitular, $nome)
    {
        echo "criando conta" . PHP_EOL;
    $this->validaNomeTitular($nome);
    $this->cpfTitular = $cpfTitular;
    self::$contador ++
    ;}
    
    public function __destruct()
    {
        self::$contador --;
    }


    private function validaNomeTitular($nome) {
        if (strlen($nome) <= 5) {
            echo "Nome deve ter pelo menos 5 caracteres" . PHP_EOL;
        return;}
    $this->nomeTitular = $nome
    ;}


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
    public function exibeCPF()
    {
        return $this->cpfTitular
        ;
    }
    public function exibeNomeTitular(): string
    {
        return $this->nomeTitular
        ;
    }

    public function exibeContador(){
        return self::$contador;
     }
 
}
?>