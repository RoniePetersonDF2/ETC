<?php
    header('ContentType: text/html; charset: utf-8');
    require_once "src/calculadora.php";

    # definição de tipos em parâmetros em métodos
    function somar(int $x = 0, int $y = 0)
    {
        return $x + $y;
    }

    # definição de tipos em parâmetros e retorno de funções
    function subtrair(int $x = 0, int $y = 0): int
    {
        return $x - $y;
    }

    print('#######################################################<br>');
    print('Trabalhando funções<br>');
    print('#######################################################<br>');
    # chamando função com parâmetros tipados.
    $resultado = somar(4, 5);
    echo "O valor da soma de 4 e 5 é: " . $resultado;

    # chamando função com parâmetros tipados.
    $resultado = subtrair(14, 5);
    # retorno de função com parâmetros e retorno tipados.
    echo "\n<br>O valor da subtração de 14 e 5 é: " . $resultado;

    print('<br>#######################################################<br>');
    print('Trabalhando com classes<br>');
    print('#######################################################');
    # instanciando classe Calculadora e usando parametros e métodos tipados.
    $calculadora = new Calculadora(10, 4);
    print("\n<br>Somando valores: {$calculadora->somar()}");
    print("\n<br>Subtraindo valores: {$calculadora->subtrair()}");
    print("\n<br>Multiplicando valores: {$calculadora->multiplicar()}");
    print("\n<br>Dividindo valores: {$calculadora->dividir()}");