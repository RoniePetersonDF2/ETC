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
        return "Informações sobre a pessoas<br>"
            . "Nome: " . $this->nome ."<br>"
            . "E-mail: " . $this->email ."<br>"
            . "Telefone: " . $this->telefone ."<br>";
    }
}