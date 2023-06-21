<?php
    # função do PHP que modifica o timezone da data para UTC.
    date_default_timezone_set('UTC');

    # função date que cria uma data com valor fornecido pelo usuario.
    $data =  date('2007-05-19');
    echo $data . '<br>';
    
    # função date que cria uma data com valor atual recebida do sistema.
    $dataAtual =  date('d-m-Y H:i:s');
    echo $dataAtual . '<br>';
    
    echo '<hr>';
    # função do PHP que modifica o timezone da data do Brasil/Sao Paulo.
    date_default_timezone_set('America/Sao_Paulo');
   
    # função date que cria uma data com valor atual recebida do sistema.
    $dataAtualHora =  date('d-m-Y H:i:s');
    echo $dataAtualHora . '<br>';
    

 