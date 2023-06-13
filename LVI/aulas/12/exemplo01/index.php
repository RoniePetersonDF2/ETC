<?php
    # criando array indexado com a função array 
    $marcas = array('GM', 'Honda', 'VW', 'Fiat');

    var_dump($marcas);
    echo '<hr>';

    # outra forma de criar array indexado
    $carros[] = 'Corsa';
    $carros[] = 'Civic';
    $carros[] = 'Polo';
    $carros[] = 'Fiat 147';

    var_dump($carros);
    echo '<hr>';
    # acessando valores de array por indice.
    var_dump($carros[2]);