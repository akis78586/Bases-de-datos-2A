CREATE DATABASE bd_sur;
use bd_sur;
CREATE TABLE alumnos(
id int auto_increment,
nombre varchar(100),
matricula varchar(7),
campus varchar(20),
promedio decimal(4,2),
primary key(id)
)ENGINE INNODB;
INSERT INTO alumnos(nombre,matricula,campus,promedio) values
("Ana Sofia Ramirez","A12345","campus sur",95.5),
("Carlos Mendez","A12698","campus sur",88.2),
("Valeria Torres","A12785","campus sur",92.8),
("Daniela Gomez","A12159","campus sur",79.5),
("Fernanda Ruiz","A12753","campus sur",99.9);

create user 'rectoria'@'10.92.0.211' IDENTIFIED by 'Rectoria2026!';
grant select on bd_sur. * to 'rectoria'@'10.92.0.211';
flush privileges;
