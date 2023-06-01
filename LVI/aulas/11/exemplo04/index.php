<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo com PHP</title>
</head>
<body>
    <h1>Trabalhando com formulários e PHP</h1>
    <form action="" method="get">
        <label>E-mail</label><br>
        <input type="email" name="email" autofocus required><br>
        <br><br>     
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['enviar'])) {
        echo '<hr>';
        echo "O e-mail enviado foi: " . $_GET['email'];
    }
?>