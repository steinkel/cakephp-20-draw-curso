-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2012 at 08:02 
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `practicas`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` varchar(36) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `primer_apellido` varchar(255) NOT NULL,
  `segundo_apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `primer_apellido`, `segundo_apellido`, `email`, `telefono`, `created`, `modified`) VALUES
('4f5222a7-e390-434c-befe-0a2093b7bb91', 'jorge', 'glez', 'martin', 'jorge@example.com', '3333', '2012-03-03 14:54:47', '2012-03-10 11:35:34'),
('4f5b2ba6-b26c-4249-a23e-065993b7bb91', 'otro', 'alumno ape 1', 'ape2', 'otro@example.com', '999222333', '2012-03-10 11:23:34', '2012-03-10 11:23:34'),
('4f5b2bc4-713c-49fb-b630-07b993b7bb91', 'alu3', '1', '2', 'aa3@example.com', '554455', '2012-03-10 11:24:04', '2012-03-10 11:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `alumnos_focos`
--

CREATE TABLE IF NOT EXISTS `alumnos_focos` (
  `id` varchar(36) NOT NULL,
  `alumno_id` varchar(36) NOT NULL,
  `foco_id` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnos_focos`
--

INSERT INTO `alumnos_focos` (`id`, `alumno_id`, `foco_id`) VALUES
('4f5b2e76-1b8c-47f1-856c-07bf93b7bb91', '4f5222a7-e390-434c-befe-0a2093b7bb91', '4f5224d7-cc3c-4eb2-aaa7-0b3993b7bb91'),
('4f5b2e76-3360-45e3-8b03-07bf93b7bb91', '4f5222a7-e390-434c-befe-0a2093b7bb91', '4f5224e0-a934-4141-9fa9-0b3993b7bb91'),
('4f5b2e76-3f18-4fff-b995-07bf93b7bb91', '4f5222a7-e390-434c-befe-0a2093b7bb91', '4f5224e7-de40-46e1-a671-0b3a93b7bb91');

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` varchar(36) NOT NULL,
  `nombre_social` varchar(255) NOT NULL,
  `cif` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `direccion` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `focos`
--

CREATE TABLE IF NOT EXISTS `focos` (
  `id` varchar(36) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `focos`
--

INSERT INTO `focos` (`id`, `nombre`) VALUES
('4f5224d7-cc3c-4eb2-aaa7-0b3993b7bb91', 'php'),
('4f5224e0-a934-4141-9fa9-0b3993b7bb91', '.net'),
('4f5224e7-de40-46e1-a671-0b3a93b7bb91', 'java');

-- --------------------------------------------------------

--
-- Table structure for table `focos_ofertas`
--

CREATE TABLE IF NOT EXISTS `focos_ofertas` (
  `id` varchar(36) NOT NULL,
  `foco_id` varchar(36) NOT NULL,
  `oferta_id` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ofertas`
--

CREATE TABLE IF NOT EXISTS `ofertas` (
  `id` varchar(36) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `activa` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `vacantes` int(3) NOT NULL,
  `fecha_limite` date NOT NULL,
  `empresa_id` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
