<?php
	class Pessoa {
		private $nome;
        private $cpf;
        
        public function setNome($nome) {
            $this->nome = $nome;
        }
        
        public function getNome() {
            return $this->nome;
        }
        
        public function setCPF($cpf) {
            $this->cpf = $cpf;
        }
        
        public function getCPF() {
            return $this->cpf;
        }

        public function toString() {
            return "Pessoa: $this->nome, tem o CPF: $this->cpf";
        }
	}
	