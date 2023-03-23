<?php 

    class Conexao
    {
        static public $server = "127.0.0.1";
        static private $stringConexao = "caminho do meu bd.";

        public static function minhaConexao()
        {
            return self::$stringConexao;
        }

        public static function meuTeste()
        {
            return "Retorna meu teste";
        }
    }