--  apaga o banco de dados escolabd, se ele existir.
DROP SCHEMA IF EXISTS escolabd;

--  cria um banco de dados chamado escolabd.
CREATE SCHEMA escolabd;

--  cria uma tabela chamada usuarios com os campos: id, email, password, nome e status.
CREATE TABLE escolabd.usuarios (
    id          INTEGER PRIMARY KEY,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(60) NOT NULL,
    nome        VARCHAR(80) NOT NULL,
    status      BOOLEAN NOT NULL  
);