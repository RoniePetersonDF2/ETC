<?php

    class ContaCorrente {
        protected $agencia;
        protected $conta;
        protected $saldo = 0;
        
        
        public function __construct($agencia, $conta, $saldo) 
        {
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->saldo = $saldo;
        }

        public function saldo() 
        {
            return $this->saldo;
        }
        
        public function sacar($valor) 
        {
            $saldo = $this->saldo();
            if($valor > $saldo) {
                echo "Não foi possivel realizar essa operação. Saldo insuficiente.";
            } else {
                $this->saldo -= $valor;                
            }
        }

        public function __toString()
        {
            return "Agência: " . $this->agencia 
                    . ", Número da Conta: " . $this->conta 
                    . ", Saldo inicial: " . $this->saldo;
        }
    }