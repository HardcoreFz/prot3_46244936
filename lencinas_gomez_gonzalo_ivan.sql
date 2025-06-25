-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2025 a las 07:32:29
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
-- Base de datos: `lencinas_gomez_gonzalo_ivan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_usuarios`
--

CREATE TABLE `info_usuarios` (
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(15) CHARACTER SET ascii COLLATE ascii_general_nopad_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `info_usuarios`
--

INSERT INTO `info_usuarios` (`usuario_id`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'Lionel', 'Messi', 'Pulga', 'messi@gmail.com', '$2y$10$qem05CR2iocbGuUHFGdFFO5iEfDruIk1rUHhprXDsgi/UOSKtJyXq', 2, 'NO'),
(2, 'Gonzalo', 'Gomez', 'HardcoreFz', 'harcorefzgamerx@gmail.com', '$2y$10$sUPljGXN.aiW6YQofwjRyuHtKvErbw.GJ8EgqB5Sz0KKaqqJ6B0ru', 2, 'NO'),
(3, 'Guadita', 'Amorsito', 'WizardGPhoenix', 'guada@gmail.com', '$2y$10$DWTZvUMnA5XoCDPI77Kiq.WeGA9ZrBZDuV7zr1LSP7x8cfyqoIYai', 2, 'NO'),
(4, 'Buenas', 'tardes', 'sex', 'quyeti@gmail.com', '$2y$10$UtDYRBpslbZsKJ9GwH0FXeTcoxR0NcKabN3Xrmq7qLl4zK2TZs3ZO', 2, 'NO'),
(5, 'Buenasa', 'tardesa', 'sexa', 'quyetiaa@gmail.com', '$2y$10$MuO1rTnfS4xspoiSfvJHmOBC09Xr3XKrop4XrcDPBV8mZfC9H8D/q', 2, 'NO'),
(6, 'Buenasaa', 'tardesaa', 'sexaa', 'quyetiaaa@gmail.com', '$2y$10$EYGoDFe2dX4QWcHRP0V.4ORzf6TljmlhivD3OdSOC9rz40UDWUhM6', 2, 'NO'),
(7, 'test', 'test', 'test', 'test@test.com', '$2y$10$cuF.rOymAg0QVYB9ioVMW.mxZEH903Ts1sO8hqcWwBg5mrLyL5f.a', 2, 'NO'),
(8, 'test1', 'test1', 'test1', 'test@tes1t.com', '$2y$10$bZPLR/v6KOWZmKU6gh0kCumeh1qXtieeigiSIV5gWOogupcLvQZeG', 2, 'NO'),
(9, 'testeo', 'tester', 'testeo', 'testeo@gmail.com', '$2y$10$xSFnN1sWT/sDr3pAH3Dch.FV58jM4BvC.x9qzDws79XNnI3IflR7K', 1, 'NO'),
(10, 'cliente', 'cliente', 'cliente', 'cliente@gmail.com', '$2y$10$GMyz1xxpZL4n2mfIY.2qzeAb7i9QLeBo0v5NWrSZBz.M1.yNxN6mu', 2, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info_usuarios`
--
ALTER TABLE `info_usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info_usuarios`
--
ALTER TABLE `info_usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
