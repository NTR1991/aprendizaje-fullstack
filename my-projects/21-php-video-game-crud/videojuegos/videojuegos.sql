-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2026 a las 19:24:01
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `desarrollador` varchar(100) NOT NULL,
  `plataforma` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `anio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `titulo`, `desarrollador`, `plataforma`, `genero`, `anio`) VALUES
(1, 'Red Dead Redemption 2', 'Rockstar Game', 'PS5', 'Acción', 2025),
(2, 'Furia de Titanes', 'Santa Monica Studio', 'PS4', 'Aventura', 2006),
(3, 'The Legend of Zelda', 'Nintendo', 'Nintendo Switch', 'Aventura', 2017),
(4, 'Minecraft', 'Mojang', 'PC', 'Sandbox', 2011),
(5, 'God of War Ragnarok', 'Santa Monica Studio', 'PS5', 'Acción', 2022),
(6, 'Red Dead Redemption 2', 'Rockstar Games', 'PS4', 'Aventura', 2018),
(7, 'The Witcher 3', 'CD Projekt Red', 'PC', 'RPG', 2015),
(8, 'Elden Ring', 'FromSoftware', 'PS5', 'RPG', 2022),
(9, 'Cyberpunk 2077', 'CD Projekt Red', 'PC', 'RPG', 2020),
(10, 'Super Mario Odyssey', 'Nintendo', 'Nintendo Switch', 'Plataformas', 2017),
(11, 'The Last of Us Part II', 'Naughty Dog', 'PS4', 'Aventura', 2020),
(12, 'Horizon Forbidden West', 'Guerrilla Games', 'PS5', 'Acción', 2022);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
