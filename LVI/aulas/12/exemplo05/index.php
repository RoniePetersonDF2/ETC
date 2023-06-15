<?php
    # criando array associativo com a função array 
    $idades = array('joao'=>15, 'maria'=>22, 'clara'=>33, 'lia' =>34);

    # loop foreach acessando somente valores do array
    foreach ($idades as $value) {
        echo "Valores do array idades - $value <br>";
    }
    
    echo '<hr>';
    
    # loop foreach acessando chave e valor do array
    foreach ($idades as $key => $value) {
        echo "Valores do $key - $value <br>";
    }
        
    