-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2019 a las 20:22:50
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turismo_argentina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_hotel` int(12) NOT NULL,
  `id_usuario` int(12) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  `valoracion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_hotel`, `id_usuario`, `mensaje`, `valoracion`) VALUES
(1, 9, 8, 'River la concha de tu madre!', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

CREATE TABLE `destino` (
  `id_destino` int(11) NOT NULL,
  `nombre` varchar(18) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `temporada_alta` varchar(28) NOT NULL,
  `puntaje` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`id_destino`, `nombre`, `descripcion`, `temporada_alta`, `puntaje`) VALUES
(2, 'Lujan', 'Catedral', 'Octubre', 6),
(3, 'Tandil', 'Ciudad entre Sierras', 'julio', 8),
(5, 'Libertador', 'Ir a la Bianqueria', 'w', 6),
(7, 'Bahia Blanca', 'Sur de la Provincia', 'Julio', 5),
(8, 'Azul', 'Ciudad Fantasma', 'ninguna', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` int(20) NOT NULL,
  `direccion` varchar(54) NOT NULL,
  `precio` int(20) NOT NULL,
  `id_destino` int(12) NOT NULL,
  `ocupado` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nombre`, `telefono`, `direccion`, `precio`, `id_destino`, `ocupado`) VALUES
(8, 'Micaela', 2147483647, 'Mitre', 3500, 3, 0),
(9, 'Libertador', 32323232, 'Mitre', 5555, 3, 1),
(10, 'Internacional', 324342342, 'pinto', 5555, 3, 0),
(12, 'Copahue', 44444, 'Mitre', 2650, 3, 0),
(13, 'Internacional', 0, '', 0, 2, 0),
(14, 'sheraton', 232323, 'Valdez', 5900, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(28) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`) VALUES
(1, 'jose', '$2y$10$raiDQDnQV1oQYOzdOIzUROzatNan5ZatSGYyzMTC2Xknsz1RAUfJC'),
(2, 'micaela', '$2y$10$Xgs5BsfFDXggZAtPNcJLb.Q9rkEPoUuL3NysyslvJsA3ZIKaE5WDO'),
(3, 'silvia', '$2y$10$1uAw/vmaa2FR/or6MZ1RquBcbJlJa9cY7B1wP4W1kzXNNPxbRQqsG'),
(4, 'silvia', '$2y$10$CuK1j61/xHagIoMMLJL9PeaLiIwbquiw/iSp4SEsqkuR0Whsa9E2i'),
(5, 'emmanuel', '$2y$10$2SdHiR6TcQuucin4Sjt9ku4F9SiLpeT2l/RMp0e2I0xmgB8a00x66'),
(6, 'nahuel', '$2y$10$UQNr70U6G.KCbX4HZ3L5a.neRND.VEoaN8HuqwELlxmxM/2PlCSJ2'),
(7, 'maximiliano', '$2y$10$QLao3NPCitnFIMHU8FOQ5uBLyOZkAaNzB8Xo7ChOqKzwOr9EwlTgG'),
(8, 'maxisantomil@hotmail.com', '$2y$10$oYD9LDH1PZgO5wUh/UlnpeXu9TX9owdBgfJ2Xo9SUDglMGrmsVFte'),
(12, 'jose', '$2y$10$hLreteoxYOkayGb7RdM47O34MKwKk.oysd3lML777tY03Ozb9BqyO'),
(13, '', '$2y$10$rdFEvGnLu50c2Y53txef/OAWzXgXg3k4HOA4FEnAhbvR18Qa9tVly'),
(14, 'pepe@gmail.com', '$2y$10$7NmwOZcqMrJiUjnFo44RD.zw7.gz1mFBsvAe8uAE/RpHP9wiuXccu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_hotel` (`id_hotel`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id_destino`),
  ADD KEY `id_destino` (`id_destino`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `id_destino` (`id_destino`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `destino`
--
ALTER TABLE `destino`
  MODIFY `id_destino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`);

--
-- Filtros para la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`id_destino`) REFERENCES `destino` (`id_destino`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
