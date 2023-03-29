<?php
    class PessoaJuridica extends Pessoa
    {
        private $cnpj;

        public function __construct($nome, $email, $telefone, $cnpj)
        {
            parent::__construct($nome, $email, $telefone); 
            $this->cnpj = $cnpj;
        }

        public function __toString()
        {
            return parent::__toString() .  "<br>CNPJ: ".$this->cnpj; 
        }
    }