-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2020 a las 16:50:17
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
-- Base de datos: `interfactor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `name`) VALUES
(1, 'I de Tarapacá'),
(2, 'II de Antofagasta'),
(3, 'III de Atacama'),
(4, 'IV de Coquimbo'),
(5, 'V de Valparaíso'),
(6, 'VI del Libertador General Berna'),
(7, 'VII de Maule'),
(8, 'VIII de Concepción'),
(9, 'IX de la Araucanía '),
(10, 'X de los Lagos'),
(11, 'XI de Aysén del General Carlos Ibañez del Campo'),
(12, 'XII de Magallanes y de la Antártica Chilena'),
(13, 'Metropolitana de Santiago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credits`
--

CREATE TABLE `credits` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rut` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factoring`
--

CREATE TABLE `factoring` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rut` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `expiration` datetime NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guarantee`
--

CREATE TABLE `guarantee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rut` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leasing`
--

CREATE TABLE `leasing` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rut` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `memories`
--

CREATE TABLE `memories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archive` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `memories`
--

INSERT INTO `memories` (`id`, `name`, `archive`, `year_id`) VALUES
(5, 'Memoria 2019', '2019.pdf', 9),
(6, 'Memoria 2018', '2018.pdf', 8),
(7, 'Memoria 2017', '2017.pdf', 7),
(8, 'Memoria 2016', '2016.pdf', 6),
(9, 'Memoria 2015', '2015.pdf', 5),
(10, 'Memoria 2014', '2014.pdf', 4),
(11, 'Memoria 2013', '2013.pdf', 3),
(12, 'Memoria 2012', '2012.pdf', 2),
(13, 'Memoria 2011', '2011.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `offices`
--

CREATE TABLE `offices` (
  `id` int(11) NOT NULL,
  `areas_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `offices`
--

INSERT INTO `offices` (`id`, `areas_id`, `name`, `address`, `phone`, `map`) VALUES
(1, 1, 'Iquique', 'Simon Bolivar 202, oficina 1105', '232936601 / 232936602', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14949.544956194135!2d-69.3326!3d-20.490387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDI5JzI1LjQiUyA2OcKwMTknNTcuNCJX!5e0!3m2!1ses-419!2sus!4v1597768497857!5m2!1ses-419!2sus'),
(2, 2, 'Calama', 'Condominio Edificio Torrecobre, Avenida Balmaceda Nº 1750, oficina 702', '232936606 / 232936607', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14748.413275625157!2d-68.9229388!3d-22.4627514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb1c354f929817d47!2sEdificio%20Torrecobre!5e0!3m2!1ses!2sve!4v1597768997259!5m2!1ses!2sve'),
(3, 2, 'Antofagasta', 'Av. San Martín Nº 2634, Oficina 34', '232936611 / 232936612', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14679.75269488237!2d-70.450414!3d-23.099359!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDA1JzU3LjciUyA3MMKwMjcnMDEuNSJX!5e0!3m2!1ses-419!2sus!4v1597769205199!5m2!1ses-419!2sus'),
(4, 3, 'Copiapó', 'O\'higgins Nº 760, Oficina 606, (piso 6)', '232936618 / 232936619', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14172.989854404115!2d-70.33162200000001!3d-27.367986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDIyJzA0LjgiUyA3MMKwMTknNTMuOCJX!5e0!3m2!1ses-419!2sus!4v1597769440414!5m2!1ses-419!2sus'),
(5, 4, 'La Serena', 'Los Carrera 380, Oficina 215', '232936623 / 232936624', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13834.78815983779!2d-71.251118!3d-29.901828999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDU0JzA2LjYiUyA3McKwMTUnMDQuMCJX!5e0!3m2!1ses-419!2sus!4v1597769582453!5m2!1ses-419!2sus'),
(6, 5, 'Viña del Mar', '12 Norte 785, Oficina 405, Edif. Pamplona', '232936638 / 232936640', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13382.86342218529!2d-71.547981!3d-33.011266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDAwJzQwLjYiUyA3McKwMzInNTIuNyJX!5e0!3m2!1ses-419!2sus!4v1597769718219!5m2!1ses-419!2sus'),
(7, 6, 'Rancagua', 'Campos 423, Oficina 703', '232936628 / 232936630', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13204.252141766008!2d-70.742292!3d-34.170306!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzTCsDEwJzEzLjEiUyA3MMKwNDQnMzIuMyJX!5e0!3m2!1ses-419!2sus!4v1597769786940!5m2!1ses-419!2sus'),
(8, 7, 'Talca', 'Uno Sur 690, Oficina 1105, Edificio Plaza Talca', '232936633 / 232936634', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13004.442423589231!2d-71.666918!3d-35.42729!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDI1JzM4LjIiUyA3McKwNDAnMDAuOSJX!5e0!3m2!1ses-419!2sus!4v1597769872410!5m2!1ses-419!2sus'),
(9, 8, 'Concepción', 'Barros Arana Nº 492, Oficina 135-136', '232936644 / 232936645', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12774.50918854618!2d-73.052465!3d-36.82745!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDQ5JzM4LjgiUyA3M8KwMDMnMDguOSJX!5e0!3m2!1ses-419!2sus!4v1597769928485!5m2!1ses-419!2sus'),
(10, 9, 'Temuco', 'Claro Solar Nro.835, Oficina 1901, Torre Campanario', '232936651 / 232936652', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12448.2438963265!2d-72.589921!3d-38.739363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDQ0JzIxLjciUyA3MsKwMzUnMjMuNyJX!5e0!3m2!1ses-419!2sus!4v1597769997469!5m2!1ses-419!2sus'),
(11, 10, 'Puerto Montt', 'Av. Juan Soler Manfredini Nº 41, Oficina 602', '232936656 / 232936657', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11957.755336941933!2d-72.936723!3d-41.473085!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDI4JzIzLjEiUyA3MsKwNTYnMTIuMiJX!5e0!3m2!1ses-419!2sus!4v1597770047154!5m2!1ses-419!2sus'),
(12, 11, 'Coyhaique', 'Simón Bolivar Nº 135, Oficina 4', '67 - 257 34 02 / 67 - 257 34 04', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11171.715078161285!2d-72.065663!3d-45.571871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDXCsDM0JzE4LjciUyA3MsKwMDMnNTYuNCJX!5e0!3m2!1ses-419!2sus!4v1597770124999!5m2!1ses-419!2sus'),
(13, 12, 'Punta Arenas', 'Pdte. Julio Roca Nº 817, Oficina 51 (Edificio el Libertador)', '232936662 / 232936663', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9568.091024478306!2d-70.907465!3d-53.163631!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTPCsDA5JzQ5LjEiUyA3MMKwNTQnMjYuOSJX!5e0!3m2!1ses-419!2sus!4v1597770172584!5m2!1ses-419!2sus'),
(14, 13, 'Mac Iver', 'Mac-Iver 440, oficina 1204, Santiago', '232936667 / 232936669', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13317.816081072995!2d-70.64727600000002!3d-33.437476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDI2JzE0LjkiUyA3MMKwMzgnNTAuMiJX!5e0!3m2!1ses-419!2sus!4v1597770232013!5m2!1ses-419!2sus'),
(15, 13, 'Melipilla', 'Serrano 334, Oficina 403 - Edificio Sol Andino', '232936676 / 232936677', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13279.834269173833!2d-71.21424!3d-33.684137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDQxJzAyLjkiUyA3McKwMTInNTEuMyJX!5e0!3m2!1ses-419!2sus!4v1597770275279!5m2!1ses-419!2sus'),
(16, 13, 'Casa Matriz', 'Avda. Ricardo Lyon 222, piso 4, Providencia', '2 2654 9000', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13319.960777211978!2d-70.609!3d-33.4235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDI1JzI0LjYiUyA3MMKwMzYnMzIuNCJX!5e0!3m2!1ses-419!2sus!4v1597770323273!5m2!1ses-419!2sus');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `others`
--

CREATE TABLE `others` (
  `id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archive` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `others`
--

INSERT INTO `others` (`id`, `year_id`, `name`, `archive`) VALUES
(7, 1, 'Fitch 2017', 'fitch.pdf'),
(8, 1, 'Humphreys 2017', 'humphreys.pdf'),
(9, 2, 'Fitch 2018', 'fitch.pdf'),
(10, 2, 'Humphreys 2018', 'humphreys.pdf'),
(13, 3, 'Fitch 2019', 'fitch.pdf'),
(14, 3, 'Humphreys 2019', 'humphreys.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statements`
--

CREATE TABLE `statements` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archive` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `statements`
--

INSERT INTO `statements` (`id`, `name`, `archive`, `year_id`) VALUES
(3, 'Marzo 2020', '202003.pdf', 8),
(4, 'Marzo 2019', '201903.pdf', 7),
(5, 'Junio 2019', '201906.pdf', 7),
(6, 'Septiembre 2019', '201909.pdf', 7),
(7, 'Diciembre 2019', '201912.pdf', 7),
(8, 'Marzo 2018', '201803.pdf', 6),
(9, 'Junio 2018', '201806.pdf', 6),
(10, 'Septiembre 2018', '201809.pdf', 6),
(11, 'Diciembre 2018', '201812.pdf', 6),
(12, 'Marzo 2017', '201703.pdf', 5),
(13, 'Junio 2017', '201706.pdf', 5),
(14, 'Septiembre 2017', '201709.pdf', 5),
(15, 'Diciembre 2017', '201712.pdf', 5),
(16, 'Marzo 2016', '201603.pdf', 4),
(17, 'Junio 2016', '201606.pdf', 4),
(18, 'Septiembre 2016', '201609.pdf', 4),
(19, 'Diciembre 2016', '201612.pdf', 4),
(20, 'Marzo 2015', '201503.pdf', 3),
(21, 'Junio 2015', '201505.pdf', 3),
(22, 'Septiembre 2015', '201509.pdf', 3),
(23, 'Diciembre 2015', '201512.pdf', 3),
(24, 'Marzo 2014', '201403.pdf', 2),
(25, 'Junio 2014', '201406.pdf', 2),
(26, 'Septiembre 2014', '201409.pdf', 2),
(27, 'Diciembre 2014', '201412.pdf', 2),
(28, 'Marzo 2013', '201303.pdf', 1),
(29, 'Junio 2013', '201306.pdf', 1),
(30, 'Septiembre 2013', '201309.pdf', 1),
(31, 'Diciembre 2013', '201312.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `year_memory`
--

CREATE TABLE `year_memory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `year_memory`
--

INSERT INTO `year_memory` (`id`, `name`) VALUES
(1, 'm-2011'),
(2, 'm-2012'),
(3, 'm-2013'),
(4, 'm-2014'),
(5, 'm-2015'),
(6, 'm-2016'),
(7, 'm-2017'),
(8, 'm-2018'),
(9, 'm-2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `year_other`
--

CREATE TABLE `year_other` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `year_other`
--

INSERT INTO `year_other` (`id`, `name`) VALUES
(1, 'o-2017'),
(2, 'o-2018'),
(3, 'o-2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `year_state`
--

CREATE TABLE `year_state` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `year_state`
--

INSERT INTO `year_state` (`id`, `name`) VALUES
(1, 'e-2013'),
(2, 'e-2014'),
(3, 'e-2015'),
(4, 'e-2016'),
(5, 'e-2017'),
(6, 'e-2018'),
(7, 'e-2019'),
(8, 'e-2020');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `credits`
--
ALTER TABLE `credits`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factoring`
--
ALTER TABLE `factoring`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `guarantee`
--
ALTER TABLE `guarantee`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `leasing`
--
ALTER TABLE `leasing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `memories`
--
ALTER TABLE `memories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FFCD28540C1FEA7` (`year_id`);

--
-- Indices de la tabla `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F574FF4C1E756D0A` (`areas_id`);

--
-- Indices de la tabla `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_20B9B7F640C1FEA7` (`year_id`);

--
-- Indices de la tabla `statements`
--
ALTER TABLE `statements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A2A8C05340C1FEA7` (`year_id`);

--
-- Indices de la tabla `year_memory`
--
ALTER TABLE `year_memory`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `year_other`
--
ALTER TABLE `year_other`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `year_state`
--
ALTER TABLE `year_state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `credits`
--
ALTER TABLE `credits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factoring`
--
ALTER TABLE `factoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `guarantee`
--
ALTER TABLE `guarantee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `leasing`
--
ALTER TABLE `leasing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `memories`
--
ALTER TABLE `memories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `others`
--
ALTER TABLE `others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `statements`
--
ALTER TABLE `statements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `year_memory`
--
ALTER TABLE `year_memory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `year_other`
--
ALTER TABLE `year_other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `year_state`
--
ALTER TABLE `year_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `memories`
--
ALTER TABLE `memories`
  ADD CONSTRAINT `FK_FFCD28540C1FEA7` FOREIGN KEY (`year_id`) REFERENCES `year_memory` (`id`);

--
-- Filtros para la tabla `offices`
--
ALTER TABLE `offices`
  ADD CONSTRAINT `FK_F574FF4C1E756D0A` FOREIGN KEY (`areas_id`) REFERENCES `areas` (`id`);

--
-- Filtros para la tabla `others`
--
ALTER TABLE `others`
  ADD CONSTRAINT `FK_20B9B7F640C1FEA7` FOREIGN KEY (`year_id`) REFERENCES `year_other` (`id`);

--
-- Filtros para la tabla `statements`
--
ALTER TABLE `statements`
  ADD CONSTRAINT `FK_A2A8C05340C1FEA7` FOREIGN KEY (`year_id`) REFERENCES `year_state` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
