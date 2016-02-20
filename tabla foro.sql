-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2016 a las 15:59:41
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arqueologiabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `ID` int(7) UNSIGNED NOT NULL,
  `autor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `respuestas` int(11) NOT NULL DEFAULT '0',
  `identificador` int(7) NOT NULL DEFAULT '0',
  `ult_respuesta` date DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`ID`, `autor`, `titulo`, `mensaje`, `fecha`, `respuestas`, `identificador`, `ult_respuesta`, `imagen`) VALUES
(1, 'Jorge', 'Salan', 'Este es mi alias', '2001-06-15', 2, 0, '2001-06-15', 'Brasil.jpg'),
(2, 'Alexi', 'Lahio', 'Bodom Beach Terror', '2001-06-15', 0, 0, '2001-06-15', 'Brasil.jpg'),
(4, 'Alberto', 'Vivaldi', 'Solo de violines', '2001-06-15', 0, 1, '2001-06-15', 'Brasil.jpg'),
(5, 'Julius', 'Gibert', 'Bart esta bien', '2001-06-15', 1, 1, '2001-06-15', 'Brasil.jpg'),
(6, 'dr nick', 'bart', 'bart esta bien pero arrastra multiples rallauras y sintomas de estrepitosas craneales, por dios esa mujer se ha tragado un bebe', '2001-06-15', 0, 5, '2001-06-15', 'Brasil.jpg'),
(7, 'jorge', 'carros', 'rojos', '2013-02-16', 1, 0, '2013-02-16', 'Brasil.jpg'),
(8, 'fernando', 'moto', 'azul', '2013-02-16', 0, 7, '2013-02-16', 'Brasil.jpg'),
(9, 'Marlen', 'Casas', 'Me gustan con piscina', '2013-02-16', 3, 0, '2013-02-16', 'Brasil.jpg'),
(10, 'Dereck', 'Casas', 'A mi tambien me gustan con piscina y patio', '2013-02-16', 1, 9, '2013-02-16', 'Brasil.jpg'),
(11, 'Dayra', 'Casas', 'A mi me gustan con juegos y patio grande', '2013-02-16', 0, 10, '2013-02-16', 'Brasil.jpg'),
(12, 'Junior', 'Casas', 'No me gustan', '2013-02-16', 0, 9, '2013-02-16', 'Brasil.jpg'),
(13, 'Lenin', 'Casas', 'A mi si me gustan', '2013-02-16', 0, 9, '2013-02-16', 'Brasil.jpg'),
(14, 'andres1', 'andres2', 'andres3', '2013-02-16', 1, 0, '2013-02-16', 'Brasil.jpg'),
(15, 'gfds', 'sdsd', 'sdsdsdsdsdsdsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2013-02-16', 0, 0, '2013-02-16', 'Brasil.jpg'),
(16, 'efsdf', 'hgjgjhgh', 'hjghjghjgj', '2013-02-16', 2, 14, '2013-02-16', 'Brasil.jpg'),
(17, '3', '3', '3', '2013-02-16', 3, 16, '2013-02-16', 'Brasil.jpg'),
(18, '4', '4', '4', '2013-02-16', 1, 17, '2013-02-16', 'Brasil.jpg'),
(19, '5', '5', '5', '2013-02-16', 0, 17, '2013-02-16', 'Brasil.jpg'),
(20, '3', '3', '3', '2013-02-16', 0, 16, '2013-02-16', 'Brasil.jpg'),
(21, '4', '4', '4', '2013-02-16', 0, 17, '2013-02-16', 'Brasil.jpg'),
(22, '2', '2', '2\r\n', '2013-02-16', 0, 18, '2013-02-16', 'Brasil.jpg'),
(23, '2323', '23233', '232323232323232323', '2014-02-16', 0, 0, '2014-02-16', 'Brasil.jpg'),
(24, 'maykel', 'maykel', 'mayjkel', '2015-02-16', 1, 0, '2015-02-16', 'Brasil.jpg'),
(27, '1', '1', '1', '2015-02-16', 0, 24, '2015-02-16', 'Brasil.jpg'),
(33, 'imagen', 'imagen', 'imagen', '2020-02-16', 0, 0, '2020-02-16', 'Brasil.jpg'),
(34, 'wuaka', 'wuKA', 'wuaka', '2020-02-16', 0, 0, '2020-02-16', 'Brasil.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
