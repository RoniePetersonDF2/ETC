<?php
    # criando array indexado com a função array 
    $marcas = array('GM', 'Honda', 'VW', 'Fiat', 'BMW', 'Cao Cherry', 'Audi', 'Jaguar', 'Bentley', 'Hyundai', 'Jeep');

    var_dump($marcas);
    echo '<hr>';
    # determinando o tamanho de um array com a função count()
    $tamanhoArray = count($marcas);

    echo "O tamanho do array é: $tamanhoArray <br>";
    echo '<hr>';
    # usando loop for para percorrer o array
    for($i =0; $i < $tamanhoArray; $i++) {
        echo "O indice é $i e o valor armazenado é: $marcas[$i] <br>";
    }
    