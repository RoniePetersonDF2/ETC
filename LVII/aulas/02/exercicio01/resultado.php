<?php
header('Content-Type: text/html; charset=UTF-8');
if(!isset($_POST['email']) or empty($_POST['email'])) {
    echo "<p>O campo e-mail está vazio ou não foi enviado.</p>";
}elseif(!isset($_POST['password']) or empty($_POST['password'])) {
    echo "<p>O campo password está vazio ou não foi enviado.</p>";
}else {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "<p>O e-mail enviado foi: <b>$email</b></p>";
    echo "<p>A senha enviada foi: <b>$password</b></p>";
}

echo "<a href='index.php'>Voltar</a>";