-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2023 a las 06:01:21
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
(19, 20, 'ARRIETA', 0, 0, '2023-08-07 16:57:03', '', '', '', '', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', '', '', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(20, 20, 'arriera corzo', 0, 0, '2023-08-07 17:23:52', '', '', '', '', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', '', '', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(21, 23, 'Duarte', 0, 0, '2023-08-17 01:02:33', 'Propia, totalmente pagada', '3', '4', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Inodoro sin conexión', 'No Aplica', 'No Aplica', 'No Aplica', 'No', 'No', 'No', 'No', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', 'No Aplica', '2023-08-18 03:30:44', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `individuo`
--

CREATE TABLE `individuo` (
  `id_indi` int(11) NOT NULL,
  `id_familia` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `tip_doc` varchar(50) NOT NULL,
  `num_doc` varchar(20) NOT NULL,
  `nacionalidad` varchar(60) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `otra_nac` varchar(50) DEFAULT NULL,
  `otro_sex` varchar(50) DEFAULT NULL,
  `fec_naci` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `individuo`
--

INSERT INTO `individuo` (`id_indi`, `id_familia`, `full_name`, `tip_doc`, `num_doc`, `nacionalidad`, `sexo`, `otra_nac`, `otro_sex`, `fec_naci`, `created_at`) VALUES
(14, 19, 'samuel', 'cedula', '2327398', 'colombia', 'masculino', NULL, NULL, '2023-08-09', '2023-08-07 17:16:40'),
(15, 20, 'CAMILO', '1', '8765432', 'COL', 'M', '', '', '2023-08-02', '2023-08-07 17:24:34');

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
(4, '131231', 'samuel', 'arriola', 'sarriolam21@curnvirtual.edu.co', '$2y$10$XjDS5ZVJbL9PJ22lGpeyG.9kFH5QLhT2PGp60pexAKsBIPY59ELQO', 'Admin', 1, NULL),
(5, '21213', 'samuel', 'morales b', 'sarriolam21@curnvirtual.edu.co', '$2y$10$lwqaxlWZHmQerCSUDNwi5el6HeTBItSEf3MmLDR0X8hzO4y8UmQ3O', 'Promotor', 1, '2023-06-18 20:40:02'),
(8, '1212', 'samuel ', 'Promotor', 'arriolamorales52@gmail.com', '$2y$10$ftNy4Zv0ggWlSjBWTFG/xu4algojZJy6Q/ull9KCUXR20ZTXkUm7i', 'Promotor', 1, '2023-07-18 02:42:11');

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
(20, 'Arteaga', 4, '2023-08-07 16:20:50', 'Otro', 'Sin paredes', 'Tierra, arena', 'No', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '[\"Invasión del espacio público\",\"Presencia de animales que causan molestias\"]', '', '', '', '', '', '', '', '', '2', '2023-08-07 17:28:45', 1),
(21, 'ARRIETA PRUEBA', 4, '2023-08-07 17:37:26', 'Casa', 'Madera burda, tabla, tablón', 'Mármol', 'No', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '[\"Ruidos molestos provenientes del exterior\"]', '', '', '', '', '', '', '', '', '24', '2023-08-07 17:37:47', 1),
(22, 'Prueba 1', 4, '2023-08-08 22:39:24', 'Apartamento', 'Material prefabricado', 'Madera pulida y lacada, parqué', 'No', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '[\"Ruidos molestos provenientes del exterior\",\"Malos olores procedentes del exterior\"]', '', '', '', '', '', '', '', '', '2', '2023-08-08 22:44:09', 1),
(23, 'prueba 2', 4, '2023-08-08 22:47:39', 'Casa', 'Material prefabricado', 'Cemento, gravilla', 'No', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '[\"Invasión del espacio público\"]', '', '', '', '', '', '', '', '', '12323', '2023-08-09 00:55:09', 0),
(24, 'casa 1', 4, '2023-08-09 00:57:10', 'Otro', 'Sin paredes', 'Tierra, arena', 'No', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No Aplica', 'No', 'No', 'Ningu', 'Si', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'Si', 'Si', 'No', '[\"Presencia de insectos, roedores\"]', '', '', '', '', '', '', '', '', '22', '2023-08-11 02:02:36', 1),
(25, '123', 4, '2023-08-09 01:06:22', 'Apartamento', 'Bahareque revocado', 'Madera burda, tabla, tablón, otro vegetal', 'No', 'No', 'No Aplica', 'Si', '10', 'Si', '11', 'Si', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'Si', 'Si', 'No', 'No', 'No', 'Si', '[\"Presencia de basuras en las calles, caminos, senderos y espacios públicos\"]', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', '12', '2023-08-11 03:32:19', 0);

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
  MODIFY `id_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `individuo`
--
ALTER TABLE `individuo`
  MODIFY `id_indi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `id_vivienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
