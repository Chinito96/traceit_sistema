CREATE SCHEMA traceit_db;

USE traceit_db;

CREATE TABLE alumnos(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(100) NOT NULL,
	apellidos VARCHAR(100) NOT NULL,
	grado INT NOT NULL,
	fecha_nacimiento DATE NOT NULL
);


CREATE TABLE calificaciones (
	id INT PRIMARY KEY AUTO_INCREMENT,
	alumno_id INT NOT NULL,
	materia VARCHAR(50) NOT NULL,
	calificacion DECIMAL(5,2) NOT NULL,
	FOREIGN KEY (alumno_id) REFERENCES alumnos (id)
);
 traceit_dbtraceit_db