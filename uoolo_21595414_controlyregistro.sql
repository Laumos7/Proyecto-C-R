-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql313.byetcluster.com
-- Tiempo de generación: 24-05-2018 a las 09:37:33
-- Versión del servidor: 5.6.35-81.0
-- Versión de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `uoolo_21595414_controlyregistro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CARGO`
--

CREATE TABLE IF NOT EXISTS `CARGO` (
  `Id_cargo` int(1) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_cargo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `CARGO`
--

INSERT INTO `CARGO` (`Id_cargo`, `Descripcion`) VALUES
(1, 'Usuario'),
(2, 'Administrador'),
(3, 'Guarda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LOGIN`
--

CREATE TABLE IF NOT EXISTS `LOGIN` (
  `Id_documento` int(13) NOT NULL,
  `Usuario` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Correo` varchar(250) NOT NULL,
  `Cargo` int(3) NOT NULL,
  `Sede` int(1) NOT NULL,
  PRIMARY KEY (`Id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `LOGIN`
--

INSERT INTO `LOGIN` (`Id_documento`, `Usuario`, `Password`, `Correo`, `Cargo`, `Sede`) VALUES
(1010124343, 'Laura Daniela', '9cbf8a4dcb8e30682b927f352d6559a0', 'lmoscososanchez@misena.edu.co', 1, 1),
(1002674591, 'Erika Paola', '9b476ed9ae35b34d43890d662bd1924a', 'eplancheros@misena.edu.co', 1, 1),
(789987, 'Luis Miguel', '9cbf8a4dcb8e30682b927f352d6559a0', 'dafa2702@hotmail.com', 1, 1),
(1015476021, 'Melanie Patricia', 'a5cfec710d30ea6bd8d989c658779496', 'mpnieto12@misena.edu.co', 2, 1),
(1022429522, 'Diana Patricia', '3c7ad64442563fefd2e951394dfd91d1', 'dphernandez225@misena.edu.co', 3, 1),
(123123, 'lolacapito', '0985251f3d13076beec69aca778ea31f', 'lolacapito@gmail.com', 1, 1),
(111111111, 'angel rodriguez', '3c7ad64442563fefd2e951394dfd91d1', 'angel@gmail.com', 3, 1),
(222222222, 'angela', '8824f0685874b9d97768246e070fbb22', 'angela@gmail.com', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NOVEDAD`
--

CREATE TABLE IF NOT EXISTS `NOVEDAD` (
  `Id_novedad` int(3) NOT NULL AUTO_INCREMENT,
  `TipoDoc` int(3) NOT NULL,
  `Documento` int(10) NOT NULL,
  `Novedad` varchar(500) NOT NULL,
  `Fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_novedad`),
  KEY `TipoDoc` (`TipoDoc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `NOVEDAD`
--

INSERT INTO `NOVEDAD` (`Id_novedad`, `TipoDoc`, `Documento`, `Novedad`, `Fecha`) VALUES
(1, 2, 1010124343, 'Cambio de vehiculo', '2018-04-18 15:33:14'),
(4, 2, 1010124343, 'Rayo en la bicicleta', '2018-05-21 22:17:02'),
(5, 2, 1010124343, 'Hello', '2018-05-21 23:52:06'),
(6, 2, 1002674591, 'ksdksdjkdsjksdjsd', '2018-05-22 15:41:11'),
(7, 1, 123123, 'he cambiado de documento.', '2018-05-23 15:14:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recaudo`
--

CREATE TABLE IF NOT EXISTS `recaudo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `documento` int(12) NOT NULL,
  `sede` varchar(12) NOT NULL,
  `Apertura` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `saldoInicial` int(10) NOT NULL DEFAULT '2000',
  `saldoFinal` int(10) NOT NULL DEFAULT '2000',
  `cierre` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `recaudo`
--

INSERT INTO `recaudo` (`id`, `nombre`, `documento`, `sede`, `Apertura`, `saldoInicial`, `saldoFinal`, `cierre`) VALUES
(1, 'Laura', 1010124343, 'Restrepo', '2018-04-17 11:59:53', 2000, 12000, '2018-05-23 15:27:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE IF NOT EXISTS `recibo` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) CHARACTER SET latin1 NOT NULL,
  `documento` int(12) NOT NULL,
  `TipoVehiculo` varchar(20) CHARACTER SET latin1 NOT NULL,
  `sede` varchar(10) CHARACTER SET latin1 NOT NULL,
  `HoraIngreso` datetime NOT NULL,
  `HoraSalida` datetime NOT NULL,
  `Cancelado` varchar(5) CHARACTER SET latin1 NOT NULL DEFAULT 'No',
  `estado` varchar(15) CHARACTER SET latin1 NOT NULL DEFAULT 'Activo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `recibo`
--

INSERT INTO `recibo` (`id`, `nombre`, `documento`, `TipoVehiculo`, `sede`, `HoraIngreso`, `HoraSalida`, `Cancelado`, `estado`) VALUES
(1, 'Laura Daniela', 1010124343, 'Bicicleta', 'Colombia', '2018-05-02 07:12:35', '2018-05-02 07:12:40', 'Si', 'Inactivo'),
(2, 'Laura Daniela', 1010124343, 'Bicicleta', 'Restrepo', '2018-05-08 11:12:29', '2018-05-09 18:20:27', 'Si', 'Inactivo'),
(3, 'Erika Lancheros', 1002674591, 'Bicicleta', 'Colombia', '2018-05-09 07:58:31', '2018-05-15 10:46:31', 'Si', 'Inactivo'),
(4, 'Laura Daniela', 1010124343, 'Moto', 'Colombia', '2018-05-10 06:50:19', '2018-05-15 10:45:52', 'Si', 'Inactivo'),
(5, 'Erika Lancheros', 1002674591, 'Bicicleta', 'Colombia', '2018-05-11 06:43:12', '2018-05-15 10:46:31', 'Si', 'Inactivo'),
(6, 'Laura Daniela', 1010124343, 'Moto', 'Colombia', '2018-05-15 10:45:21', '2018-05-15 10:45:52', 'Si', 'Inactivo'),
(7, 'Laura Daniela', 1010124343, 'Moto', 'Colombia', '2018-05-15 10:45:35', '2018-05-15 10:45:52', 'Si', 'Inactivo'),
(8, 'Laura Daniela', 1010124343, 'Moto', 'Colombia', '2018-05-15 10:46:52', '2018-05-15 10:46:52', 'No', 'Activo'),
(9, 'Erika Lancheros', 1002674591, 'Bicicleta', 'Colombia', '2018-05-15 11:05:48', '2018-05-17 08:36:16', 'Si', 'Inactivo'),
(10, 'Erika Paola', 1002674591, '2', 'Colombia', '2018-05-17 08:36:02', '2018-05-17 08:36:16', 'Si', 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SEDE`
--

CREATE TABLE IF NOT EXISTS `SEDE` (
  `Id_sede` int(1) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_sede`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `SEDE`
--

INSERT INTO `SEDE` (`Id_sede`, `Descripcion`) VALUES
(1, 'Colombia'),
(2, 'Restrepo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodedocumento`
--

CREATE TABLE IF NOT EXISTS `tipodedocumento` (
  `codigo` int(1) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tipodedocumento`
--

INSERT INTO `tipodedocumento` (`codigo`, `Descripcion`) VALUES
(1, 'Cedula de Ciudadania'),
(2, 'Tarjeta de identidad'),
(3, 'Cedula de Extranjeria'),
(4, 'Pasaporte'),
(5, 'Documento Nacional de identificacion'),
(6, 'NIT'),
(7, 'NUIP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO`
--

CREATE TABLE IF NOT EXISTS `USUARIO` (
  `Id_usuario` int(13) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Genero` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idTipoDoc` int(1) NOT NULL,
  `Documento` int(12) NOT NULL,
  `Edad` varchar(12) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ciudad` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Direccion` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Telefono` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Estado` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'Activo',
  PRIMARY KEY (`Id_usuario`),
  KEY `idTipoDoc` (`idTipoDoc`),
  KEY `idciudad` (`Ciudad`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `USUARIO`
--

INSERT INTO `USUARIO` (`Id_usuario`, `Nombre`, `Apellido`, `Genero`, `idTipoDoc`, `Documento`, `Edad`, `Ciudad`, `Direccion`, `Telefono`, `Estado`) VALUES
(1, 'Laura Daniela', 'Moscoso Sanchez', 'Mujer', 2, 1010124343, '2001-02-27', 'Bogota', 'trav 68 c# 44-44 sur', '3144571984', 'Activo'),
(2, 'Erika Paola', 'Lancheros Murcia', 'Mujer', 2, 1002674591, '2000-09-16', 'Bogota', 'Calle 100', '3134513318', 'Activo'),
(3, 'lolacapito', 'marchar', 'Mujer', 1, 123123, '1995-07-03', 'Bogota', 'cll 57 sur cr 30', '321321132', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VEHICULO`
--

CREATE TABLE IF NOT EXISTS `VEHICULO` (
  `Id_vehiculo` int(3) NOT NULL AUTO_INCREMENT,
  `Vehiculo` int(1) NOT NULL,
  `Color` text NOT NULL,
  `Placa` varchar(6) NOT NULL,
  `Serie` varchar(10) NOT NULL,
  `Marca` text NOT NULL,
  `Propietario` int(12) NOT NULL,
  PRIMARY KEY (`Id_vehiculo`),
  KEY `propietario` (`Propietario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `VEHICULO`
--

INSERT INTO `VEHICULO` (`Id_vehiculo`, `Vehiculo`, `Color`, `Placa`, `Serie`, `Marca`, `Propietario`) VALUES
(1, 2, 'Negro', '123ABC', '01', 'bmw', 1010124343),
(2, 2, 'Blanco', '123456', '5465656565', 'sdsddssdsd', 1002674591),
(3, 2, 'Morado', 'rtl456', '123gtn', 'Trek', 123123);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
