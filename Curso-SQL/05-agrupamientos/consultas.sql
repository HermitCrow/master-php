/*Consultas de Agrupamiento*/

SELECT COUNT(Titulo) AS 'NUMEROS DE ENTRADS', Id_Categorias FROM Entradas
GROUP BY Id_Categorias;

SELECT COUNT(Titulo) AS 'NUMEROS DE ENTRADS', Id_Categorias FROM Entradas
GROUP BY Id_Categorias HAVING COUNT(Titulo) = 3;

SELECT Id FROM Entradas
WHERE Id = 10;

DELETE FROM Entradas
WHERE Id = 10;

INSERT INTO Entradas(Id_Usuarios,Id_Categorias,Titulo,Descripcion,Fecha_Publicacion)
VALUES(1,1,'ASSESIN','NEW GAME FOR 2020',GETDATE());

SELECT AVG(Id) AS 'Media de Entradas' FROM Entradas

SELECT  MAX(Id) AS 'MAX Id' FROM Entradas;

SELECT  MIN(Id) AS  'maId' FROM Entradas;

SELECT SUM(Id) AS 'SUMA' FROM Entradas
;
