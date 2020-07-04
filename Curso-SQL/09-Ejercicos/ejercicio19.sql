/*Vendedores con 2 o mas clientes*/

USE Concesionario;

SELECT * FROM Vendedores where Id in
    (SELECT vendedoresId FROM Clientes);
