/*
 29.Crear una vista vendedoresA que incluira todo los vendedores
 del grupo que se llame vendedores A.
*/

USE Concesionario;

CREATE VIEW VendedoresGA AS
SELECT * FROM Vendedores
WHERE Id_Grupos IN 
    (SELECT Id FROM Grupos  WHERE Nombre = 'Vendedores A'); 

SELECT * FROM Grupos;
SELECT * FROM VendedoresGA;



