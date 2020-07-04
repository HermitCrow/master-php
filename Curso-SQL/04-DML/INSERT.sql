# INSERTAR NUEVOS REGISTROS #

INSERT INTO Usuarios (Nombre,Apellido,Email,Pass,Fecha_Registro)
VALUES ('Emmanuel','Ulloa','eulloa@pgr.gob.do','123456','2019-08-14');

INSERT INTO Categorias(Nombre)
VALUES('Acion');

INSERT INTO Categorias(Nombre)
VALUES('Suvivar');

INSERT INTO Categorias(Nombre)
VALUES('Aventura');



INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(1,1,'GTA 5','Nueva Actualisacion.',GETDATE());

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(1,2,'ARK','Nueva DLC.',GETDATE());

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(1,3,'Zelda Ocarina OF Time','REVIWER PARA Play Stacion.',GETDATE());

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(2,1,'Galaxy of Fire','Nueva Espancion.',GETDATE());

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(2,2,'Minecraf','Nueva Actualisacion 14.10.',GETDATE());

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(2,3,'UNCHAERTE','Retraso en el lansamiento.',GETDATE());

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(3,1,'Contra Straiker','Nueva Actualisacion',GETDATE());

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(3,2,'Spore','Nueva Actualisacion',GETDATE());

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(3,1,'Spore 2','Nueva Lanzamiento para diciembre.',GETDATE());

select * FROM Entradas;