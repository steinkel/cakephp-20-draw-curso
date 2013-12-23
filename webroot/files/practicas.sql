-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2013 at 07:39 
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('52b8827a-e6fc-46f0-938b-26d92f7d8166', 'NÃ©stor', 'Ãlvarez', 'DÃ­az', 'nad@nad.com', '600111111', '2013-12-23 19:35:38', '2013-12-23 19:35:38'),
('52b882a0-dbc4-4676-9bf3-26d12f7d8166', 'AdriÃ¡n', 'Torres', 'RodrÃ­guez', 'atr@atr.es', '600222222', '2013-12-23 19:36:16', '2013-12-23 19:36:16'),
('52b882c2-47fc-4a48-b848-26db2f7d8166', 'EstÃ­baliz', 'Santos', 'Barrera', 'esb@esb.net', '600333333', '2013-12-23 19:36:50', '2013-12-23 19:38:36');

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
('52b8827a-30b8-4b8b-98b5-26d92f7d8166', '52b8827a-e6fc-46f0-938b-26d92f7d8166', '52b6ca91-2340-479d-9c33-07d52f7d8166'),
('52b882a0-1c58-4203-8d7f-26d12f7d8166', '52b882a0-dbc4-4676-9bf3-26d12f7d8166', '4f5224e0-a934-4141-9fa9-0b3993b7bb91'),
('52b882a0-2680-4675-a24c-26d12f7d8166', '52b882a0-dbc4-4676-9bf3-26d12f7d8166', '52b763e3-e33c-49c8-9489-07e12f7d8166'),
('52b8832c-1a78-4f1c-8f2b-26d92f7d8166', '52b882c2-47fc-4a48-b848-26db2f7d8166', '52b882fb-4fe4-4317-a6b2-26d02f7d8166');

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

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `nombre_social`, `cif`, `email`, `direccion`, `created`, `modified`) VALUES
('52b6229f-c518-487e-bcc6-12732f7d8166', 'Brok Air SL', 'B-02154478', 'brok@info.es', 'Av. Salamanca, Murcia', '2013-12-22 00:22:07', '2013-12-22 21:58:59'),
('52b750bd-0d24-483f-acbe-0c742f7d8166', 'Reparalia SLU', 'B-23451207', 'reparalia@info.es', 'C/ Cerro, AlcorcÃ³n, Madrid', '2013-12-22 21:51:09', '2013-12-22 21:51:31'),
('52b881e3-b0f8-4929-9f93-26d92f7d8166', 'WWWide SL', 'B-10293847', 'wide@www.com', 'Av Miami Beach, Florida', '2013-12-23 19:33:07', '2013-12-23 19:33:07');

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
('4f5224e0-a934-4141-9fa9-0b3993b7bb91', '.net'),
('52b6ca91-2340-479d-9c33-07d52f7d8166', 'cakephp'),
('52b763e3-e33c-49c8-9489-07e12f7d8166', 'java'),
('52b882fb-4fe4-4317-a6b2-26d02f7d8166', 'Server');

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

--
-- Dumping data for table `focos_ofertas`
--

INSERT INTO `focos_ofertas` (`id`, `foco_id`, `oferta_id`) VALUES
('52b75da2-c1c8-4e27-a637-07dc2f7d8166', '52b6ca91-2340-479d-9c33-07d52f7d8166', '52b75da2-537c-484a-8c8c-07dc2f7d8166'),
('52b75e1d-7a98-4628-9fb7-07e12f7d8166', '52b6ca91-2340-479d-9c33-07d52f7d8166', '52b75d51-c954-480a-a0d3-07e12f7d8166'),
('52b76579-59bc-4060-a0b1-07e22f7d8166', '4f5224e0-a934-4141-9fa9-0b3993b7bb91', '52b75660-39b8-4ad7-991f-0c762f7d8166'),
('52b76579-6894-494c-8685-07e22f7d8166', '52b6ca91-2340-479d-9c33-07d52f7d8166', '52b75660-39b8-4ad7-991f-0c762f7d8166'),
('52b76579-71f4-4802-bb2c-07e22f7d8166', '52b763e3-e33c-49c8-9489-07e12f7d8166', '52b75660-39b8-4ad7-991f-0c762f7d8166'),
('52b88205-c49c-4e8b-95c1-26db2f7d8166', '52b763e3-e33c-49c8-9489-07e12f7d8166', '52b881a4-2b60-4daa-9045-26d02f7d8166'),
('52b88313-6454-45c6-b672-26da2f7d8166', '52b882fb-4fe4-4317-a6b2-26d02f7d8166', '52b88237-5cc4-4595-81f7-26d22f7d8166');

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

--
-- Dumping data for table `ofertas`
--

INSERT INTO `ofertas` (`id`, `titulo`, `activa`, `created`, `modified`, `vacantes`, `fecha_limite`, `empresa_id`) VALUES
('52b75660-39b8-4ad7-991f-0c762f7d8166', 'Desarrollador Web', 1, '2013-12-22 22:15:12', '2013-12-22 23:19:37', 1, '2014-03-01', '52b6229f-c518-487e-bcc6-12732f7d8166'),
('52b75d51-c954-480a-a0d3-07e12f7d8166', 'Desarrollador Cake', 1, '2013-12-22 22:44:49', '2013-12-22 22:48:13', 2, '2014-01-03', '52b750bd-0d24-483f-acbe-0c742f7d8166'),
('52b75da2-537c-484a-8c8c-07dc2f7d8166', 'DiseÃ±ador', 1, '2013-12-22 22:46:10', '2013-12-22 22:46:10', 1, '2014-01-03', '52b6229f-c518-487e-bcc6-12732f7d8166'),
('52b881a4-2b60-4daa-9045-26d02f7d8166', 'DiseÃ±ador', 1, '2013-12-23 19:32:04', '2013-12-23 19:33:41', 1, '2014-02-05', '52b881e3-b0f8-4929-9f93-26d92f7d8166'),
('52b88237-5cc4-4595-81f7-26d22f7d8166', 'Analista de Sistemas', 1, '2013-12-23 19:34:31', '2013-12-23 19:38:11', 3, '2014-06-23', '52b881e3-b0f8-4929-9f93-26d92f7d8166');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
