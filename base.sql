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

Create Table usuarios(
    id_usuario Integer Unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombres_usuario varchar(40) NOT NULL,
    apellidos_usuario varchar(40) NOT NULL,
    correo_usuario varchar(50) UNIQUE NOT NULL,   
    alias_usuario VARCHAR(25) UNIQUE NOT NULL,
    clave_usuario VARCHAR(250) NOT NULL
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

create table Cliente (
    Id_cliente int unsigned primary key not null Auto_Increment,
    Nombres varchar(25) not null,
    Apellidos varchar(25) not null,    
    Correo varchar(50) not null,
    Genero varchar(15) not null,
    pass varchar(150) not null,
    Dui varchar(11) not null,
    Fecha_nacimiento date not null,
    Direcccion varchar(150) not null,
    Id_estado TINYINT(1) unsigned not null,
    Id_municipio int unsigned not null,
    foreign key (Id_municipio) references Municipio(Id_municipio)  
);

create table Pedido(
    Id_pedido int unsigned primary key not null Auto_Increment,
    Fecha date not null,
    Id_cliente int unsigned not null,
    Precio_total numeric(6,2) not null,
    foreign key (Id_cliente) references Cliente(Id_cliente)    
);

create table Detalle (
    Id_detalle int unsigned primary key not null Auto_Increment,
    Id_producto int unsigned not null,
    Cantidad_pedido int not null,
    Id_pedido int unsigned not null,
    foreign key (Id_pedido) references Pedido(Id_pedido),
    foreign key (Id_producto) references productos(Id_producto)    
);
