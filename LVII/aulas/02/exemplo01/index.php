<?php
    date_default_timezone_set('America/Sao_Paulo');

    $nome = "Ronie Peterson";
    $dataAtual = date('d/m/Y');
    $horaAtual = date('H:i');

    echo "A data atual: $dataAtual<br>";
    echo "A hora atual: $horaAtual<br>";

    if($horaAtual >0 and $horaAtual < 13) {
        echo "Bom dia $nome.";
    } elseif($horaAtual >= 13 and $horaAtual <= 18) {
        echo "Boa tarde $nome.";
    }else {
        echo "Boa noite $nome.";
    }