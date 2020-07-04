/*
6.Visualizar el nombre y apellido de los vendedores en una misma columna,
su fecha de registro y el dia de la semana en la que se registraron.
*/

SELECT * FROM vendedores

SELECT Concat(Nombres,' ',Apellidos) AS 'Nombres y Apellidos', Fecha_Alta,DATENAME(dw,Fecha_Alta) AS 'Dia de la Semana' FROM vendedores;