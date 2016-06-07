-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2016 a las 12:41:14
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crossfitlife-db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `act_cod` varchar(10) NOT NULL,
  `rec_cod` varchar(10) NOT NULL,
  `act_duracion` varchar(10) DEFAULT NULL,
  `act_seccion` char(5) DEFAULT NULL,
  `act_rep` char(5) DEFAULT NULL,
  `act_fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_x_rutina`
--

CREATE TABLE IF NOT EXISTS `actividad_x_rutina` (
  `rut_cod` varchar(10) NOT NULL,
  `act_cod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE IF NOT EXISTS `cita` (
  `cita_cod` varchar(15) NOT NULL,
  `usu_cod` varchar(10) NOT NULL,
  `nom_med` varchar(50) DEFAULT NULL,
  `cita_fecha` varchar(15) NOT NULL,
  `cita_hora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`cita_cod`, `usu_cod`, `nom_med`, `cita_fecha`, `cita_hora`) VALUES
('57163142547', '1023', NULL, '9 June, 2016', '13:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE IF NOT EXISTS `permiso` (
  `perm_cod` varchar(10) NOT NULL,
  `perm_nom` varchar(20) NOT NULL,
  `perm_fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_x_rol`
--

CREATE TABLE IF NOT EXISTS `permiso_x_rol` (
  `rol_cod` varchar(10) NOT NULL,
  `perm_cod` varchar(10) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `modulo` varchar(20) NOT NULL,
  `pxr_fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `plan_cod` varchar(10) NOT NULL,
  `factura_cod` varchar(20) NOT NULL,
  `plan_precio` varchar(10) NOT NULL,
  `plan_desc` varchar(300) NOT NULL,
  `plan_dias` varchar(10) DEFAULT NULL,
  `plan_rango` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`plan_cod`, `factura_cod`, `plan_precio`, `plan_desc`, `plan_dias`, `plan_rango`) VALUES
('1', '321654', '50000', 'Familiar 1 mes', '30', '30'),
('2', '456785', '36550', 'un mes', '30', '30'),
('3', '50457', '50000', '2 meses', '60', '60');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recurso_fisico`
--

CREATE TABLE IF NOT EXISTS `recurso_fisico` (
  `rec_cod` varchar(10) NOT NULL,
  `rec_nom` varchar(50) NOT NULL,
  `rec_img` varchar(255) DEFAULT NULL,
  `rec_desc` varchar(700) DEFAULT NULL,
  `rec_fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `rol_cod` varchar(10) NOT NULL,
  `rol_nom` varchar(15) NOT NULL,
  `rol_fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_cod`, `rol_nom`, `rol_fecha`) VALUES
('1', 'Administrador', '29/05/2016'),
('4', 'Cliente', '29-05-2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE IF NOT EXISTS `rutina` (
  `rut_cod` varchar(10) NOT NULL,
  `vlrcion_cod` varchar(10) NOT NULL,
  `rut_nom` varchar(30) NOT NULL,
  `rut_desc` varchar(500) NOT NULL,
  `rut_fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE IF NOT EXISTS `seguimiento` (
  `segui_cod` varchar(10) NOT NULL,
  `usu_cod` varchar(15) NOT NULL,
  `segui_modu` varchar(50) NOT NULL,
  `segui_accion` varchar(50) DEFAULT NULL,
  `segui_fecha` varchar(10) NOT NULL,
  `segui_hora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_cod` varchar(15) NOT NULL,
  `plan_cod` varchar(10) DEFAULT NULL,
  `rol_cod` varchar(10) NOT NULL,
  `usu_clave` varchar(12) NOT NULL,
  `usu_nom` varchar(50) NOT NULL,
  `usu_ape` varchar(50) NOT NULL,
  `usu_tel` varchar(20) DEFAULT NULL,
  `usu_cel` varchar(20) DEFAULT NULL,
  `usu_mail` varchar(40) DEFAULT NULL,
  `usu_dir` varchar(30) DEFAULT NULL,
  `usu_estado` varchar(10) NOT NULL,
  `usu_edad` int(11) DEFAULT NULL,
  `usu_fecha` date NOT NULL,
  `usu_plan_inicio` varchar(10) DEFAULT NULL,
  `usu_plan_fin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_cod`, `plan_cod`, `rol_cod`, `usu_clave`, `usu_nom`, `usu_ape`, `usu_tel`, `usu_cel`, `usu_mail`, `usu_dir`, `usu_estado`, `usu_edad`, `usu_fecha`, `usu_plan_inicio`, `usu_plan_fin`) VALUES
('1023', NULL, '1', '123456', 'jherson', 'vasco', NULL, NULL, NULL, NULL, 'Activo', NULL, '2016-05-29', NULL, NULL),
('3658', NULL, '4', '123456', 'juan', 'pelaez', '', '', '', '', 'Activo', 30, '2016-06-04', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_casual`
--

CREATE TABLE IF NOT EXISTS `usuario_casual` (
  `usu_cas_cod` varchar(10) NOT NULL,
  `usu_cas_nom` varchar(50) NOT NULL,
  `usu_cas_ape` varchar(50) NOT NULL,
  `usu_cas_tel` varchar(15) NOT NULL,
  `usu_cas_fecha` date NOT NULL,
  `usu_cas_hora` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_casual`
--

INSERT INTO `usuario_casual` (`usu_cas_cod`, `usu_cas_nom`, `usu_cas_ape`, `usu_cas_tel`, `usu_cas_fecha`, `usu_cas_hora`) VALUES
('1036660429', 'jherson', 'vasco', '3622204', '2016-06-01', '00:00:00'),
('1036660429', 'jherson', 'vasco', '3622204', '2016-06-04', '01:57:21'),
('1036660429', 'jherson', 'vasco', '3622204', '2016-06-03', '19:04:34'),
('1036660429', 'jherson', 'vasco', '3622204', '2016-06-03', '19:05:48'),
('1036660429', 'jherson', 'vasco', '3622204', '2016-06-03', '19:06:25'),
('1036660429', 'jherson', 'vasco', '3622204', '2016-06-03', '19:06:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE IF NOT EXISTS `valoracion` (
  `vlrcion_cod` varchar(10) NOT NULL,
  `usu_cod` varchar(15) NOT NULL,
  `vlrcion_peso` int(11) NOT NULL,
  `vlrcion_estatura` int(11) NOT NULL,
  `vlrcion_IMC` float NOT NULL,
  `vlrcion_clasificacion` varchar(30) NOT NULL,
  `vlrcion_recom` varchar(700) NOT NULL,
  `vlrcion_horasdi` varchar(10) NOT NULL,
  `vlrcion_diassem` varchar(1) NOT NULL,
  `vlrcion_fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`act_cod`),
  ADD KEY `rec_cod` (`rec_cod`);

--
-- Indices de la tabla `actividad_x_rutina`
--
ALTER TABLE `actividad_x_rutina`
  ADD PRIMARY KEY (`rut_cod`,`act_cod`),
  ADD KEY `act_cod` (`act_cod`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`cita_cod`),
  ADD KEY `usu_cod` (`usu_cod`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`perm_cod`);

--
-- Indices de la tabla `permiso_x_rol`
--
ALTER TABLE `permiso_x_rol`
  ADD PRIMARY KEY (`perm_cod`,`rol_cod`),
  ADD KEY `rol_cod` (`rol_cod`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`plan_cod`);

--
-- Indices de la tabla `recurso_fisico`
--
ALTER TABLE `recurso_fisico`
  ADD PRIMARY KEY (`rec_cod`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_cod`);

--
-- Indices de la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD PRIMARY KEY (`rut_cod`),
  ADD KEY `vlrcion_cod` (`vlrcion_cod`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`segui_cod`),
  ADD KEY `usu_cod` (`usu_cod`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_cod`),
  ADD KEY `rol_cod` (`rol_cod`),
  ADD KEY `plan_cod` (`plan_cod`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`vlrcion_cod`),
  ADD KEY `usu_cod` (`usu_cod`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`rec_cod`) REFERENCES `recurso_fisico` (`rec_cod`);

--
-- Filtros para la tabla `actividad_x_rutina`
--
ALTER TABLE `actividad_x_rutina`
  ADD CONSTRAINT `actividad_x_rutina_ibfk_1` FOREIGN KEY (`rut_cod`) REFERENCES `rutina` (`rut_cod`),
  ADD CONSTRAINT `actividad_x_rutina_ibfk_2` FOREIGN KEY (`act_cod`) REFERENCES `actividad` (`act_cod`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`);

--
-- Filtros para la tabla `permiso_x_rol`
--
ALTER TABLE `permiso_x_rol`
  ADD CONSTRAINT `permiso_x_rol_ibfk_1` FOREIGN KEY (`rol_cod`) REFERENCES `rol` (`rol_cod`),
  ADD CONSTRAINT `permiso_x_rol_ibfk_2` FOREIGN KEY (`perm_cod`) REFERENCES `permiso` (`perm_cod`);

--
-- Filtros para la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD CONSTRAINT `rutina_ibfk_1` FOREIGN KEY (`vlrcion_cod`) REFERENCES `valoracion` (`vlrcion_cod`);

--
-- Filtros para la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD CONSTRAINT `seguimiento_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_cod`) REFERENCES `rol` (`rol_cod`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`plan_cod`) REFERENCES `plan` (`plan_cod`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
