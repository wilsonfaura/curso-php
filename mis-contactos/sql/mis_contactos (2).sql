-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 23:25:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mis_contactos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `email` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `pais` varchar(50) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`email`, `nombre`, `sexo`, `nacimiento`, `telefono`, `pais`, `imagen`) VALUES
('wilson&faura10@hotmail.com', 'Ernesto Faura', 'M', '1984-07-03', '3214937857', 'Colombia', 'wilsonfaura.png'),
('wilsonfaura10@hotmail.com', 'Ernesto Faura', 'M', '1984-07-03', '3214937857', 'Colombia', 'wilson.faura.png'),
('wilson_faura10@hotmail.com', 'Wilson Faura', 'M', '1984-07-03', '3214937857', 'Colombia', 'wilsonfaura.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `pais`) VALUES
(1, 'Mexico'),
(2, 'Colombia'),
(3, 'Guatemala'),
(4, 'España'),
(5, 'Brasil'),
(6, 'Uruguay'),
(7, 'Perú'),
(8, 'Argentina'),
(9, 'Chile'),
(10, 'Paraguay'),
(11, 'Honduras'),
(12, 'El Salvador'),
(13, 'Nicaragua'),
(14, 'Costa Rica'),
(15, 'Panama'),
(16, 'Venezuela'),
(17, 'Ecuador'),
(18, 'Bolivia'),
(19, 'Canada'),
(20, 'Estados Unidos'),
(21, 'Groenlandia'),
(22, 'Republica Dominicana'),
(23, 'Haití'),
(24, 'Cuba'),
(25, 'Belice'),
(26, 'Inglaterra'),
(27, 'francia'),
(28, 'Alemania'),
(29, 'Italia'),
(30, 'Japon'),
(31, 'China'),
(32, 'Egipto'),
(33, 'Sudafrica'),
(34, 'Australia'),
(35, 'Nueva Zelanda');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`email`);
ALTER TABLE `contactos` ADD FULLTEXT KEY `buscador` (`email`,`nombre`,`sexo`,`telefono`,`pais`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
