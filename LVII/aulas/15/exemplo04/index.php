<?php

$dbh = new \PDO("mysql:host=127.0.0.1;dbname=escolabd;", "root", "");

# recebe o parametro enviado por get. Se não existir recebe o valor 0. (php null coalescing operator)
$id = $_GET['id'] ?? 0;

# cria o comando select com o filtro por id.
$query = "SELECT * FROM usuarios WHERE id = $id";

# cria a variavel stmt que recebe a consulta realizada.
$stmt = $dbh->query($query);

# cria a variavel row com o resultado da consulta realizada.
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row) {
    echo "ID: " . $row['id'] . '<br>';
    echo "NOME: " . $row['nome'] . '<br>';
    echo "E-MAIL: " . $row['email'] . '<br>';
} else {
    echo 'Não existe usuário com o id: ' . $id;
}
