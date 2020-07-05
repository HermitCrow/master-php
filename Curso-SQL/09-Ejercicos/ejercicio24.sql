/*
 24.Listar los encargos con el nombre del coche, el nombre del cliente y
 el nombre del la ciudad del cliente pero unicamente cuando sean del Distrito Nacional. 
*/

USE Concesionario;

SELECT CONCAT(co.Marca,' ',co.Modelo) as 'Coches',cl.Nombre AS 'Nombre Clientes',cl.Ciudad
FROM Encargos en
INNER JOIN Coches co ON en.Id_Coches = co.Id
INNER JOIN Clientes cl ON en.Id_Clientes = cl.Id
WHERE cl.Ciudad = 'Distrito Nacional';

UPDATE Clientes
SET Ciudad = 'Distrito Nacional'
WHERE Id = 5;

SELECT Ciudad FROM Clientes