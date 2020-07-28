CREATE DATABASE Blog;

Use Blog;

CREATE TABLE Users
(
    Id INT IDENTITY(1,1) NOT NULL,
    FirstName varchar(100) NOT NULL,
    LastName varchar(255),
    Email varchar(255) NOT NULL,
    PasswordUs varchar(255) NOT NULL,
    StarDate DATETIME,
    CONSTRAINT pk_Users PRIMARY KEY(Id),
    CONSTRAINT Uq_Email UNIQUE(Email)
);

CREATE TABLE Category
(
    Id INT IDENTITY(1,1) NOT NULL,
    Names VARCHAR(15),
    CONSTRAINT Pk_Category PRIMARY KEY(Id)
);

CREATE TABLE Inputs
(
    Id INT IDENTITY(1,1) NOT NULL,
    Id_Users INT NOT NULL,
    Id_Category INT NOT NULL,
    Title VARCHAR(150) NOT NULL,
    Descriptions VARCHAR(Max),
    InputDate DATETIME,
    CONSTRAINT pk_Inputs PRIMARY KEY(Id),
    CONSTRAINT Fk_Input_Users FOREIGN KEY(Id_Users) REFERENCES Users(Id),
    CONSTRAINT Fk_Input_Category FOREIGN KEY(Id_Category) REFERENCES Category(Id)
);

USE Blog;
INSERT INTO Category
VALUES('Pc');

INSERT INTO Category
VALUES('Rol');

INSERT INTO Category
VALUES('Aventura');

INSERT INTO Category
VALUES('Deporte');

INSERT INTO Category
VALUES('Plataformas');

INSERT INTO Inputs
VALUES(9, 3, 'Guia Zelda', 'Holas Aqui les traigo la mejor gia para zelda mini.', SYSDATETIME());

INSERT INTO Inputs
VALUES(5, 1, 'Super Pc Gamer', 'Hola Aqui le traigo el nuevo boar msi compatible con el procesador i9.', SYSDATETIME());

INSERT INTO Inputs
VALUES(7, 2, 'Ark Evolve', 'Nuevo DLC sale me noviembre activos chicos.', SYSDATETIME());

INSERT INTO Inputs
VALUES(1, 3, 'La mejor aventura', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla maximus dolor sed volutpat. Quisque tincidunt ut erat a ornare. Ut vulputate nunc ac ipsum cursus lacinia vel ut quam.

', '2020-07-28 09:06:00')

SELECT TOP 4
    i.*, c.*
FROM Inputs i
    INNER JOIN Category c ON c.Id = i.Id_Category
ORDER BY i.Id DESC

SELECT *
FROM Users