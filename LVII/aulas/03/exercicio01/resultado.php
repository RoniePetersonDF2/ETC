<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

function verificarDados($email, $password) 
{
    if(empty($email)) {
        return "O campo e-mail está vazio ou não foi enviado.";
    } elseif(empty($password)) {
        return "O campo password está vazio ou não foi enviado.";
    } else {
        return NULL;
    }
}

function verificaUsuario($email, $password) 
{
    if($email == 'usuario@email.com' && $password == '123') {
        return NULL;
    } else {
        return "Usuário ou senha inválido!";
    }
}

$errorDados = verificarDados($email, $password);
$errorUsuario = verificaUsuario($email, $password);

if($errorDados) {
    echo "<p>$errorDados</p>";
} elseif($errorUsuario) {
    echo "<p>$errorUsuario</p>";
} else {
    $_SESSION['usuario'] = $email;
    echo "<p>Bem vindo usuário: $email</p>";
}
echo "<a href='index.php'>Voltar</a>";
