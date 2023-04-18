<?php
    $dbh = new \PDO("mysql:host=127.0.0.1;dbname=escolabd;","root", "");

    # cria a variavel id com valor igual a 1.
    $id = 1;

    # cria o comando select com o filtro por id.
    $query = "SELECT * FROM usuarios WHERE id = $id";

    # cria a variavel stmt que recebe a consulta realizada.
    $stmt = $dbh->query($query);

    # cria a variavel row com o resultado da consulta realizada.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row) {
        echo "ID: " . $row['id'] . '<br>';
        echo "NOME: " . $row['nome'] . '<br>';
        echo "E-MAIL: " . $row['email'] . '<br>';
    } else {
        echo 'Não existe usuário com o id: ' . $id;
    }
    

