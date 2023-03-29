<?php
    class PessoaFisica extends Pessoa
    {
        private $cpf;

        public function __construct($nome, $email, $telefone, $cpf)
        {
            parent::__construct($nome, $email, $telefone); 
            $this->cpf = $cpf;
        }

        public function __toString()
        {
            return parent::__toString() .  "<br>CPF: ".$this->cpf; 
        }
    }