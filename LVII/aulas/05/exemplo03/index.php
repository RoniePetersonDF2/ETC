<?php
	class Calculadora {
		public function soma($x, $y) {
            echo "A soma de $x + $y = " .($x + $y);
        }

        public function subtrai($x, $y) {
            return $x - $y;
        }
	}
	
	$calculadora = new Calculadora();
	$resultado = $calculadora->subtrai(50,20);
    print("Valor da operação é: " .$resultado);
	
?>
