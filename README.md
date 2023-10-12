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
-- Tiempo de generación: 12-10-2023 a las 05:23:35
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
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'cubierta'),
(2, 'camara'),
(3, 'llanta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `medidas` varchar(50) NOT NULL,
  `indice_carga` int(11) NOT NULL,
  `indice_velocidad` char(10) NOT NULL,
  `precio` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `marca`, `medidas`, `indice_carga`, `indice_velocidad`, `precio`, `id_categoria`) VALUES
(1, 'Michelin', '165/70 R13', 79, 'T', 115000, 1),
(2, 'Michelin', '185/60 R14', 82, 'H', 117000, 1),
(3, 'Firestone', '165/70 R13', 79, 'T', 112000, 1),
(4, 'Firestone', '185/60 R14', 82, 'H', 114500, 1),
(5, 'Pirelli', '165/70 R13', 79, 'T', 113500, 1),
(6, 'Pirelli', '185/60 R14', 82, 'H', 114300, 1),
(7, 'Bridgestone', '165/70 R13', 79, 'T', 113200, 1),
(8, 'Bridgestone', '185/60 R14', 82, 'H', 111300, 1),
(9, 'Pirelli', '195/60 R15', 88, 'V', 98400, 1),
(10, 'Pirelli', '215/55 R16', 93, 'W', 106150, 1),
(11, 'Firestone', '195/60 R15', 88, 'V', 99420, 1),
(12, 'Bridgestone', '215/55 R16', 93, 'W', 102000, 1),
(13, 'Michelin', '205/55 R16', 91, 'V', 155000, 1),
(14, 'Bridgestone', '205/55 R16', 91, 'V', 124000, 1),
(15, 'Firestone', '205/55 R16', 91, 'V', 113050, 1),
(16, 'HORNG FORTUNE', 'E – 10 TR 87', 0, '', 5000, 2),
(17, 'ZAR', 'F – 13 TR 13', 0, '', 5500, 2),
(18, 'HORNG FORTUNE', 'G – 13 TR 13', 0, '', 5650, 2),
(19, 'MERC IMPERIAL', 'K – 16 TR 15', 0, '', 7580, 2),
(20, 'HORNG FORTUNE', 'K – 16 TR 15', 0, '', 7400, 2),
(21, 'MOTOR SPORT', '16X7 5-108', 0, '', 45000, 3),
(22, 'MSA WHEELS', '16X7 4-137', 0, '', 54000, 3),
(23, 'PRW', '16X7.5 5-100', 0, '', 32055, 3),
(24, 'MSA WHEELS', '16X7 4-137', 0, '', 41000, 3),
(25, 'R1 SPORT', '15X8 6-114.3', 0, '', 28800, 3),
(26, 'MSA WHEELS ', '14X7 4-110', 0, '', 32450, 3),
(27, 'BLANK- CLASIC', '15X7', 0, '', 36650, 3),
(28, 'PRW', '13X5 4-100', 0, '', 25800, 3);

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
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```

