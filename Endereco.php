<?php 

    class Endereco {
        private $rua;
        private $numero;
        private $bairro;
        private $estado;
        private $cidade;
        
        public function __construct(string $rua, string $numero, string $bairro, string $estado, string $cidade)
        {
            $this->limiteRua($rua);
            $this->rua = $rua;
            $this->numero= $numero;
            $this->limiteBairro($bairro);
            $this->bairro = $bairro;
            $this->limiteEstado($estado);
            $this->estado = $estado;
            $this->limiteCidade($cidade);
            $this->cidade = $cidade;
        }

        private function limiteRua($rua) {
            if (strlen($rua) > 50) {
                echo "Abrevie o nome da rua";
                exit();
            }
        return $this->rua = $rua;
        }

        private function limiteBairro($bairro) {
            if (strlen($bairro) > 50) {
                echo "Bairro muito extenso, por favor, abreviar";
                exit();
            }
        return $this->bairro = $bairro;
        }

        private function limiteEstado($estado) {
            if (strlen($estado) > 2) {
                echo "Digite a sigla";
                exit();
            }
        return $this->estado = $estado;
        }

        private function limiteCidade($cidade) {
            if (strlen($cidade) >30) {
                echo "Limite de 30 caracteres";
                exit();
            }
        return $this->cidade = $cidade;
        }
    }