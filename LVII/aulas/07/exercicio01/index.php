<?php
    require_once "src/aluno.php";

    if(isset($_POST['enviar'])) {
        $matricula = $_POST['matricula'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // cria uma instancia do objeto aluno (usando construtor)
        $aluno = new Aluno($matricula, $nome, $email);
        // chama método __toString()
        echo $aluno;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Trabalhando com a classe Aluno</h1>
    <form action="" method="post">
        <p>Matricula</p>
        <p><input type="text" 
            name="matricula" 
            placeholder="Informe a matricula do aluno"
            size="20"
            maxlength="10"
            autofocus>
        </p>
        <p>Nome</p>
        <p><input type="text" 
            name="nome" 
            placeholder="Informe o nome do aluno"
            size="60"
            maxlength="60"
            >
        </p>
        <p>E-mail</p>
        <p><input type="email" 
            name="email" 
            placeholder="Informe o e-mail do aluno"
            size="255"
            maxlength="120"
            >        
        </p>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>