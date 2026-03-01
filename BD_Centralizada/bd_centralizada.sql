-- Creamos la base de datos
CREATE DATABASE centralizada;
USE centralizada;

-- Creamos la tabla usuario
CREATE TABLE usuario (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    rol VARCHAR(50) NOT NULL,
    fecha_registro DATE NOT NULL,
    PRIMARY KEY (id)
)ENGINE=InnoDB;

-- Agregamos tres usuarios
INSERT INTO usuario (nombre, rol, fecha_registro) VALUES 
    ('Carlos Mendoza', 'Administrador', '2026-02-17'),
    ('Miguel Torres', 'Alumno', '2026-02-17'),
    ('Laura Días', 'Docente', '2026-02-17');

-- Mostrar los usuarios registrados
SELECT * FROM usuario;
