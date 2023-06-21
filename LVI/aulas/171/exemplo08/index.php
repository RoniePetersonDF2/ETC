<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['enviar'])) {
        date_default_timezone_set('America/Sao_Paulo');
   
        # função date que cria uma data com valor recebido via $_GET.
        $data =  date($_GET['dataAtual']);
        echo 'Data atual: ' . $data;
        echo '<hr>';    
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
    <h1>Trabalhando com datas</h1>
    <form action="" method="get">
        <input type="date" name="dataAtual" required autofocus>
        <button type="submit" name="enviar">Enviar</button>
    </form>
 </body>
 </html>   