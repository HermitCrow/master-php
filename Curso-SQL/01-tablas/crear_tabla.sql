/*
CREAR TABLAS

TIPOS DE DATOS

INT(N CIFRAS) ENTERO 
INTEGER(N CIFRAS) ENTERO (Maximo de 4294967295)

VARCHAR(CARACTERES) STRING/ALFANUMERICO (Maximo de 255)
CHAR (CARACTERES)   STRING/ALFANUMERICO (Maximo de 255)

FLOAT(CIFRAS,DECIMALES) DECIMAL/FLOTANTE
date, time, timestamp

//TEXTOS MAS GRANDES
TEXT (CARACTERES) (MAXIMO DE 65535)
MEDIUMTEXT (CARACTERES) (MAXIMO DE 16 MILLONES)  
LONGTEXT (CARACTERES ) (MAXIMO DE 4 BILLOBES)  

//ENTEROS MAS GRANDES
MEDIUMINT
BIGINT
*/
/*Crear una tabla en SQL*/
CREATE TABLE usuarios(
    id         int,   
    nombre     varchar(100), 
    apellido   varchar(255),
    email      varchar(255),
    pass       varchar(255)
);

/*Crear Tablas con Restricciones con SQL*/

CREATE TABLE usuarios(
    id         int IDENTITY(1,1) not null,   
    nombre     varchar(100) not null, 
    apellido   varchar(255) default 'Ulloa',
    email      varchar(255) not null,
    pass       varchar(255) not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);




/*Crear una tabla en MySql*/
CREATE TABLE usuarios(
    id         int(11),   
    nombre     varchar(100), 
    apellido   varchar(255),
    email      varchar(255),
    pass       varchar(255)
);

/*Crear Tablas con Restricciones con MySql*/

CREATE TABLE usuarios(
    id         int(11) auto_increment not null,   
    nombre     varchar(100) not null, 
    apellido   varchar(255) default 'Ulloa',
    email      varchar(255) not null,
    pass       varchar(255) not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);