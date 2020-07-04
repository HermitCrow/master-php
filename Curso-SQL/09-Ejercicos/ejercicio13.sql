/*
13. Sacar la media de sueldos entre todo los vendedores por grupos.
*/
USE Concesionario;
Select g.Nombre AS 'Grupo', CEILING(AVG(v.Sueldo)) AS 'Media del Sueldo', g.Ciudad FROM vendedores v 
INNER JOIN Grupos g on v.Id_Grupos = g.id 
GROUP BY g.Nombre,g.Ciudad;

SELECT * FROM Grupos;