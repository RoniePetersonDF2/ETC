<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Enviado dados com formulário</h1>
    <form action="resultado.php" method="post">
        <label for="email">E-mail</label><br>
        <input type="email" name="email" placeholder="Informe seu e-mail" autofocus><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="Informe seu password"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>