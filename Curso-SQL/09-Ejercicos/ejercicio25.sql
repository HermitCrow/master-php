/*
 25.Obtener una lista de los clientes con el impoter de sus
 encargos acumulado
*/

USE Concesionario;

SELECT cl.Nombre,SUM(co.Precio*en.Cantidad) AS 'Importe Acumulado'
FROM Clientes cl
INNER JOIN Encargos en ON cl.Id = en.Id_Clientes
INNER JOIN Coches co ON co.Id = en.Id_Coches
GROUP BY cl.Nombre
ORDER BY 2 ASC;

SELECT * FROM Encargos;
SELECT * FROM Clientes;
SELECT * FROM Coches;