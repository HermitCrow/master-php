/*
 20.Seleccionar el grupo en el que trabaja el vendedor con mayor salerio y
 mostrar el nombre del grupo.
*/

USE Concesionario;

SELECT * FROM Grupos where Id in
    (SELECT Id_Grupos FROM Vendedores where Sueldo = (
        SELECT MAX(Sueldo) FROM Vendedores
    ));