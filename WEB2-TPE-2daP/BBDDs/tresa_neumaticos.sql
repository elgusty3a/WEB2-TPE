-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2023 a las 21:41:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tresa_neumaticos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `medidas` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `tipo`, `marca`, `medidas`, `precio`) VALUES
(1, 'Cubierta', 'Michelin', '165/70 R13', 115000),
(2, 'Cubierta', 'Michelin', '185/60 R14', 117000),
(3, 'Cubierta', 'Firestone', '165/70 R13', 112000),
(4, 'Cubierta', 'Firestone', '185/60 R14', 114500),
(5, 'Cubierta', 'Pirelli', '165/70 R13', 113500),
(6, 'Cubierta', 'Pirelli', '185/60 R14', 114300),
(7, 'Cubierta', 'Bridgestone', '165/70 R13', 113200),
(8, 'Cubierta', 'Bridgestone', '185/60 R14', 111300),
(9, 'Cubierta', 'Pirelli', '175/70 R15', 98400),
(10, 'Cubierta', 'Pirelli', '195/60 R15', 106150),
(11, 'Cubierta', 'Firestone', '175/70 R15', 99420),
(12, 'Cubierta', 'Bridgestone', '195/60 R15', 102000),
(13, 'Cubierta', 'Michelin', '205/55 R16', 155000),
(14, 'Cubierta', 'Bridgestone', '205/55 R16', 124000),
(15, 'Cubierta', 'Firestone', '205/55 R16', 113050);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_ventas`
--

CREATE TABLE `reg_ventas` (
  `id_venta` int(11) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `CUIT` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `reg_ventas`
--
ALTER TABLE `reg_ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `reg_ventas`
--
ALTER TABLE `reg_ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reg_ventas`
--
ALTER TABLE `reg_ventas`
  ADD CONSTRAINT `reg_ventas_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
