/*
5.Mostrar todos los vendedores con su nombre y su numero de dias en el 
Consesionario.
*/
USE Concesionario;
SELECT Nombres, DATEDIFF(DAY,Fecha_Alta,GETDATE()) AS 'Dias En el consesionario' FROM vendedores;
