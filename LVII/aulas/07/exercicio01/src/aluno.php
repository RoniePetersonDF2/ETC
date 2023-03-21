<?php

    class Aluno {
        private $matricula;
        private $nome;
        private $email;

        public function __construct($matricula ="", $nome ="", $email ="") {
            $this->matricula = $matricula;
            $this->nome = $nome;
            $this->email = $email;
        }

        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $value;
        }

        public function __toString() {
            $msg = "O nome do aluno é: " . $this->nome;
            $msg .= "<br>A matrícula do aluno é: " . $this->matricula;
            $msg .=  "<br>O e-mail do aluno é: " . $this->email;

            return $msg;
        }
    }