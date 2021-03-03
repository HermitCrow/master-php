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
