CREATE DATABASE  Concesionario;

USE Concesionario;

CREATE TABLE Coches(
    Id         INT IDENTITY (1,1) NOT NULL,
    Modelo     VARCHAR(100) NOT NULL, 
    Marca      VARCHAR(50), 
    Precio     MONEY NOT NULL,
    Stock      INT NOT NULL,
    CONSTRAINT PK_Coches PRIMARY KEY(Id)
);

CREATE TABLE Grupos(
    Id       INT IDENTITY(1,1) NOT NULL,
    Nombre   VARCHAR(100) NOT NULL,
    Ciudad   VARCHAR(100),
    CONSTRAINT PK_Grupos PRIMARY KEY(Id)
);

CREATE TABLE Vendedores(
    Id          INT IDENTITY(1,1) NOT NULL,
    Id_Grupos   INT NOT NULL,
    Nombres     VARCHAR(100) NOT NULL,
    Apellidos   VARCHAR(100),
    Cargo       VARCHAR(50), 
    Fecha_Alta  DATE ,
    Sueldo      MONEY ,
    Comicion    MONEY, 
    Jefe        Int,
    CONSTRAINT PK_Vendedores PRIMARY KEY(Id),
    CONSTRAINT FK_Vendedores_Grupos FOREIGN KEY(Id_Grupos) REFERENCES Grupos(Id),
    CONSTRAINT FK_Vendedores_Jefe FOREIGN KEY(Jefe) REFERENCES Vendedores(Id)
);

CREATE TABLE Clientes(
    Id             INT IDENTITY(1,1) NOT NULL,
    Id_Vendedores  INT, 
    Nombre         VARCHAR(150) NOT NULL, 
    Ciudad         VARCHAR(100),
    Consumo        MONEY,
    Fecha          DATE,  
    CONSTRAINT PK_Clientes PRIMARY KEY(Id),
    CONSTRAINT FK_Clientes_Vendedores FOREIGN KEY (Id_Vendedores) REFERENCES Vendedores(Id) 
);

CREATE TABLE Encargos(
    Id           INT IDENTITY(1,1) NOT NULL,
    Id_Clientes  INT NOT NULL,
    Id_Coches    INT NOT NULL,
    Cantidad     INT,
    Fecha        DATE,
    CONSTRAINT PK_Encargos PRIMARY KEY(Id),
    CONSTRAINT FK_Encargos_Clientes FOREIGN KEY(Id_Clientes) REFERENCES Clientes(Id),
    CONSTRAINT FK_Encargos_Coches FOREIGN KEY(Id_Coches) REFERENCES Coches(Id) 
);
/*Rellenar las tablas */

/*Coches*/

Insert INTO Coches
Values('Yaris','Toyota',250000,200);

Insert INTO Coches
Values('Civic','Honda',650000,150);

Insert INTO Coches
Values('Accord','Honda',800000,50);

Insert INTO Coches
Values('Integra','Acura',150000,500);

Insert INTO Coches
Values('Corolla','Toyota',250000,200);

Insert INTO Coches
Values('Sonata N20','Hyundai',450000,300);

Insert INTO Coches
Values('Sonata Y20','Hyundai',450000,300);

Select * From Coches;

/*Grupos*/

INSERT INTO Grupos
VALUES('Vendedores A','Distrito Nacional');

INSERT INTO Grupos
VALUES('Vendedores A','Santigo');

INSERT INTO Grupos
VALUES('Vendedores A','Puerto Plata');

INSERT INTO Grupos
VALUES('Vendedores A','Punta Cana');

INSERT INTO Grupos
VALUES('Vendedores A','Higuey');

INSERT INTO Grupos
VALUES('Vendedores B','Distrito Nacional');

INSERT INTO Grupos
VALUES('Vendedores B','Santiago');

INSERT INTO Grupos
VALUES('Vendedores B','Puerto Plata');

INSERT INTO Grupos
VALUES('Vendedores B','Punta Cana');

INSERT INTO Grupos
VALUES('Vendedores B','Higuey');

INSERT INTO Grupos
VALUES('Directores Mecanicos','Dridtrito Nacional');

Select * From Grupos;

/*Vendedores*/

INSERT INTO Vendedores
Values(1,'Carlos','Calderon','Director De Tienda',GETDATE(),150000,5,NULL);

INSERT INTO Vendedores
Values(1,'Jan','Espinal','Vendedor',GETDATE(),50000,10,1);

INSERT INTO Vendedores
Values(2,'Juan','Peralta','Director De Tienda',GETDATE(),150000,5,NULL);

INSERT INTO Vendedores
Values(2,'Maria','Martinez','Vendedora',GETDATE(),50000,10,2);

INSERT INTO Vendedores
Values(6,'Jorge','Villalona','Director De Tienda',GETDATE(),150000,5,NULL);

INSERT INTO Vendedores
Values(6,'Any','Taino','Vendedora',GETDATE(),150000,5,3);

INSERT INTO Vendedores
Values(11,'Marcos','Jimenez','Mecanico Jefe',GETDATE(),70000,2,NULL);

INSERT INTO Vendedores
Values(1,'Emmanuel','Ulloa','Ejecutivo De Tienda',GETDATE(),180000,9,NULL);

Select * From Vendedores;

/*Clientes*/

INSERT INTO Clientes
Values(2,'Fiscalia','Distrito Nacional',150000,GETDATE());

INSERT INTO Clientes
Values(6,'La sirena','Distrito Nacional',1000000,GETDATE());

INSERT INTO Clientes
Values(4,'Pala Pizza','Puerto Plata',250000,GETDATE());

INSERT INTO Clientes
Values(1,'Precidencia','Distrito Nacional',4000000,GETDATE());

SELECT * FROM Clientes;

/*Encargos*/

insert into Encargos 
values (1,4,1,GETDATE());

insert into Encargos 
values (2,5,4,GETDATE());

insert into Encargos 
values (3,1,1,GETDATE());

insert into Encargos 
values (4,3,5,GETDATE());

SELECT Cantidad,Nombre AS 'Nombre Clientes', Marca, Modelo 
FROM Encargos,Clientes,Coches
WHERE Encargos.Id_Clientes = Clientes.Id 
AND Encargos.Id_Coches = Coches.Id;