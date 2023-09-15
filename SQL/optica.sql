-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2023 a las 07:51:56
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
-- Base de datos: `optica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `arearesp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `id_usuario`, `arearesp`) VALUES
(2, 3, 'Optico'),
(3, 4, 'Ventas'),
(4, 6, 'Ventas'),
(5, 7, 'Ventas'),
(6, 12, 'Ventas'),
(7, 13, 'Ventas'),
(8, 14, 'Ventas'),
(9, 18, 'Ventas'),
(10, 19, 'Ventas'),
(11, 21, 'Ventas'),
(12, 23, 'Ventas'),
(13, 24, 'Ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `id_usuario`, `direccion`, `telefono`) VALUES
(1, 2, 'Tony', 98999999),
(2, 5, 'Granby', 98999998),
(3, 8, 'Myrtle', 98999997),
(4, 9, 'Carey', 98999996),
(5, 10, 'Sycamore', 98999995),
(6, 11, 'Spenser', 98999994),
(7, 15, 'Prairieview', 98999993),
(8, 16, 'Raven', 98999992),
(9, 17, 'Chinook', 98999991),
(10, 20, 'Redwing', 98999990),
(11, 22, 'Lyons', 98999989),
(12, 25, 'Waubesa', 98999988);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `correoE_usuario` varchar(200) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`correoE_usuario`, `id_producto`, `fecha`) VALUES
('amarquese4@angelfire.com', 3, '2023-08-26'),
('iingarfill9@weebly.com', 2, '2023-08-31'),
('mwolverson8@yelp.com', 3, '2023-09-06'),
('ofowell7@va.gov', 2, '2023-09-05'),
('pcousans1@kickstarter.com', 1, '2023-08-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE `contiene` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `correoE_usuario` varchar(30) DEFAULT NULL,
  `tarjeta` varchar(30) DEFAULT NULL,
  `moneda` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contiene`
--

INSERT INTO `contiene` (`id_pedido`, `id_producto`, `correoE_usuario`, `tarjeta`, `moneda`) VALUES
(1, 1, 'ofowell7@va.gov', 'americanexpress', 'Dolares'),
(2, 2, 'pcousans1@kickstarter.com', 'mastercard', 'Pesos'),
(3, 2, 'pcousans1@kickstarter.com', 'mastercard', 'Dolares'),
(4, 1, 'amarquese4@angelfire.com', 'americanexpress', 'Pesos'),
(5, 1, 'mwolverson8@yelp.com', 'americanexpress', 'Pesos'),
(6, 3, 'amarquese4@angelfire.com', 'mastercard', 'Dolares'),
(7, 3, 'amarquese4@angelfire.com', 'americanexpress', 'Dolares'),
(8, 1, 'ofowell7@va.gov', 'mastercard', 'Dolares'),
(9, 1, 'iingarfill9@weebly.com', 'americanexpress', 'Pesos'),
(10, 3, 'pcousans1@kickstarter.com', 'americanexpress', 'Pesos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaen`
--

CREATE TABLE `estaen` (
  `id_promocion` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estaen`
--

INSERT INTO `estaen` (`id_promocion`, `id_producto`) VALUES
(1, 1),
(3, 2),
(4, 3),
(2, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guarda`
--

CREATE TABLE `guarda` (
  `id_sucursal` int(11) NOT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_receta` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `guarda`
--

INSERT INTO `guarda` (`id_sucursal`, `id_pedido`, `id_proveedor`, `id_producto`, `id_receta`, `stock`) VALUES
(1, 3, 4, 5, 1, 20),
(2, 4, 4, 3, 2, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intercambian`
--

CREATE TABLE `intercambian` (
  `id_administrador` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `mensaje` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `intercambian`
--

INSERT INTO `intercambian` (`id_administrador`, `id_cliente`, `mensaje`) VALUES
(3, 7, 'Hola!'),
(2, 4, 'Buenas tardes!'),
(7, 11, 'Gran producto'),
(9, 10, 'Optica Holandesa'),
(5, 3, 'Me interesa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `correoE_usuario` varchar(30) DEFAULT NULL,
  `monto_total` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `id_sucursal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `fecha`, `correoE_usuario`, `monto_total`, `estado`, `id_sucursal`) VALUES
(1, '2023-07-27', 'ofowell7@va.gov', '1375', 'Inactivo', 1),
(2, '2022-09-14', 'pcousans1@kickstarter.com', '2477', 'Inactivo', 1),
(3, '2023-04-24', 'pcousans1@kickstarter.com', '1303', 'Pendiente', 1),
(4, '2022-11-24', 'amarquese4@angelfire.com', '2774', 'Inactivo', 1),
(5, '2022-10-04', 'mwolverson8@yelp.com', '3968', 'Pendiente', 1),
(6, '2023-02-01', 'amarquese4@angelfire.com', '1188', 'Inactivo', 2),
(7, '2023-04-11', 'amarquese4@angelfire.com', '2771', 'Inactivo', 2),
(8, '2023-09-07', 'ofowell7@va.gov', '3376', 'Inactivo', 2),
(9, '2023-07-20', 'iingarfill9@weebly.com', '2061', 'Pendiente', 2),
(10, '2023-09-11', 'pcousans1@kickstarter.com', '1746', 'Pendiente', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `precio_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID`, `nombre`, `descripcion`, `stock`, `precio_unit`) VALUES
(1, 'Lentes Tommy Hilfiger de Receta', 'Lentes de la mejor calidad.', 20, 4000),
(2, 'Lentes de contacto Oasys x30', 'Lentes de la mejor calidad.', 20, 2000),
(3, 'Lentes de sol Armani', 'Lentes de la mejor calidad.', 20, 3500),
(4, 'Lentes de receta Vogue', 'Lentes de la mejor calidad', 20, 4000),
(5, 'Lentes de sol Gucci', 'Lentes de la mejor calidad', 20, 3500),
(6, 'Lentes de receta YC', 'Lentes de la mejor calidad', 21, 4000),
(7, 'Lentes de contacto AirOptix', 'Lentes de la mejor calidad', 20, 3000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id_promocion` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `descuento` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`id_promocion`, `descripcion`, `descuento`) VALUES
(1, 'Descuento por Promocion', '50%'),
(2, 'Descuento por Promocion', '10%'),
(3, 'Descuento por Promocion', '25%'),
(4, 'Descuento por Iva', '22%');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provee`
--

CREATE TABLE `provee` (
  `id_proovedor` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provee`
--

INSERT INTO `provee` (`id_proovedor`, `id_producto`) VALUES
(2, 1),
(4, 1),
(1, 2),
(2, 3),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `direccion` varchar(200) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `correoE` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`direccion`, `ID`, `nombre`, `correoE`, `telefono`) VALUES
('Ruskin', 1, 'Berge-Graham', 'rkaubisch0@blogtalkradio.com', NULL),
('Sage', 2, 'Leannon-Deckow', 'sfawloe1@epa.gov', NULL),
('Fordem', 3, 'Rempel Group', 'hcornelius2@webeden.co.uk', NULL),
('Basil', 4, 'Quigley LLC', 'bcominoli3@merriam-webster.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id_receta` int(11) NOT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`id_receta`, `fecha`, `descripcion`) VALUES
(1, '2023-08-21', 'Miopia'),
(2, '2023-08-13', 'Hipermetropia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`ID`, `nombre`, `telefono`, `direccion`) VALUES
(1, 'Pocitos', 24864122, 'Bulevar esquina Rivera'),
(2, '8 de octubre', 24864121, '8 de octubre esquina Garibaldi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiene`
--

CREATE TABLE `tiene` (
  `id_receta` int(11) NOT NULL,
  `correoE_usuario` varchar(40) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiene`
--

INSERT INTO `tiene` (`id_receta`, `correoE_usuario`, `id_producto`) VALUES
(1, 'iingarfill9@weebly.com', 1),
(2, 'iingarfill9@weebly.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correoE` varchar(50) NOT NULL,
  `contra` varchar(20) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `apellido`, `correoE`, `contra`, `rol`, `direccion`, `telefono`) VALUES
(2, 'Peria', 'Cousans', 'pcousans1@kickstarter.com', 'Rokietnica', 'Cliente', 'Avenida Italia esq Gallinal', 98999999),
(3, 'Nisse', 'Cossons', 'ncossons2@stumbleupon.com', 'Paratunka', 'Administrador', '17 La Follette Park', NULL),
(4, 'Vidovik', 'Chittleburgh', 'vchittleburgh3@amazonaws.com', 'Černošice', 'Administrador', '345 Blaine Drive', NULL),
(5, 'Anica', 'Marquese', 'amarquese4@angelfire.com', 'Ishqoshim', 'Cliente', 'Bulevar esq Garibaldi', 98999998),
(6, 'Stafford', 'Blunsom', 'sblunsom5@reverbnation.com', 'Maripipi', 'Administrador', '85 2nd Avenue', NULL),
(7, 'Gabriellia', 'Dougan', 'gdougan6@ow.ly', 'Weihai', 'Administrador', '2077 Troy Drive', NULL),
(8, 'Olav', 'Fowell', 'ofowell7@va.gov', 'Libas', 'Cliente', 'Rambla Rep de Peru y Masini', NULL),
(9, 'Michele', 'Wolverson', 'mwolverson8@yelp.com', 'Yachimata', 'Cliente', 'Bulevar y Amezaga', 98999997),
(10, 'Imogene', 'Ingarfill', 'iingarfill9@weebly.com', 'Fāqūs', 'Cliente', '21 de Septiembre y De la Torre', 98999996),
(11, 'Cord', 'Burbridge', 'cburbridgea@seattletimes.com', 'Satuek', 'Cliente', 'Patria y Maria Sosa', 98999995),
(12, 'Burch', 'Shiers', 'bshiersb@virginia.edu', 'Pasirbitung', 'Administrador', '2077 Troy Drive', NULL),
(13, 'Nye', 'Asche', 'naschec@stumbleupon.com', 'Karlskoga', 'Administrador', '9 Independence Court', NULL),
(14, 'Glenn', 'Maraga', 'gmaragad@edublogs.org', 'Utsjoki', 'Administrador', '50 Hauk Street', NULL),
(15, 'Antonio', 'Pond', 'aponde@dion.ne.jp', 'Chum Phae', 'Cliente', '3 5th Hill', 98999994),
(16, 'Shayla', 'Andrusov', 'sandrusovf@accuweather.com', 'La Soledad', 'Cliente', '3 Chive Place', 98999993),
(17, 'Cybil', 'Benley', 'cbenleyg@themeforest.net', 'Ccatca', 'Cliente', '12 Susan Crossing', 98999992),
(18, 'Susana', 'Harold', 'sharoldh@auda.org.au', 'Dongshangguan', 'Administrador', '0100 Gerald Parkway', NULL),
(19, 'Chic', 'Pendre', 'cpendrei@live.com', 'Motema', 'Administrador', '330 Hintze Plaza', NULL),
(20, 'Aurore', 'Bath', 'abathj@disqus.com', 'Pandanwangi', 'Cliente', '534 Charing Cross Plac', 98999990),
(21, 'Ivy', 'Trobe', 'itrobek@upenn.edu', 'Hyesan-si', 'Administrador', '767 School Circle', NULL),
(22, 'Ruby', 'Nystrom', 'rnystroml@adobe.com', 'Babakantonggoh', 'Cliente', '386 Heffernan Plaza', 98999989),
(23, 'Noble', 'Kilgallon', 'nkilgallonm@mapquest.com', 'Purworejo', 'Administrador', '98846 Crownhardt Junction', NULL),
(24, 'Profesores', 'Chetos', 'profesoresEMT@gmail.com', '12345', 'Administrador', '4084 Hanover Hill', NULL),
(25, 'Profesores', 'Chetos', 'profesoresEMTI@gmail.com', '123456', 'Cliente', '6991 Red Cloud Street', 98999988);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`correoE_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `correoE_usuario` (`correoE_usuario`);

--
-- Indices de la tabla `estaen`
--
ALTER TABLE `estaen`
  ADD KEY `id_promocion` (`id_promocion`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `guarda`
--
ALTER TABLE `guarda`
  ADD PRIMARY KEY (`id_sucursal`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_receta` (`id_receta`);

--
-- Indices de la tabla `intercambian`
--
ALTER TABLE `intercambian`
  ADD KEY `id_administrador` (`id_administrador`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `correoE_usuario` (`correoE_usuario`),
  ADD KEY `id_sucursal` (`id_sucursal`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`id_promocion`);

--
-- Indices de la tabla `provee`
--
ALTER TABLE `provee`
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_proovedor` (`id_proovedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id_receta`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD PRIMARY KEY (`id_receta`),
  ADD KEY `correoE_usuario` (`correoE_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `correoE` (`correoE`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_4` FOREIGN KEY (`correoE_usuario`) REFERENCES `usuario` (`correoE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD CONSTRAINT `contiene_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `contiene_ibfk_2` FOREIGN KEY (`correoE_usuario`) REFERENCES `usuario` (`correoE`);

--
-- Filtros para la tabla `estaen`
--
ALTER TABLE `estaen`
  ADD CONSTRAINT `estaen_ibfk_1` FOREIGN KEY (`id_promocion`) REFERENCES `promocion` (`id_promocion`),
  ADD CONSTRAINT `estaen_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `guarda`
--
ALTER TABLE `guarda`
  ADD CONSTRAINT `guarda_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `guarda_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`ID`),
  ADD CONSTRAINT `guarda_ibfk_3` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `guarda_ibfk_4` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guarda_ibfk_5` FOREIGN KEY (`id_receta`) REFERENCES `receta` (`id_receta`);

--
-- Filtros para la tabla `intercambian`
--
ALTER TABLE `intercambian`
  ADD CONSTRAINT `intercambian_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `administrador` (`id_administrador`),
  ADD CONSTRAINT `intercambian_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`correoE_usuario`) REFERENCES `contiene` (`correoE_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `provee`
--
ALTER TABLE `provee`
  ADD CONSTRAINT `provee_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `provee_ibfk_2` FOREIGN KEY (`id_proovedor`) REFERENCES `proveedores` (`ID`);

--
-- Filtros para la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD CONSTRAINT `sucursales_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `pedido` (`id_sucursal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD CONSTRAINT `tiene_ibfk_1` FOREIGN KEY (`correoE_usuario`) REFERENCES `usuario` (`correoE`),
  ADD CONSTRAINT `tiene_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
