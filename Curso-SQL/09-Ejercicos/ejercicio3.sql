/*Incrementar el precio de los coches en un 2%*/

SELECT * FROM Coches;

UPDATE Coches
SET Precio = (Precio + (Precio * 0.2))
WHERE Id != 1;

UPDATE Coches
SET Precio = 300000
WHERE ID = 5;

UPDATE Coches
SET Precio = 540000
WHERE ID = 6;

UPDATE Coches
SET Precio = 540000
WHERE ID = 7;