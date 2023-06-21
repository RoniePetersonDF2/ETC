<?php
    # array multidimensional de carros
    # array dentro de outro array.
    echo '<h1>Array de carros</h1>';
    $carros = array (
        array("Volvo",2022,"Branco"),
        array("BMW",2015, "Prata"),
        array("Honda Civic", 2005, "Preto"),
        array("Land Rover",2017, "Preto")
      );

    # percorrendo o array bidimensional.
    # precisamos de dois loops. 
    for($i = 0; $i < count($carros); $i++) {
      echo "Modelo dos carros: " . $carros[$i][0] . "<br>";
    }

    echo '<hr><h1>Carros</h1>';
    # outra forma de percorrer o array.
    for($i = 0; $i < count($carros); $i++) {
        echo "Modelo do carro: " . $carros[$i][0] . "<br>";
        echo '<ul>';
		for($j = 1; $j < 3; $j++) {
			echo "<li>" . $carros[$i][$j] . "</li>";
     	}
      echo '</ul>';
    }
