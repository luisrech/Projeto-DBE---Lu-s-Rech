create database restaurif;
use restaurif;

create table usuario (
nome varchar(255),
email varchar(255) primary key,
senha varchar(255));
select * from usuario;

CREATE TABLE lanches (
    id INT NOT NULL AUTO_INCREMENT, 
    tipo VARCHAR(45) NOT NULL, 
    nome VARCHAR(45) NOT NULL, 
    descricao VARCHAR(90) NOT NULL, 
    imagem VARCHAR(80) NOT NULL, 
PRIMARY KEY (id));