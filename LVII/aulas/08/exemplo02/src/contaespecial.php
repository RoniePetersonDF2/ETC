<?php

    class ContaEspecial extends Conta {
        private $limite;      
        
        public function __construct($limite) {
            $this->limite = $limite;
        }

        public function getSaldo() 
        {
            return $this->saldo + $this->limite;
        }

        public function getLimite() 
        {
            return $this->limite;
        }

        
    }