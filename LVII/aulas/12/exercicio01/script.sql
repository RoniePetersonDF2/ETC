drop database if exists bd_lv2_turma_ab;

create database bd_lv2_turma_ab;


create table  bd_lv2_turma_ab.usuario (
    id          int primary key auto_increment,
    nome        varchar(50) NOT NULL,
    email       varchar(120) NOT NULL unique,
    password    varchar(50) NOT NULL
);