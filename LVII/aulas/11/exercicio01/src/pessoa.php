<?php
    abstract class Pessoa
    {
        protected $nome;
        protected $email;
        protected $telefone;

        public function __construct($nome, $email, $telefone)
        {
            $this->nome = $nome;
            $this->email = $email;
            $this->telefone = $telefone;            
        }

        public function __toString()
        {
            return "Nome: ".$this->nome 
                    . " <br>Email: ". $this->email
                    . " <br>Telefone: ".$this->telefone;
        }
    }