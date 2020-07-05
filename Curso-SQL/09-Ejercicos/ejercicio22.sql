/*
  22.Mostrar listado de clientes (numero de cliente y el nombre)
  mostrar el numero de vendedor 
*/

USE Concesionario

SELECT c.Id as 'Numero Cliente',c.Nombre as 'Nombre Clientes',v.Id as 'Numero Vendedores',CONCAT(v.Nombres,' ',v.Apellidos)as 'Nombre Vendedores',v.Cargo
FROM Clientes c 
INNER JOIN Vendedores v ON c.Id_Vendedores = v.Id;