<?php
    header('Content-Type: text/html; charset=utf-8');
    
    require_once "src/conexao.php";
    
    $id = 1;
    $email = "usuario@example.com";
    $password = "123rt56";
    $nome = "usuario01";
    $status = 1;
    $dbh = Conexao::getConexao();
    # cria uma instrução SQL para inserir dados na tabela usuarios usando parametros
    $query = "INSERT INTO usuarios (id, email, password, nome, status) 
                VALUES (:id, :email, :password, :nome, :status)";

    # prepara a execução da query e retorna para a variavel stmt
    $stmt = $dbh->prepare($query);    

    # com $stmt, usa bindParam para associar a cada um dos parametros (id, email, password, nome, status)
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':status', $status);

    # executa a instução contida em stmt e se tudo der certo retorna um valor maior que zero (true)
    $result = $stmt->execute();
    if($result) {
        echo "Usuário inserido com sucesso.";
    } else {
        echo "Não foi possível inserir o usuário.";
    }
