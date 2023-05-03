<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários método POST</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <label for="email">E-mail</label><br>
        <input type="email" name="email" placeholder="Informe seu e-mail." autofocus><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>