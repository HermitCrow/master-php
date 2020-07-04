# Mostrar datos espesificos#
SELECT Email,Pass,Fecha_Registro FROM Usuarios;

# Mostrar todos los datos#
SELECT * FROM Usuarios;

# Operadores Aritmeticos #
SELECT Email,(4+7) AS 'Operacion' FROM Usuarios
SELECT Id,Email,(Id+7) AS 'Operacion' FROM Usuarios ORDER BY Id ASC;

# Funciones Matematicas #

SELECT ABS(7) AS 'Funcion' FROM Usuarios; --Valor ADSOLUTO --
SELECT CEILING(7.43) AS 'Funcion' FROM Usuarios; --Redondeo a mayor--
SELECT FLOOR(7.43) AS 'Funcion' FROM Usuarios; --Redondeo a menor--

# Mostrar solo los datos solicitados #
SELECT Email,Pass,Fecha_Registro FROM Usuarios
WHERE Nombre = 'Carlos';
