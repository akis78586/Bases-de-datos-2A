 create database bd_norte;
 	use bd_norte

 	Create table alumnos(
 		id int auto_increment,
 		nombre varchar(100),
 		matricula varchar(7),
 		campus varchar(20),
 		promedio decimal(4, 2),
 		primary key (id)
 		) Engine = InnoDB;

 	insert into alumnos(nombre, matricula, campus, promedio) values
 	("Sophia Guadalupe Perez Sixto", "2472123", "Norte", 10.00),
 	("Angel Antonio Medina Lopez", "2451525", "Norte", 10.00),
 	("Dante Tercero Castro", "7235354", "Norte", 8.00),
 	("Jerson Jarhid Parra Benavides", "8438887", "Norte", 10.00),
 	("Larry Parra Guadalupe Tercero","8921820", "Norte", 90.00 );
