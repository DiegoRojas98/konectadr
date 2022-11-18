-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2022 a las 21:44:41
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP SCHEMA IF EXISTS konectadr;
CREATE SCHEMA konectadr;
USE konectadr;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `konectadr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `descripcion`) VALUES
(1, 'Tecnologia'),
(2, 'Hogar'),
(3, 'Oficina'),
(4, 'sada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(155) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `precio` bigint(20) NOT NULL,
  `peso` float NOT NULL,
  `categoria` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `estado` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha_creacion`, `estado`) VALUES
(1, 'Teclado', 'LG313908', 30000, 600, 1, 4, '2022-11-11', 1),
(2, 'Monito', 'SMG283819', 180000, 2700, 1, 3, '2022-11-11', 1),
(3, 'Nucleo', 'R5-5000x', 2000000, 50, 1, 2, '2022-11-11', 1),
(4, 'Tv', 'SMG87237T', 900000, 4600, 2, 4, '2022-11-11', 1),
(5, 'Modem', 'ET89366-09', 120000, 500, 2, 3, '2022-11-11', 1),
(6, 'Eq. Sonido', 'SN79353', 800000, 6000, 2, 4, '2022-11-11', 1),
(7, 'Silla', 'TKS100', 450000, 5500, 3, 4, '2022-11-11', 1),
(8, 'Escritorio', 'TKS200', 250000, 8700, 3, 3, '2022-11-11', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `producto_id`, `cantidad`) VALUES
(1, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
