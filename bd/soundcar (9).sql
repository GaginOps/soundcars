-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 05:22 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soundcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `year` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `carros`
--

INSERT INTO `carros` (`id`, `descripcion`, `marca`, `year`, `modelo`, `tipo`, `cliente_id`, `created`, `modified`) VALUES
(1, 'elchuchomovil', '', '', '', '', 5, '2016-03-30 02:43:06', '2016-03-30 02:43:06'),
(2, 'carroo', '', '', '', '', 10, '2016-04-06 03:45:15', '2016-04-06 03:45:15'),
(3, 'aaaa', '', '', '', '', 11, '2016-04-06 03:56:09', '2016-04-06 03:56:09'),
(4, 'camionetaranchera', 'toyota', '1996', 'susuku', 'camioneta', 12, '2016-04-07 01:56:37', '2016-04-07 01:56:37'),
(5, 'lamomamovil', 'laquesea', '1999', 'rosadp', 'camioneta', 13, '2016-04-07 02:02:08', '2016-04-07 02:02:08'),
(6, 'petemovil', 'pete', '2012', 'pete', 'auto', 15, '2016-04-07 02:41:20', '2016-04-07 02:41:20'),
(7, 'minmovil', 'minas', '2030', 'mm', 'auto', 16, '2016-04-07 03:48:08', '2016-04-07 03:48:08'),
(8, 'nuevo', 'nuevo', '2016', 'rosadisimo', 'auto', 13, '2016-04-07 04:32:08', '2016-04-07 04:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cedula` int(12) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `edad` varchar(50) NOT NULL,
  `full` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `cedula`, `sexo`, `direccion`, `email`, `created`, `modified`, `edad`, `full`) VALUES
(1, 'pablo', 25897, 'M', 'su ksa', 'pablo@gmail.com', '2016-02-22 03:31:01', '2016-02-22 03:31:01', '', 'pablo 25897'),
(2, 'Miguel', 23423654, 'M', 'la torre', 'migue@gmail.com', '2016-02-29 15:51:30', '2016-02-29 15:51:30', '', 'miguel 23423654'),
(5, 'el santo miguelon', 23423654, '', 'su ksa y solo su ksa', 'elsantomiguel@yosoytupapa.com', '2016-03-30 02:43:05', '2016-03-30 02:43:05', '18 a 21', 'el santo miguelo 23423654'),
(6, 'pasticho', 88888, '', 'la pizzeria', 'pasticho@pasticho.com', '2016-04-05 03:17:39', '2016-04-05 03:17:39', '26 a 30', 'pasticho 88888'),
(7, 'mipapa', 75666, '', 'la ksa de mi apa', 'apa@asdsad.com', '2016-04-05 03:24:10', '2016-04-05 03:24:10', '46 a 50', 'tutututu'),
(8, 'pastelito', 99999, '', 'pastelon', 'pastelito@pastelon.com', '2016-04-05 03:50:36', '2016-04-05 03:50:36', '18 a 21', 'pastelito dueño de la CI: 99999'),
(9, 'aas', 456, '', 'dfsdfsfdsdfs', 'arrence_kfj@hotmail.es', '2016-04-06 03:41:40', '2016-04-06 03:41:40', '22 a 25', 'aas dueño de la CI: 456'),
(10, 'carro', 123654, 'M', 'carro', 'carro@carro.com', '2016-04-06 03:45:15', '2016-04-06 03:45:15', '46 a 50', 'carro dueño de la CI: 123654'),
(11, 'aaaa', 5588, '', 'aaa', 'aaa@aaa.aa', '2016-04-06 03:56:08', '2016-04-06 03:56:08', '18 a 21', ''),
(12, 'abuelo', 11, '', 'la ksa del abuelo', 'abuelogrunon@abuelo.com', '2016-04-07 01:56:37', '2016-04-07 01:56:37', '46 a 50', ''),
(13, 'grandmama', 22, 'M', 'la ksa de moma', 'grandmama@moma.mama', '2016-04-07 02:02:08', '2016-04-07 02:02:08', '22 a 25', 'grandmama dueño de la CI: 22'),
(15, 'peter la anguila', 8888887, '', 'la ksa de peter', 'peterlaa@peter.com', '2016-04-07 02:41:19', '2016-04-07 02:41:19', '22 a 25', 'peter la anguila dueño/a de la CI: 8888887'),
(16, 'minan', 2222, '', 'minam', 'mina@sexy.com', '2016-04-07 03:48:07', '2016-04-07 03:48:07', '18 a 21', 'minan dueño/a de la CI: 2222');

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `created`, `modified`) VALUES
(1, 'miempresa', '2016-02-24 01:50:27', '2016-02-24 01:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `entradas`
--

CREATE TABLE `entradas` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `vieja_cant` int(11) NOT NULL,
  `nueva_cant` int(11) NOT NULL,
  `en_inventario` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `entradas`
--

INSERT INTO `entradas` (`id`, `producto_id`, `vieja_cant`, `nueva_cant`, `en_inventario`, `created`, `modified`) VALUES
(1, 9, 10, 20, -10, '2016-04-08 01:33:47', '2016-04-08 01:33:47'),
(2, 1, 1, 10, 11, '2016-04-08 01:34:16', '2016-04-08 01:34:16'),
(3, 1, 11, 20, 31, '2016-04-08 01:34:35', '2016-04-08 01:34:35'),
(4, 9, -10, 20, 10, '2016-04-08 01:34:56', '2016-04-08 01:34:56'),
(5, 9, 10, 20, 30, '2016-04-08 01:55:27', '2016-04-08 01:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `ventatotale_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `precio_u` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `espera` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `ventatotale_id`, `producto_id`, `precio_u`, `cantidad`, `subtotal`, `espera`, `created`, `modified`) VALUES
(1, 1, 3, 4000, 2, 8000, 1, '2016-04-03 18:25:09', '2016-04-03 18:25:09'),
(2, 2, 3, 4000, 2, 8000, 1, '2016-04-04 23:57:51', '2016-04-04 23:57:51'),
(3, 3, 3, 4000, 2, 8000, 1, '2016-04-05 00:38:09', '2016-04-05 00:38:09'),
(4, 4, 3, 4000, 2, 8000, 1, '2016-04-05 00:46:29', '2016-04-05 00:46:29'),
(5, 5, 3, 4000, 2, 8000, 1, '2016-04-05 00:49:00', '2016-04-05 00:49:00'),
(6, 6, 3, 4000, 2, 8000, 1, '2016-04-05 00:52:34', '2016-04-05 00:52:34'),
(7, 7, 3, 4000, 2, 8000, 1, '2016-04-05 01:01:01', '2016-04-05 01:01:01'),
(8, 8, 3, 4000, 2, 8000, 1, '2016-04-05 01:02:35', '2016-04-05 01:02:35'),
(9, 9, 3, 4000, 2, 8000, 1, '2016-04-05 01:04:52', '2016-04-05 01:04:52'),
(10, 10, 3, 4000, 2, 8000, 1, '2016-04-05 01:05:38', '2016-04-05 01:05:38'),
(11, 11, 3, 4000, 2, 8000, 1, '2016-04-05 01:07:14', '2016-04-05 01:07:14'),
(12, 12, 3, 4000, 2, 8000, 1, '2016-04-05 01:24:49', '2016-04-05 01:24:49'),
(13, 13, 3, 4000, 2, 8000, 1, '2016-04-05 01:29:09', '2016-04-05 01:29:09'),
(14, 14, 3, 4000, 2, 8000, 1, '2016-04-05 01:30:22', '2016-04-05 01:30:22'),
(15, 15, 3, 4000, 2, 8000, 0, '2016-04-05 01:49:09', '2016-04-05 01:49:09'),
(16, 16, 8, 6000, 2, 12000, 0, '2016-04-05 02:28:33', '2016-04-05 02:28:33'),
(17, 17, 7, 30000, 1, 30000, 1, '2016-04-05 02:38:33', '2016-04-05 02:38:33'),
(18, 18, 7, 30000, 1, 30000, 0, '2016-04-05 02:39:00', '2016-04-05 02:39:00'),
(19, 19, 3, 4000, 2, 8000, 0, '2016-04-05 03:55:21', '2016-04-05 03:55:21'),
(20, 20, 4, 8000, 1, 8000, 0, '2016-04-05 03:58:39', '2016-04-05 03:58:39'),
(21, 21, 3, 4000, 1, 4000, 0, '2016-04-06 03:02:29', '2016-04-06 03:02:29'),
(23, 23, 4, 8000, 2, 16000, 1, '2016-04-06 04:25:40', '2016-04-06 04:25:40'),
(24, 24, 4, 8000, 2, 16000, 1, '2016-04-06 04:27:54', '2016-04-06 04:27:54'),
(25, 25, 4, 8000, 2, 16000, 1, '2016-04-06 04:30:27', '2016-04-06 04:30:27'),
(26, 25, 2, 2000, 1, 2000, 1, '2016-04-06 04:30:27', '2016-04-06 04:30:27'),
(27, 25, 4, 8000, 1, 8000, 1, '2016-04-06 04:30:27', '2016-04-06 04:30:27'),
(28, 22, 4, 8000, 2, 16000, 0, '2016-04-07 01:38:51', '2016-04-07 01:38:51'),
(29, 22, 2, 2000, 1, 2000, 0, '2016-04-07 01:38:52', '2016-04-07 01:38:52'),
(30, 22, 4, 8000, 1, 8000, 0, '2016-04-07 01:38:53', '2016-04-07 01:38:53'),
(31, 23, 9, 12800, 2, 25600, 0, '2016-04-08 03:16:56', '2016-04-08 03:16:56'),
(32, 23, 4, 8000, 2, 16000, 0, '2016-04-08 03:16:57', '2016-04-08 03:16:57'),
(33, 23, 5, 5500, 2, 11000, 0, '2016-04-08 03:16:58', '2016-04-08 03:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `created`, `modified`) VALUES
(1, 'mimarca', '2016-02-24 01:50:45', '2016-02-24 01:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `start_time`, `end_time`) VALUES
(20160218051538, '2016-02-21 10:17:37', '2016-02-21 10:17:37'),
(20160220034054, '2016-02-21 10:17:38', '2016-02-21 10:17:38'),
(20160220040943, '2016-02-21 10:21:26', '2016-02-21 10:21:28'),
(20160221053849, '2016-02-21 10:21:28', '2016-02-21 10:21:29'),
(20160221060013, '2016-02-21 10:32:00', '2016-02-21 10:32:05'),
(20160224012826, '2016-02-24 06:08:02', '2016-02-24 06:08:02'),
(20160224012905, '2016-02-24 06:08:02', '2016-02-24 06:08:03'),
(20160224013525, '2016-02-24 06:08:03', '2016-02-24 06:08:05'),
(20160224013635, '2016-02-24 06:08:05', '2016-02-24 06:08:05'),
(20160302040307, '2016-03-02 09:38:34', '2016-03-02 09:38:35'),
(20160302051512, '2016-03-02 09:49:15', '2016-03-02 09:49:17'),
(20160302051653, '2016-03-02 09:49:17', '2016-03-02 09:49:17'),
(20160302051755, '2016-03-02 09:49:18', '2016-03-02 09:49:19'),
(20160302053146, '2016-03-02 10:02:15', '2016-03-02 10:02:19'),
(20160304014842, '2016-03-04 06:19:25', '2016-03-04 06:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `numero_serie` varchar(100) NOT NULL,
  `codigo` int(11) NOT NULL,
  `modelo` varchar(150) NOT NULL,
  `caracteristicas` varchar(300) NOT NULL,
  `existencia` int(11) NOT NULL,
  `pre_compra` int(11) NOT NULL,
  `iva` decimal(10,0) NOT NULL,
  `por_venta` decimal(10,0) NOT NULL,
  `valor_sugerido` decimal(10,0) NOT NULL,
  `precio` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `modified` datetime NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `full` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `numero_serie`, `codigo`, `modelo`, `caracteristicas`, `existencia`, `pre_compra`, `iva`, `por_venta`, `valor_sugerido`, `precio`, `created`, `photo`, `dir`, `modified`, `empresa_id`, `marca_id`, `full`) VALUES
(1, '5879', 5454, '475546', 'lo mejor', 31, 0, '0', '0', '0', 5000, '2016-02-22 03:30:25', NULL, NULL, '2016-02-25 04:32:24', 0, 0, 'codigo y modelo 1'),
(2, '0001', 1, 'cara', 'asdasda´sd añsdñals   p´sadp´sad', 5, 0, '0', '0', '0', 2000, '2016-02-24 02:10:20', NULL, NULL, '2016-03-19 19:44:06', 1, 1, 'codigo y modelo 2'),
(3, '587988', 454554, '454554', 'lala', 7, 0, '0', '0', '0', 4000, '2016-03-02 04:23:37', NULL, NULL, '2016-03-30 04:22:29', 1, 1, 'codigo y modelo 3'),
(4, '008', 8, 'llave especial', 'asdas', 2, 0, '0', '0', '0', 8000, '2016-03-02 04:24:07', NULL, NULL, '2016-03-02 04:24:07', 1, 1, '8 del producto llave especial'),
(5, '0002', 40025, 'v-italy', 'los mejr de italio', 1, 3500, '12', '30', '5000', 5500, '2016-03-02 05:27:37', NULL, NULL, '2016-03-02 05:27:37', 1, 1, 'codigo y modelo 4'),
(6, '0222', 50003, 'mi modelo', 'es el mejor', 8997, 500, '12', '30', '710', 750, '2016-03-03 05:42:36', NULL, NULL, '2016-03-03 05:42:36', 1, 1, 'codigo y modelo 5'),
(7, '00025698', 456984, 'robot asesino', 'mata mcuho', 0, 20000, '12', '30', '28400', 30000, '2016-04-01 23:40:54', NULL, NULL, '2016-04-01 23:40:54', 1, 1, 'codigo y modelo 6'),
(8, '456546', 5465644, 'keyhere', 'asdadssadsadsad', 0, 4000, '12', '30', '5680', 6000, '2016-04-02 03:42:56', NULL, NULL, '2016-04-02 03:42:56', 1, 1, 'codigo y modelo 7'),
(9, '8', 8300, 'sueños', 'cxasdasdlñsdalñsañl', 28, 9000, '12', '30', '12780', 12800, '2016-04-06 04:09:09', NULL, NULL, '2016-04-06 04:09:09', 1, 1, 'sueños del producto 8300');

-- --------------------------------------------------------

--
-- Table structure for table `telefonos`
--

CREATE TABLE `telefonos` (
  `id` int(11) NOT NULL,
  `numero` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `otronumero` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `telefonos`
--

INSERT INTO `telefonos` (`id`, `numero`, `otronumero`, `cliente_id`, `created`, `modified`) VALUES
(1, '0114554', '245454', 15, '2016-04-07 02:41:19', '2016-04-07 02:41:19'),
(2, '0254', '', 16, '2016-04-07 03:48:07', '2016-04-07 03:48:07'),
(3, '4556', NULL, 13, '2016-04-07 04:15:34', '2016-04-07 04:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `username`, `email`, `password`, `role`, `created`, `modified`) VALUES
(1, 'Miguel', 'miguelhxc', 'miguelhxc37@gmail.com', '$2y$10$WuMV1mCf8/VPtj1kzNgXv.CI8BKr2YPK74HvclJzcqqK6Agyo4ipG', 'user', '2016-02-21 06:26:16', '2016-02-21 06:26:16'),
(2, 'wilfre', 'wilfrexD', 'asdasd@hotmail.es', '$2y$10$PzgWu2b1KI2GLMe6mrXLcu9fUQX2nOzDcyOcWasP4VmZcQyRWheri', 'admin', '2016-02-29 15:54:03', '2016-02-29 15:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `precio_u` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `descuento` varchar(2) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `rest` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ventatotales`
--

CREATE TABLE `ventatotales` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `tipopago` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `banco` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `espera` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `ventatotales`
--

INSERT INTO `ventatotales` (`id`, `total`, `cliente_id`, `tipopago`, `banco`, `espera`, `created`, `modified`) VALUES
(15, 8000, 1, 'efectivo', '', 0, '2016-04-05 01:49:09', '2016-04-05 01:49:09'),
(16, 12000, 1, 'efectivo', '', 0, '2016-04-05 02:28:33', '2016-04-05 02:28:33'),
(18, 30000, 1, 'efectivo', '', 0, '2016-04-05 02:39:00', '2016-04-05 02:39:00'),
(19, 8000, 1, 'efectivo', '', 0, '2016-04-05 03:55:21', '2016-04-05 03:55:21'),
(20, 8000, 8, 'efectivo', '', 0, '2016-04-05 03:58:38', '2016-04-05 03:58:38'),
(21, 4000, 1, 'efectivo', '', 0, '2016-04-06 03:02:28', '2016-04-06 03:02:28'),
(22, 26000, 1, 'efectivo', '', 0, '2016-04-07 01:38:50', '2016-04-07 01:38:50'),
(23, 51600, 1, 'efectivo', '', 0, '2016-04-08 03:16:55', '2016-04-08 03:16:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventatotales`
--
ALTER TABLE `ventatotales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ventatotales`
--
ALTER TABLE `ventatotales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
