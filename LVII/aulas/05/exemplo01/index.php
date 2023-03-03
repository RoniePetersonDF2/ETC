<?php
	class Pessoas {
		public $nome;
	}
	
	$p1 = new Pessoas();
	$p1->nome = "Joao";
	
	echo "O nome da pessoa e <b>{$p1->nome}</b>";
?>
