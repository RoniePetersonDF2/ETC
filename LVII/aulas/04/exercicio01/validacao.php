<?php
session_start();
function validarCampos() {
    if(!isset($_POST['nome']) or empty($_POST['nome'])) {
        return "O campo nome está vazio ou não foi enviado.";
    } 
    if(!isset($_POST['email']) or empty($_POST['email'])) {
        return "O campo e-mail está vazio ou não foi enviado.";
    } 
    if(!isset($_POST['password']) or empty($_POST['password'])) {
        return "O campo password está vazio ou não foi enviado.";
    }
    
    return NULL;    
}

function verificarSenha() {
    if($_POST['email'] == "usuario@email.com" && $_POST['password'] == "123") {
        return NULL;
    }
    return "Usuário ou senha inválidos.";
}

$errorCampos = validarCampos();
    
if($errorCampos) {
    header("location: login.php?error=" . $errorCampos);
    exit();
}

$errorSenha = verificarSenha();
if($errorSenha) {
    header("location: login.php?error=" . $errorSenha);
    exit();
}

$_SESSION['usuario'] = array(
    'nome' => $_POST['nome'],
    'email' => $_POST['email']
);

header("location: index.php");