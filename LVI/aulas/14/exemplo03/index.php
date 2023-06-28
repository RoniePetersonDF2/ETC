<?php
    # criando um função que recebe dois parâmentros.
    # um obrigatório e outro com valor default.

    function imprimirNome($nome, $sobrenome="Não informado")
    {
        echo "<p>Seu nome é: $nome e sobrenome: $sobrenome</p>";
    }

    $nome = "João";
    $sobrenome = "Pedro";
    
    # chamando uma função pelo seu nome passando dois parametros.
    imprimirNome($nome, $sobrenome);

    # chamando uma função pelo seu nome passando um parametros.
    imprimirNome("Ronie");

