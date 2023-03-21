<?php
    header('Content-Type: text/html; charset=utf-8');

    require_once "src/conta.php";
    require_once "src/contaespecial.php";

    $cc = new Conta("2034-x", "0001456-2", "200.0");

    echo 'Conta Corrente<br>';
    echo $cc;
    echo '<br>';
    echo "Saldo inicial: R$ " . $cc->getSaldo();
    
    echo '<hr>';
    echo 'Conta Especial<br>';
    $ce = new ContaEspecial("2034-x", "0001456-2", 500.0, 200.0);
    echo $ce;
    echo '<br>';
    echo "Saldo inicial(com limite): R$ " . $ce->getSaldo();
     