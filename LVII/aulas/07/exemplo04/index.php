<?php
    header('Content-Type: text/html; charset=utf-8');

    // incluindo a classe empresa
    require_once "src/empresa.php";

    // imprindo o valor da constante
    echo "O nome da empresa é: " . Empresa::NOME;