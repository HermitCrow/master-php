/*
16. Obtener un listado de clientes atendidos 
por el vendedor Jan.
*/

SELECT cl.Id AS 'Clave Cliente',cl.Nombre AS 'Listado de Clientes de Jan',CONCAT(ve.Nombres,' ',ve.Apellidos) AS 'Vendedor' FROM Clientes cl
INNER JOIN Vendedores ve ON cl.Id_Vendedores = ve.Id
WHERE ve.Nombres = 'Jan'; 

SELECT * FROM Clientes
WHERE Id_Vendedores IN 
(SELECT Id FROM Vendedores WHERE Nombres = 'Jan' And Apellidos = 'Espinal');


INSERT INTO Clientes
VALUES(2,'Plaza Lama','Distrito Nacional',250000,GETDATE());
