-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3310
-- Tiempo de generación: 16-06-2023 a las 06:08:22
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `free_turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `CIU_id` int(11) NOT NULL,
  `CIU_nombre` varchar(250) NOT NULL,
  `CIU_aeropuerto` text NOT NULL,
  `CIU_descripcion` text NOT NULL,
  `CIU_imagen` varchar(250) NOT NULL,
  `CIU_visitas` int(11) NOT NULL,
  `CIU_precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`CIU_id`, `CIU_nombre`, `CIU_aeropuerto`, `CIU_descripcion`, `CIU_imagen`, `CIU_visitas`, `CIU_precio`) VALUES
(1, 'Lima', 'Aeropuerto Internacional Teniente Alejandro Velasco Astete', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'lima.jpg', 10, 500),
(2, 'Arequipa', 'Aeropuerto Internacional Teniente Alejandro Velasco Astete', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'arequipa.webp', 15, 100),
(3, 'Cusco', 'Aeropuerto Internacional Teniente Alejandro Velasco Astete', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'cusco.jpg', 30, 300),
(4, 'Trujillo', 'Aeropuerto Internacional Teniente Alejandro Velasco Astete', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'trujillo.jpg', 100, 200),
(5, 'Tacna', 'Aeropuerto Internacional Teniente Alejandro Velasco Astete', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'tacna.jpg', 50, 400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportes`
--

CREATE TABLE `transportes` (
  `TRANS_id` int(11) NOT NULL,
  `TRANS_precio` int(11) NOT NULL,
  `TRANS_descripcion` text NOT NULL,
  `TRANS_imagen` text NOT NULL,
  `TRANS_cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transportes`
--

INSERT INTO `transportes` (`TRANS_id`, `TRANS_precio`, `TRANS_descripcion`, `TRANS_imagen`, `TRANS_cantidad`) VALUES
(1, 100, 'Bus - cruz del sur', 'cruzSur.jpeg', 5),
(2, 50, 'Bus - sol andino', 'solAndino.webp', 2),
(3, 200, 'Avion - latam', 'avionLatam.avif', 2),
(4, 300, 'Avion - airplanes', 'avionAirplanes.jpg', 2),
(5, 300, 'Camioneta - Toyota', 'camionetaToyota.jpg', 2),
(6, 300, 'tren', 'tren.avif', 2),
(7, 60, 'moto', 'moto.png\r\n', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `USU_id` int(11) NOT NULL,
  `USU_nombres` varchar(150) NOT NULL,
  `USU_correo` varchar(250) NOT NULL,
  `USU_usuario` varchar(8) NOT NULL,
  `USU_contrasenia` varchar(250) NOT NULL,
  `USU_estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`USU_id`, `USU_nombres`, `USU_correo`, `USU_usuario`, `USU_contrasenia`, `USU_estado`) VALUES
(1, 'Administrador', '0', '123', '$2y$10$Ttgel4YJijhsimpJA5R./ORJLMrwdTvz/ikDiNTgZwRGcblydL/0a', 1),
(2, '0', 'mendoza.ing1826@gmail.com', '123', '123', 1),
(3, '0', 'mendoza.ing1826@gmail.com', '123', '123', 1),
(4, '0', 'kojesepiv@mailinator.com', 'Magna ve', 'Pa$$w0rd!', 1),
(5, 'Laborum quisquam culCorrupti rem conseq', 'qoliwoxej@mailinator.com', 'Anim quo', 'Pa$$w0rd!', 1),
(6, 'julian Quas veritatis nihil', 'pyjas@mailinator.com', 'Aspernat', 'Pa$$w0rd!', 1),
(7, 'Laboriosam velit v Non quo fugiat sed v', 'becehujili@mailinator.com', 'Laborios', '123', 1),
(8, 'luis miguel mendoza', 'mendoza.ing1826@gmail.com', 'admin', '$2y$12$EBZoZowFm1AX3HdD74O51..HnPByXEoV8k92C2VK5dIpJXTiJd9dK', 1),
(9, 'juan  perez', 'correo@gmail.com', 'juan', '$2y$12$UzdPgz4x9JMZURRySYaiT..S6M1UMGoLTejR2PXhhCXbk.XzZtnm2', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`CIU_id`);

--
-- Indices de la tabla `transportes`
--
ALTER TABLE `transportes`
  ADD PRIMARY KEY (`TRANS_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USU_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `CIU_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `transportes`
--
ALTER TABLE `transportes`
  MODIFY `TRANS_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `USU_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
