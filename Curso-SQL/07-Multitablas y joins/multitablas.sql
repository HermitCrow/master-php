/* SON consultas que sirven para consulatar varias tablas*/

/*Mostrar las entradas con el nombre del autor y el nombre de la categoria*/


SELECT e.id,e.Titulo,u.Nombre AS 'Autor',c.Nombre AS 'Categorias' 
FROM Entradas e,Usuarios u,Categorias c 
WHERE e.Id_Usuarios = u.Id AND e.Id_Categorias = c.Id;

/* INNER Joins */

SELECT e.id AS 'Clave',e.Titulo,u.Nombre AS 'Autor',c.Nombre AS 'Categorias'
FROM Entradas e
INNER JOIN Usuarios u ON e.Id_Usuarios = u.Id
INNER JOIN Categorias c ON e.Id_Categorias = c.Id;
 
/*Mostrar el nombre de las categorias y al lado cuantas entradas tienen*/

SELECT  c.Nombre AS 'Categorias', COUNT(e.Id) AS 'Entradas'
FROM Categorias c,Entradas e
WHERE e.Id_Categorias = c.Id GROUP BY c.Nombre;

/* INNER Joins */

SELECT c.Nombre AS 'Categorias',COUNT(e.Id) AS 'Entradas'
FROM Categorias c
INNER JOIN Entradas e ON e.Id_Categorias = c.Id GROUP BY c.Nombre;

SELECT c.Nombre AS 'Categorias',COUNT(e.Id) AS 'Entradas'
FROM Categorias c
LEFT JOIN Entradas e ON e.Id_Categorias = c.Id GROUP BY c.Nombre;

SELECT c.Nombre AS 'Categorias',COUNT(e.Id) AS 'Entradas'
FROM Categorias c
RIGHT JOIN Entradas e ON e.Id_Categorias = c.Id GROUP BY c.Nombre;

/*Mostrar el email de los usuarios y cuantas entradas tienen*/

SELECT u.Email AS 'EMAIL', COUNT(e.Titulo) AS 'Entradas' 
FROM Usuarios u,Entradas e
WHERE e.Id_Usuarios = u.Id GROUP BY u.Email; 

/* INNER Joins */

SELECT u.Email AS 'EMAIL',COUNT(e.Titulo) AS 'Entradas'
FROM Usuarios u
INNER JOIN Entradas e ON e.Id_Usuarios = u.Id GROUP BY u.Email;

