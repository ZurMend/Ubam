CREATE DATABASE control_escolar;
USE control_escolar;

CREATE TABLE carreras(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    activo BOOLEAN DEFAULT 1
);

CREATE TABLE turnos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    activo BOOLEAN DEFAULT 1
);

INSERT INTO turnos(nombre) VALUES
('Matutino'),
('Vespertino'),
('Mixto');

CREATE TABLE grados(
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero INT,
    activo BOOLEAN DEFAULT 1
);

CREATE TABLE grupos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    carrera_id INT,
    turno_id INT,
    grado INT,
    grupo_codigo VARCHAR(20),
    activo BOOLEAN DEFAULT 1,
    FOREIGN KEY (carrera_id) REFERENCES carreras(id),
    FOREIGN KEY (turno_id) REFERENCES turnos(id)
);

CREATE TABLE alumnos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    ap_paterno VARCHAR(100),
    ap_materno VARCHAR(100),
    grupo_id INT,
    estado VARCHAR(20) DEFAULT 'Pendiente',
    FOREIGN KEY (grupo_id) REFERENCES grupos(id)
);
