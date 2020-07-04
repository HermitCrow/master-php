CREATE TABLE Usuarios(   
Id               INT IDENTITY(1,1) NOT NULL,
Nombre           VARCHAR(50) NOT NULL,
Apellido         VARCHAR(50) NOT NULL,
Email            VARCHAR(100) NOT NULL,
Pass             VARCHAR(255) NOT NULL,
Fecha_Registro   DATE NOT NULL
CONSTRAINT PK_Usuarios PRIMARY KEY (ID),
CONSTRAINT UQ_Email UNIQUE (Email)
);

CREATE TABLE Categorias(
Id               INT IDENTITY(1,1) NOT NULL,
Nombre           VARCHAR(100) NOT NULL,
CONSTRAINT PK_Categorias PRIMARY KEY (Id)
);

CREATE TABLE Entradas(
Id               INT IDENTITY(1,1) NOT NULL,
Id_Usuarios      INT NOT NULL,
Id_Categorias    INT NOT NULL,
Titulo           VARCHAR(150) NOT NULL,
Descripcion      NVARCHAR(MAX),
Fecha_Publicacion DATA NOT NULL,
CONSTRAINT PK_Entradas PRIMARY KEY (Id),
CONSTRAINT FK_Entradas_Usuarios FOREIGN KEY (Id_Usuarios) REFERENCES Usuarios(Id),
CONSTRAINT FK_Entradas_Categorias FOREIGN KEY (Id_Categorias) REFERENCES Categorias(Id)
);