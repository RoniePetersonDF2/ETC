<?php

    final class ContaEspecial extends Conta {
        protected $limite = 0;      
        
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

        # Metodo que retorna o saldo + limite. Sobrecarga do método 
        # getSaldo da classe Conta e com escopo final. Não pode ser sobreescrito.
        final public function getSaldo() 
        {
            return $this->saldo + $this->limite;
        }

        public function __toString()
        {
            return parent::__toString() . ", limite: " . $this->limite;
        }
    }