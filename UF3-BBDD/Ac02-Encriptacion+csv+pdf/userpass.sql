-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2017 a las 14:55:12
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
-- Base de datos: `ac02`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userpass`
--

CREATE TABLE `userpass` (
  `usuario` varchar(10) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `userpass`
--

INSERT INTO `userpass` (`usuario`, `pass`, `tipo`) VALUES
('user1', '0c6c505080308e35ae0986731b15568a', ''),
('user2', 'dm95YXN1c3BlbmRlcg==', ''),
('exercici2', 'dm95YXN1c3BlbmRlcg==', 'administrador'),
('abdullah', 'awan', 'admin'),
('awan', 'awan', 'awan'),
('abdullah', 'awan', 'admin'),
('awan', 'awan', 'awan'),
('abdullah', 'awan', 'admin'),
('eugeni', 'bja', 'adminis'),
('abdullah', 'awan', 'admin'),
('nigga', 'bja', 'adminis'),
('abdullah', 'awan', 'admin'),
('yey', 'bja', 'adminis'),
('abdullah', 'awan', 'admin'),
('yey', 'bja', 'adminis');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
