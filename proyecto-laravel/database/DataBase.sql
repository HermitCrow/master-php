CREATE DATABASE IF NOT EXISTS master_laravel;
USE master_laravel;

CREATE TABLE IF NOT EXISTS users(
id              int(255) auto_increment not null,
role            varchar(20),
name            varchar(100),
surname        varchar(200),
nick            varchar(100),
email           varchar(255),
password        varchar(255),
image           varchar(255),
created_at      datetime,
updated_at      datetime,
remember_token  varchar(255),

CONSTRAINT PK_users PRIMARY KEY(id)  
)ENGINE= InnoDB;

INSERT INTO users VALUES(NULL,'user','Emmanuel ', 'Ulloa','HermitCrow',
'emmanululloa@gmail.com','Aa123456', NULL, CURTIME(), CURTIME(),NULL);

INSERT INTO users VALUES(NULL,'user','Nairoby', 'Soto','NabySoto',
'nabysoto@gmail.com','Aa123456', NULL, CURTIME(), CURTIME(),NULL);

CREATE TABLE IF NOT EXISTS images(
    id                   int(255) auto_increment not null, 
    user_id              int (255),
    image_path           varchar(255),
    description          text,
    created_at           datetime,
    updated_at           datetime,
    CONSTRAINT PK_images PRIMARY KEY(id),
    CONSTRAINT FK_images_users FOREIGN KEY(user_id)  REFERENCES users(id)
)ENGINE=InnoDB;

INSERT INTO images VALUES(NULL,1,'playa.jpg', 'Foto en la playa con los panas', CURTIME(), CURTIME());
INSERT INTO images VALUES(NULL,1,'rio.jpg', 'Foto en el rio con los familia', CURTIME(), CURTIME());
INSERT INTO images VALUES(NULL,2,'lago.jpg', 'El mejor tuor', CURTIME(), CURTIME());
INSERT INTO images VALUES(NULL,1,'lafamilia.jpg', 'El coro de grande', CURTIME(), CURTIME());
INSERT INTO images VALUES(NULL,2,'comida.jpg', 'una comidita modesta', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS comments(
    id               int(255) auto_increment not null,
    user_id          int(255),
    image_id         int(255),
    content          text,
    created_at       datetime,
    updated_at       datetime,
    CONSTRAINT PK_comments PRIMARY KEY(id),
    CONSTRAINT FK_comments_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT FK_comments_images FOREIGN KEY(image_id) REFERENCES images(id)
)ENGINE=InnoDB;

INSERT INTO comments VALUES(NULL,2,1, 'Hermoso lugar', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL,1,1, '!Verdad¡', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL,2,2, 'Cuando armas la otra vuelta', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL,1,2, 'Ni idea, cuando tenga dinero', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL,1,1, 'Donde queda es lugar', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL,2,1, 'Para el cibao', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL,2,3, 'Que Dios bendiga esa familia', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL,1,3, 'Gracias amen', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL,1,2, 'Dame la receta', CURTIME(), CURTIME());
INSERT INTO comments VALUES(NULL,2,2, 'Es un secreto', CURTIME(), CURTIME());

CREATE TABLE IF NOT EXISTS likes(
    id               int(255) auto_increment not null,
    user_id          int(255),
    image_id         int(255),
    created_at       datetime,
    updated_at       datetime,
    CONSTRAINT PK_likes PRIMARY KEY(id),
    CONSTRAINT FK_likes_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT FK_likes_images FOREIGN KEY(image_id) REFERENCES images(id)
)ENGINE=InnoDB;
            
INSERT INTO likes VALUES(NULL,1,2, CURTIME(), CURTIME());
INSERT INTO likes VALUES(NULL,2,2, CURTIME(), CURTIME());