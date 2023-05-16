CREATE DATABASE GuauMiau;
use GuauMiau;
create table Usuarios(
    Id int PRIMARY key AUTO_INCREMENT,
    Nombre varchar(120),
    Correo varchar(120),
    Clave varchar(120),
    Telefono int (10),
    Estado varchar(120),
    Municipio varchar(120),
    Colonia varchar(120),
    CodigoPostal int(10)
);

CREATE TABLE Usuarios (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(120),
    Correo VARCHAR(120),
    Clave VARCHAR(120),
    Telefono INT(10),
    Estado VARCHAR(120),
    Municipio VARCHAR(120),
    Colonia VARCHAR(120),
    CodigoPostal INT(10),
    Activo BOOLEAN
);



INSERT INTO Usuarios (Nombre, Correo, Clave, Telefono, Estado, Municipio, Colonia, CodigoPostal)
VALUES ('Lisandro', 'lisandro@gmail.com', '12345', 9616505194, 'Chiapas', 'Tuxtla', 'Patria', 22222);

CREATE TABLE usuarios_administradores (
   id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   nombre VARCHAR(50) NOT NULL,
   correo VARCHAR(100) NOT NULL UNIQUE,
   contrasena VARCHAR(255) NOT NULL,
   fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO usuarios_administradores (nombre, correo, contrasena) 
VALUES ('Lisandro', 'lisandro@gmail.com', '12345');
