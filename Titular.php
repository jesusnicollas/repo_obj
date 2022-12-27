<?php 

class Titular {
    #dados da classe Titular
    private $cpf;
    private string $nomeTitular;
    private Endereco $endereco;
    
    #metodo Contrutor
    public function __construct ( CPF $cpf,string $nomeTitular, Endereco $endereco) {
    $this->cpf = $cpf;
    $this->validaNome($nomeTitular);
    $this->nomeTitular = $nomeTitular;
    $this->endereco = $endereco;
    }

    #metodo para validar Nome
    private function validaNome($nomeTitular) {
        if (strlen($nomeTitular) <= 5) {
            echo "Nome deve ter pelo menos 5 caracteres" . PHP_EOL;
        exit();}
    return $this->nomeTitular = $nomeTitular
    ;}

    #metodos Getters
   // public function exibeCpf() :string {
   //     return $this->cpfTitular;
   // }
   // public function exibeNome() :string {
   //     return $this->nomeTitular;
   // }

}
