<?php
     header('Content-Type: text/html; charset=utf-8');
     
     try {
         $db = new PDO("mysql:host=localhost;dbname=aulabd", "root", "");
         echo 'conexao com sucesso!';
     } catch (PDOException $e) {
        echo 'Erro ao conectar com o banco de dados ' . $e->getMessage();
     }
?>
