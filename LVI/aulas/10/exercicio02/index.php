<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Trabalhando com formulários e PHP</h1>
    <form action="" method="post">
        <label>Nome</label><br>
        <input type="text" name="nome" autofocus required><br>
        <label>Idade</label><br>
        <input type="number" name="idade" required><br>
        <label>Sexo</label><br>
        <input type="radio" name="sexo" value="Masculino">Masculino        
        <input type="radio" name="sexo" value="Feminino">Feminino        
        <input type="radio" name="sexo" value="Não Informado">Não informado   
        <br><br>     
        <input type="submit" value="Enviar" name="Enviar">
    </form>
</body>
</html>