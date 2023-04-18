--  apaga o banco de dados escolabd, se ele existir.
DROP SCHEMA IF EXISTS escolabd;

--  cria um banco de dados chamado escolabd.
CREATE SCHEMA escolabd;

--  cria uma tabela chamada usuarios com os campos: id, email, password, nome e status.
CREATE TABLE escolabd.usuarios (
    id          INTEGER PRIMARY KEY AUTO_INCREMENT,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(60) NOT NULL,
    nome        VARCHAR(80) NOT NULL,
    status      BOOLEAN NOT NULL  
);

--  insere registros na tabela de usuario.
INSERT INTO `usuarios` (`email`, `password`, `nome`, `status`) 
VALUES ('usuario01@email.com', md5('123'), 'usuario 01', '1');

INSERT INTO `usuarios` (`email`, `password`, `nome`, `status`) 
VALUES ('usuario02@email.com', md5('1234'), 'usuario 02', '1');

INSERT INTO `usuarios` (`email`, `password`, `nome`, `status`) 
VALUES ('usuario03@email.com', md5('1235'), 'usuario 03', '0');

INSERT INTO `usuarios` (`email`, `password`, `nome`, `status`) 
VALUES ('usuario04@email.com', md5('1237'), 'usuario 04', '0');

INSERT INTO `usuarios` (`email`, `password`, `nome`, `status`) 
VALUES ('usuario05@email.com', md5('1238'), 'usuario 05', '1');

