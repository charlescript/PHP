CREATE DATABASE loginunico;

USE loginunico;

CREATE TABLE usuarios(
    id int(11) primary key not null auto_increment,
    email varchar(100) not null unique,
    senha varchar(32) not null,
    ip varchar(20)
);

INSERT INTO usuarios (email, senha) VALUES ("email@outlook.com", MD5(teste));