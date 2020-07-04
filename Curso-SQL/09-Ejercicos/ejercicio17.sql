/*
17. obtener un listado con los encargo relizados 
por el cliente Plaza Lama
*/
USE Concesionario;

SELECT en.Id as 'N° Encargo',en.Cantidad,cl.Nombre as 'Cliente',co.Marca,co.modelo,en.Fecha 
FROM Encargos en
INNER JOIN Clientes cl ON en.Id_Clientes = cl.Id
INNER JOIN Coches co ON en.Id_Coches = co.Id
WHERE Id_clientes IN 
(SELECT Id FROM Clientes WHERE Nombre = 'Pala Pizza');