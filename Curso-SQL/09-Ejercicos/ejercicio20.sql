USE Concesionario;

SELECT * FROM Clientes where Id in
    (SELECT vendedoresId FROM Clientes);