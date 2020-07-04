/*
4.Sacar todos los vendedores cuya fecha de alta es posterior a 23-08-2019.
*/
USE Concesionario;

SELECT * FROM Vendedores

SELECT * FROM Vendedores
WHERE Fecha_Alta >= '2019-08-23';

UPDATE Vendedores
SET Fecha_Alta = GETDATE()
WHERE Id = 8;