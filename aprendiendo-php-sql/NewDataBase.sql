CREATE DATABASE  PhpWithSqlSV;

USE PhpWithSqlSV;

CREATE TABLE Notas(
    Id         INT IDENTITY (1,1) NOT NULL,
    Title     VARCHAR(100), 
    Descriptions     VARCHAR(Max) , 
    Color     VARCHAR(255),    
    CONSTRAINT PK_Nota PRIMARY KEY(Id)
);

INSERT INTO Notas
VALUES('Nota 1','Hacer La cena en la noche','Red');

INSERT INTO Notas
VALUES('Inscripcion en la univercidad O&M.','Consegir lo papeles necesarios para ingresar en la O&M','Red');

SELECT * FROM Notas;