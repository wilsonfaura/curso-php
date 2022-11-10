/*Comentario en sql
SQL Structure Query Language - Lenguaje Estructurado de Consulta

Base de Datos: Es una colección de datos que estan organizados.

que es un campo
que es un registro
que es una tabla
que es un tipo de datos y ejemplos

Gestores o manejadores de Bases de Datos: Son los programas que nos permiten administrar los datos.

Ejemplos de Gestores de Bases de Datos: microsoft Access, Microsoft SQL Server, ORACLE, Informix, DBASE, SQL Lite, PostgreSQL, MySql.

Una sentencia SQL es una instruccion o linea de codigo para trabajar con nuestra BD.

Existen dos tipos de sentencias SQL:
1) Sentencias estructurales: Son las que nos permitiran crear, modificar o eliminar objetos, usuarios y propiedades de nuestra BD.
2) sentencias de datos: Son las que nos permitiran insertar, eliminar, modificar y buscar información en nuestra BD.

En MySQL existen 2 tipos de engine para tablas:
1)MyISAM - Tablas planas, son como si fuera trabajar datos en excel
2)InnoDB - tablas relacionales, son como si fuera a trabajar datos en Access

Modelo entidad relacion de una BD
Normalización de una base de  datos
*/

/*DROP DATABASE IF EXISTS mis_contactos;*/

CREATE DATABASE IF NOT EXISTS mis_contactos;

USE mis_contactos;

CREATE TABLE contactos(
	email VARCHAR(50) NOT NULL,
	nombre VARCHAR(50) NOT NULL,
	sexo CHAR(1),
	nacimiento DATE,
	telefono VARCHAR(13),
	pais VARCHAR(50) NOT NULL,
	imagen VARCHAR(50),
	PRIMARY KEY(email),
	FULLTEXT KEY buscador(email, nombre, sexo, telefono, pais)
)DEFAULT CHARSET=latin1;

CREATE TABLE pais(
	id_pais INT NOT NULL AUTO_INCREMENT,
	pais VARCHAR(50) NOT NULL,
	PRIMARY KEY(id_pais)
)DEFAULT CHARSET=latin1;

INSERT INTO pais(id_pais, pais) VALUES 
	(1,"Mexico"),
	(2,"Colombia"),
	(3,"Guatemala"),
	(4,"España"),
	(5,"Brasil"),
	(6,"Uruguay"),
	(7,"Perú"),
	(8,"Argentina"),
	(9,"Chile"),
	(10,"Paraguay"),
	(11,"Honduras"),
	(12,"El Salvador"),
	(13,"Nicaragua"),
	(14,"Costa Rica"),
	(15,"Panama"),
	(16,"Venezuela"),
	(17,"Ecuador"),
	(18,"Bolivia"),
	(19,"Canada"),
	(20,"Estados Unidos"),
	(21,"Groenlandia"),
	(22,"Republica Dominicana"),
	(23,"Haití"),
	(24,"Cuba"),
	(25,"Belice"),
	(26,"Inglaterra"),
	(27,"francia"),
	(28,"Alemania"),
	(29,"Italia"),
	(30,"Japon"),
	(31,"China"),
	(32,"Egipto"),
	(33,"Sudafrica"),
	(34,"Australia"),
	(35,"Nueva Zelanda");
