<?php

# definindo uma variavel $x para armazernar um número float.
$x = 10.365;
# var_dump retorna o tipo e valor da variavel.
var_dump($x);
# var_dump retorna se o valor da variavel é float.
var_dump(is_float($x));
# retorna se o valor máximo da variavel float.
var_dump(PHP_FLOAT_MAX);
# retorna se o valor máximo da variavel float.
var_dump(PHP_FLOAT_MIN);
# var_dump retorna se o valor da variavel string é float.
$x = "10.365";
var_dump($x);
var_dump(is_float($x));

