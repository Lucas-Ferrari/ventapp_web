-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2016 a las 04:09:45
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventapp`
--
CREATE DATABASE IF NOT EXISTS `ventapp` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `ventapp`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codCliente` int(10) UNSIGNED NOT NULL,
  `tipoGeneral` tinyint(3) UNSIGNED NOT NULL,
  `dni` int(11) NOT NULL,
  `codVerificador` tinyint(4) NOT NULL,
  `nombreCliente` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoCliente` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` char(80) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `email` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `codigoLista` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codCliente`, `tipoGeneral`, `dni`, `codVerificador`, `nombreCliente`, `apellidoCliente`, `direccion`, `telefono`, `email`, `localidad`, `codigoLista`) VALUES
(1, 20, 37864667, 8, 'LucasNicolas', 'Ferrari', 'Miro 3116, Villa Luzuriaga', '1151014008', 'lucas.n.ferrari@outlook.com', 'La Matanza', 1),
(2, 20, 32198345, 2, 'Pablo', 'Fernandez', 'Necochea 142, Ramos Mejia', '1151510898', 'correa-420@gmail.com', 'La Matanza', 1),
(3, 20, 34523321, 2, 'Nicolas', 'Bruno', 'Callefalsa 123, Palomar', '1124871983', 'nicobruno-90@gmail.com', 'Moron', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `codigoPedido` int(10) UNSIGNED NOT NULL,
  `numeroLinea` int(11) NOT NULL,
  `codigoProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `codigoEmpleado` int(10) UNSIGNED NOT NULL,
  `tipoGlobal` tinyint(4) NOT NULL,
  `numeroDocumento` int(11) NOT NULL,
  `codVerificador` tinyint(4) NOT NULL,
  `nombreEmpleado` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoEmpleado` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechaNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formasdepago`
--

CREATE TABLE `formasdepago` (
  `idFormaPago` int(10) UNSIGNED NOT NULL,
  `descripcionFormaPago` char(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaprecios`
--

CREATE TABLE `listaprecios` (
  `codigoLista` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `porcentajeGanancia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `userId` int(10) UNSIGNED NOT NULL,
  `user` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `passwordHash` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `lastLogin` date NOT NULL,
  `failedAttempts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`userId`, `user`, `passwordHash`, `lastLogin`, `failedAttempts`) VALUES
(1, 'admin', '$2y$10$4yrBsIWB9YhIZd4a2N7N2OBt1AlVFY3jIVROjILzTTlgVkrTkZodW', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `codigoPedido` int(10) UNSIGNED NOT NULL,
  `codigoCliente` int(10) UNSIGNED NOT NULL,
  `codigoEmpleato` int(10) UNSIGNED NOT NULL,
  `fechaPedido` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `montoTotal` decimal(5,2) DEFAULT NULL,
  `formaDePago` int(11) UNSIGNED NOT NULL,
  `estado` char(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'PP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precioventa`
--

CREATE TABLE `precioventa` (
  `codigoProducto` int(10) UNSIGNED NOT NULL,
  `codigoLista` int(10) UNSIGNED NOT NULL,
  `precio` decimal(5,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigoProducto` int(10) UNSIGNED NOT NULL,
  `codigoProveedor` int(10) UNSIGNED NOT NULL,
  `descripcion` char(25) COLLATE utf8_spanish_ci NOT NULL,
  `precioCosto` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigoProducto`, `codigoProveedor`, `descripcion`, `precioCosto`) VALUES
(6, 3, 'Zapatilla chatita roja', '35.50'),
(7, 3, 'Zapatilla chatita verde', '35.50'),
(8, 3, 'Zapatilla chatita azul', '35.50'),
(9, 3, 'Zapatilla chatita amarill', '35.50'),
(10, 3, 'Botita cuero negro', '85.20'),
(11, 3, 'Botita tela roja', '85.20'),
(12, 3, 'Botita larga tela verde', '90.60');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `codigoProveedor` int(10) UNSIGNED NOT NULL,
  `tipoGlobal` tinyint(3) UNSIGNED NOT NULL,
  `nroSoc` int(10) UNSIGNED NOT NULL,
  `codVerificador` tinyint(3) UNSIGNED NOT NULL,
  `razonSocial` char(40) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `email` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` char(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`codigoProveedor`, `tipoGlobal`, `nroSoc`, `codVerificador`, `razonSocial`, `direccion`, `telefono`, `email`, `localidad`) VALUES
(3, 30, 11111111, 1, 'La Zapatilla', 'Av. Beiró 1765', '1146578654', 'info@lazapatilla.com.ar', 'Agronomía'),
(4, 30, 22222222, 2, 'El Zapaton', 'Av. Mitre 387', '1123478354', 'elzapaton@outlook.com', 'CABA'),
(6, 30, 33333333, 3, 'Zapatillas del Oeste', 'Av. Indart 387', '1123478354', 'zoeste@yahoo.com', 'CABA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `codigoProducto` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) NOT NULL,
  `puntoReposicion` int(10) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`codigoProducto`, `cantidad`, `puntoReposicion`) VALUES
(6, 15, 5),
(7, 30, 16),
(8, 17, 4),
(9, 24, 16),
(10, 34, 40);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCliente`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`codigoPedido`,`numeroLinea`),
  ADD KEY `codigoProducto` (`codigoProducto`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`codigoEmpleado`);

--
-- Indices de la tabla `formasdepago`
--
ALTER TABLE `formasdepago`
  ADD PRIMARY KEY (`idFormaPago`);

--
-- Indices de la tabla `listaprecios`
--
ALTER TABLE `listaprecios`
  ADD PRIMARY KEY (`codigoLista`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userId`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codigoPedido`),
  ADD KEY `codigoCliente` (`codigoCliente`),
  ADD KEY `codigoEmpleato` (`codigoEmpleato`);

--
-- Indices de la tabla `precioventa`
--
ALTER TABLE `precioventa`
  ADD KEY `codigoProducto` (`codigoProducto`),
  ADD KEY `codigoLista` (`codigoLista`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigoProducto`),
  ADD KEY `codigoProveedor` (`codigoProveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codigoProveedor`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`codigoProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codCliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `codigoEmpleado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `formasdepago`
--
ALTER TABLE `formasdepago`
  MODIFY `idFormaPago` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `listaprecios`
--
ALTER TABLE `listaprecios`
  MODIFY `codigoLista` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codigoPedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codigoProducto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `codigoProveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`codigoPedido`) REFERENCES `pedido` (`codigoPedido`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`codigoProveedor`) REFERENCES `proveedor` (`codigoProveedor`);

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`codigoProducto`) REFERENCES `producto` (`codigoProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
