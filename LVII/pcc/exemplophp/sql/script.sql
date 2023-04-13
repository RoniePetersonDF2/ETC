-- apaga o banco de dados escolabd, se ele existir.
DROP SCHEMA IF EXISTS pccsampledb;

-- cria um banco de dados chamado escolabd.
CREATE SCHEMA pccsampledb;

-- cria uma tabela chamada usuarios com os campos: 
-- id, email, password, nome, status, perfil e data_cadastro.
CREATE TABLE pccsampledb.usuarios (
    id              INTEGER PRIMARY KEY AUTO_INCREMENT,
    email           VARCHAR(255) NOT NULL UNIQUE,
    password        VARCHAR(60) NOT NULL,
    nome            VARCHAR(40) NOT NULL,
    perfil          CHAR(3) NOT NULL DEFAULT 'USU' COMMENT 'ADM=Administrador\nGER=Gerente\nEDI=Editor\nUSU=Usuario', 
    status          BOOLEAN NOT NULL DEFAULT TRUE,  
    data_cadastro   DATETIME NOT NULL DEFAULT NOW()
);

-- cria uma tabela chamada categorias com os campos: 
-- id, nome e status.
CREATE TABLE pccsampledb.categorias (
    id              INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome            VARCHAR(40) NOT NULL,
    status          BOOLEAN NOT NULL DEFAULT TRUE,
    tipo            CHAR(3) NOT NULL DEFAULT 'A' COMMENT 'A=Artigo\nC=Curso' 
);

-- cria uma tabela chamada artigos com os campos: 
-- id, titulo, texto, status, data_publicacao, categoria e usuario.
CREATE TABLE pccsampledb.artigos (
    id                  INTEGER PRIMARY KEY AUTO_INCREMENT,
    titulo              VARCHAR(100) NOT NULL,
    texto               TEXT,
    status              BOOLEAN NOT NULL DEFAULT FALSE,
    data_publicacao     DATETIME DEFAULT NOW(),
    categoria_id        INTEGER NOT NULL,
    usuario_id          INTEGER NOT NULL,
    FOREIGN KEY (categoria_id) REFERENCES pccsampledb.categorias(id),
    FOREIGN KEY (usuario_id) REFERENCES pccsampledb.usuarios(id)
);

-- cria uma tabela chamada cursos com os campos: 
-- id, titulo, descricao, status, data_publicacao e categoria.
CREATE TABLE pccsampledb.cursos (
    id                  INTEGER PRIMARY KEY AUTO_INCREMENT,
    titulo              VARCHAR(100) NOT NULL,
    descricao           TEXT,
    status              BOOLEAN NOT NULL DEFAULT FALSE,
    data_publicacao     DATETIME DEFAULT NOW(),
    categoria_id        INTEGER NOT NULL,
    FOREIGN KEY (categoria_id) REFERENCES pccsampledb.categorias(id)
);

-- cria uma tabela chamada comentarios com os campos: 
-- id, titulo, descricao, avalicao, status, data_publicacao e curso.
CREATE TABLE pccsampledb.comentarios (
    id                  INTEGER PRIMARY KEY AUTO_INCREMENT,
    titulo              VARCHAR(100) NOT NULL,
    descricao           TEXT,
    status              BOOLEAN NOT NULL DEFAULT FALSE,
    data_publicacao     DATETIME DEFAULT NOW(),
    curso_id            INTEGER NOT NULL,
    FOREIGN KEY (curso_id) REFERENCES pccsampledb.cursos(id)
);
