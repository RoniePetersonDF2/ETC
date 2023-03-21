<?php
    header('Content-type:text/html; charset=utf-8');
    require_once "src/conta.php";
    require_once "src/contaespecial.php";

        // criar uma instancia da classe conta.
        $c1 = new Conta("2210", "12345-9", 120.0);
    
        echo "O saldo da conta corrente é: " . $c1->getSaldo();
    
        echo "<br>Sacando 50 reais".
        $c1->sacar(50);
        
        echo "<br>O saldo da conta corrente é: " . $c1->getSaldo();

 