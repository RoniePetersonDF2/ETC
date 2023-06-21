<?php
    # variavel de controle do loop
    $i = 0;

    # loop do while com sua condicional
    # observe que o loop é executado ao menos uma vez
    # independente do condicional.
    do {
        print("Valor de i: $i <br>");
        # incremento do controle. Se não existir pode ser loop eterno
        $i++;
        # verifica se o valor é igual a 50 e interrope a execução do laço.
        if($i == 50) {
            break;
        }
    } while($i <= 100);
    