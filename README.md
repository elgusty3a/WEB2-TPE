# <p align=center> WEB 2 - TPE Nº1
### INTEGRANTES:


| NOMBRE  | e-mail  | Github |
| :------------: |:---------------:| :-------------------: |
| Arias Gustavo      | ariasgustavo3a@gmail.com | https://github.com/elgusty3a |
| Gonzalez Tomás     | tomasgonzalez429030@gmail.com | https://github.com/tomasgonzalez24 |

#
# <p align=center> TRES-A Neumaticos
### Sitio web dedicado a la venta de neumaticos.
#### Objetivos:
  - Desarrollar un sitio web para la compra de nuestros productos.
  - Ofrecer una interfaz amigable.
  - Conectar con una base de datos para control de stock.

##
## <p align=center> GRÁFICO DE ENTIDAD-RELACIÓN
<p align=center>
<img src="WEB2-TPE-1raP/BDs/estructura BD.jpg" alt="logo-exactas">

- La tabla "usuarios" se utilizará a modo de LOGIN del administrador del sitio.
- En la tabla "clientes" se guardarán los datos de los mismos y se detallará el producto que deseé adquirir.
- El producto indicado en la tabla "clientes" se relacionará con la tabla "productos" mediante una clave foranea, de no tener existencia el producto en la tabla del mismo, el cliente no podrá efectuar el pedido.

#
# <p align=center>Código SQL que genera la base de datos (exportado desde phpMyAdmin)
```SQL 
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2023 a las 06:21:01
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
  `tipo` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `medidas` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

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
```

