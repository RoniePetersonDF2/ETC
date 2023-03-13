<?php
    header('Content-Type: text/html; charset=utf-8');
    
    // incluindo a classe aluno
    require_once "src/aluno.php";
    // instanciando objeto
    $a1 = new Aluno("123456-45", "Ronie Peterson");

    // imprimindo objeto
    echo '<pre>';
    print_r($a1);

    // exibindo o valor da matricula
    echo $a1->matricula;
    
    //alterando o valor da matricula
    $a1->matricula = "9.9999-99";

    // imprimindo objeto
    echo '<pre>';
    print_r($a1);
