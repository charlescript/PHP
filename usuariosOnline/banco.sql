CREATE DATABASE usuariosonline;

USE usuariosonline;

create table acessos(
    id int(11) primary key not null auto_increment,
    ip varchar(20),
    hora time
);