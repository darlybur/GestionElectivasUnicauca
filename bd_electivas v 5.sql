-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2019 a las 19:49:48
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_electivas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electiva`
--

CREATE TABLE `electiva` (
  `codigo` varchar(80) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `cupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `electiva`
--

INSERT INTO `electiva` (`codigo`, `nombre`, `cupo`) VALUES
('110', 'Video juegos', 14),
('122', 'Redes', 25),
('125', 'Bases de datos', 25),
('129', 'Seguridad informática', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frajadisponiblesalon`
--

CREATE TABLE `frajadisponiblesalon` (
  `IDFRANJA` int(11) NOT NULL,
  `NUMEROSALON` varchar(80) DEFAULT NULL,
  `NUMEROFRANJA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frajadisponiblesalon`
--

INSERT INTO `frajadisponiblesalon` (`IDFRANJA`, `NUMEROSALON`, `NUMEROFRANJA`) VALUES
(1, '332', 'L-7-9'),
(2, 'sala2', 'L-9-11'),
(3, 'sala1', 'L-7-9'),
(4, 'sala2', 'M-9-11'),
(5, 'sala2', 'J-4-6'),
(6, 'sala4', 'MI-2-4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `franjavotada`
--

CREATE TABLE `franjavotada` (
  `IDFRANJA` int(11) NOT NULL,
  `CODIGOELECTIVA` varchar(80) DEFAULT NULL,
  `CORREOUSUARIO` varchar(80) DEFAULT NULL,
  `NUMEROFRANJA` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `franjavotada`
--

INSERT INTO `franjavotada` (`IDFRANJA`, `CODIGOELECTIVA`, `CORREOUSUARIO`, `NUMEROFRANJA`) VALUES
(2, '125', 'juan@unicauca.edu.co', 'L-7-9'),
(3, '125', 'juan@unicauca.edu.co', 'L-9-11'),
(4, '125', 'juan@unicauca.edu.co', 'M-9-11'),
(5, '125', 'juan@unicauca.edu.co', 'MI-2-4'),
(6, '110', 'juan@unicauca.edu.co', 'M-9-11'),
(7, '110', 'juan@unicauca.edu.co', 'MI-2-4'),
(8, '110', 'juan@unicauca.edu.co', 'M-9-11'),
(9, '110', 'juan@unicauca.edu.co', 'J-4-6'),
(10, '110', 'catalina@unicauca.edu.co', 'MI-2-4'),
(11, '110', 'catalina@unicauca.edu.co', 'J-4-6'),
(12, '110', 'catalina@unicauca.edu.co', 'M-9-11'),
(13, '110', 'catalina@unicauca.edu.co', 'M-9-11'),
(14, '110', 'catalina@unicauca.edu.co', 'MI-2-4'),
(15, '110', 'catalina@unicauca.edu.co', 'J-4-6'),
(16, '129', 'juan@unicauca.edu.co', 'L-7-9'),
(17, '129', 'juan@unicauca.edu.co', 'MI-2-4'),
(18, '129', 'juan@unicauca.edu.co', 'J-4-6'),
(19, '129', 'catalina@unicauca.edu.co', 'L-7-9'),
(20, '129', 'catalina@unicauca.edu.co', 'MI-2-4'),
(21, '129', 'catalina@unicauca.edu.co', 'J-4-6'),
(22, '110', 'catalina@unicauca.edu.co', 'MI-2-4'),
(23, '110', 'catalina@unicauca.edu.co', 'J-4-6'),
(24, '110', 'juan@unicauca.edu.co', 'M-9-11'),
(25, '110', 'juan@unicauca.edu.co', 'MI-2-4'),
(26, '110', 'juan@unicauca.edu.co', 'MI-2-4'),
(27, '110', 'juan@unicauca.edu.co', 'J-4-6'),
(28, '110', 'juan@unicauca.edu.co', 'L-7-9'),
(29, '110', 'juan@unicauca.edu.co', 'M-9-11'),
(30, '110', 'juan@unicauca.edu.co', 'L-7-9'),
(31, '110', 'juan@unicauca.edu.co', 'M-9-11'),
(32, '110', 'juan@unicauca.edu.co', 'L-7-9'),
(33, '110', 'juan@unicauca.edu.co', 'M-9-11'),
(34, '122', 'juan@unicauca.edu.co', 'L-7-9'),
(35, '122', 'juan@unicauca.edu.co', 'MI-2-4'),
(36, '122', 'juan@unicauca.edu.co', 'L-7-9'),
(37, '122', 'juan@unicauca.edu.co', 'MI-2-4'),
(38, '110', 'juan@unicauca.edu.co', 'MI-2-4'),
(39, '110', 'juan@unicauca.edu.co', 'J-4-6'),
(40, '110', 'catalina@unicauca.edu.co', 'MI-2-4'),
(41, '110', 'catalina@unicauca.edu.co', 'J-4-6'),
(42, '110', 'catalina@unicauca.edu.co', 'MI-2-4'),
(43, '110', 'catalina@unicauca.edu.co', 'J-4-6'),
(44, '110', 'juan@unicauca.edu.co', 'MI-2-4'),
(45, '110', 'juan@unicauca.edu.co', 'J-4-6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `NUMEROSALON` varchar(80) NOT NULL,
  `DESCRIPCIONSALON` varchar(1200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`NUMEROSALON`, `DESCRIPCIONSALON`) VALUES
('332', 'sala de computo'),
('sala1', 'sala de computo'),
('sala2', 'sala de computo'),
('sala4', 'sala de computo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `CORREOUSUARIO` varchar(80) NOT NULL,
  `CONTRASENIA` varchar(80) DEFAULT NULL,
  `ROL` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`CORREOUSUARIO`, `CONTRASENIA`, `ROL`) VALUES
('catalina@unicauca.edu.co', '123', 'estudiante'),
('juan@unicauca.edu.co', '123', 'docente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `electiva`
--
ALTER TABLE `electiva`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `frajadisponiblesalon`
--
ALTER TABLE `frajadisponiblesalon`
  ADD PRIMARY KEY (`IDFRANJA`),
  ADD KEY `FK_FRAJADIS_REFERENCE_SALON` (`NUMEROSALON`);

--
-- Indices de la tabla `franjavotada`
--
ALTER TABLE `franjavotada`
  ADD PRIMARY KEY (`IDFRANJA`),
  ADD KEY `FK_FRANJAVO_REFERENCE_USUARIO` (`CORREOUSUARIO`),
  ADD KEY `FK_FRANJAVO_REFERENCE_ELECTIVA` (`CODIGOELECTIVA`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`NUMEROSALON`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CORREOUSUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `franjavotada`
--
ALTER TABLE `franjavotada`
  MODIFY `IDFRANJA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `frajadisponiblesalon`
--
ALTER TABLE `frajadisponiblesalon`
  ADD CONSTRAINT `FK_FRAJADIS_REFERENCE_SALON` FOREIGN KEY (`NUMEROSALON`) REFERENCES `salon` (`NUMEROSALON`);

--
-- Filtros para la tabla `franjavotada`
--
ALTER TABLE `franjavotada`
  ADD CONSTRAINT `FK_FRANJAVO_REFERENCE_ELECTIVA` FOREIGN KEY (`CODIGOELECTIVA`) REFERENCES `electiva` (`CODIGO`),
  ADD CONSTRAINT `FK_FRANJAVO_REFERENCE_USUARIO` FOREIGN KEY (`CORREOUSUARIO`) REFERENCES `usuario` (`CORREOUSUARIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
