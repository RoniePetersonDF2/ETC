<?php
    require_once "src/pessoa.php";
    require_once "src/pessoafisica.php";
    require_once "src/pessoajuridica.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $tipo = $_POST['tipo'];
        $pessoa = NULL;
        if($tipo == "0") {
            $pessoa = new PessoaFisica($_POST['nome'], $_POST['email'], $_POST['telefone'],$_POST['cpfcnpj']);
        } else {
            $pessoa = new PessoaJuridica($_POST['nome'], $_POST['email'], $_POST['telefone'],$_POST['cpfcnpj']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Informações sobre a pessoa</legend>    
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" placeholder="Informe o nome da pessoa." size="60" required autofocus><br><br>
            <label for="email">E-mail</label><br>
            <input type="email" name="email" placeholder="Informe o e-mail da pessoa." size="60" required><br><br>
            <label for="telefone">Telefone</label><br>
            <input type="tel" name="telefone" placeholder="Informe o telefone." required>
            <br>
            <br>
            <label for="">Escolha o  tipo de pessoa (física ou jurídica)</label><br><br>
            <input type="radio" name="tipo" value="0" checked> Pessoa física
            <input type="radio" name="tipo" value="1" > Pessoa Jurídica
            <label for="cpfcnpj">CPF ou CNPJ</label>
            <input type="text" name="cpfcnpj" placeholder="Informe o CPF ou CNPJ." required><br><br>
            <input type="submit" value="Enviar" name="enviar">&nbsp;
            <input type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php if (isset($pessoa)) { ?>
        <h2>Informações sobre a <?=($tipo == "0" ? "Pessoa Física": "Pessoa Jurídica")?></h2>
    <?php 
        echo $pessoa;  
    } ?>
        
</body>
</html>