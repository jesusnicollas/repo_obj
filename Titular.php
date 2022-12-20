<?php 

class Titular {
    #dados da classe Titular
    private $cpf;
    private string $nomeTitular;
    
    #metodo Contrutor
    public function __construct ( CPF $cpf,string $nomeTitular) {
    $this->cpf = $cpf;
    $this->validaNome($nomeTitular);
    $this->nomeTitular = $nomeTitular;
    }

    #metodo para validar Nome
    private function validaNome($nome) {
        if (strlen($nome) <= 5) {
            echo "Nome deve ter pelo menos 5 caracteres" . PHP_EOL;
        exit();}
    ;}

    #metodos Getters
   // public function exibeCpf() :string {
   //     return $this->cpfTitular;
   // }
   // public function exibeNome() :string {
   //     return $this->nomeTitular;
   // }

}
