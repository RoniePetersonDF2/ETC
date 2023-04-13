<?php
    header("Content-Type: text/html; charset=utf-8");

    # declarando uma variavel do tipo string.
    $texto = "Hoje é quinta-feira";

    # declarando uma variavel do tipo inteiro.
    $inteiro = 5985;

    # declarando uma variavel do tipo ponto flutuante.
    $flutuante = 10.456;

    # declarando uma variavel do tipo booleano.
    $b1 = true;
    $b2 = false;

    # declarando uma variavel do tipo nulo.
    $nulo = null;

    # declarando uma variavel do tipo array.
    $matriz = array(1, 2, 'abc', 11.22);

    echo '<pre>';
    var_dump($texto, $inteiro, $flutuante, $b1, $b2, $nulo, $matriz);

    