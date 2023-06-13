<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulários Login</h1>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // var_dump($_POST);exit;
            if($email == "usuario@email.com" && $senha =="123456") {
                $mensagem = "Seja bem vindo: $email";
            } else {
                $mensagem = "Usuário ou senha inválido.";	
            }
            echo "<div class='div__error'>
                <p>$mensagem</p>
            </div>";
        }
    ?>
    
    <form action="" method="post">
        <label>E-mail</label><br>
        <input type="email" name="email" autofocus required><br>
        <label>Password</label><br>
        <input type="password" name="senha" required><br>
        <br><br>     
        <input type="submit" value="Login" name="Login">
    </form>

    
</body>
</html>