CREATE TABLE usuario(
	id serial NOT NULL,
	nombre varchar(255),
        apellido varchar(255),
        contacto varchar(255),
        usuario varchar(255),
        clave varchar(255),
        sexo varchar(255),
   	PRIMARY KEY (id)
);


CREATE TABLE respuesta(
	id serial NOT NULL,
	idusuario integer,
	usuario varchar(255),
        rspPreferencia varchar(255),
        rspDesayunoSalado varchar(255),
        rspDesayunoDulce varchar(255),
        rspAlmuerzo varchar(255),
        rspCena varchar(255),
        rspComidaTipica varchar(255),
        rspCarnes varchar(255),
        rspPostres varchar(255),
        rspSaboresDulces varchar(255),
        rspBebida varchar(255),
        rspComidaExtranjera varchar(255),
   	PRIMARY KEY (id)
);

INSERT INTO usuario ( nombre,apellido,contacto,usuario,clave,sexo) VALUES
('Yander','Santana','ymsantan@espol.edu.ec','ymsantan','admin123','hombre');


INSERT INTO usuario ( nombre,apellido,contacto,usuario,clave,sexo) VALUES
('Paola','Ortiz','gpaort@espol.edu.ec','gpaort','admin567','mujer');

INSERT INTO usuario ( nombre,apellido,contacto,usuario,clave,sexo) VALUES
('Paul','Valle','jpvalle@espol.edu.ec','jpvalle','admin123','hombre');


INSERT INTO respuesta (idusuario,usuario,rspPreferencia,rspDesayunoSalado,rspDesayunoDulce,rspAlmuerzo,rspCena,rspComidaTipica,rspCarnes,rspPostres,rspSaboresDulces,rspBebida,rspComidaExtranjera) VALUES (4,'$usuario', '$rspPreferencia','$rspDesayunoSalado','$rspDesayunoDulce','$rspAlmuerzo','$rspCena','$rspComidaTipica','$rspCarnes','$rspPostres','$rspSaboresDulces','$rspBebida','$rspComidaExtranjera');


    