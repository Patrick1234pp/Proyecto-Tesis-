-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2020 a las 03:09:41
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_productos`
--

CREATE TABLE `tb_productos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` decimal(10,3) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_productos`
--

INSERT INTO `tb_productos` (`Id`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'TORTA AFRICANA', '21.000', 'BIZCOCHO DE CHOCOLATE Y MANJAR', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/04/TORTA-AFRICANA-1.png'),
(2, 'TORTA AMOR', '25.000', 'HOJARASCA PASTELERA MANJAR C', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/05/TORTA-AMOR-3.png'),
(3, 'TORTA CHOCOLATE', '21.000', 'BIZCOCHO CHOCOLATE - RELLENO DE MANJAR - CREMA CHANTILLY DE CHOCOLATE Y MERMELADA DE FRAMBUESA', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/04/TORTA-CHOCOLATE-2.png'),
(4, 'TORTA CINCO SABORES', '15.500', 'DISCO DE MIL HOJA - DISCO DE HOJARASCA - BIZCOCHO BLANCO - RELLENO DE MANJAR - CREMA PASTELERA - CREMA DE LIMÓN - MERMELADA DE FRAMBUESA Y CREMA CHANTILLY', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/04/TORTA-CINCO-SABORES-1.png'),
(5, 'TORTA CIRUELA', '20.000', 'BIZCOCHO DE CIRUELA - RELLENA DE MANJAR - RELLENA DE MERMELADA DE CIRUELA - CREMA CHANTILLY DE CHOCOLATE Y CUBIERTA DE MERENGUE', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/05/TORTA-CIRUELA-1-1.png'),
(6, 'TORTA CIRUELA CHOCOLATE', '21.000', 'BIZCOCHO DE CIRUELA - RELLENA DE MANJAR - RELLENA DE MERMELADA DE CIRUELA - CREMA CHANTILLY DE CHOCOLATE Y CUBIERTA DE MERENGUE', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/04/TORTA-CIRUELA-2.png'),
(7, 'TORTA CIRUELA CON FONDANT', '25.000', 'BIZCOCHO DE CIRUELA - RELLENA DE MANJAR - RELLENA DE MERMELADA DE CIRUELA - CREMA CHANTILLY DE CHOCOLATE Y CUBIERTA DE FONDANT', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/05/torta-ciruela-1.png'),
(8, 'TORTA DE HOJA', '25.000', 'HOJARASCA - RELLENA DE MANJAR Y CUBIERTA CON MERENGUE', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/04/TORTA-HOJA-3.png'),
(9, 'TORTA DE PANQUEQUE CHOCOLATE', '9.500', 'PANQUEQUE DE CHOCOLATE - RELLENO DE MANJAR - CREMA CHANTILLY DE CHOCOLATE Y CHOCOLATE GANACH', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/04/TORTA-PANQUEQUE-CHOCOLATE-1.png'),
(10, 'TORTA DE PANQUEQUE NARANJA', '21.000', 'PANQUEQUE DE NARANJA - RELLENO DE MERMELADA DE NARANJA - MANJAR Y CREMA CHANTILLY', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/04/TORTA-PANQUEQUE-NARANJA-3.png'),
(11, 'TORTA CAFÉ LATTE', '21.000', 'BIZCOCHO CHOCOLATE - REMOJO CHOCOLATE CON CAFÉ - CREMA MOKA - MANJAR - CHOCOLATE GANACH', 'https://pastelerialapalmera.cl/wp-content/uploads/2020/05/TORTA-CAF%C3%89-LATTE-2.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
