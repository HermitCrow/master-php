# RENOMBRAR UNA TABLA sql#


EXEC SP_RENAME '[dbo].[usuarios]','usuarios_renom';

# RENOMBRAR UNA TABLA MySql#

ALTER TABLE usuario RENAME TO usuarios_renom

--   Modificar las Columnas de una tabla   --

# Modificar el nombre de las columnas con SQL#

EXEC SP_RENAME '[dbo].[usuarios].[apellido]','apellidos','COLUMN';

# Modificar el nombre de las columnas con MySql#

ALTER TABLE usuarios CHANGE apellido apellidos varchar(100) null;

# Modificar la extructura de contral de una columna SQL #

ALTER TABLE usuarios
ALTER COLUMN email VARCHAR(150) NULL;

# Modificar la extructura de contral de una columna MySql #

ALTER TABLE usuarios
MODIFY COLUMN email VARCHAR(150) NULL; 

#              -- ALTER TABLE ADD --   #

# Añadir una nueva columna  con SQL y MySql#

ALTER TABLE usuarios 
ADD website VARCHAR(100) NULL;

# Crear o agragar default SQL #

ALTER TABLE usuarios
ADD CONSTRAINT df_apellido
DEFAULT ('Soto') FOR apellidos;

# Crear o agragar default SQL #

ALTER TABLE usuarios
ADD CONSTRAINT uq_email 
UNIQUE(email);

#              -- ALTER TABLE DROP --   #

# Eliminar el elmento default SQL#

ALTER TABLE [dbo].[usuarios] DROP CONSTRAINT [apellido]

# Eliminar una Columna SQL#

ALTER TABLE [dbo].[usuarios] DROP COLUMN [website];

# Eliminar un elemento unico SQL#

ALTER TABLE [dbo].[usuarios] DROP CONSTRAINT [uq_email];