/*
 23.Listar todos los encargos realizados con la marca de coche
 y el nombre del cliente.
*/
 
USE Concesionario

SELECT co.Marca as 'Marca Vehiculo',c.Nombre as 'Nombre Clientes',en.Cantidad,co.Precio 
FROM Encargos en
INNER JOIN Coches co ON en.Id_Coches = co.Id
INNER JOIN Clientes c ON en.Id_Clientes = c.Id;