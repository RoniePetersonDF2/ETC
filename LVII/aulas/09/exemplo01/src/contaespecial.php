<?php

    class ContaEspecial extends Conta {
        private $limite;      
        
        public function __construct($limite)
        {
            $this->limite = $limite;
        }

        public function getLimite() 
        {
            return $this->limite;
        }

        public function setLimite($valor) {
            $this->limite = $valor;
        }

        
    }