/* INSERT PARA CATEGORIAS*/



INSERT INTO Categorias(Nombre)
VALUES('Accion');

INSERT INTO Categorias(Nombre)
VALUES('Rol/RPG');

INSERT INTO Categorias(Nombre)
VALUES('Aventura');

SELECT * FROM Categorias;

/*INSERT Entradas*/

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(4, 3,'Pokemon GO','Lugia SHIME',GETDATE());

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(4, 2,'Samurai','Como vencer a Dragon',GETDATE());

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(1, 1,'PUBG Mobile','MAPAS y su estrategias',GETDATE());

SELECT * FROM Entradas
WHERE Fecha_Publicacion = '2019-08-17';