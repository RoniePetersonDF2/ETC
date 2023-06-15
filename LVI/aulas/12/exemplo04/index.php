<?php
    # criando array associativo com a função array 
    $idades = array('joao'=>15, 'maria'=>22, 'clara'=>33, 'lia' =>34);

    var_dump($idades);

    echo '<hr>';
    # criando array  
    $cachorros['chico'] = 'Yorkshire';
    $cachorros['pequi'] = 'Golden';
    $cachorros['ademastor'] = 'SRD';

    var_dump($cachorros);
    echo '<hr>';
    
    #acessando valores de um array assosciativo
    echo 'idade da maria: ' . $idades['maria'];
    echo '<br>';
    echo 'Raca do ademastor: ' . $cachorros['ademastor'];
