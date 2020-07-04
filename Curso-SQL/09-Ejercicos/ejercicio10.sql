/*
10.Visualizar el apellidos de los vendedores su fecha y su numero de grupo
odenados por fecha decs, y limitar a los cuatro ultimos.
*/

SELECT TOP 4 Apellidos,Fecha_Alta,Id_Grupos From vendedores
ORDER BY Fecha_Alta Desc;