<?php
    # array multidimensional de carros
    # array dentro de outro array.
    $carros = array (
        array("Volvo",2022,"Branco"),
        array("BMW",2015, "Prata"),
        array("Honda Civic", 2005, "Preto"),
        array("Land Rover",2017, "Preto")
      );

      echo "Valor dos indices [0],[0] do array carros - Modelo do carro: " . $carros[0][0] . "<br>"; 
      echo "Valor dos indices [1],[0] do array carros - Modelo do carro: " . $carros[1][0] . "<br>"; 
      echo "Valor dos indices [2],[0] do array carros - Modelo do carro: " . $carros[2][0] . "<br>"; 
      echo "Valor dos indices [3],[0] do array carros - Modelo do carro: " . $carros[3][0] . "<br>"; 
