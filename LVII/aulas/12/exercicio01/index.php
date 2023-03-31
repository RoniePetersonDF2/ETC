<?php
     header('Content-Type: text/html; charset=utf-8');
     
     $db = new PDO("mysql:host=localhost;dbname=bd_lv2_turma_ab", "root", "");
     echo 'conexao com sucesso!';
     $db = null;
?>
