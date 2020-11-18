-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2020 a las 05:24:26
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kawaiiposting`
--
CREATE DATABASE IF NOT EXISTS `kawaiiposting` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kawaiiposting`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `SP_LISTA_AGREGAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LISTA_AGREGAR` (IN `nombre` VARCHAR(100), IN `descripcion` VARCHAR(500), IN `estatus` BOOLEAN, IN `usuario` INT(11))  NO SQL
BEGIN
INSERT INTO lista( nombre, descripcion, estatus, id_usuario) 
VALUES (nombre, descripcion, estatus, usuario);
END$$

DROP PROCEDURE IF EXISTS `SP_LISTA_ELIMINAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LISTA_ELIMINAR` (IN `idLista` INT(11))  NO SQL
BEGIN
DELETE FROM lista
WHERE id_lista = idLista;
END$$

DROP PROCEDURE IF EXISTS `SP_LISTA_MODIFICAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LISTA_MODIFICAR` (IN `idLista` INT(11), IN `nombre` VARCHAR(100), IN `descripcion` VARCHAR(500), IN `estatus` BOOLEAN)  NO SQL
BEGIN
 UPDATE lista  
            SET    nombre = nombre,  
                   descripcion = descripcion, 
                   estatus = estatus
            WHERE  id_lista = idLista;   
END$$

DROP PROCEDURE IF EXISTS `SP_LISTA_SELECT`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LISTA_SELECT` (IN `idLista` INT(11))  NO SQL
BEGIN
select *
from lista
where id_lista = idLista;
END$$

DROP PROCEDURE IF EXISTS `SP_OBJETO_AGREGAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_OBJETO_AGREGAR` (IN `nombre` VARCHAR(100), IN `descripcion` VARCHAR(500), IN `imagen` BLOB, IN `estatus` BOOLEAN, IN `idLista` INT(11))  NO SQL
BEGIN
INSERT INTO objeto( Nombre, Descripcion,Estatus, imagen,  id_lista) 
VALUES (nombre, descripcion, estatus, imagen, idLista);
END$$

DROP PROCEDURE IF EXISTS `SP_OBJETO_ELIMINAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_OBJETO_ELIMINAR` (IN `idObjeto` INT(11))  NO SQL
BEGIN
DELETE FROM objeto
WHERE id_objeto = idObjeto;
END$$

DROP PROCEDURE IF EXISTS `SP_OBJETO_MODIFICAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_OBJETO_MODIFICAR` (IN `idObjeto` INT(11), IN `nombre` VARCHAR(100), IN `descripcion` VARCHAR(500), IN `estatus` BOOLEAN, IN `imagen` BLOB)  NO SQL
BEGIN
 UPDATE objeto  
            SET    Nombre = nombre,  
                   Descripcion = descripcion,  
                   Estatus = estatus,  
                   imagen = imagen
               
            WHERE  id_objeto = idObjeto;   
END$$

DROP PROCEDURE IF EXISTS `SP_OBJETO_SELECT`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_OBJETO_SELECT` (IN `idObjeto` INT(11))  NO SQL
BEGIN
select *
from objeto
where id_objeto = idObjeto;
END$$

DROP PROCEDURE IF EXISTS `SP_USUARIO_AGREGAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USUARIO_AGREGAR` (IN `usuario` VARCHAR(50), IN `contraseña` VARCHAR(50), IN `correo` VARCHAR(100), IN `imagen` BLOB, IN `estatus` BOOLEAN)  NO SQL
BEGIN
INSERT INTO usuario( usuario, contraseña, correo, imagen, estatus) VALUES (usuario, contraseña, correo, imagen, estatus);
END$$

DROP PROCEDURE IF EXISTS `SP_USUARIO_ELIMINAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USUARIO_ELIMINAR` (IN `idUsuario` VARCHAR(50))  NO SQL
BEGIN
DELETE FROM usuario
WHERE usuario = idUsuario;
END$$

DROP PROCEDURE IF EXISTS `SP_USUARIO_MODIFICAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USUARIO_MODIFICAR` (IN `usuario` VARCHAR(50), IN `contraseña` VARCHAR(50), IN `correo` VARCHAR(100), IN `imagen` BLOB, IN `estatus` BOOLEAN, IN `idUsuario` INT(11))  NO SQL
BEGIN
 UPDATE usuario  
            SET    usuario = usuario,  
                   contraseña = contraseña,  
                   correo = correo,  
                   imagen = imagen,
                   estatus = estatus
            WHERE  id_usuario = idUsuario;   
END$$

DROP PROCEDURE IF EXISTS `SP_USUARIO_SELECT`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USUARIO_SELECT` (IN `idUsuario` VARCHAR(50))  NO SQL
BEGIN
select *
from usuario
where usuario = idUsuario;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

DROP TABLE IF EXISTS `lista`;
CREATE TABLE `lista` (
  `id_lista` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Estatus` tinyint(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto`
--

DROP TABLE IF EXISTS `objeto`;
CREATE TABLE `objeto` (
  `id_objeto` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Estatus` tinyint(1) NOT NULL,
  `imagen` blob DEFAULT NULL,
  `id_lista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `imagen` blob DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id_lista`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD PRIMARY KEY (`id_objeto`),
  ADD KEY `id_lista` (`id_lista`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lista`
--
ALTER TABLE `lista`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `objeto`
--
ALTER TABLE `objeto`
  MODIFY `id_objeto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD CONSTRAINT `objeto_ibfk_1` FOREIGN KEY (`id_lista`) REFERENCES `lista` (`id_lista`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
