<?php

$dbh = new \PDO("mysql:host=127.0.0.1;dbname=escolabd;", "root", "");

# recebe o parametro enviado por get. Se não existir recebe o valor 0. (php null coalescing operator)
$id = $_GET['id'] ?? 0;
# cria uma variavel que recebe o nome por get e guarda em uma variável. Se não existir valor padrão.
$nome = $_GET['nome'] ?? 'nome atualizado';

# cria o comando select com o filtro por id.
$query = "UPDATE usuarios SET nome = :nome WHERE id = :id";

# cria a variavel stmt que recebe a consulta realizada.
$stmt = $dbh->prepare($query);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':id', $id);

# cria a variavel row com o resultado da consulta realizada.
$stmt->execute();
if ($stmt->rowCount() > 0) {
    echo "Usuario com id: $id atualizado.";
} else {
    echo "Usuario com id: $id foi não atualizado.";
}
