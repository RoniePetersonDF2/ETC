<?php
     header('Content-Type: text/html; charset=utf-8');
     
     $db = new PDO("mysql:host=localhost;dbname=escolabd", "root", "");
     echo 'conexao com sucesso!';
     $db = null;
?>
