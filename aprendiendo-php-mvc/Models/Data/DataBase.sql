CREATE DATABASE NotasDB;

use NotasDB;

Create Table Usuarios(
Id           int(255) auto_increment not null,
Nombre       varchar(100) not null,
Apellido     varchar(100) not null,
Email        varchar(255) not null,
password     varchar(255) not null,
Fecha        date not null,
CONSTRAINT pk_Usuarios PRIMARY KEY(Id),
CONSTRAINT uq_Email UNIQUE(Email)  
)Engine=InnoDb;

Create Table Notas(
Id           int(255) auto_increment not null,
Usuario_Id   int(255) not null,
Titulo       varchar(255) not null,
Descripcion  MEDIUMTEXT,
Fecha        date not null,
CONSTRAINT pk_Notas PRIMARY KEY(Id),
CONSTRAINT fk_Notas_Usuarios FOREIGN KEY(Usuario_Id) REFERENCES usuarios(Id)        
)Engine= InnoDb;