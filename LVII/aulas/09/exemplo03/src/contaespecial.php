<?php

    class ContaEspecial extends Conta {
        private $limite = 0;      
        
        public function __construct($agencia, $conta, $saldo, $limite) 
        {
            parent::__construct($agencia, $conta, $saldo);
            $this->limite = $limite;
        }

        public function getLimite() 
        {
            return $this->limite;
        }

        public function setLimite($valor) {
            $this->limite = $valor;
        }

        /* Metodo que retorna o saldo + limite. 
        Sobrecarga do método getSaldo da classe Conta.*/
        public function getSaldo() 
        {
            return $this->saldo + $this->limite;
        }

        public function __toString()
        {
            return "Agência: " . $this->agencia 
                    . ", Número da Conta: " . $this->conta 
                    . ", Saldo inicial: " . $this->saldo
                    . ", limite: " . $this->limite;
        }
    }