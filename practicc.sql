-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2023 a las 13:47:08
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idPersona` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idPersona`, `Nombre`, `Telefono`, `Correo`, `Direccion`) VALUES
(1, 'Bernardo', '965856247', 'berna@gmail.com', 'holala'),
(2, 'Carlos Efrain ', '987321485', 'efra@gmail.com', 'Holi12345'),
(3, 'Camila', '987321485', 'cami@gmail.com', 'holala52'),
(4, 'Victor', '956814568', 'victor@gmail.com', 'Trujillo'),
(5, 'Brenda Anahi', '956814568', 'brenda@gmail.com', 'Trujillo123'),
(6, 'Laura Eva', '965856247', 'laura@gmail.com', 'Trujillo456'),
(7, 'Isaac Newton', '987321456', 'isaac@gmail.com', 'Trujillo1234'),
(8, 'Eva', '965856247', 'eva@gmail.com', 'Trujillo158'),
(9, 'Ena Eva', '965856247', 'ena@gmail.com', 'Trujillo123'),
(10, 'Mary', '987415689', 'Mary@gmail.com', 'Trujillo'),
(11, 'Mariela', '956814568', 'mariela@gmail.com', 'Trujillo123'),
(12, 'Amalia', '987652145', 'amalia@gmail.com', 'Chiclayo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
