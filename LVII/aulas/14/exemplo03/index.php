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

    echo '<h3>Usando PDO::FETCH_BOTH OU FETCH_ASSOC</h3>';
    # executa o loop para ler os campos retornada da tabela pelos nomes dos campos.
    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        echo "id: " . $row['id'] . "<br>";
        echo "email: " . $row['email'] . "<br>";
        echo "nome: " . $row['nome'] . "<br>";
        echo "<hr>";
    }
 