<?php
    header('Content-Type: text/html; charset=utf-8');
    require_once "src/aluno.php";

    $a1 = new Aluno("123456-45", "Ronie Peterson");

    echo '<pre>';
    print_r($a1);