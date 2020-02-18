-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2020 a las 17:34:42
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `idealista2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

create database idealista2;
use idealista2;

CREATE TABLE `pisos` (
  `id` int(6) UNSIGNED NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `zona` varchar(30) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `nh` int(6) DEFAULT NULL,
  `precio` int(4) DEFAULT NULL,
  `size` int(4) DEFAULT NULL,
  `extras` varchar(50) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`id`, `tipo`, `zona`, `direccion`, `nh`, `precio`, `size`, `extras`, `observaciones`, `foto`, `reg_date`) VALUES
(1, 'adosado', 'fuenlabrada', 'calle maria', 3, 200, 30, ' Garaje', 'NOSE', '', '2020-02-03 16:29:07'),
(3, 'adosado', 'fuenlabrada', 'calle maria', 3, 200, 30, ' Garaje', 'NOSE', '', '2020-02-03 16:29:10'),
(4, 'adosado', 'fuenlabrada', 'calle maria', 3, 200, 30, ' Garaje', 'NOSE', '', '2020-02-03 16:29:10'),
(7, 'habitacion', 'centro', 'CalleLaguna', 5, 900, 350, ' Piscina Garaje Jardin Terraza', 'horrible', '', '2020-02-03 17:06:22'),
(8, 'habitacion', 'centro', 'CalleLaguna', 5, 900, 350, ' Piscina Garaje Jardin Terraza', 'horrible', '', '2020-02-03 17:13:55'),
(9, '', '', '', 0, 0, 0, '', '', '', '2020-02-03 17:19:04'),
(10, 'habitacion', 'getafe', 'callepepe', 5, 650, 300, ' Garaje Jardin', 'bien', '', '2020-02-03 17:19:43'),
(11, 'habitacion', 'getafe', 'callepepe', 5, 650, 300, ' Garaje Jardin', 'bien', '', '2020-02-03 17:20:26'),
(12, 'habitacion', 'getafe', 'callepepe', 5, 650, 300, ' Garaje Jardin', 'bien', '', '2020-02-03 17:20:27'),
(13, 'habitacion', 'getafe', 'callepepe', 5, 650, 300, ' Garaje Jardin', 'bien', '', '2020-02-03 17:20:30'),
(14, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:20:57'),
(15, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:51'),
(16, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:52'),
(17, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:52'),
(18, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:52'),
(19, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:52'),
(20, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:52'),
(21, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:52'),
(22, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:52'),
(23, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:53'),
(24, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:53'),
(25, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:53'),
(26, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:53'),
(27, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:53'),
(28, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:56'),
(29, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:56'),
(30, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:56'),
(31, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:57'),
(32, 'casa', 'centro', 'calle maria 123', 3, 100, 20, ' Garaje', 'no', '', '2020-02-03 17:21:57'),
(33, 'habitacion', 'centro', 'calle mariaaaa', 4, 350, 75, ' Piscina Jardin', 'hola', '', '2020-02-03 17:25:10'),
(34, 'habitacion', 'centro', 'calle mariaaaa', 4, 350, 75, ' Piscina Jardin', 'hola', '', '2020-02-03 17:25:44'),
(35, 'habitacion', 'centro', 'calle mariaaaa', 4, 350, 75, ' Piscina Jardin', 'hola', '', '2020-02-03 17:25:45'),
(36, 'habitacion', 'centro', 'calle mariaaaa', 4, 350, 75, ' Piscina Jardin', 'hola', '', '2020-02-03 17:25:45'),
(37, 'adosado', 'getafe', 'callepepe', 3, 500, 350, ' Piscina Garaje', 'Escriba aqui sus observaciones', '', '2020-02-03 17:26:28'),
(38, 'piso', 'getafe', '9898', 3, 546, 89489, ' Garaje', 'UIJI', '', '2020-02-03 17:55:10'),
(39, 'chalet', 'avila', 'CalleLaguna123', 3, 956, 125, ' Garaje Jardin Terraza', 'NOse', '', '2020-02-03 17:56:50'),
(40, 'habitacion', 'fuenlabrada', 'DFDFDF', 3, 1, 2, ' Piscina Garaje', 'ULTIMA', '', '2020-02-03 17:59:29'),
(41, 'piso', 'centro', 'calle maria', 3, 50, 40, ' Garaje Jardin', 'porfin', '', '2020-02-03 18:02:09'),
(42, 'piso', 'getafe', 'callepepe', 3, 2, 3, ' Jardin', 'aver', '', '2020-02-03 18:04:19'),
(43, 'piso', 'getafe', 'callepepe', 3, 2, 3, ' Jardin', 'aver', '', '2020-02-03 18:06:40'),
(44, 'piso', 'getafe', 'callepepe', 3, 2, 3, ' Jardin', 'aver', '', '2020-02-03 18:06:59'),
(45, 'piso', 'getafe', 'callepepe', 3, 2, 3, ' Jardin', 'aver', '', '2020-02-03 18:08:41'),
(46, 'piso', 'getafe', 'callepepe', 3, 2, 3, ' Jardin', 'aver', '', '2020-02-03 18:09:25'),
(47, 'casa', 'centro', 'jodeeeeer', 1, 500, 200, ' Piscina Garaje', 'Escriba aqui sus observaciones', '', '2020-02-03 18:09:49'),
(48, 'adosado', 'getafe', 'joderrr', 2, 200, 150, ' Piscina Garaje', 'porfin', '', '2020-02-03 18:11:28'),
(49, 'adosado', 'getafe', 'joderrr', 2, 200, 150, ' Piscina Garaje', 'porfin', 'casas/fotos1.png', '2020-02-03 18:14:37'),
(50, 'adosado', 'getafe', 'joderrr', 2, 200, 150, ' Piscina Garaje', 'porfin', 'casas/fotos1.png', '2020-02-03 18:14:51'),
(51, 'adosado', 'centro', 'calle maria', 3, 250, 100, ' Garaje Jardin', 'puta', 'casas/descarga.jpg', '2020-02-04 15:03:43'),
(52, 'adosado', 'centro', 'calle maria', 3, 250, 100, ' Garaje Jardin', 'puta', 'casas/descarga.jpg', '2020-02-04 15:04:25'),
(53, 'adosado', 'centro', 'calle maria', 3, 250, 100, ' Garaje Jardin', 'puta', 'casas/descarga.jpg', '2020-02-04 15:04:31'),
(54, 'adosado', 'centro', 'calle maria', 3, 250, 100, ' Garaje Jardin', 'puta', 'casas/descarga.jpg', '2020-02-04 15:04:53'),
(55, 'adosado', 'centro', 'calle maria', 3, 250, 100, ' Garaje Jardin', 'puta', 'casas/descarga.jpg', '2020-02-04 15:05:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
