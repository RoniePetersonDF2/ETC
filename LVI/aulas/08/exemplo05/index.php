<?php
    header("Content-Type: text/html; charset=utf-8");
    
    $a = "Hoje é quarta-feira";
    $b = "12";

    echo '<pre>';
    var_dump($a, $b);

    echo '<br>usando print_r<br>';
    print_r($a);
    print_r($b);

    