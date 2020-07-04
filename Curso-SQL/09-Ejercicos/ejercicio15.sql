/*
Mostrar los dos clientes con mayar numeros de pedidios y 
cada uno de ellos.
*/
USE Concesionario;
SELECT TOP 2 cl.Nombre,e.Id_Clientes,e.Cantidad,COUNT(e.Id) FROM Clientes cl
INNER JOIN Encargos e ON cl.Id = e.Id_Clientes
GROUP BY e.Cantidad,Cl.Nombre,e.Id_Clientes
ORDER BY e.Cantidad DESC;

SELECT * FROM Encargos