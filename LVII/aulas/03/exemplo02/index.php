<?php
    function somar($v1=0, $v2=0) {
        $total = $v1 + $v2;
        return $total;
    }

    $a = 10;
    $b = 20;

    echo "<p>O Resultado da soma de $a + $b é: " .somar($a, $b) ." </p>";
    echo "<p>O Resultado da soma de 5 + 3 é: " .somar(5, 3) ." </p>";
