<?php
    header('Content-Type: text/html; charset=utf-8');

    require_once "src/conta.php";
    require_once "src/contaespecial.php";

    $ce = new ContaEspecial("200.0");

    echo "O saldo é: R$ " . $ce->getSaldo() ; 
    
    
    
