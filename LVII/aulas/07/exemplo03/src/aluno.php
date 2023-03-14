<?php

    class Aluno {
        private $matricula;
        private $nome;

        
        public function __construct($matricula="", $nome="") {
            $this->matricula = $matricula;
            $this->nome = $nome;
        }

        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $value;
        }

        public function __toString()
        {
            return "O aluno $this->nome tem a matrícula $this->matricula";
        }

    }