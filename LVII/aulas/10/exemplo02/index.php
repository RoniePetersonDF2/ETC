<?php

    # importando os arquivos com as classes 
    require_once "src/conexao.php";

    # chama ou usa a classe estática junto com o atributo publico estático.
    echo "Meu endereço de conexão: " . Conexao::$server;
    
    echo '<br>';
    # chama o método estático que usa um atributo privado estático.
    echo "Minha string de conexão: " . Conexao::minhaConexao();
    
    echo '<br>';
    # chama o método estático que não usa um atributo privado estático.
     echo Conexao::meuTeste();
   