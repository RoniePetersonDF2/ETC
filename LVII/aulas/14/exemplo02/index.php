<?php
    header('Content-Type: text/html; charset=utf-8');
    
    require_once "src/conexao.php";
    
    $dbh = Conexao::getConexao();
    # cria uma instrução SQL para inserir dados na tabela usuarios usando parametros
    $query = "SELECT * FROM usuarios";

    # prepara a execução da query e retorna para a variavel stmt.
    $stmt = $dbh->query($query);    

    # retorna a quantidade de linhas retornada pela query.
    echo "<h2>Quantidade de linhas retornada: " . $stmt->rowCount() . "</h2>";

    # executa o loop para ler os campos retornada da tabela pelos indices do array.
    echo '<h3>Não utilizando PDO::FETCH_BOTH OU FETCH_ASSOC</h3>';
    while ($row = $stmt->fetch()) {
        echo "id: " . $row[0] . "<br>";
        echo "email: " . $row[1] . "<br>";
        echo "nome: " . $row[3] . "<br>";
        echo "<hr>";
    }
