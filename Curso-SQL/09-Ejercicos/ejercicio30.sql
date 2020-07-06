/*
 30.Mostrar los datos del vendedorCon mas antiguedad en el concesionario. 
*/

USE Concesionario;

SELECT TOP 1 * FROM Vendedores ORDER BY Fecha_Alta ASC;

/*
 30 Plus. Obtener los coches con mas unidades vendidas.
*/

SELECT * FROM Coches
WHERE Id IN(
    SELECT TOP 3 Id_Coches FROM Encargos ORDER BY Cantidad DESC
);


SELECT * FROM Coches
WHERE Id IN(
    SELECT Id_Coches FROM Encargos WHERE Cantidad In (
        SELECT MAX(Cantidad) FROM Encargos
    )
);
SELECT * FROM Coches;