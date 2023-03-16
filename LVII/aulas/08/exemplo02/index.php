<?php
    header('Content-Type: text/html; charset=utf-8');

    require_once "src/conta.php";
    require_once "src/contaespecial.php";

    $cc = new Conta("2034-x", "0001456-2", "200.0");

    echo "O saldo é conta corrente:" .$cc->getSaldo(); 
    
    //erro
    $ce = new ContaEspecial(500.0);
    echo "<br> O saldo da conta especial é :" .$ce->getSaldo(); 