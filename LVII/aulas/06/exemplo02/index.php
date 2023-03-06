<?php
	require_once "Pessoa.php";

    $p1 = new Pessoa();
    $p1->setNome('Ronie');
    $p1->setCPF('123.456.789-00');
    
    echo $p1->toString();

    