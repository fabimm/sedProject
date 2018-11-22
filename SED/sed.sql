CREATE TABLE USUARIO(
id_us SERIAL PRIMARY KEY ,
username VARCHAR(50) UNIQUE,
nombre_us VARCHAR(50),
apellido_us VARCHAR(50),
contrasenia_us CHAR(255),
token VARCHAR(255) UNIQUE,
admin_usuario BOOLEAN
);

SELECT * FROM USUARIO;

--ALTER TABLE USUARIO ADD CONSTRAINT constraint_name FOREIGN KEY (c1) REFERENCES parent_table (p1);

CREATE TABLE PUBLICACION(
id_pub SERIAL PRIMARY KEY,
titulo_pub VARCHAR(150),
contenido_pub TEXT,
photo_pub TEXT,
fecha_pub DATE,
categoria_pub int,
autor_pub VARCHAR(50),
autor_photo TEXT
);

INSERT INTO PUBLICACION(titulo_pub ,contenido_pub ,photo_pub ,fecha_pub ,categoria_pub ,autor_pub,autor_photo ) 
VALUES('Trucos sencillos para eliminar las ojeras','<p class="first-letter">Usa protección solar, porque aparte de fumar, la sobreexposición al sol es la causa principal de las arrugas, así que asegúrate de usar diariamente un protector solar para que tu piel se siga viendo muy bien, o por lo menos, sigue estos consejos:<br>
                <div>
                <lu>
                  <li>Protege tu cara de los rayos del sol usando un sombrero y/o gafas de sol.</li>
                  <li>Usa un hidratante nocturno y un hidratante diurno que incluya protección solar.</li>
                  <li>Asegúrate de mantener tu cabello fuera de tu cara debido a que la grasa de tu cabello puede causar acné.</li>
                  <li>Limpia tu cara después de que hacer ejercicio o haber hecho deporte.</li>
                  <li>Si usas maquillaje, lava tu cara antes de hacer ejercicio o de hacer deporte.</li>
                  <li>Debido a que tu piel se seca más durante el invierno… Usa tu hidratante más a menudo.</li>
                  <li>Bebe más agua de tal forma que tu piel produzca menos grasa para prevenir erupciones.</li>
                  <li>Bebe más agua para que también te ayude a hidratar tu piel para que se vea más radiante.</li><br>
                </lu>
                Abre tus poros con agua tibia para que limpies realmente tus poros mientras te duchas, y luego
                cierra tus poros con agua más fría para evitar que la grasa vuelva a entrar en tu piel.</p>','foto1.jpg',NOW(),1,'Fabi Mayen','photos/fabi.jpg');



CREATE TABLE CATEGORIA(
id_cat SERIAL PRIMARY KEY,
nombre_cat VARCHAR(7),
descripcion_cat VARCHAR(150)
);


INSERT INTO CATEGORIA(nombre_cat,descripcion_cat) VALUES('Belleza','Algo');
INSERT INTO CATEGORIA(nombre_cat,descripcion_cat) VALUES('Moda','Algo');
INSERT INTO CATEGORIA(nombre_cat,descripcion_cat) VALUES('Lenceria','Algo');
INSERT INTO CATEGORIA(nombre_cat,descripcion_cat) VALUES('Cat5','Algo');

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

