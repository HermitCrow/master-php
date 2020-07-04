/*
8.Visualizar todos los coches en cuya modelo exista la letra a y en la marca en piece con h.
*/
USE Concesionario;
Select * FROM Coches;

SELECT * FROM Coches
WHERE Modelo LIKE '%a%' AND Marca LIKE 'H%';