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
    <?php 
        if(isset($_GET['error'])) {
            echo "<p style='background-color:red;color:white'>". $_GET['error'] ."</p>";
        }
    ?>
    <form action="validacao.php" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" placeholder="Informe seu nome" autofocus><br>
        <label for="email">E-mail</label><br>
        <input type="email" name="email" placeholder="Informe seu e-mail"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="Informe seu password"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>