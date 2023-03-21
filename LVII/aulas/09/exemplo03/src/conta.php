<?php

    class Conta {
        protected $agencia;
        protected $conta;
        protected $saldo = 0;
        
        
        public function __construct($agencia, $conta, $saldo) 
        {
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->saldo = $saldo;
        }

        public function getSaldo() 
        {
            return $this->saldo;
        }

        public function __toString()
        {
            return "Agência: " . $this->agencia 
                    . ", Número da Conta: " . $this->conta 
                    . ", Saldo inicial: " . $this->saldo;
        }
    }