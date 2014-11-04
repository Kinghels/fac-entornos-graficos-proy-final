-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2014 at 11:16 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apunteca`
--
CREATE DATABASE IF NOT EXISTS `apunteca` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `apunteca`;

-- --------------------------------------------------------

--
-- Table structure for table `apuntes`
--

CREATE TABLE IF NOT EXISTS `apuntes` (
  `cod_apunte` int(3) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `cod_materia` int(3) DEFAULT NULL,
  `cant_visitas` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_apunte`) USING BTREE,
  KEY `cod_materia` (`cod_materia`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=5461;

--
-- Dumping data for table `apuntes`
--



-- --------------------------------------------------------

--
-- Table structure for table `apuntes_autores`
--

CREATE TABLE IF NOT EXISTS `apuntes_autores` (
  `cod_apunte` int(3) NOT NULL,
  `id_autor` int(5) NOT NULL,
  PRIMARY KEY (`cod_apunte`,`id_autor`) USING BTREE,
  KEY `id_autor` (`id_autor`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=8192;

--
-- Dumping data for table `apuntes_autores`
--

INSERT INTO `apuntes_autores` (`cod_apunte`, `id_autor`) VALUES
(1, 36012);

-- --------------------------------------------------------

--
-- Table structure for table `cambios_pass`
--

CREATE TABLE IF NOT EXISTS `cambios_pass` (
  `id_usuario` int(11) NOT NULL,
  `id_cambio` int(50) NOT NULL AUTO_INCREMENT,
  `instante_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cambio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `cambios_pass`
--

INSERT INTO `cambios_pass` (`id_usuario`, `id_cambio`, `instante_creacion`) VALUES
(36012, 2, '2014-06-04 19:40:35'),
(36012, 3, '2014-06-04 19:42:52'),
(36012, 4, '2014-06-04 19:43:13'),
(36012, 5, '2014-06-04 19:43:20'),
(36012, 6, '2014-06-04 19:43:29'),
(36012, 7, '2014-06-04 19:43:57'),
(36012, 8, '2014-06-04 19:45:03'),
(36012, 9, '2014-06-04 19:45:10'),
(36012, 10, '2014-06-04 19:45:19'),
(36012, 11, '2014-06-04 19:45:26'),
(36012, 12, '2014-06-04 19:45:41'),
(36012, 13, '2014-06-04 19:46:18'),
(36012, 14, '2014-06-04 20:14:31'),
(36012, 15, '2014-06-04 20:26:25'),
(36012, 16, '2014-06-04 20:28:37'),
(36012, 17, '2014-06-04 20:29:06'),
(36012, 18, '2014-06-06 14:03:30'),
(36012, 19, '2014-06-06 14:03:38'),
(36012, 20, '2014-06-06 14:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
  `cod_carrera` int(1) NOT NULL,
  `nombre_carrera` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_carrera`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=5461;

--
-- Dumping data for table `carreras`
--

INSERT INTO `carreras` (`cod_carrera`, `nombre_carrera`) VALUES
(1, 'Ingeniería en Sistemas de Información'),
(2, 'Ingeniería Química'),
(3, 'Ingeniería Mecánica'),
(4, 'Ingeniería Eléctrica'),
(5, 'Ingeniería Civil');

-- --------------------------------------------------------

--
-- Table structure for table `carreras_materias`
--

CREATE TABLE IF NOT EXISTS `carreras_materias` (
  `cod_materia` int(3) NOT NULL,
  `cod_carrera` int(1) NOT NULL,
  PRIMARY KEY (`cod_materia`,`cod_carrera`) USING BTREE,
  KEY `cod_carrera` (`cod_carrera`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=8192;

--
-- Dumping data for table `carreras_materias`
--

INSERT INTO `carreras_materias` (`cod_materia`, `cod_carrera`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(79, 2),
(80, 2),
(81, 2),
(82, 2),
(84, 2),
(85, 2),
(86, 2),
(87, 2),
(88, 2),
(1, 3),
(3, 3),
(5, 3),
(6, 3),
(10, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(20, 3),
(22, 3),
(51, 3),
(52, 3),
(53, 3),
(54, 3),
(55, 3),
(56, 3),
(57, 3),
(58, 3),
(59, 3),
(70, 4),
(71, 4),
(72, 4),
(73, 4),
(74, 4),
(75, 4),
(76, 4),
(77, 4),
(78, 4),
(60, 5),
(61, 5),
(62, 5),
(63, 5),
(64, 5),
(65, 5),
(66, 5),
(67, 5),
(68, 5),
(69, 5);

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `cod_materia` int(3) NOT NULL,
  `nombre_materia` varchar(100) DEFAULT NULL,
  `nivel_materia` int(1) DEFAULT NULL,
  PRIMARY KEY (`cod_materia`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=8192;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`cod_materia`, `nombre_materia`, `nivel_materia`) VALUES
(1, 'Álgebra y Geometría Analítica', 1),
(2, 'Algoritmos y Estructuras de Datos', 1),
(3, 'Análisis Matemático I', 1),
(4, 'Arquitectura de las Computadoras', 1),
(5, 'Ingeniería y Sociedad', 1),
(6, 'Física I', 1),
(7, 'Matemática Discreta', 1),
(8, 'Sistemas y Organizaciones', 1),
(9, 'Análisis de Sistemas', 2),
(10, 'Sistemas de Representación', 2),
(11, 'Sistemas Operativos', 2),
(12, 'Física II', 2),
(13, 'Inglés I', 2),
(14, 'Análisis Matemático II', 2),
(15, 'Química', 2),
(16, 'Sintaxis y Semántica de los Lenguajes', 2),
(17, 'Paradigmas de Programación', 2),
(18, 'Probabilidades y Estadísticas', 3),
(19, 'Gestión de Datos', 3),
(20, 'Inglés II', 3),
(21, 'Comunicaciones', 3),
(22, 'Economía', 3),
(23, 'Matemática Superior', 3),
(24, 'Diseño de Sistemas', 3),
(25, 'Teoría de Control', 4),
(26, 'Administración de Recursos', 4),
(27, 'Ingeniería de Software', 4),
(28, 'Legislación', 4),
(29, 'Redes de Información', 4),
(30, 'Investigación Operativa', 4),
(31, 'Simulación', 4),
(32, 'Inteligencia Artificial', 5),
(33, 'Administración Gerencial', 5),
(34, 'Sistemas de Gestión', 5),
(35, 'Proyecto Final', 5),
(36, 'Algoritmos Genéticos', 3),
(37, 'Introducción a la Práctica Profesional', 3),
(38, 'Gestión Ingenieril', 3),
(39, 'Lenguaje Orientado a la administración Comercial (COBOL)', 3),
(40, 'Lenguaje de Programación JAVA', 3),
(41, 'Tecnologías de Desarrollo de Software IDE', 3),
(42, 'Entornos Gráficos', 4),
(43, 'Gestión de trabajos con sistemas operativos de Funciones avanzadas (AS400)', 4),
(44, 'Soporte a la Gestión de Datos con Programación Visual', 4),
(45, 'Sistemas de Información Integrados para la Industria', 5),
(46, 'Metodología de la Investigación', 5),
(47, 'Dirección de Recursos Humanos', 5),
(48, 'Informática de la Administración Pública', 5),
(49, 'Minería de Datos', 5),
(50, 'Formación de Emprendedores', 2),
(51, 'Ingeniería Mecánica I (int)', 1),
(52, 'Química Aplicada', 2),
(53, 'Estabilidad I', 2),
(54, 'Estabilidad II', 3),
(55, 'Termodinámica', 3),
(56, 'Ingeniería Ambiental y Seg. Industrial', 4),
(57, 'Mecánica de los Fluidos', 4),
(58, 'Máquinas Alternativas y Turbo máquinas', 5),
(59, 'Instalaciones Industriales', 5),
(60, 'Física I (2011)', 1),
(61, 'Fundamentos de Informática', 1),
(62, 'Tecnología de los Materiales', 2),
(63, 'Estabilidad', 3),
(64, 'Hidráulica General y Aplicada', 3),
(65, 'Tecnología de la Construcción', 3),
(66, 'Geotecnia', 4),
(67, 'Análisis Estructural I', 4),
(68, 'Construcciones Metálicas y de Madera', 5),
(69, 'Ingeniería Sanitaria', 5),
(70, 'Integración Eléctrica I (Integradora)', 1),
(71, 'Fundamentos de Informática', 2),
(72, 'Electrotecnia I', 2),
(73, 'Tecnologías y Ensayos de Materiales Eléctricos', 3),
(74, 'Teoría de los Campos', 3),
(75, 'Instrumentos y Mediciones Eléctricas', 4),
(76, 'Máquinas Eléctricas II', 4),
(77, 'Seguridad, Riesgo Eléctrico y Medio Ambiente', 5),
(78, 'Generación, Transmisión y Distribución de la Energía Eléctrica', 5),
(79, 'Integración I', 1),
(80, 'Química Inorgánica', 2),
(81, 'Química Orgánica', 2),
(82, 'Físico–Química', 3),
(84, 'Fenómenos de Transporte', 3),
(85, 'Operaciones Unitarias I', 4),
(86, 'Tecnología de la Energía Térmica', 4),
(87, 'Biotecnología', 4),
(88, 'Control Estadístico de Procesos', 5);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `valido` tinyint(1) DEFAULT NULL,
  `cod_carrera` int(3) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE,
  KEY `cod_carrera` (`cod_carrera`) USING BTREE,
  KEY `cod_carrera_2` (`cod_carrera`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=8192;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nombre_usuario`, `apellido_usuario`, `email`, `id_usuario`, `valido`, `cod_carrera`, `password`) VALUES
('Agustín', 'Ibars', 'agustin.ibars@gmail.com', 36012, NULL, 1, '81dc9bdb52d04dc20036dbd8313ed055'),
('áéíóúñß', 'ápellídö', 'a@a.com', 36013, NULL, 1, '9996535e07258a7bbfd8b132435c5962'),
('Facundo', 'Abdo', 'facuabdo@gmail.com', 39387, NULL, 1, '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Table structure for table `versiones`
--

CREATE TABLE IF NOT EXISTS `versiones` (
  `version` int(11) NOT NULL,
  `cod_apunte` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  KEY `cod_apunte` (`cod_apunte`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apuntes`
--
ALTER TABLE `apuntes`
  ADD CONSTRAINT `apuntes_materias_fk` FOREIGN KEY (`cod_materia`) REFERENCES `materias` (`cod_materia`) ON UPDATE CASCADE;

--
-- Constraints for table `apuntes_autores`
--
ALTER TABLE `apuntes_autores`
  ADD CONSTRAINT `apuntes_autores_apuntes_fk` FOREIGN KEY (`cod_apunte`) REFERENCES `apuntes` (`cod_apunte`) ON UPDATE CASCADE,
  ADD CONSTRAINT `apuntes_autores_usuarios_fk` FOREIGN KEY (`id_autor`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Constraints for table `carreras_materias`
--
ALTER TABLE `carreras_materias`
  ADD CONSTRAINT `carreras_materias_carreras_fk` FOREIGN KEY (`cod_carrera`) REFERENCES `carreras` (`cod_carrera`) ON UPDATE CASCADE,
  ADD CONSTRAINT `carreras_materias_materias_fk` FOREIGN KEY (`cod_materia`) REFERENCES `materias` (`cod_materia`) ON UPDATE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_carreras_fk` FOREIGN KEY (`cod_carrera`) REFERENCES `carreras` (`cod_carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `versiones`
--
ALTER TABLE `versiones`
  ADD CONSTRAINT `versiones_apuntes_fk1` FOREIGN KEY (`cod_apunte`) REFERENCES `apuntes` (`cod_apunte`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
