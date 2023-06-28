<?php
    # faz a inclusão do arquivo operacao.php no arquivo index.php
    include 'operacao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="" method="get">
        <p>Valor 1: <input type="number" name="valor1" value="0" autofocus></p>
        <p>Valor 2: <input type="number" name="valor2" value="0"></p>
        <p>Escolha a operação:
            <input type="radio" name="operacao" value="soma" checked>Soma
            <input type="radio" name="operacao" value="subtracao">Subtração
            <input type="radio" name="operacao" value="multiplicacao">Multiplicação
            <input type="radio" name="operacao" value="divisao">Divisão
        </p>
        <input type="submit" value="Enviar" name="botaoEnviar">
    </form>
    <p>O resultado da operação é: <b><?=$resultado?></b></p>
</body>
</html>