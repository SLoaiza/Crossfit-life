-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2016 a las 23:07:54
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crossfitlife`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
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

CREATE TABLE `actividad_x_rutina` (
  `rut_cod` varchar(10) NOT NULL,
  `act_cod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `perm_cod` varchar(10) NOT NULL,
  `perm_nom` varchar(20) NOT NULL,
  `perm_fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_x_rol`
--

CREATE TABLE `permiso_x_rol` (
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

CREATE TABLE `plan` (
  `plan_cod` varchar(10) NOT NULL,
  `factura_cod` varchar(20) NOT NULL,
  `plan_precio` varchar(10) NOT NULL,
  `plan_desc` varchar(300) NOT NULL,
  `plan_dias` varchar(10) DEFAULT NULL,
  `plan_rango` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recurso_fisico`
--

CREATE TABLE `recurso_fisico` (
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

CREATE TABLE `rol` (
  `rol_cod` varchar(10) NOT NULL,
  `rol_nom` varchar(15) NOT NULL,
  `rol_fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE `rutina` (
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

CREATE TABLE `seguimiento` (
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

CREATE TABLE `usuario` (
  `usu_cod` varchar(15) NOT NULL,
  `plan_cod` varchar(10) NOT NULL,
  `rol_cod` varchar(10) NOT NULL,
  `usu_clave` varchar(12) NOT NULL,
  `usu_nom` varchar(50) NOT NULL,
  `usu_ape` varchar(50) NOT NULL,
  `usu_tel` varchar(20) NOT NULL,
  `usu_cel` varchar(20) NOT NULL,
  `usu_mail` varchar(40) NOT NULL,
  `usu_dir` varchar(30) DEFAULT NULL,
  `usu_estado` varchar(10) NOT NULL,
  `usu_nick` varchar(20) DEFAULT NULL,
  `usu_edad` int(11) NOT NULL,
  `usu_fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
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
