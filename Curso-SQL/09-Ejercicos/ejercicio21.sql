/*
 21.Obtener los nombres y ciudades del los clientes 
 con encargos mayor o igual a 3
*/
 
 USE Concesionario

SELECT Nombre,Ciudad From Clientes WHERE Id IN (
    SELECT Id_Clientes FROM Encargos WHERE Cantidad >= 3
);

SELECT Cantidad FROM Encargos