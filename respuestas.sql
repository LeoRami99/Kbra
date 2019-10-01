-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2019 a las 01:20:44
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `respuesta1` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta2` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta3` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta4` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta5` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta6` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta7` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta8` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta9` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta10` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta11` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta12` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta13` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta14` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta15` varchar(255) COLLATE utf8_bin NOT NULL,
  `respuesta16` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
