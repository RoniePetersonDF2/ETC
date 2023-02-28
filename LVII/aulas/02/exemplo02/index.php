<?php
    date_default_timezone_set('America/Sao_Paulo');

    $dataAtual = date('d/m/Y');
    $horaAtual = date('H:i');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02</title>
</head>
<body>
    <h1>Trabalhando com datas e horas</h1>
    <p>A data atual é: <?=$dataAtual;?></p>
    <p>A hora atual é: <?=$horaAtual;?></p>
</body>
</html>