﻿CREATE TABLE USUARIO(
id_us INT PRIMARY KEY,
username VARCHAR(50),
nombre_us VARCHAR(50),
apellido_us VARCHAR(50),
contrasenia_us CHAR(8),
token VARCHAR(255),
admin_usuario BOOLEAN
);

SELECT * FROM USUARIO;

--ALTER TABLE USUARIO ADD CONSTRAINT constraint_name FOREIGN KEY (c1) REFERENCES parent_table (p1);

--CREATE TABLE PUBLICACION(
--id_pub INT PRIMARY KEY,
--titulo_pub VARCHAR(150),
--contenido_pub VARCHAR(1000),
--fecha_pub DATE,
--categoria_pub VARCHAR(7),
--autor_pub VARCHAR(50)
--);

--CREATE TABLE CATEGORIA(
--id_cat INT PRIMARY KEY,
--nombre_cat VARCHAR(7),
--descripcion_cat VARCHAR(150)
--);

--CREATE TABLE COMENTARIOS(
--id_com INT PRIMARY KEY,
--autor_com VARCHAR REFERENCES USUARIO(id_us),---no estoy seguro si hago la referencia a la tabal que es
--contenido_com VARCHAR(300),
--fecha_com DATE
--);

--CREATE TABLE IMAGENES_PUB(
--id_imagen_pub INT PRIMARY KEY,
--imagen_pub VARCHAR(1000),---hay que ver en que tipo se debe guardar la imagen
--id_pub INT REFERENCES PUBLICACION(id_pub)---Foranea
--);

--CREATE TABLE LINK_PUB(
--id_link_pub INT PRIMARY KEY,
--lnk_pub VARCHAR(150),
--id_pub INT REFERENCES PUBLICACION(id_pub)
--);

