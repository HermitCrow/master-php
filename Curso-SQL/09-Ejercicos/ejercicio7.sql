/*
7. MOstrar el nombre y el salario de los vendedores con cargo de venvedor.
*/
USE Concesionario;
Select * From vendedores;

SELECT Nombres,Sueldo FROM vendedores
WHERE Cargo = 'Vendedor' Or Cargo = 'Vendedora';