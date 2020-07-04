InSERT INTO Categorias
VALUES('Deportes');
/* Sacar Usuarios con entradas */
Select * From Usuarios WHERE Id IN (SELECT Id_Usuarios FROM Entradas);

/* Sacar Usuarios Que no tengan entradas */
Select * From Usuarios WHERE Id NOT IN(SELECT Id_Usuarios FROM Entradas);

/* Sacar los usuarios que hablen de gta*/

Select Nombre,Apellido From Usuarios 
WHERE Id IN(SELECT Id_Usuarios FROM Entradas
WHERE Titulo LIKE '%GTA%');

/* Sacar todas las entradas de la categoria accion Usando su nombre */

Select * FROM Entradas
WHERE Id_Categorias IN (SELECT Id FROM categorias 
WHERE Nombre = 'Acion');

/* MOstrar las categorias con mas de 3 entradas*/

SELECT Nombre FROM categorias
WHERE id IN (SELECT Id_Categorias FROM Entradas
GROUP BY Id_Categorias HAVING COUNT(Id_Categorias) >= 3);

SELECT * FROM Entradas

/* Mostrar los usuarios que crearon entradas un martes */

UPDATE Entradas
SET Fecha_Publicacion = '2019-08-13'
WHERE Id_Usuarios = 2;

SELECT Nombre, Apellido,Email FROM Usuarios
WHERE Id IN (SELECT Id_Usuarios FROM Entradas
WHERE DATENAME(dw,Fecha_Publicacion) = 'Tuesday'); 

/* MOstrar el nombre del usuarios con mas entradas */

SELECT CONCAT(Nombre,' ',Apellido) AS 'EL Usuario Con Mas entradas.' FROM Usuarios
WHERE Id = (SELECT TOP 1 Id_Usuarios FROM Entradas
GROUP BY Id_Usuarios ORDER BY COUNT(Id) DESC);

/*Mostrar la categorias sin entradas*/

SELECT * FROM Categorias
WHERE Id NOT IN(SELECT Id_Categorias FROM Entradas);

