<?php
    # Para trabalhar com sessao é obrigatorio inciar a sessao
    session_start();

    # verifica se o valor da sessao exite?
    if(isset($_SESSION['count'])) {
        # se o valor da sessao exite? incrementa com mais 1
        $_SESSION['count'] = $_SESSION['count'] + 1;
    } else {
        # se o valor da sessao não exite? inicia com o valor 1
        $_SESSION['count'] = 1;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <?php
        # exibe o valor atual armazenado na variavel de sessao.
        echo "Contador: " . $_SESSION['count'];
    ?>
</body>
</html>