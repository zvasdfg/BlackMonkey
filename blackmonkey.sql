-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2017 a las 05:22:14
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `blackmonkey`
--
CREATE DATABASE IF NOT EXISTS `blackmonkey` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blackmonkey`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cafe`
--

CREATE TABLE IF NOT EXISTS `cafe` (
  `IdCafe` int(3) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(20) NOT NULL,
  `Cantidad` int(3) NOT NULL,
  `Precio` float NOT NULL,
  PRIMARY KEY (`IdCafe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cafe`
--

INSERT INTO `cafe` (`IdCafe`, `Descripcion`, `Cantidad`, `Precio`) VALUES
(1, 'Moka', 100, 20),
(2, 'Vainilla', 100, 20),
(3, 'Canela', 100, 20),
(4, 'Clasico', 100, 20),
(5, 'Panna', 100, 20),
(6, 'Americano', 100, 20),
(7, 'Moka', 100, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idC` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  PRIMARY KEY (`idC`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idC`, `nombre`, `telefono`, `edad`) VALUES
(1, 'pprprp', 66666, 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `idE` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `puesto` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idE`, `nombre`, `telefono`, `puesto`) VALUES
(1, 'llll', 9856, 'kkk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Producto` varchar(20) DEFAULT NULL,
  `Precio` int(5) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`ID`, `Producto`, `Precio`) VALUES
(1, 'Capuccino', 30),
(2, 'Café', 20),
(3, 'Frapuccino', 30),
(4, 'Aguas', 15),
(5, 'Jugos', 15),
(6, 'Licuado', 15),
(7, 'Pan Frances', 20),
(8, 'Hotcakes y Waffles', 25),
(9, 'Cuernitos', 15),
(10, 'Sandwiches', 20),
(11, 'Croisant', 25),
(12, 'Bagette', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idP` int(3) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) DEFAULT NULL,
  `cantidad` int(3) DEFAULT NULL,
  `precio` float(7,2) DEFAULT NULL,
  `imagen` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idP`, `descripcion`, `cantidad`, `precio`, `imagen`) VALUES
(1, 'Cafe Negro', 2, 20.00, 'taza_de_cafe_solo-21'),
(2, 'Latte', 77, 52.00, '2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE IF NOT EXISTS `reservaciones` (
  `idR` int(3) NOT NULL AUTO_INCREMENT,
  `idC` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(10) NOT NULL,
  PRIMARY KEY (`idR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`idR`, `idC`, `fecha`, `hora`) VALUES
(1, 1, '0000-00-00', '13:20'),
(2, 1, '2017-06-21', '15:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(20) NOT NULL,
  `contra` varchar(30) NOT NULL,
  `nivel` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `contra`, `nivel`) VALUES
('Johan', '11300060', 2),
('Isaac', '11300054', 1),
('Pedro', '12345', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `idV` int(3) NOT NULL AUTO_INCREMENT,
  `idC` int(3) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` varchar(10) DEFAULT NULL,
  `total` float(7,2) DEFAULT NULL,
  PRIMARY KEY (`idV`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idV`, `idC`, `fecha`, `hora`, `total`) VALUES
(1, 1, '2017-07-12', '12:14', 200.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
