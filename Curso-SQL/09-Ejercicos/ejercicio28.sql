/*
 28.Mostrar todos los vendedores y el numero de clientes.
 Se deben mostrar tengan o no clientes 
*/

USE Concesionario;

SELECT CONCAT(ve.Nombres, ' ',ve.Apellidos) AS 'Vendedores',COUNT(cl.Id) AS 'Cantidad de Clientes'
FROM Vendedores ve
LEFT JOIN Clientes cl ON ve.Id = cl.Id_Vendedores
Group by CONCAT(ve.Nombres, ' ',ve.Apellidos);