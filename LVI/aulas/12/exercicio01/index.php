<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exercício</h1>
    
    
    <form action="" method="post">
        <label for="numero">Informe o número:</label>
        <input type="number" name="numero" value="100"  required><br>
        <br><br>     
        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = $_POST['numero'];
            echo "Números impares de 1 até $numero<br>";
            for($i=1; $i<=$numero; $i++) {
                if($i % 2 != 0) {
                echo "Número: $i <br>";
                }
            }
        }
    ?>
</body>
</html>