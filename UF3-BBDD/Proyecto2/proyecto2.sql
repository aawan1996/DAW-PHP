-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2017 a las 14:58:33
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarticulos`
--

CREATE TABLE `tarticulos` (
  `CodArt` int(11) NOT NULL,
  `Stock` int(11) DEFAULT NULL,
  `PVP` float DEFAULT NULL,
  `CodFami` int(11) DEFAULT NULL,
  `Articulo` varchar(29) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarticulos`
--

INSERT INTO `tarticulos` (`CodArt`, `Stock`, `PVP`, `CodFami`, `Articulo`) VALUES
(2, 20, 5, 2, 'Perfumsmmme'),
(4, 10, 100000, 1, 'pepsi'),
(5, 30, 40, 2, 'zzz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tfamilias`
--

CREATE TABLE `tfamilias` (
  `CodFami` int(11) NOT NULL,
  `Familia` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tfamilias`
--

INSERT INTO `tfamilias` (`CodFami`, `Familia`) VALUES
(1, 'Familia simpsons'),
(2, 'Familia peter');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tarticulos`
--
ALTER TABLE `tarticulos`
  ADD PRIMARY KEY (`CodArt`),
  ADD KEY `CodFami` (`CodFami`);

--
-- Indices de la tabla `tfamilias`
--
ALTER TABLE `tfamilias`
  ADD PRIMARY KEY (`CodFami`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tarticulos`
--
ALTER TABLE `tarticulos`
  MODIFY `CodArt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tarticulos`
--
ALTER TABLE `tarticulos`
  ADD CONSTRAINT `tarticulos_ibfk_1` FOREIGN KEY (`CodFami`) REFERENCES `tfamilias` (`CodFami`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
