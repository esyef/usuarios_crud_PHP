CREATE DATABASE IF NOT EXISTS `usuarios_crud`;

CREATE TABLE `usuarios_crud`.`personas` 
( `id_persona` INT(11) NOT NULL AUTO_INCREMENT,
`cedula` INT(15) NOT NULL ,
`nombres` VARCHAR(50) NOT NULL ,
`apellidos` VARCHAR(50) NOT NULL ,
`email` VARCHAR(50) NOT NULL ,
`direccion` VARCHAR(50) NOT NULL ,
`telefono` VARCHAR(10) NOT NULL ,
`fecha_nacimiento` DATE NOT NULL ,
PRIMARY KEY (`id_persona`)) ENGINE = InnoDB;