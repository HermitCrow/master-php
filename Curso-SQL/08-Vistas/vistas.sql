CREATE VIEW VW_Autor_entradas AS
SELECT e.id AS 'Clave',e.Titulo,u.Nombre AS 'Autor',c.Nombre AS 'Categorias'
FROM Entradas e
INNER JOIN Usuarios u ON e.Id_Usuarios = u.Id
INNER JOIN Categorias c ON e.Id_Categorias = c.Id;

SELECT * FROM VW_Autor_entradas
WHERE Autor = 'Emmanuel';