CREATE TABLE usuario(
	id serial NOT NULL,
	nombre varchar(255),
        apellido varchar(255),
        email varchar(255),
        usuario varchar(255),
        clave varchar(255),
   	PRIMARY KEY (id)
);


INSERT INTO usuario ( nombre,apellido,email,usuario,clave) VALUES
('Yander','Santana','ymsantan@espol.edu.ec','ymsantan','admin123');


INSERT INTO usuario ( nombre,apellido,email,usuario,clave) VALUES
('Karla','Pico','kpico@espol.edu.ec','kpico','admin567');

INSERT INTO usuario ( nombre,apellido,email,usuario,clave) VALUES
('Paul','Valle','jpvalle@espol.edu.ec','jpvalle','admin123');
