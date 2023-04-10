<?php
    header('Content-Type: text/html; charset=utf-8');
    
    require_once "src/conexao.php";
    
    $dbh = Conexao::getConexao();
    # cria uma instrução SQL para inserir dados na tabela usuarios
    $query = "INSERT INTO usuarios (id, email, password, nome, status) 
                VALUES (1, 'usuario01@example.com', '123', 'usuario 01', 1)";

    # executa a instução contida em query e se tudo der certo retorna um valor maior que zero (true)
    $result = $dbh->exec($query);
    if($result) {
        echo "Usuário inserido com sucesso.";
    } else {
        echo "Não foi possível inserir o usuário.";
        # se desejar trartar o error, pode usar o método errorInfor() da classe de conexão.
        $error = $dbh->errorInfo();
        print_r($error);
    }
