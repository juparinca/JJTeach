-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2019 a las 14:41:59
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
-- Base de datos: `aplicativo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `color` varchar(255) NOT NULL,
  `textColor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `reg_nombre` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_apellido` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_fechanac` date NOT NULL,
  `reg_cedula` bigint(12) UNSIGNED NOT NULL,
  `reg_correo` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_institucion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_usuario` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_clave` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_privilegio` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`reg_nombre`, `reg_apellido`, `reg_fechanac`, `reg_cedula`, `reg_correo`, `reg_institucion`, `reg_telefono`, `reg_usuario`, `reg_clave`, `reg_privilegio`) VALUES
('jajaja', 'aaaaaaaaaa', '1232-03-21', 23124141, 'asfasfa@gmail.com', 'Colegio', '52284562', 'lol', 'lel', 2),
('Graciela', 'Camargo Santos', '1963-05-14', 28333049, 'gracicam@gmail.com', 'Colegio', '3156842476', 'gracicam', '28333049', 2),
('JUAN PABLO', 'RINCÓN CAMARGO', '2019-03-13', 1005449469, 'sssss', 'Colegio', '6188129', 'juanpabl6755', 'juan123', 2),
('John Jairo', 'Abreo Arenas', '1999-05-04', 1098818751, 'johnjairoabreo@hotmail.com', 'Universidad', '3157890410', 'bakiury', '6612', 1),
('ALBERTO MAURICIO', 'RINCÓN CAMARGO', '2019-05-07', 1100896752, 'juanpablorincon123@hotmail.com', 'Universidad', '6188129', 'alberto98', '98091913682', 2),
('DAYANA', 'wefsf', '2019-03-12', 8137123734187, 'sekjfnwf@hotmail.com', 'Universidad', '666666', 'asdasd', 'wfdwefw', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`reg_cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
