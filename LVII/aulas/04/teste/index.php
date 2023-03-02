<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: login.php");
        exit();
    }
    $usuario = $_SESSION['usuario'];
    $nome = $usuario['nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Exercício com sessão</h1>
    <p>Bem vindo usuarío: <?=$nome;?></p>
    <a href="logout.php">Sair</a>
</body>
</html>