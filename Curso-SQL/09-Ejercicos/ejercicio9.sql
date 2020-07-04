/*
9.Mostrar todos los vendedores del grupo numero 2, ordenados por salario de mayor a menor.
*/

SELECT * FROM vendedores
WHERE Id_Grupos = 2 ORDER BY Sueldo DESC;