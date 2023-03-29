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
        return "Informações sobre a pessoas Jurídica<br>"
            . "CNPJ: " . $this->cnpj ."<br>"
            . "Nome: " . $this->nome ."<br>"
            . "E-mail: " . $this->email ."<br>"
            . "Telefone: " . $this->telefone ."<br>";
    }
}