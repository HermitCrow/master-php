/*
18. Listar los clientes que han comprado los veiculos honda Accord
*/
USE Concesionario;

Select * From Encargos

Select cl.Nombre AS 'Clientes', co.Marca,co.Modelo From Encargos en
INNER JOIN Coches co ON co.Id = en.Id_Coches
INNER JOIN Clientes cl ON cl.Id = en.Id_Clientes
WHERE CONCAT(co.Marca,' ',co.Modelo)= 'Honda Accord';