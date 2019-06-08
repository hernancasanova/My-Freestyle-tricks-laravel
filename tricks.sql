-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2019 a las 21:56:59
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tricks`
--

CREATE TABLE `tricks` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `initials` varchar(10) NOT NULL,
  `style` varchar(23) NOT NULL,
  `description` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tricks`
--

INSERT INTO `tricks` (`id`, `name`, `initials`, `style`, `description`, `updated_at`, `created_at`) VALUES
(1, 'alternative mitchy around the world', 'amatw', 'lower', 'inside atw begin with base foot + crossover inmediately', '2019-05-28 04:02:32', '0000-00-00 00:00:00'),
(2, 'around the world', 'atw', 'lower', 'one revolution around the ball', '2019-05-10 18:44:44', '0000-00-00 00:00:00'),
(3, 'hope the world', 'htw', 'lower', 'make a atw, but beging with the other foot', '2019-05-08 00:30:51', '0000-00-00 00:00:00'),
(4, 'crossover', 'co', 'lower', 'cross a foot over a ball and jump inmediately to strike the ball with the other foot', '2019-05-28 03:31:24', '0000-00-00 00:00:00'),
(6, 'alternative touzani around the world', 'atatw', 'lower', 'tatw starting with the other foot', '2019-05-13 02:56:31', '2019-05-13 02:56:31'),
(12, 'touzani around the world', 'tatw', 'lower', 'outside around the world and crossover inmediately', '2019-05-28 03:31:01', '2019-05-23 03:11:13'),
(13, 'lemmens around the world (outside)', 'latw(out)', 'lower', '2 revolutions around the world without intermediate touch', '2019-05-28 03:27:56', '2019-05-28 03:27:56'),
(14, 'abbas around the world', 'aatw', 'lower', 'pass one foott over the world+atw inmediately with the other foot', '2019-05-28 03:44:24', '2019-05-28 03:44:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tricks`
--
ALTER TABLE `tricks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tricks`
--
ALTER TABLE `tricks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
