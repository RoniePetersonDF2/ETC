<?php

$dbh = new \PDO("mysql:host=127.0.0.1;dbname=escolabd;", "root", "");

# recebe o parametro enviado por get. Se não existir recebe o valor 0. (php null coalescing operator)
$id = $_GET['id'] ?? 0;

# cria o comando select com o filtro por id.
$query = "DELETE FROM usuarios WHERE id = :id";

# cria a variavel stmt que recebe a consulta realizada.
$stmt = $dbh->prepare($query);
$stmt->bindParam(':id', $id);

# cria a variavel row com o resultado da consulta realizada.
$stmt->execute();
if ($stmt->rowCount() > 0) {
    echo "Usuario com id: $id foi excluído.";
} else {
    echo "Usuario com id: $id foi não excluído.";
}
