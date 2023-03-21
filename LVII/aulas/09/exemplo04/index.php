<?php
    header('Content-Type: text/html; charset=utf-8');

    require_once "src/conta.php";
    require_once "src/contaespecial.php";

    # Tentando instanciar uma classe abstrata.
    # Classes abstratas não podem ser instanciadas
    // $cc = new Conta("2034-x", "0001456-2", "200.0");

    # Classe filha ContaEspecial que herda comportamento da classe pai Conta
    echo 'Conta Especial<br>';
    $ce = new ContaEspecial("2034-x", "0001456-2", 500.0, 200.0);
    echo $ce;
    echo '<br>';
    echo "Saldo inicial(com limite): R$ " . $ce->getSaldo();
    echo '<br>';
    echo "Sacando R$ 120";
    $ce->sacar(500); 
    echo '<br>';
    echo "Saldo (depois do saque): R$ " . $ce->getSaldo();
    
     