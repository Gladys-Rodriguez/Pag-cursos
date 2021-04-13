-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2021 at 02:32 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prueba`
--

-- --------------------------------------------------------

--
-- Table structure for table `academias`
--

CREATE TABLE `academias` (
  `id_academia` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_p` varchar(30) NOT NULL,
  `apellido_m` varchar(30) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `activacion` int(11) NOT NULL DEFAULT '0',
  `last_session` datetime DEFAULT NULL,
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT '0',
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `academias`
--

INSERT INTO `academias` (`id_academia`, `usuario`, `password`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `activacion`, `last_session`, `token`, `token_password`, `password_request`, `id_tipo`) VALUES
(3, 'admin', '$2y$10$dRoohwjB1buwmfoS6E/YYOFYwCH.2IZgAaCDQKud7JeZVzu/PKqCK', 'Oskar', 'Gomez', 'Coronel', 'zhuelsg_o612d@cikuh.com', 1, '2021-01-14 13:28:57', '1adb60cfcb0965bf7db03a7a950ce525', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_p` varchar(30) NOT NULL,
  `apellido_m` varchar(30) NOT NULL,
  `tipo_suscripcion` int(11) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `activacion` int(11) NOT NULL DEFAULT '0',
  `last_session` datetime DEFAULT NULL,
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT '0',
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `usuario`, `password`, `nombre`, `apellido_p`, `apellido_m`, `tipo_suscripcion`, `correo`, `activacion`, `last_session`, `token`, `token_password`, `password_request`, `id_tipo`) VALUES
(1, 'gibran', '123', 'Gibran', 'Quiroga', 'Campos', 2, 'gibr23451@hotmail.com', 1, '2020-11-30 20:03:43', '644a523f8c55f9c1059d03dc1de58823', '', 0, 2),
(21, 'ramses', '$2y$10$lWVgKaYCd6TSoeuX4RTx6.2NoPikvVILdR.Wa2E1xN6gpivXjVDNe', 'ramses', 'a', 's', 1, 'lalaks@hotmail.com', 1, '2021-01-14 13:30:33', '5476e85b8e1ad8ac2990f87f814e21ac', '', 0, 2),
(22, 'andy', '$2y$10$3ClQ1X4gNAHnYZDYKeQAhOUzpLUcK68oVQlQySqRkjO7ES0zsj6im', 'Andrea', 'Quiroga', 'Campos', 1, 'andy@gmail.com', 1, '2021-01-14 11:08:12', '98e035ae9bb00e029214ffb7a9ba26f0', '', 0, 1),
(23, 'leoleo', '$2y$10$a3cwFnmT.IJou5yK4XYLe.eXpQD5rX8E5aABuvTfVxL5oa5zMSJ8G', 'Leonardo', 'Sanchez', 'Quiroz', 1, 'laemrakln@gmail.com', 1, '2021-01-14 11:27:20', 'e0fc0258a99db6169a8cdf10755c785b', '', 0, 2),
(24, 'roger', '$2y$10$ZvyGvlrlT5sMSfTLXB1m7eWhouKvDZVu9JlWdvqCrVVdgi3Ih9mO6', 'Rogelio', 'Ramirez', 'Mota', 2, 'roger@gmail.com', 1, '2021-01-14 13:03:44', 'ac1c9cac21f2163d7ad42d7741d765b8', '', 0, 2),
(25, '123', '$2y$10$jGWCXYRpnUagnJ7myrUfX.R5N5qipndxRoDrpQPE0e9ITsDHtlgNm', '123', 'Gomez', 'Coronel', 1, 'oagcoronel@gmail.com', 1, NULL, '3f187ebe2d0e1d6ed1272afa8611b1dd', NULL, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `textColor` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_evento_ult` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id_evento`, `title`, `descripcion`, `color`, `textColor`, `start`, `end`, `id_profesor`, `id_alumno`, `id_evento_ult`) VALUES
(1, 'Evento 1- 8000 suscriptores', 'celebrando los 8,000 suscriptores', '#f00877', '#FFFFFF', '2018-02-06 02:44:00', '2018-02-06 02:44:00', 0, 0, 0),
(2, 'TituloEvento', 'DescripciÃ³n', '#FF0000', '#FFFFFF', '2018-03-21 10:30:00', '2018-03-21 10:30:00', 0, 0, 0),
(11, 'Lala Q', '', '#000000', '#FFFFFF', '2021-01-22 16:30:00', '2021-01-22 16:30:00', 3, 21, 11),
(14, 'Isabel Juarez', '', '#000000', '#FFFFFF', '2021-01-23 18:40:00', '2021-01-23 18:40:00', 3, 21, 12);

-- --------------------------------------------------------

--
-- Table structure for table `examen`
--

CREATE TABLE `examen` (
  `id_alumno` int(11) DEFAULT NULL,
  `pregunta` int(11) NOT NULL,
  `respuesta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gastos`
--

CREATE TABLE `gastos` (
  `id_gastos` int(11) NOT NULL,
  `concepto` varchar(200) NOT NULL,
  `gasto_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gerencias`
--

CREATE TABLE `gerencias` (
  `id_gerencia` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_p` varchar(30) NOT NULL,
  `apellido_m` varchar(30) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `activacion` int(11) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT '0',
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profesores`
--

CREATE TABLE `profesores` (
  `id_profesor` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_p` varchar(30) NOT NULL,
  `apellido_m` varchar(30) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `activacion` int(11) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `token` varchar(40) DEFAULT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) NOT NULL DEFAULT '0',
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `usuario`, `password`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `activacion`, `last_session`, `token`, `token_password`, `password_request`, `id_tipo`) VALUES
(1, 'dante', '$2y$10$w9NnbHvJ62iKDUrHIXdyzOOi8WWZTVR1p7Z3HCWQseRBswBbPQ.qi', 'Dante', 'Quiroga', 'Juarez', 'gibranq1111asdf@hotmail.com', 1, '2020-12-30 00:25:44', 'b242e2ddfba6e1836ebc94e5c5a895d0', '', 0, 1),
(2, 'lalo', '$2y$10$HZ1CkGB11cfx8M9RW.8/xumkRtyZC/pLJksRCi5WAd/6kZfCGSfGS', 'Eduardo', 'Sanchez', 'Quintana', 'lkadsjf@hotmail.com', 1, NULL, '2695f7bbd51d890f44ba5553b1b215bc', NULL, 0, 1),
(3, 'lala', '$2y$10$tN3cJfwZ64hSdT5vhHYk8OW/vr/7VjQUcJkoaWe9J/xSZD9mSODda', 'Isabel', 'Juarez', 'Tapia', 'lkadvsjf@hotmail.com', 1, NULL, '0f5d13394cc31232313dacc116c7a3ce', NULL, 0, 1),
(4, '123', '$2y$10$2JPYBnmWE1SICqnnWHR.EONDe.gwM7pFTE5ku5z7Km8X/o3CWgKq2', '123', 'Gomez', 'Coronel', 'aksdjfl@gmail.com', 1, NULL, '67296875550eec25958af555f0662b18', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `respuestas_ejercicios`
--

CREATE TABLE `respuestas_ejercicios` (
  `id_alumno` int(11) DEFAULT NULL,
  `pregunta` int(11) NOT NULL,
  `respuesta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `respuestas_unidades`
--

CREATE TABLE `respuestas_unidades` (
  `id_alumno` int(11) DEFAULT NULL,
  `pregunta` int(11) NOT NULL,
  `respuesta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `respuestas_unidades`
--

INSERT INTO `respuestas_unidades` (`id_alumno`, `pregunta`, `respuesta`) VALUES
(24, 1, 1),
(24, 2, 1),
(24, 3, 0),
(24, 4, 1),
(24, 5, 1),
(24, 6, 1),
(24, 7, 1),
(24, 8, 0),
(24, 9, 1),
(24, 10, 1),
(24, 11, 1),
(24, 12, 1),
(24, 13, 1),
(24, 14, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academias`
--
ALTER TABLE `academias`
  ADD PRIMARY KEY (`id_academia`);

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `id_evento` (`id_evento`);

--
-- Indexes for table `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`pregunta`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gastos`);

--
-- Indexes for table `gerencias`
--
ALTER TABLE `gerencias`
  ADD PRIMARY KEY (`id_gerencia`);

--
-- Indexes for table `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`),
  ADD KEY `id_profesor` (`id_profesor`);

--
-- Indexes for table `respuestas_ejercicios`
--
ALTER TABLE `respuestas_ejercicios`
  ADD PRIMARY KEY (`pregunta`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indexes for table `respuestas_unidades`
--
ALTER TABLE `respuestas_unidades`
  ADD PRIMARY KEY (`pregunta`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academias`
--
ALTER TABLE `academias`
  MODIFY `id_academia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gastos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gerencias`
--
ALTER TABLE `gerencias`
  MODIFY `id_gerencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `examen_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`);

--
-- Constraints for table `respuestas_ejercicios`
--
ALTER TABLE `respuestas_ejercicios`
  ADD CONSTRAINT `respuestas_ejercicios_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`);

--
-- Constraints for table `respuestas_unidades`
--
ALTER TABLE `respuestas_unidades`
  ADD CONSTRAINT `respuestas_unidades_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
