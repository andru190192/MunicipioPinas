-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2016 a las 00:20:02
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfotositios`
--

CREATE TABLE `tblfotositios` (
  `id` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `codigositio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblfotositios`
--

INSERT INTO `tblfotositios` (`id`, `imagen`, `titulo`, `subtitulo`, `descripcion`, `codigositio`) VALUES
(14, 'imagen1.jpg', 'Huaca con objetos arquelogicos ', 'Hallazgos de objetos arqueologicos ', 'Huacas encontradas en el sito El Brasil con varios objetos arqueologicos realizados en barro y con formas e muÃ±ecos, ceramicas  y tallados en piedra', 'br'),
(15, 'imagen2.jpg', 'MuÃ±eco encontrado mitologico', 'Objeto encontrado en el huacas del Sito Brasil', 'MuÃ±eco con forma de dinosaurio hecho a base de barro. ', 'br'),
(16, 'imagen3.jpg', 'camino Imperial', 'Antiguo Camino Imperial ', 'Sector arqueologico, en el cual se puede constatar la presencia de ceramica de culturas ancestrales y asi mismo un camino antiguo. ', 'br'),
(17, '20150118_124037.jpg', 'Antiguo ferrocarril de El Oro', 'Antigua estacion del ferrocarril de El Oro', 'Podemos ver la antigua estaciÃ³n de ferrocarril y el antiguo tren, actualmente en este lugar existe un museo donde se exponen las antigÃ¼edades del sistema fÃ©rreo de la provincia de El Oro  ', 'pd'),
(18, '20150118_130535.jpg', 'Replica del antiguo tren de la provincia de el Oro', 'Piedras la ultima estaciÃ³n ', 'Como se puede observar esta es parte del interior del museo de ', 'pd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmenusitios`
--

CREATE TABLE `tblmenusitios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `comollegar` varchar(1000) NOT NULL,
  `latitud` varchar(5000) NOT NULL,
  `longitud` varchar(5000) NOT NULL,
  `sitiocodigo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblmenusitios`
--

INSERT INTO `tblmenusitios` (`id`, `nombre`, `comollegar`, `latitud`, `longitud`, `sitiocodigo`) VALUES
(1, 'El Brazil', 'A 200 metros de la gasolinera  cuesta de oro', '-3.6802182355647517', '-79.68179600000000', 'br'),
(2, 'Piedras', 'A 200 metros de la gasolinera  cuesta de oro', '-3.6802182355647517', '-79.6817968919579', 'pd'),
(5, 'La Chuva', 'A 200 metros de la gasolinera  cuesta de oro', '-3.6802182355647517', '-79.6817968919579', 'lc'),
(9, 'San Jacinto', 'A 200 metros de la gasolinera  cuesta de oro', '-3.6802182355647517', '-79.6817968919579', 'sj'),
(10, 'Sambotambo', 'A 200 metros de la gasolinera  cuesta de oro', '-3.6802182355647517', '-79.6817968919579', 'sb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsitios`
--

CREATE TABLE `tblsitios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `codigositio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblsitios`
--

INSERT INTO `tblsitios` (`id`, `nombre`, `codigositio`) VALUES
(1, 'Jorge Jaen.jpeg', 'br'),
(3, 'flickr-02.jpg', 'br'),
(4, 'Jorge Jaen.jpg', 'lc'),
(5, '53c31997e8d77605ce2555d4ba673692.jpg', 'lc'),
(6, 'image1-small.jpg', 'pd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblslider`
--

CREATE TABLE `tblslider` (
  `idcontador` int(11) NOT NULL,
  `strimagengrande` varchar(100) NOT NULL,
  `strimagenpequena` varchar(100) NOT NULL,
  `strtitulo` varchar(200) NOT NULL,
  `strsubtitulo` varchar(200) NOT NULL,
  `strmenu` varchar(200) NOT NULL,
  `strlink` varchar(200) NOT NULL,
  `intorden` int(11) DEFAULT NULL,
  `intestado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblslider`
--

INSERT INTO `tblslider` (`idcontador`, `strimagengrande`, `strimagenpequena`, `strtitulo`, `strsubtitulo`, `strmenu`, `strlink`, `intorden`, `intestado`) VALUES
(24, 'La Bocana.jpg', '', 'La Bocana', 'Orificios en rocas del Rio La Bocana', '', '', 1, 1),
(25, 'Brasil.jpg', '', 'Brasil', 'Objeto ArqueolÃ³gico ', '', '', 2, 1),
(26, 'Piedras.jpg', '', 'Piedras', 'Antigua estaciÃ³n de tren en la junta parroquial Piedras', '', '', 3, 1),
(27, 'San Jacinto.jpg', '', 'San Jacinto', 'Petro Grabados realizados en roca', '', '', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

CREATE TABLE `tblusuario` (
  `idusuario` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `user_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`idusuario`, `username`, `password`, `user_estado`) VALUES
(1, 'jaenj', '1234', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblvideos`
--

CREATE TABLE `tblvideos` (
  `id` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `intestado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblvideos`
--

INSERT INTO `tblvideos` (`id`, `imagen`, `url`, `titulo`, `subtitulo`, `intestado`) VALUES
(2, 'Pinas desde el aire.jpg', 'https://www.youtube.com/watch?v=a1HAAPdNf0s', 'Pinas desde el Aire', 'Vista panoramica del canton Pinas', 1),
(14, 'PregonPinas.jpg', 'https://www.youtube.com/watch?v=03OtMllvrAg', 'Pregon de fiestas de Pinas', 'Asi se vive las fiestas en Pinas', 1),
(15, 'Pinas En general.jpg', 'https://www.youtube.com/watch?v=V6jZiGA4y8k', 'Arqueologia de Pinas en general', 'ArqueologÃ­a de Pinas por el director del museo Magner Turner', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblvideositios`
--

CREATE TABLE `tblvideositios` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `codigositio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblvideositios`
--

INSERT INTO `tblvideositios` (`id`, `url`, `titulo`, `subtitulo`, `descripcion`, `codigositio`) VALUES
(1, 'https://www.youtube.com/embed/05ulEZqHajY', 'El Brasil', 'Magner Turgen no habla sobre la arqueologia del Sitio El Brail', 'Este es un asentamiento arqueologico imprtante del canton PiÃ±as, que depende de la ruta que iba Marcebeli, balsas, estos caminos estaban conectados unos con otro. En este sitio tenemos una seria de Metates alguno tipos de cerÃ¡micas ,esta ceramica era realiada con gelespataides caolin ese tipo de arcillas. tambien en el Basil se ha encontrado patrimonio rupestre, tasines, batanes en las quebradas...', 'br'),
(11, 'https://www.youtube.com/embed/HDtZewseLzY', 'EL Arqueologo Magner Turner nos habla sobre Piedras ', 'Piedras la ultima estaciÃ³n ', 'Piedras hace muchÃ­simos aÃ±os tenia una fama nacional e internacional,pues por ahÃ­ accedÃ­a toda la maquinaria  minera para Portovelo, piedras tambiÃ©n fue conocido en ese entonces con el nombre de YUCAS', 'pd'),
(12, 'https://www.youtube.com/embed/ANUhrUrOIl4', 'prueba ', 'prueba con el ing', 'si hay como', 'pd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contra` char(32) NOT NULL,
  `cedula` int(10) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `contra`, `cedula`, `nombre`) VALUES
(5, 'andres', '', 0, 'ssasas'),
(6, 'juan', '7e5da5ece8edaa937e431c8600377c91', 1234, 'dfdfdfdf'),
(7, 'jaenj', '5520650c2928f06aae42be6354579ac0', 5523452, 'DSDSDSDSDS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblfotositios`
--
ALTER TABLE `tblfotositios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblmenusitios`
--
ALTER TABLE `tblmenusitios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblsitios`
--
ALTER TABLE `tblsitios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblslider`
--
ALTER TABLE `tblslider`
  ADD PRIMARY KEY (`idcontador`);

--
-- Indices de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `tblvideos`
--
ALTER TABLE `tblvideos`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tblvideositios`
--
ALTER TABLE `tblvideositios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `ixusuariosclave` (`contra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `tblfotositios`
--
ALTER TABLE `tblfotositios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `tblmenusitios`
--
ALTER TABLE `tblmenusitios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tblsitios`
--
ALTER TABLE `tblsitios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tblslider`
--
ALTER TABLE `tblslider`
  MODIFY `idcontador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tblvideos`
--
ALTER TABLE `tblvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tblvideositios`
--
ALTER TABLE `tblvideositios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
