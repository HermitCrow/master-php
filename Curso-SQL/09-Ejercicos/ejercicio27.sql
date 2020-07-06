/*
 27.Visualizar los nombres de los clientes y la cantidad de encargos relizados,
 incluyendos los que no hayan relizado encargos.
 */

USE Concesionario;

SELECT cl.Nombre,COUNT(en.Id) AS 'Pedidos Realizados'
FROM Clientes cl
LEFT JOIN Encargos en ON en.Id_Clientes = cl.Id
GROUP BY cl.Nombre;

SELECT * FROM Clientes;

/*
INSERT INTO Clientes
Values(6,'Repuesto m&D','Distrito Nacional',4000000,GETDATE());
*/