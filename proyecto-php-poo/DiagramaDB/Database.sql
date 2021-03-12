/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  emmanuel.ulloa
 * Created: 03-mar-2021
 */

CREATE DATABASE tienda_master;

USE tienda_master;

CREATE TABLE usuarios(
Id        int(255) auto_increment not null,
Nombre    varchar(100) not null,
Apellidos varchar(255),
Email     varchar(255) not null,
Password  varchar(255) not null,
Rol       varchar(20),
Image     varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(Id),
CONSTRAINT uq_email UNIQUE(Email)
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NUll,'Admin','Admin','admin@admin.com','Aa123456789','admin',NULL);

CREATE TABLE categorias(
Id        int(255) auto_increment not null,
Nombre    varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY(Id)
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(NUll,'Manga corta');
INSERT INTO categorias VALUES(NUll,'Tirantes');
INSERT INTO categorias VALUES(NUll,'Manga Larga');
INSERT INTO categorias VALUES(NUll,'Sudaderas');

CREATE TABLE productos(
Id           int(255) auto_increment not null,
categoria_id int(255) not null,
Nombre       varchar(100) not null,
Descripcion  text,
Precio       float(100,2) not null,
Stock        int(255) not null,
Oferta       varchar(2),
Fecha        date not null,
Imagen       varchar(255),  
CONSTRAINT pk_productos PRIMARY KEY(Id),
CONSTRAINT fk_producto_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(Id)
)ENGINE=InnoDb;

CREATE TABLE pedidos(
Id           int(255) auto_increment not null,
usuario_id   int(255) not null,
Provincia    varchar(100) not null,
Localidad    varchar(100) not null,
Direccion    varchar(255)not null,
Coste        float(200,2) not null,
Estado       varchar(20) not null,
Fecha        date,
Hora         time,  
CONSTRAINT pk_pedidos PRIMARY KEY(Id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(Id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
Id           int(255) auto_increment not null,
pedido_id   int(255) not null,
Producto_id int(255) not null,
Unidades     varchar(100) not null,  
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(Id),
CONSTRAINT fk_lineas_pedido_pedidos FOREIGN KEY(pedido_id) REFERENCES pedidos(Id),
CONSTRAINT fk_lineas_pedido_productos FOREIGN KEY(producto_id) REFERENCES productos(Id)
)ENGINE=InnoDb;