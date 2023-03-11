CREATE DATABASE projeto_comentarios;

USE projeto_comentarios;

CREATE TABLE mensagens (
    id int(11) primary key not null auto_increment,
    data_msg datetime,
    nome varchar(50),
    msg text
);