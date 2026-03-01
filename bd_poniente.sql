CREATE DATABASE bd_poniente;
USE bd_poniente;

CREATE TABLE alumnos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    matricula VARCHAR(7),
    campus VARCHAR(20),
    promedio DECIMAL(4,2)
) ENGINE=InnoDB;


CREATE USER 'rectoria'@'10.92.0.211' IDENTIFIED BY 'Rectoria2026!'; 
GRANT SELECT ON bd_poniente.* TO 'rectoria'@'10.92.0.211';
FLUSH PRIVILEGES;

INSERT INTO alumnos (nombre, matricula, campus, promedio) VALUES
('Luis Carlos Rodriguez Franco', '2472865', 'Poniente', 8.1),
('Angel Gabriel Lopez Picazo', '2425707', 'Poniente', 7.9),
('Carlos Ignacio Santana Cotoñeto', '2425723', 'Poniente', 6.9),
('Justin Osiris Albarran Miguel', '2425688', 'Poniente', 6.9),
('Luis Gabriel Santana Miguel', '2425699' , 'Poniente', 9.5);

