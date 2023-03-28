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
        return "Informações sobre a pessoas Física<br>"
            . "CPF: " . $this->cpf ."<br>"
            . "Nome: " . $this->nome ."<br>"
            . "E-mail: " . $this->email ."<br>"
            . "Telefone: " . $this->telefone ."<br>";
    }
}