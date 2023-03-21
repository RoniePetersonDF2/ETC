<?php
    header('Content-type:text/html; charset=utf-8');
    require_once "src/conta.php";

    $c1 = null;
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // criar uma instancia da classe conta.
        $c1 = new Conta($_POST['agencia'], $_POST['conta'], $_POST['saldo']);
    }

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Exercício 02 - Criando conta</h1>
    <form action="" method="post">
        <p>Agência</p>
        <p><input type="text" name="agencia" placeholder="Informe a agência." autofocus></p>
        <p>Número da conta</p>
        <p><input type="text" name="conta" placeholder="Informe número da conta."></p>
        <p>Valor inicial do saldo</p>
        <p><input type="text" name="saldo" value="0"></p>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php 
        if(isset($c1)) { 
            echo '<hr>';
            echo $c1; 
        } 
    ?> 
</body>
</html>
