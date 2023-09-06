-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2023 a las 02:24:18
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
-- Base de datos: `encuesta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hogar`
--

CREATE TABLE `hogar` (
  `id_familia` int(11) NOT NULL,
  `id_vivienda` int(11) NOT NULL,
  `referencia` varchar(150) NOT NULL,
  `activa` tinyint(1) NOT NULL DEFAULT 0,
  `Creado_por` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `E2P1` varchar(50) DEFAULT 'No Aplica',
  `E2P2` varchar(10) DEFAULT 'No Aplica',
  `E2P3` varchar(10) DEFAULT 'No Aplica',
  `E2P4` varchar(75) DEFAULT 'No Aplica',
  `E2P4_PDRE` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E2P4_PTRO` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E2P4_ABU` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E2P4_TIO` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E2P4_HER` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E2P4_PRI` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E2P4_OTR` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E2P4_NO_P_HOG` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E2P5` varchar(75) DEFAULT 'No Aplica',
  `E2P6` varchar(75) DEFAULT 'No Aplica',
  `E2P7` varchar(78) DEFAULT 'No Aplica',
  `E2P8` varchar(75) DEFAULT 'No Aplica',
  `E2P9_NIN` varchar(10) DEFAULT 'No',
  `E2P9_LMANO` varchar(10) DEFAULT 'No',
  `E2P9_LDEO` varchar(10) DEFAULT 'No',
  `E2P9_LPLTO` varchar(10) DEFAULT 'No',
  `E2P10` varchar(75) DEFAULT 'No Aplica',
  `E2P11` varchar(50) DEFAULT 'No Aplica',
  `E2P12` varchar(10) DEFAULT 'No Aplica',
  `E2P13` varchar(10) DEFAULT 'No Aplica',
  `E2P14` varchar(50) DEFAULT 'No Aplica',
  `E2P15` varchar(50) DEFAULT 'No Aplica',
  `create_ev_at` timestamp NULL DEFAULT NULL,
  `E2Finalizado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hogar`
--

INSERT INTO `hogar` (`id_familia`, `id_vivienda`, `referencia`, `activa`, `Creado_por`, `create_at`, `E2P1`, `E2P2`, `E2P3`, `E2P4`, `E2P4_PDRE`, `E2P4_PTRO`, `E2P4_ABU`, `E2P4_TIO`, `E2P4_HER`, `E2P4_PRI`, `E2P4_OTR`, `E2P4_NO_P_HOG`, `E2P5`, `E2P6`, `E2P7`, `E2P8`, `E2P9_NIN`, `E2P9_LMANO`, `E2P9_LDEO`, `E2P9_LPLTO`, `E2P10`, `E2P11`, `E2P12`, `E2P13`, `E2P14`, `E2P15`, `create_ev_at`, `E2Finalizado`) VALUES
(34, 33, 'samuel a 01', 0, 0, '2023-09-02 01:59:28', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No', 'No', 'No', 'No', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', NULL, 0),
(36, 36, '#002-1', 0, 0, '2023-09-02 21:58:34', 'Propia, la están pagando', '23', '23', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'Inodoro conectado a alcantarillado', 'Dentro de la vivienda', 'No Aplica', 'No Aplica', 'No', 'No', 'No', 'No', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', '2023-09-02 21:58:56', 1),
(37, 35, '0002', 0, 0, '2023-09-02 22:07:41', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No', 'No', 'No', 'No', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', NULL, 0),
(38, 37, 'SA', 0, 0, '2023-09-04 02:11:33', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No', 'No', 'No', 'No', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', NULL, 0),
(39, 38, 'H001', 0, 0, '2023-09-04 22:24:02', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No', 'No', 'No', 'No', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `individuo`
--

CREATE TABLE `individuo` (
  `id_indi` int(11) NOT NULL,
  `id_familia` int(11) NOT NULL,
  `nombre1` varchar(50) NOT NULL,
  `nombre2` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `tip_doc` varchar(50) NOT NULL,
  `num_doc` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `E3P4` varchar(50) NOT NULL,
  `fec_naci` date NOT NULL,
  `E3P6` varchar(20) NOT NULL,
  `E3P6_1` varchar(30) NOT NULL,
  `E3P6_2` varchar(30) NOT NULL,
  `E3P7` varchar(20) NOT NULL,
  `E3P8` varchar(10) NOT NULL,
  `E3P8_PUN` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E3P9` varchar(80) NOT NULL,
  `E3P10` varchar(100) NOT NULL,
  `E3P10_1` varchar(10) NOT NULL,
  `E3P10_2` varchar(10) NOT NULL,
  `E3P10_3` varchar(10) NOT NULL,
  `E3P10_4` varchar(10) NOT NULL,
  `E3P10_5` varchar(10) NOT NULL,
  `E3P10_6` varchar(10) NOT NULL,
  `E3P10_7` varchar(10) NOT NULL,
  `E3P10_8` varchar(10) NOT NULL,
  `E3P10_9` varchar(70) NOT NULL,
  `E3P10_10` varchar(10) NOT NULL,
  `E3P10_11` varchar(10) NOT NULL,
  `E3P10_12` varchar(10) NOT NULL,
  `E3P11_VID` varchar(10) NOT NULL,
  `E3P11_ING` varchar(10) NOT NULL,
  `E3P11_SAL` varchar(10) NOT NULL,
  `E3P11_SEG` varchar(10) NOT NULL,
  `E3P11_TRA` varchar(10) NOT NULL,
  `E3P11_TIE` varchar(10) NOT NULL,
  `E3P12` varchar(15) NOT NULL,
  `E3SP1` varchar(15) NOT NULL,
  `E3SP2` varchar(30) NOT NULL,
  `E3SP3` varchar(30) NOT NULL,
  `E3SP4` varchar(50) NOT NULL,
  `E3SP5` varchar(50) NOT NULL,
  `E3SP6` varchar(30) NOT NULL,
  `E3SP7` varchar(15) NOT NULL,
  `E3SP8` varchar(15) NOT NULL,
  `E3SP9_1` varchar(15) NOT NULL,
  `E3SP9_2` varchar(15) NOT NULL,
  `E3SP9_3` varchar(15) NOT NULL,
  `E3SP10_1` varchar(15) NOT NULL,
  `E3SP10_2` varchar(15) NOT NULL,
  `E3SP11` varchar(15) NOT NULL,
  `E3SP12` varchar(140) NOT NULL,
  `E3SP13` varchar(15) NOT NULL,
  `E3SP13_1` varchar(15) NOT NULL,
  `E3SP14` varchar(15) NOT NULL,
  `E3SP15_FIS` varchar(15) NOT NULL,
  `E3SP15_AUD` varchar(15) NOT NULL,
  `E3SP15_VIS` varchar(15) NOT NULL,
  `E3SP15_COG` varchar(15) NOT NULL,
  `E3SP15_PSI` varchar(15) NOT NULL,
  `E3SP15_MUL` varchar(15) NOT NULL,
  `E3SP15_SOR` varchar(15) NOT NULL,
  `E3SP16_1` varchar(15) NOT NULL,
  `E3SP16_2` varchar(15) NOT NULL,
  `E3SP16_3` varchar(15) NOT NULL,
  `E3SP16_4` varchar(15) NOT NULL,
  `E3SP16_5` varchar(15) NOT NULL,
  `E3SP16_6` varchar(15) NOT NULL,
  `E3SP16_7` varchar(15) NOT NULL,
  `E3SP16_8` varchar(15) NOT NULL,
  `E3SP_OBS1` text NOT NULL,
  `E3SP17` varchar(15) NOT NULL,
  `E3SP17_1` int(15) NOT NULL,
  `E3SP17_2` varchar(15) NOT NULL,
  `E3SP18` varchar(15) NOT NULL,
  `E3SP18_1` varchar(15) NOT NULL,
  `E3SP19` varchar(15) NOT NULL,
  `E3SP20` varchar(15) NOT NULL,
  `E3SP_OBS2` text NOT NULL,
  `eie_p1` varchar(15) NOT NULL,
  `eie_p2` varchar(15) NOT NULL,
  `eie_p2_1` varchar(70) NOT NULL,
  `eie_p3` varchar(100) NOT NULL,
  `eie_p4` varchar(70) NOT NULL,
  `eie_p5` varchar(70) NOT NULL,
  `eie_p6` varchar(15) NOT NULL,
  `eie_p7` varchar(100) NOT NULL,
  `EIT_P1` varchar(50) NOT NULL,
  `EIT_P2` varchar(15) NOT NULL,
  `EIT_P3` varchar(15) NOT NULL,
  `EIT_P4` varchar(15) NOT NULL,
  `EIT_P5` varchar(40) NOT NULL,
  `EIT_P6` varchar(15) NOT NULL,
  `EIT_P7` varchar(15) NOT NULL,
  `EIT_P8_1` varchar(15) NOT NULL,
  `EIT_P8_2` varchar(16) NOT NULL,
  `EIT_P8_3` varchar(15) NOT NULL,
  `EIT_P8_4` varchar(15) NOT NULL,
  `EIT_P8_5` varchar(15) NOT NULL,
  `EIT_P8_6` varchar(15) NOT NULL,
  `EIT_P8_7` varchar(15) NOT NULL,
  `EIT_P9_1` varchar(15) NOT NULL,
  `EIT_P9_2` varchar(15) NOT NULL,
  `EIT_P10` varchar(15) NOT NULL,
  `EIT_P11` varchar(15) NOT NULL,
  `EIT_P12` varchar(15) NOT NULL,
  `EIT_P13` varchar(15) NOT NULL,
  `EIT_P14` varchar(15) NOT NULL,
  `EIT_P15` varchar(30) NOT NULL,
  `EIT_P16` varchar(15) NOT NULL,
  `EIT_P17` varchar(15) NOT NULL,
  `EIT_P17_1` varchar(15) NOT NULL,
  `EIT_P18` varchar(15) NOT NULL,
  `EIT_P18_1` varchar(15) NOT NULL,
  `EIT_P19` varchar(15) NOT NULL,
  `EIT_P19_1` varchar(15) NOT NULL,
  `EIT_P20` varchar(15) NOT NULL,
  `EIT_P20_1` varchar(15) NOT NULL,
  `EIT_P21` varchar(15) NOT NULL,
  `EIT_P21_1` varchar(15) NOT NULL,
  `EIT_PObs` text NOT NULL,
  `EIM_P1` varchar(30) NOT NULL,
  `EIM_P2` varchar(20) NOT NULL,
  `EIM_P3` varchar(20) NOT NULL,
  `EIM_P4` varchar(40) NOT NULL,
  `EIM_P5` varchar(30) NOT NULL,
  `EIM_P6` varchar(30) NOT NULL,
  `EIM_P7` varchar(30) NOT NULL,
  `EIM_P8_1` varchar(30) NOT NULL,
  `EIM_P8_2` varchar(20) NOT NULL,
  `EIM_P8_3` varchar(20) NOT NULL,
  `EIM_P8_4` varchar(20) NOT NULL,
  `EIM_P8_5` varchar(20) NOT NULL,
  `EIM_P8_6` varchar(20) NOT NULL,
  `EIM_P8_7` varchar(20) NOT NULL,
  `EIM_P8_8` varchar(20) NOT NULL,
  `EIM_P8_9` varchar(20) NOT NULL,
  `EIM_P8_10` varchar(20) NOT NULL,
  `EIM_P8_11` varchar(20) NOT NULL,
  `EIM_P9` varchar(30) NOT NULL,
  `EIM_P10` varchar(30) NOT NULL,
  `EIM_P11` varchar(30) NOT NULL,
  `EIM_P12` varchar(30) NOT NULL,
  `EIM_P13` varchar(30) NOT NULL,
  `EIM_P14` varchar(30) NOT NULL,
  `EIM_P15` varchar(30) NOT NULL,
  `create_ei_at` timestamp NULL DEFAULT NULL,
  `E3Finalizado` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `individuo`
--

INSERT INTO `individuo` (`id_indi`, `id_familia`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `tip_doc`, `num_doc`, `created_at`, `E3P4`, `fec_naci`, `E3P6`, `E3P6_1`, `E3P6_2`, `E3P7`, `E3P8`, `E3P8_PUN`, `E3P9`, `E3P10`, `E3P10_1`, `E3P10_2`, `E3P10_3`, `E3P10_4`, `E3P10_5`, `E3P10_6`, `E3P10_7`, `E3P10_8`, `E3P10_9`, `E3P10_10`, `E3P10_11`, `E3P10_12`, `E3P11_VID`, `E3P11_ING`, `E3P11_SAL`, `E3P11_SEG`, `E3P11_TRA`, `E3P11_TIE`, `E3P12`, `E3SP1`, `E3SP2`, `E3SP3`, `E3SP4`, `E3SP5`, `E3SP6`, `E3SP7`, `E3SP8`, `E3SP9_1`, `E3SP9_2`, `E3SP9_3`, `E3SP10_1`, `E3SP10_2`, `E3SP11`, `E3SP12`, `E3SP13`, `E3SP13_1`, `E3SP14`, `E3SP15_FIS`, `E3SP15_AUD`, `E3SP15_VIS`, `E3SP15_COG`, `E3SP15_PSI`, `E3SP15_MUL`, `E3SP15_SOR`, `E3SP16_1`, `E3SP16_2`, `E3SP16_3`, `E3SP16_4`, `E3SP16_5`, `E3SP16_6`, `E3SP16_7`, `E3SP16_8`, `E3SP_OBS1`, `E3SP17`, `E3SP17_1`, `E3SP17_2`, `E3SP18`, `E3SP18_1`, `E3SP19`, `E3SP20`, `E3SP_OBS2`, `eie_p1`, `eie_p2`, `eie_p2_1`, `eie_p3`, `eie_p4`, `eie_p5`, `eie_p6`, `eie_p7`, `EIT_P1`, `EIT_P2`, `EIT_P3`, `EIT_P4`, `EIT_P5`, `EIT_P6`, `EIT_P7`, `EIT_P8_1`, `EIT_P8_2`, `EIT_P8_3`, `EIT_P8_4`, `EIT_P8_5`, `EIT_P8_6`, `EIT_P8_7`, `EIT_P9_1`, `EIT_P9_2`, `EIT_P10`, `EIT_P11`, `EIT_P12`, `EIT_P13`, `EIT_P14`, `EIT_P15`, `EIT_P16`, `EIT_P17`, `EIT_P17_1`, `EIT_P18`, `EIT_P18_1`, `EIT_P19`, `EIT_P19_1`, `EIT_P20`, `EIT_P20_1`, `EIT_P21`, `EIT_P21_1`, `EIT_PObs`, `EIM_P1`, `EIM_P2`, `EIM_P3`, `EIM_P4`, `EIM_P5`, `EIM_P6`, `EIM_P7`, `EIM_P8_1`, `EIM_P8_2`, `EIM_P8_3`, `EIM_P8_4`, `EIM_P8_5`, `EIM_P8_6`, `EIM_P8_7`, `EIM_P8_8`, `EIM_P8_9`, `EIM_P8_10`, `EIM_P8_11`, `EIM_P9`, `EIM_P10`, `EIM_P11`, `EIM_P12`, `EIM_P13`, `EIM_P14`, `EIM_P15`, `create_ei_at`, `E3Finalizado`) VALUES
(35, 36, 'Samuel ', '', 'arriola ', 'Morale', 'RC', '10029181918', '2023-09-02 21:59:31', 'Jefe (a) del hogar', '2023-09-28', 'M', 'Hombres', 'Otro', 'COL', 'Si', 'B', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', '                                            ', 'No aplica', 0, 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', '                                            ', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', '', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', '                                            ', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', 'No aplica', '2023-09-02 21:59:53', 1),
(36, 38, 'W', '2', '3', '5', 'RC', '2323', '2023-09-04 02:11:46', '', '0000-00-00', '', '', '', '', '', 'No Aplica', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `iden` varchar(20) NOT NULL,
  `name_u` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `mail` varchar(300) NOT NULL,
  `password_u` varchar(100) DEFAULT NULL,
  `Tipo_u` varchar(30) NOT NULL DEFAULT 'Promotor',
  `estado` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1:activo 2:inhabilitado',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `iden`, `name_u`, `last_name`, `mail`, `password_u`, `Tipo_u`, `estado`, `created_at`) VALUES
(8, '1212', 'samuel ', 'Promotor', 'arriolamorales52@gmail.com', '$2y$10$ftNy4Zv0ggWlSjBWTFG/xu4algojZJy6Q/ull9KCUXR20ZTXkUm7i', 'Promotor', 1, '2023-07-18 02:42:11'),
(9, '2433', 'sarriolam21@curnvirtual.edu.co', 'samuel e arriola', 'sarriolam21@curnvirtual.edu.co', '$2y$10$CgF/NnPkYODrTbyuZf6QMO6cXbUpc.lzK3saBO7jyRrFS3UMjFpKq', 'Admin', 1, '2023-09-02 21:45:32'),
(10, '123', 'Admin ', 'Admin ', 'admin@gamil.com', '$2y$10$cy6LJGALCEl57WtQ1R16K.thlfDPWyLpiVXl8I6QPOxPPYJTzd6ou', 'Admin', 1, '2023-09-04 19:15:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `id_vivienda` int(11) NOT NULL,
  `referencia` varchar(150) NOT NULL,
  `Creado_por` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `E1P1` varchar(50) NOT NULL,
  `E1P2` varchar(50) NOT NULL,
  `E1P3` varchar(50) NOT NULL,
  `E1P4_ACU` varchar(5) NOT NULL DEFAULT 'No',
  `E1P4_ALC` varchar(5) NOT NULL DEFAULT 'No',
  `E1P4_ACU_EST` varchar(10) DEFAULT 'No Aplica',
  `E1P4_BAS` varchar(5) DEFAULT 'No',
  `E1P4_BAS_VEC` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E1P4_ENE` varchar(5) NOT NULL DEFAULT 'No',
  `E1P4_ENE_EST` varchar(10) NOT NULL DEFAULT 'No Aplica',
  `E1P4_GAS` varchar(5) NOT NULL DEFAULT 'No',
  `E1P4_INT` varchar(5) NOT NULL DEFAULT 'No',
  `E1P4_NIN` varchar(10) NOT NULL DEFAULT 'No',
  `E1P5_HUM` varchar(5) NOT NULL,
  `E1P5_CAL_E` varchar(5) NOT NULL,
  `E1P5_MAL_V` varchar(5) NOT NULL,
  `E1P5_COC_L` varchar(5) NOT NULL,
  `E1P5_MAL_I` varchar(5) NOT NULL,
  `E1P5_COD_D` varchar(5) NOT NULL,
  `E1P5_TAL_NE` varchar(5) NOT NULL,
  `E1P5_GOT_T` varchar(5) NOT NULL,
  `E1P5_GRI_P` varchar(5) NOT NULL,
  `E1P6_PER` varchar(5) NOT NULL,
  `E1P6_GAT` varchar(5) NOT NULL,
  `E1P6_AVE` varchar(5) NOT NULL,
  `E1P6_MON` varchar(5) NOT NULL,
  `E1P6_OTR` varchar(5) NOT NULL,
  `E1P6_NIN` varchar(5) NOT NULL,
  `E1P7_COM` varchar(5) NOT NULL,
  `E1P7_NEG` varchar(5) NOT NULL,
  `E1P7_ADO` varchar(5) NOT NULL,
  `E1P8` varchar(250) NOT NULL,
  `E1P8_RUI` varchar(5) NOT NULL,
  `E1P8_OLO` varchar(5) NOT NULL,
  `E1P8_BAS` varchar(5) NOT NULL,
  `E1P8_CON_A` varchar(5) NOT NULL,
  `E1P8_CON_RIO` varchar(5) NOT NULL,
  `E1P8_INV` varchar(5) NOT NULL,
  `E1P8_ANI` varchar(5) NOT NULL,
  `E1P8_INC` varchar(5) NOT NULL,
  `E1P9` varchar(19) NOT NULL,
  `create_ev_at` timestamp NULL DEFAULT NULL,
  `E1Finalizado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=COMPRESSED;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`id_vivienda`, `referencia`, `Creado_por`, `created_at`, `E1P1`, `E1P2`, `E1P3`, `E1P4_ACU`, `E1P4_ALC`, `E1P4_ACU_EST`, `E1P4_BAS`, `E1P4_BAS_VEC`, `E1P4_ENE`, `E1P4_ENE_EST`, `E1P4_GAS`, `E1P4_INT`, `E1P4_NIN`, `E1P5_HUM`, `E1P5_CAL_E`, `E1P5_MAL_V`, `E1P5_COC_L`, `E1P5_MAL_I`, `E1P5_COD_D`, `E1P5_TAL_NE`, `E1P5_GOT_T`, `E1P5_GRI_P`, `E1P6_PER`, `E1P6_GAT`, `E1P6_AVE`, `E1P6_MON`, `E1P6_OTR`, `E1P6_NIN`, `E1P7_COM`, `E1P7_NEG`, `E1P7_ADO`, `E1P8`, `E1P8_RUI`, `E1P8_OLO`, `E1P8_BAS`, `E1P8_CON_A`, `E1P8_CON_RIO`, `E1P8_INV`, `E1P8_ANI`, `E1P8_INC`, `E1P9`, `create_ev_at`, `E1Finalizado`) VALUES
(30, 'Samuel', 8, '2023-09-02 01:52:12', '', '', '', 'No', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(33, 'samue a', 8, '2023-09-02 01:59:13', '', '', '', 'No', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(34, '#001', 9, '2023-09-02 21:52:19', 'Vivienda tradicional indigena', 'Bloque, ladrillo, piedra, madera pulida', 'Madera pulida y lacada, parqué', 'No', 'Si', 'No Aplica', 'Si', '43', 'No', 'No Aplica', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '2023-09-02 21:56:32', 1),
(35, '#002', 9, '2023-09-02 21:57:45', 'Otro', 'Bloque, ladrillo, piedra, madera pulida', 'Mármol', 'No', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '2023-09-02 21:58:15', 1),
(36, '#002', 9, '2023-09-02 21:57:54', '', '', '', 'No', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(37, 'NUEVO 001', 8, '2023-09-02 22:44:49', '', '', '', 'No', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(38, 'V001', 10, '2023-09-04 22:22:42', 'Cuarto(s)', 'Bahareque sin revocar', 'Madera pulida y lacada, parqué', 'Si', 'Si', '0', 'Si', '1', 'Si', '0', 'No', 'No', 'No', 'Si', 'Si', 'Si', 'No', 'Si', 'Si', 'No', 'No', 'No', 'Si', 'No', 'Si', 'No', 'No', 'No', 'Si', 'Si', 'No', '', 'Si', 'Si', 'Si', 'No', 'No', 'No', 'No', 'No', '2', '2023-09-04 22:23:51', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hogar`
--
ALTER TABLE `hogar`
  ADD PRIMARY KEY (`id_familia`),
  ADD KEY `id_casa` (`id_vivienda`);

--
-- Indices de la tabla `individuo`
--
ALTER TABLE `individuo`
  ADD PRIMARY KEY (`id_indi`),
  ADD KEY `id_casa` (`id_familia`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`id_vivienda`),
  ADD KEY `Creado_por` (`Creado_por`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hogar`
--
ALTER TABLE `hogar`
  MODIFY `id_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `individuo`
--
ALTER TABLE `individuo`
  MODIFY `id_indi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `id_vivienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hogar`
--
ALTER TABLE `hogar`
  ADD CONSTRAINT `hogar_ibfk_1` FOREIGN KEY (`id_vivienda`) REFERENCES `vivienda` (`id_vivienda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `individuo`
--
ALTER TABLE `individuo`
  ADD CONSTRAINT `individuo_ibfk_1` FOREIGN KEY (`id_familia`) REFERENCES `hogar` (`id_familia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD CONSTRAINT `vivienda_ibfk_1` FOREIGN KEY (`Creado_por`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
