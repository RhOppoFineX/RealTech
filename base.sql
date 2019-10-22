CREATE DATABASE IF NOT EXISTS `RealTech` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `RealTech`;

CREATE TABLE `categorias` (
  `id_categoria` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre_categoria` varchar(50) UNIQUE COLLATE utf8_unicode_ci NOT NULL,
  `imagen_categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_categoria` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
);

CREATE TABLE `productos` (
  `id_producto` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre_producto` varchar(50) UNIQUE COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_producto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `precio_producto` decimal(5,2) NOT NULL DEFAULT '0.00',
  `imagen_producto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado_producto` tinyint(1) NOT NULL DEFAULT '1',
  `id_categoria` int(11) UNSIGNED NOT NULL,
  FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);

create table Tipo_usuario(
    Id_tipo_usuario Integer Unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Tipo_usuario varchar(20) UNIQUE NOT NULL,
    Estado TINYINT(1) NOT NULL DEFAULT 1         
);

CREATE TABLE garantia(
    id_garantia INTEGER Unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    meses VARCHAR(50) NOT NULL,
    estado VARCHAR(4) NOT NULL
);

Create Table usuarios(
    id_usuario Integer Unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombres_usuario varchar(40) NOT NULL,
    apellidos_usuario varchar(40) NOT NULL,
    correo_usuario varchar(50) UNIQUE NOT NULL,   
    alias_usuario VARCHAR(25) UNIQUE NOT NULL,
    clave_usuario VARCHAR(250) NOT NULL,
    Intentos TINYINT NOT NULL DEFAULT 0,
    Estado TINYINT(1) NOT NULL DEFAULT 1,
    Id_tipo_usuario Integer Unsigned NULL DEFAULT 1
);

create table Departamento(
    Id_departamento int unsigned UNIQUE primary key not null Auto_Increment,
    Nombre_departamento varchar(30) not null
);

create table Municipio(
    Id_municipio int unsigned primary key not null Auto_Increment,
    Nombre_municipio varchar(30) UNIQUE not null,
    Id_departamento int unsigned not null,
    foreign key (id_departamento) references Departamento(id_departamento)
);

CREATE TABLE clientes (
  id_cliente int UNSIGNED PRIMARY KEY NOT NULL Auto_Increment,
  Nombre_cliente varchar(50) NOT NULL,
  Apellido_cliente varchar(50) NOT NULL,
  Usuario_cliente varchar(20) NOT NULL,
  Correo_cliente varchar(100) NOT NULL,
  Clave_cliente varchar(100) NOT NULL,
  Token_cliente varchar(100) DEFAULT NULL
);


create table pedidos(
    id_pedido int unsigned primary key not null Auto_Increment,
    fecha_pedido datetime not null,
    id_cliente int unsigned not null,
    estado_pedido TINYINT(1) not null DEFAULT '1',
    foreign key (id_cliente) references clientes(id_cliente)    
);

create table detalle_pedido (
    id_detalle int unsigned primary key not null Auto_Increment,
    id_producto int unsigned not null,
    cantidad int not null,
    id_pedido int unsigned not null,
    foreign key (id_pedido) references pedidos(id_pedido),
    foreign key (id_producto) references productos(id_producto)    
);

CREATE TABLE pre_pedido(
   id_prepedido int(10) UNSIGNED PRIMARY KEY NOT NULL Auto_Increment,
   id_cliente int(10) UNSIGNED NOT NULL,
   id_producto int(10) UNSIGNED NOT NULL,
   cantidad int(10) NOT NULL,
   foreign key (id_producto) references productos(id_producto),
   foreign key (id_cliente) references clientes(id_cliente) 
   
);

INSERT INTO Tipo_usuario (Id_tipo_usuario, Tipo_usuario) VALUES (1, 'Admin'), (2,'Mercadeo');
INSERT INTO garantia (id_garantia, meses, estado) VALUES (1, '3 meses', 1);
INSERT INTO garantia (id_garantia, meses, estado) VALUES (2, '6 meses', 1);
INSERT INTO garantia (id_garantia, meses, estado) VALUES (3, '1 meses', 1);
