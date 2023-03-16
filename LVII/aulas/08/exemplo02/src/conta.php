<?php

    class Conta {
        protected $agencia;
        protected $numeroConta;
        protected $saldo;
        
        
        public function __construct($agencia, $numeroConta, $saldo) 
        {
            $this->agencia = $agencia;
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
        }

        public function getSaldo() 
        {
            return $this->saldo;
        }
    }