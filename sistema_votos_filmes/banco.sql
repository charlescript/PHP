create database projeto_rating;

use projeto_rating;


create table filmes(
    id int(11) primary key not null auto_increment,
    titulo varchar(100),
    media float
);

create table votos(
    id int(11) primary key not null auto_increment,
    id_filme int(11),
    nota int
);


insert into filmes (titulo) values("Atirador de Elite");
insert into filmes (titulo) values("Esqueceram de mim");
insert into filmes (titulo) values("+Velozes +Furiosos");
insert into filmes (titulo) values("Suits");
insert into filmes (titulo) values("Game of Thrones");
insert into filmes (titulo) values("Avatar");
insert into filmes (titulo) values("Bee Movie");
insert into filmes (titulo) values("The BiG BANG THEORY");
insert into filmes (titulo) values("Missão impossível");
insert into filmes (titulo) values("Vingadores Ultimato");