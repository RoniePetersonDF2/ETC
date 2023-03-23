<?php
    header('Content-Type: text/html; charset=utf-8');

    # importando os arquivos com as classes 
    require_once "src/conta.php";
    require_once "src/contaespecial.php";
    require_once "src/contaconjunta.php";

    echo 'Conta Especial<br>';
    
    # criando uma nova instancia da classe Conta Especial
    $ce = new ContaEspecial("2034-x", "0001456-2", 500.0, 200.0);
    echo $ce;
    echo '<br>';
    # chamando o método getSaldo da classe Conta Especial
    echo "Saldo inicial(com limite): R$ " . $ce->getSaldo();

    echo '<hr>';

    # criando uma nova instancia da classe Conta Conjunta (ERROR)
    $cj = new ContaConjunta("2034-x", "0001456-2", 500.0, 200.0);
     