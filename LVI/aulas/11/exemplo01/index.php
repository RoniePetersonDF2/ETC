<?php
    $nome = "João Pedro";
    $estadoCivil = "Divorciado";

    # verifica o valor de estado civil.
    if($estadoCivil == "Casado") {
        echo "$nome possui o estado civil $estadoCivil.";
    } elseif($estadoCivil == "União estável") {
        echo "$nome possui o estado civil $estadoCivil.";
    } elseif($estadoCivil == "Divorciado") {
        echo "$nome possui o estado civil $estadoCivil.";
    } elseif($estadoCivil == "Viuvo") {
        echo "$nome possui o estado civil $estadoCivil.";    
    } else 
        echo "$nome possui o estado civil solteiro.";
