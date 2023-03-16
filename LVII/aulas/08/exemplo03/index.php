<?php
    header('Content-Type: text/html; charset=utf-8');

    require_once "src/conta.php";
    require_once "src/contaespecial.php";

    // cria o objeto conta corrente.
    $cc = new Conta("2034-x", "0001456-2", "200.0");
    echo "O saldo é conta corrente:" .$cc->getSaldo(); 
    
    // cria o objeto conta especial
    $ce = new ContaEspecial("456", "9991-8", 500.0, 200.0);
    echo "<br> O saldo da conta especial é :" .$ce->getSaldo(); 

    // imprime os dados bancários
    echo $ce;