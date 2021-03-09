-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2021 a las 00:20:01
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Detalle producto` ()  SELECT * FROM producto, categoria WHERE producto.id_Producto = 8 and producto.idCategoria = categoria.idCategoria$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Listar productos` ()  SELECT * FROM producto WHERE cantProd > stockMin$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Listar productos 2` ()  SELECT * FROM producto, categoria WHERE cantProd > stockMin AND categoria.idCategoria = producto.idCategoria$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Listar Productos Agotados en el inicio` ()  SELECT * FROM producto WHERE cantProd <= stockMin LIMIT 3$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `prueba` ()  SELECT * FROM producto WHERE cantProd < 40$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Prueba 2` ()  SELECT idCategoria, nombreProd FROM categoria ORDER BY nombreProd ASC$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(6) NOT NULL,
  `nombreProd` varchar(50) NOT NULL,
  `año` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreProd`, `año`) VALUES
(337, 'Frenos delanteros profesionales Type II', 2018),
(338, 'Frenos', 2019),
(339, 'Cauchos 20 pulgadas ', 2021),
(340, 'Retrovisores', 2015),
(343, 'Rines Delanteros', 2020),
(344, 'Cauchos 20 pulgadas ', 2021),
(345, 'Retrovisores', 2015),
(346, 'Aceite N12', 2019),
(348, 'Rines Delanteros', 2020),
(720, 'Parabrisa Profesional Type IV', 2021);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_Cliente` int(8) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_Cliente`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(1, 'Wilmer', 'Ramirez ', 'Las Acacias', '04244675689'),
(2, 'Cora', 'Berro', 'Alayon', '04124565768'),
(3, 'Dovany', 'Liscano', 'Barrio el Carmen', '04124173202'),
(4, 'Leonardo', 'Bolivar', 'Santa Rita', '04121753010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolución`
--

CREATE TABLE `devolución` (
  `cod_detallefactura` int(6) NOT NULL,
  `motivo` varchar(50) NOT NULL,
  `fecha_devol` date NOT NULL,
  `cantidad_devol` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma de pago`
--

CREATE TABLE `forma de pago` (
  `id_Pago` int(3) NOT NULL,
  `tipo_de_pago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `forma de pago`
--

INSERT INTO `forma de pago` (`id_Pago`, `tipo_de_pago`) VALUES
(1, 'Efectivo'),
(2, 'Transferencia'),
(3, 'Punto de Venta'),
(4, 'Pago Móvil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_Producto` int(8) NOT NULL,
  `idCategoria` int(6) NOT NULL,
  `precioProd` float NOT NULL,
  `iva` int(2) NOT NULL,
  `stockMax` int(20) NOT NULL,
  `stockMin` int(20) NOT NULL,
  `cantProd` int(4) NOT NULL,
  `marca` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_Producto`, `idCategoria`, `precioProd`, `iva`, `stockMax`, `stockMin`, `cantProd`, `marca`) VALUES
(1, 337, 2700, 12, 100, 20, 35, 'Nissan'),
(8, 346, 5, 15, 78, 20, 70, 'Adaptable'),
(9, 345, 25, 10, 50, 8, 48, 'Chevrolet');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(8) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` text NOT NULL,
  `ciudad_prove` varchar(50) NOT NULL,
  `id_Producto` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `apellido`, `direccion`, `telefono`, `ciudad_prove`, `id_Producto`) VALUES
(2228, 'Bryan', 'Garcia', 'Las Delicias', '0424-5467623', 'Maracay', 12),
(3339, 'Eric', 'Castillo', 'Villa de Cura', '0416-4377451', 'Valencia', 223),
(3340, 'Jorge', 'Manirel', 'Santa Rita', '04128994433', 'Cojedes', 322);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(20) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `direccion` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_inicio` date NOT NULL,
  `hora_entrada` text NOT NULL,
  `hora_salida` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nombre`, `apellido`, `direccion`, `fecha_nacimiento`, `fecha_inicio`, `hora_entrada`, `hora_salida`) VALUES
(77, 'Dani', 'Pereira', 'Por el Terminal', '2000-09-12', '2019-10-10', '08:00 am', '03:00 pm'),
(88, 'Brandon', 'Lopez', 'Los Samanes', '1990-05-09', '2009-06-03', '08:00 am', '03:00 pm'),
(99, 'Genesis', 'Peres', 'Las Delicias', '1999-01-11', '2017-07-25', '08:00 am', '03:00 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_Venta` int(8) NOT NULL,
  `id_Cliente` int(6) NOT NULL,
  `id_Pago` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_Cliente`);

--
-- Indices de la tabla `devolución`
--
ALTER TABLE `devolución`
  ADD PRIMARY KEY (`cod_detallefactura`);

--
-- Indices de la tabla `forma de pago`
--
ALTER TABLE `forma de pago`
  ADD PRIMARY KEY (`id_Pago`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_Producto`),
  ADD UNIQUE KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_Venta`),
  ADD KEY `id_Producto` (`id_Cliente`),
  ADD KEY `id_Pago` (`id_Pago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=721;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_Cliente` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `forma de pago`
--
ALTER TABLE `forma de pago`
  MODIFY `id_Pago` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_Producto` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3341;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_Venta` int(8) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_Cliente`) REFERENCES `cliente` (`id_Cliente`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_Pago`) REFERENCES `forma de pago` (`id_Pago`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
