<?php

    class ContaEspecial extends Conta {
        private $limite;      
        
        public function __construct($agencia, $numeroConta, 
            $saldo, $limite)
        {
            parent::__construct($agencia, $numeroConta, $saldo);
            $this->limite = $limite;
        }

        public function getSaldo() 
        {
            return $this->limite + $this->saldo;
        }
        
        public function getLimite() 
        {
            return $this->limite;
        }

        public function __toString()
        {
            return "Agência: " . $this->agencia . 
                ", Conta número: " . $this->numeroConta 
                . ", saldo: " . $this->saldo 
                . ", limite: " . $this->limite;
        }
    }