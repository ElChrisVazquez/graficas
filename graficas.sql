CREATE DATABASE Graficas;
CREATE TABLE Medico (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(50) NOT NULL,
    paterno varchar(50) NOT NULL,
    materno varchar(50) NOT NULL,
    usuario varchar(50) NOT NULL,
    contrasena varchar(50) NOT NULL
);
CREATE TABLE Paciente(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(50) NOT NULL,
    paterno varchar(50) NOT NULL,
    materno varchar(50) NOT NULL,
    direccion varchar(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    fecha_nacimiento DATE NOT NULL
);
CREATE TABLE Hemoglobina(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    resultado DOUBLE NOT NULL,
    id_paciente int,
    FOREIGN KEY(id_paciente) REFERENCES Paciente(id)
);
CREATE TABLE Glucosa(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    resultado DOUBLE NOT NULL,
    id_paciente int,
    FOREIGN KEY(id_paciente) REFERENCES Paciente(id)
);
INSERT INTO Medico(
        nombre,
        paterno,
        materno,
        usuario,
        contrasena
    )
VALUES(
        'Chris',
        'Vazquez',
        'Valdivia',
        'admin',
        '1234'
    );
INSERT INTO Paciente(
        nombre,
        paterno,
        materno,
        direccion,
        telefono,
        correo,
        fecha_nacimiento
    )
VALUES (
        'Chris',
        'Vazquez',
        'Valdivia',
        'Pelicano 2007',
        '3331494593',
        'TheChrisVazquez@gmail.com',
        '1988/10/10'
    );
INSERT INTO Hemoglobina(resultado, id_paciente)
VALUES(13.8, 1);
INSERT INTO Hemoglobina(resultado, id_paciente)
VALUES(13.1, 1);
INSERT INTO Hemoglobina(resultado, id_paciente)
VALUES(13.7, 1);
INSERT INTO Hemoglobina(resultado, id_paciente)
VALUES(12.0, 1);
INSERT INTO Hemoglobina(resultado, id_paciente)
VALUES(14.5, 1);

INSERT INTO Glucosa(resultado, id_paciente)
VALUES(3.9, 1);
INSERT INTO Glucosa(resultado, id_paciente)
VALUES(4.2, 1);
INSERT INTO Glucosa(resultado, id_paciente)
VALUES(3.7, 1);
INSERT INTO Glucosa(resultado, id_paciente)
VALUES(4.3, 1);
INSERT INTO Glucosa(resultado, id_paciente)
VALUES(5.2, 1);