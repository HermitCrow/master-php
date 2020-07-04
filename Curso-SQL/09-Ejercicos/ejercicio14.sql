/*
14. Visualizar las unidades totales vendidas de cada coche a cada cliente
Mostrando el nombre del producto, numero de cliente y la suma de unidades
*/
USE Concesionario;
Select * From Coches

Select c.Nombre,CONCAT(o.Marca, ' ',o.Modelo) as 'Vehiculo',Sum(e.Cantidad) as 'Cantidad'
From Encargos e
INNER JOIN Clientes c ON c.Id = e.Id_Clientes
INNER JOIN Coches o ON o.id = e.Id_Coches
GROUP BY c.Nombre,o.Marca,o.Modelo;
