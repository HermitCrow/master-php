/*Vendedores con 2 o mas clientes*/

USE Concesionario;

SELECT * FROM Vendedores where Id in
    (SELECT Id_vendedores FROM Clientes Group by Id_vendedores HAVING COUNT(Id)>=2);

INSERT INTO Clientes
VALUES(2,'Supermercado Bravo','Distrito Nacional',234567854,GETDATE());
