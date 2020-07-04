/*
7. MOstrar el nombre y el salario de los vendedores con cargo de venvedor.
*/
Select * From vendedores;

SELECT Nombres,Sueldo FROM vendedores
WHERE Cargo = 'Vendedor' Or Cargo = 'Vendedora';