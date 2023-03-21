<?php

    class Conta {
        private $agencia;
        private $numeroConta;
        private $saldo;
        
        
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

        public function sacar($valor)
        {
            if($valor<= $this->saldo) {
                $this->saldo = $this->saldo - $valor;
            } else {
                echo "<br>Valor a sacar é maior que o saldo";
            }
        }
    }