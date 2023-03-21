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
    }