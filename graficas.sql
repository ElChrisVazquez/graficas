CREATE DATABASE Graficas;

CREATE TABLE doctor(id int  PRIMARY KEY NOT NULL AUTO_INCREMENT, user char(20) NOT NULL, pass char(20) NOT NULL, nombre char(40), apellido char(40))

INSERT INTO doctor(user, pass, nombre, apellido) VALUES ('admin', '1234', 'admin', 'admin');