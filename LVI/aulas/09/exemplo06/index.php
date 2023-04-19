<?php
# definindo uma variavel $x para armazernar um número inteiro.
$x = 5985;
# var_dump para verificar se a variavel é numerica.
var_dump(is_numeric($x));
# definindo uma variavel $x para armazernar um número string.
$x = "5985";
# var_dump para verificar se a variavel é numerica (string numerica).
var_dump(is_numeric($x));
# definindo uma variavel $y para armazernar um número string.
$y = "5985a";
# var_dump para verificar se a variavel é numerica (string numerica).
var_dump(is_numeric($y));
# conversão de tipo int para float
$z = (float) $x;
var_dump($z);
# conversão de tipo float para int
$z = (int)89.65;
var_dump($z);
# conversão de tipo string para int e para float
$z = (int)"89.65";
var_dump($z);
$z = (float)"89.65";
var_dump($z);
