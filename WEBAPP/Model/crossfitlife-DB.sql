-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2016 a las 21:48:56
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

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
  `act_cod` varchar(10) NOT NULL,
  `act_rut_dia` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
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
('166281160415', '9874', NULL, '2016/06/30', '1:00 PM'),
('166282110736', '7410', NULL, '2016/06/30', '4:15 PM'),
('166287164932', '5689', NULL, '2016/06/28', '5:00 PM'),
('166289164640', '9632', NULL, '2016/06/28', '4:00 PM'),
('16712103222', '1425', NULL, '2016/07/01', '1:00 PM'),
('16713141610', '9874', NULL, '2016/07/01', '8:40 PM'),
('16717102228', '4589', NULL, '2016/07/01', '11:00 AM'),
('16717103101', '3658', NULL, '2016/07/01', '12:00 PM'),
('16725095219', '8563', NULL, '2016/07/02', '10:00 AM'),
('16762230414', '7410', NULL, '2016/07/06', '12:00 PM'),
('16763225230', '1593', NULL, '2016/07/06', '11:00 PM'),
('16765230922', '4567', NULL, '2016/07/06', '12:00 PM'),
('16766225804', '7410', NULL, '2016/07/06', '12:00 PM'),
('16767225142', '8563', NULL, '2016/07/06', '11:00 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_usu`
--

CREATE TABLE `ingreso_usu` (
  `ingr_cod` varchar(15) NOT NULL,
  `usu_cod` varchar(15) NOT NULL,
  `ingr_fecha` varchar(10) NOT NULL,
  `ingr_hora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingreso_usu`
--

INSERT INTO `ingreso_usu` (`ingr_cod`, `usu_cod`, `ingr_fecha`, `ingr_hora`) VALUES
('160628044055', '1425', '2016-06-28', '16:40:55'),
('160628044252', '3658', '2016-06-28', '16:42:52'),
('160628104004', '1425', '2016-06-27', '10:40:04'),
('160628104106', '1425', '2016-06-28', '10:41:06'),
('160628124136', '1425', '2016-06-28', '12:41:36'),
('160701021530', '4589', '2016-07-01', '14:15:30'),
('160701101234', '3658', '2016-07-01', '10:12:34'),
('160701101954', '4589', '2016-07-01', '10:19:54'),
('160701102115', '1425', '2016-07-01', '10:21:15'),
('160701112111', '7410', '2016-07-01', '23:21:11'),
('160702012628', '9632', '2016-07-02', '13:26:28'),
('160702041229', '1425', '2016-07-02', '16:12:29'),
('160702041348', '3658', '2016-07-02', '16:13:48'),
('160702093621', '7410', '2016-07-02', '09:36:21'),
('160705101722', '3658', '2016-07-05', '22:17:22'),
('160706031241', '1425', '2016-07-06', '15:12:41'),
('160706042250', '3658', '2016-07-06', '16:22:50'),
('160706095443', '8695', '2016-07-06', '09:54:43');

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

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`plan_cod`, `factura_cod`, `plan_precio`, `plan_desc`, `plan_dias`, `plan_rango`) VALUES
('0', '0', '0', '-Ninguno-', '0', '0'),
('1', '321654', '50000', 'Familiar 1 mes', '30', '30'),
('2', '456785', '36550', 'un mes', '30', '30'),
('3', '50457', '50000', '2 meses', '60', '60'),
('4', '321654', '60000', '3 meses', '90', '90');

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

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_cod`, `rol_nom`, `rol_fecha`) VALUES
('1', 'Administrador', '29/05/2016'),
('2', 'Recepcionista', '2016-07-03'),
('4', 'Cliente', '29-05-2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE `rutina` (
  `rut_cod` varchar(10) NOT NULL,
  `rut_nom` varchar(30) NOT NULL,
  `rut_desc` varchar(500) NOT NULL,
  `rut_fecha` varchar(10) NOT NULL,
  `usu_cod` varchar(15) NOT NULL
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

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`segui_cod`, `usu_cod`, `segui_modu`, `segui_accion`, `segui_fecha`, `segui_hora`) VALUES
('1', '1023', 'usuario', 'agregar usuario', '2016-07-03', '00:47'),
('2', '1023', 'cita', 'Asignar cita medica', '2016-07-03', '00:47'),
('3', '3917', 'ingreso_usu', 'ingreso usuario', '2016-07-03', '00:55'),
('4', '3917', 'ingreso_usu', 'ingreso usuario', '2016-07-03', '00:56'),
('5', '1023', '3', '4', '5', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_cod` varchar(15) NOT NULL,
  `plan_cod` varchar(10) DEFAULT NULL,
  `rol_cod` varchar(10) NOT NULL,
  `usu_clave` varchar(255) NOT NULL,
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
('1023', '0', '1', '$2y$10$o1ofYKVF3qLK/R/E..eC9.2HsMrh86Q.E4z4WZrj3AOxAgfw04tru', 'jherson', 'vasco', ' ', ' ', ' ', ' ', 'Activo', 15, '2016-05-29', ' ', ' '),
('1425', '2', '4', '$2y$10$WKUvCWosMocfkt6.TxVYQ.j3j4NCvWAq7It2Mf498mhOhmR8BO832', 'juan andres ', 'pelaez', 'NaN', '3216568712', 'correo@gmail.com', 'cra 50 # 45b 15', 'Activo', 20, '2016-06-14', '14 June, 2', '14 July, 2'),
('1593', '2', '4', '$2y$10$pynTlrIAcaTBKnB5O3.Juu9A46NdClwyGHq3hGaFu0ZzZrlKdssVO', 'camilo', 'perez ochoa', '3622204', '3216549874', 'correo@gmail.com', 'cra 49 # 87 15', 'Activo', 25, '2016-07-02', '2016/07/02', '2016/08/02'),
('15937', '2', '4', '$2y$10$KW1vQiKVUpy5TuJA3tUGfubuPtwTrcJgMv.zeVGt2iVsAXnxBDuZG', 'camilo andres', 'perez', '3622204', '3216549874', 'correo@gmail.com', 'cra 49 # 87 15', 'Activo', 25, '2016-07-02', '2016/07/02', '2016/08/02'),
('3578', '4', '4', '$2y$10$U1gSeEewQ7GOGnQfR3G9x.pYvhuHmAItsg0yfhkd.aldi1fmk.agy', 'edward', 'vasco upegui', '3622204', '362589725', 'correo@gmail.com', 'cra 49 # 87 15', 'Activo', 29, '2016-07-02', '2016/07/02', '2016/10/02'),
('3625', '2', '4', '$2y$10$KL.Xb3OSS8dScC9.hrldiuHmq8KFVufE1aS.HtPzqz2SidymAL8pS', 'andrea', 'tabares lopera', '3698854', '3115486975', 'correo@gmail.com', 'cra 50 # 45b 15', 'Activo', 19, '2016-06-28', '', ''),
('3658', '3', '4', '$2y$10$bDwvkA3Qa7uAzl7/vhJGfewqHKnvg.BcMFKKEjWcxPUZa0H8efl16', 'andres', 'perez ochoa', '3622204', '3216549874', 'correo2@gmail.com', 'cra 49 # 87 15', 'Activo', 20, '2016-06-14', '14 June, 2', '14 August,'),
('3917', '0', '2', '$2y$10$o1ofYKVF3qLK/R/E..eC9.2HsMrh86Q.E4z4WZrj3AOxAgfw04tru', 'santiago', 'loaiza', NULL, NULL, NULL, NULL, 'Activo', NULL, '2016-07-03', NULL, NULL),
('4030', '3', '4', '$2y$10$GxKvwVvVf55NWFJhs2hfLeHtfyVQ03IuFrkq93oscyHNKpajQJYCK', 'mateo', 'rios', '14587563', '3652478954', 'correo@gmail.com', 'cra 49 # 87 15', 'Activo', 19, '2016-07-02', '2016/07/02', '2016/09/02'),
('4567', '2', '4', '$2y$10$5OXLC7HRiLfKJ5T9vTmrV.J7K/d1dhZgVF7zLrvB/URnsIcHGFUQi', 'andres', 'guerra gomes', '34654564', '4564564564', 'correo2@gmail.com', 'cra 49 # 87 15', 'Activo', 45, '2016-07-02', '2016/07/02', '2016/08/02'),
('4589', '2', '4', '$2y$10$YbXIdPOAX5sMhBqRa1Y6s.n83DjPKl0gs7PkAPKSEB47QgqXXFp6W', 'mario ', 'andrade', '0000000', '3625148796', 'correo2@gmail.com', 'cra 50 # 45b 15', 'Activo', 40, '2016-07-01', '2016/07/01', '2016/08/01'),
('5689', '2', '4', '$2y$10$rtP/7N2i0qHeq23AroIEcOc3zrPsowCMaOPc6rRUkmGLWbOLsOI0G', 'juan pablo', 'cataÃ±o', '3625489', '3256874159', 'correo@gmail.com', 'cra 49 # 87 15', 'Activo', 12, '2016-06-28', '2016/06/28', '2016/07/28'),
('7410', '3', '4', '$2y$10$vcyVnPHvlJU7T3o0Z/M/z..qJAbhGe6hj2UzJ4ZPvcXgGJkKE47pq', 'juan alberto', 'perez toro', '2659874', '3125496871', 'correo2@gmail.com', 'cra 50 # 45b 15', 'Activo', 35, '2016-06-28', '', ''),
('7931', '2', '4', '$2y$10$0nWGyzRdrxklEYmbi8jljeToPZNrhC9rXa9l0UUi72YKCZMiTqkj2', 'maria elena', 'perez escobar', '3548974', '3001569874', 'correo3@gmail.com', 'cra 50 # 45b 15', 'Activo', 36, '2016-07-05', '', ''),
('8563', '4', '4', '$2y$10$3Eg6PuHp9I.TAgn9vyZ8VO7TCiX9aoeYFvId9prAGn9/15TI3vf52', 'carlos alberto', 'rios perez', '5556987', '3002659874', 'correo3@gmail.com', 'cll 100 s # 41-58', 'Activo', 27, '2016-07-02', '2016/07/02', '2016/10/02'),
('8695', '2', '4', '$2y$10$kId4LffJmxPPdBJiT84wJe1ebdsCtUHtSUymVsFclI7VvU2dhY.o.', 'estefania', 'hernandes lopez', '3659874', '3001254789', 'correo2@gmail.com', 'cra 49 # 87 15', 'Activo', 18, '2016-07-06', '2016/07/06', '2016/08/06'),
('9511', '1', '4', '$2y$10$2Zjzrgir6haKCUGlUWczOeNswNgmQv50Sj.o9yC1LcuPofM7S1N3S', 'marcos', 'perez gomes', 'NaN', '3006985475', 'correo@gmail.com', 'cra 49 # 87 15', 'Activo', 20, '2016-07-02', '2016/07/02', '2016/08/02'),
('9632', '3', '4', '$2y$10$4gOqibHj.2wyuKav.ai0z.EAasq2Cxa4pmmHgtRS5co94JWrbEB2y', 'mario ', 'sepulveda', '2569874', '3652145879', 'correo@gmail.com', 'cra 49 # 87 15', 'Activo', 24, '2016-06-28', '2016/06/28', '2016/08/28'),
('9874', '2', '4', '$2y$10$kJLkwOLP938m3C8lXz2aUeztz9VJsD1K9Wej0pLKEFuVbEKHPiO6W', 'margarita', 'arbelaez', '5548796', '3216589740', 'correo@gmail.com', 'cra 49 # 87 15', 'Activo', 21, '2016-06-28', '2016/06/28', '2016/07/28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_casual`
--

CREATE TABLE `usuario_casual` (
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
('1036660429', 'jherson', 'vasco', '3622204', '2016-06-03', '19:06:33'),
('1036660429', 'jherson', 'vasco', '3622204', '2016-06-28', '11:57:42'),
('1235', 'jherson', 'vasco', '3622204', '2016-06-28', '11:58:46'),
('14587', 'mario', 'guerra', '3625874', '2016-07-01', '19:15:44'),
('48759', 'mario', 'perez', '5847415', '2016-07-01', '19:16:16'),
('14587', 'mario', 'guerra', '3658749', '2016-07-01', '19:16:52'),
('14587', 'mario', 'guerra', '3625874', '2016-07-01', '19:17:02'),
('1235', 'mario', 'perez', '5847415', '2016-07-01', '19:17:13'),
('1235', 'jherson', 'vasco', '3622204', '2016-07-01', '22:13:53'),
('1235', 'jherson', 'vasco', '3622204', '2016-07-01', '22:14:03'),
('48759', 'mario', 'perez', '3625874', '2016-07-01', '22:14:35'),
('1235', 'jherson', 'vasco', '3622204', '2016-07-02', '13:27:07'),
('1235', 'jherson', 'vasco', '3622204', '2016-07-05', '22:17:33');

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
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`cita_cod`),
  ADD KEY `usu_cod` (`usu_cod`);

--
-- Indices de la tabla `ingreso_usu`
--
ALTER TABLE `ingreso_usu`
  ADD PRIMARY KEY (`ingr_cod`),
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
  ADD KEY `usu_cod` (`usu_cod`);

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
-- Filtros para la tabla `ingreso_usu`
--
ALTER TABLE `ingreso_usu`
  ADD CONSTRAINT `ingreso_usu_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`);

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
  ADD CONSTRAINT `rutina_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`);

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
