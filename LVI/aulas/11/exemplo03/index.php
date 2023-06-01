<?php
    $horario = 13;
    
    # verifica o valor das variaveis.
    if($horario >=0 && $horario <=12) {
        echo "Bom dia, seja bem vindo";
    } else if($horario >12 && $horario <=18) {
        echo "Boa tarde, seja bem vindo";
    } else {
        echo "Boa noite";
    }