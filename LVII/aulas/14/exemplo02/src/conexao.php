<?php
    header('Content-Type: text/html; charset=utf-8');
    class Conexao {

        public static function getConexao() {
            $dbh = null;
            try {
                # cria a conexão com o banco de dados chamado escolabd.
                $dbh =  new \PDO("mysql:hostname=127.0.0.1;dbname=escolabd;", "root", "");
            } catch (\PDOException $e) {
                echo "Erro ao conectar com o banco de dados. " . $e->getMessage();
            } finally {
                return $dbh;
            }   
        }
    }
