<?php

    abstract class Conta {
        protected $agencia;
        protected $conta;
        protected $saldo = 0;
        
        # Método pode ter escopo publico ou protegido
        protected function __construct($agencia, $conta, $saldo) 
        {
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->saldo = $saldo;
        }

        # Método pode ter escopo protegido
        protected function getSaldo() 
        {
            return $this->saldo;
        }

        # Método pode ter escopo protegido
        protected function sacar($valor) 
        {
            if($this->saldo < $valor) {
                echo "<p>Error: <b>Valor do saque maior que o valor em conta.</b></p>";
                exit;
            }
            $this->saldo -= $valor;
        }

        # Método pode ter escopo protegido
        protected function depositar($valor) 
        {
            $this->saldo += $valor;
        }

        # Método __toString só pode ter escopo publico
        public function __toString()
        {
            return "Agência: " . $this->agencia 
                    . ", Número da Conta: " . $this->conta 
                    . ", Saldo inicial: " . $this->saldo;
        }
    }