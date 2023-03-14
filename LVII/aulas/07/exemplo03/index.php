<?php
    header('Content-Type: text/html; charset=utf-8');
    
    // incluindo a classe aluno
    require_once "src/aluno.php";
    // instanciando objeto
    $a1 = new Aluno("123456-45", "Ronie Peterson");

    // imprimindo objeto usando __toString()
    echo $a1;
    