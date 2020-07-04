/*
11. Visualizar todos los cargos y el numero vendedores que hay en cada cargo.
*/

USE Concesionario;
SELECT Cargo,Count(Id) AS 'Numero De Enpleados por cargo' From vendedores
Group BY Cargo ORDER BY Count(Id);