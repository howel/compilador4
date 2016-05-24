-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2016 a las 02:36:00
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_inkafarma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcliente`
--

CREATE TABLE `tcliente` (
  `id_cliente` int(2) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `dni` char(8) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tcliente`
--

INSERT INTO `tcliente` (`id_cliente`, `nombre`, `apellidos`, `dni`, `direccion`, `telefono`, `fecha`) VALUES
(1, 'Jhowel', 'Altamirano Vega', '71072969', 'Jr. Miguel Grau Nro. 100', 969979954, '2016-05-07'),
(2, 'Samuel ', 'Bocanegra Cotrina', '71072856', 'Jr. Miguel Grau Nro. 200', 979987345, '2016-05-01'),
(3, 'Aby', 'Bocanegra Rojas', '71045967', 'Jr. Miguel Grau Nro. 300', 999979851, '2016-04-14'),
(4, 'Ciro', 'Alvan Mendoza', '56077853', 'Jr. Miguel Grau Nro. 400', 989987342, '2016-04-19'),
(5, 'Issac', 'Venture Bocanegra', '56082944', 'Jr. Miguel Grau Nro. 500', 997997786, '2016-03-20'),
(6, 'Jauri', 'Lisana Mendozas', '67072889', 'Jr. Miguel Grau Nro. 600', 979777333, '2016-03-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tcliente`
--
ALTER TABLE `tcliente`
  ADD UNIQUE KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tcliente`
--
ALTER TABLE `tcliente`
  MODIFY `id_cliente` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
