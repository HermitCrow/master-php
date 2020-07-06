/*
 26.Sacar vendedores que tienen jefe y sacar el nombre del jefe
*/

USE Concesionario;

SELECT CONCAT(v1.Nombres,' ',v1.Apellidos)  AS 'Vendedores',CONCAT(v2.Nombres,' ',v2.Apellidos)  AS 'Jefe'
FROM Vendedores v1
INNER JOIN Vendedores v2 ON v1.Jefe = v2.Id;

SELECT * FROM Vendedores;