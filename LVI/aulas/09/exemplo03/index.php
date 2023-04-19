<?php
    # definindo o valor da variavel $texto.
    $texto = "  Eu estudo na Escola Tecnica de Ceilandia.  ";
    # retornando o tamanho da variavel $texto.
    echo strlen($texto) . '<br>';
    # contando as palavras da variavel $texto.
    echo str_word_count($texto) . '<br>';
    # invertendo o sentido das palavras da variavel $texto.
    echo strrev($texto) . '<br>';
    # localizando uma palavra da variavel $texto começando a partir da posição zero.
    echo strpos($texto, "estudo") . '<br>';
    # substitui uma palavra na variavel $texto por outra.
    echo str_replace("Ceilandia", "Guara", $texto) . '<br>';
    # retira os espaços vazios da variavel $texto.
    echo trim($texto) . '<br>';
    # transforma a string da variavel $texto em maiuscula.
    echo strtoupper($texto) . '<br>';
    # transforma a string da variavel $texto em minuscula.
    echo strtolower($texto) . '<br>';
    # retorna uma string a partir de uma posição inicial e tamanho da variavel $texto.
    echo substr($texto, 2,8) . '<br>';
    # separa as palavaras de uma string a partir de um separador.
    var_dump(explode(' ', $texto));
    