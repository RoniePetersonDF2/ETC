<?php
    function imprimirNome($nome, $sobrenome="Não informado") {
        echo "<p>Seu nome é: $nome e sobrenome: $sobrenome</p>";
    }

    $nome = "João";
    $sobrenome = "Pedro";
    imprimirNome($nome, $sobrenome);
    imprimirNome("Ronie");