<?php
    header('Content-Type: text/html; charset=utf-8');
    
    # cria a conexão com o banco de dados chamado escolabd.
    $dbh = new \PDO("mysql:hostname=127.0.0.1;dbname=escolabd;", "root", "");

    # cria uma instrução SQL para inserir dados na tabela usuarios
    $query = "INSERT INTO usuarios (id, email, password, nome, status) 
                VALUES (1, 'usuario01@example.com', '123', 'usuario 01', 1)";

    # executa a instução contida em query e se tudo der certo retorna um valor maior que zero (true)
    $result = $dbh->exec($query);
    if($result) {
        echo "Usuario inserido com sucesso.";
    } else {
        echo "Não foi possível inserir o usuário.";
    }
