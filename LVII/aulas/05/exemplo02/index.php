<?php
	class Pessoas {
		public $nome;

        public function imprimir() {
            echo "O nome da pessoa e <b>$this->nome</b>";    
        }
	}
	
	$p1 = new Pessoas();
	$p1->nome = "Joao";
	
	$p1->imprimir();
?>
