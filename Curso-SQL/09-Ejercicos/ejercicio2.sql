/*Modificar la comicion de los vendedores  y ponerla al  2% cuando gana mas de 50000*/


Select Cargo,Sueldo,Comicion From vendedores;

UPDATE vendedores
SET Comicion = 2
WHERE Sueldo > 50000;