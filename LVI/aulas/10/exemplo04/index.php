<?php
$x = 100;
# utilizando operador pre-incremento.
var_dump(++$x);
# utilizando operador pos-incremento.
var_dump($x++);
# utilizando operador pre-decremento.
var_dump(--$x);
# utilizando operador pos-decremento.
var_dump($x--);
# utilizando operador concatenacao.
$txt1 = "Hoje e ";
$txt2 = "quinta-feira.";
var_dump($txt1 . $txt2);
# utilizando operador concatenacao com atribuicao.
$txt1 .= $txt2;
var_dump($txt1, $txt2);