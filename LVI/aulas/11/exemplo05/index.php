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
        <label>Nome</label><br>
        <input type="text" name="nome" autofocus required>
        <br><br>     
        <label>Nome</label><br>
        <select name="estadoCivil">
            <option value="0">Escolha uma opção</option>
            <option value="1">Solteiro</option>
            <option value="2">Casado</option>
            <option value="3">União estavel</option>
            <option value="4">Divorciado</option>
            <option value="5">Viuvo</option>
        </select>
        <br><br>     
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['enviar'])) {
        $estadoCivil = $_GET['estadoCivil'];
        switch($estadoCivil) {
            case '1':
                $estadoCivil = 'Solteiro';
                break;
            case '2':
                $estadoCivil = 'Casado';
                break;
            case '3':
                $estadoCivil = 'União estavel';
                break;
            case '4':
                $estadoCivil = 'Divorciado';
                break;
            case '5':
                $estadoCivil = 'Viuvo';
                break;
            default:
                $estadoCivil = "Nenhuma das opçoes";
        }
        echo '<hr>';
        echo "<p>O nome enviado foi: " . $_GET['nome'] . "</p>";
        echo "<p>Seu estado civil e: " . $estadoCivil . "</p>";
    }
?>