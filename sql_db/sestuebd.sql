-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-11-2013 a las 23:52:03
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sestuebd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_preguntas_respuestas`
--

CREATE TABLE IF NOT EXISTS `t_preguntas_respuestas` (
  `c_id_pk` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Campo identificador de cada pregunta/respuesta',
  `c_pregunta` varchar(200) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Campo para guardar las preguntas',
  `c_respuesta` varchar(999) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Campo para guardar las respuestas',
  `c_mod_perteneciente` int(1) NOT NULL COMMENT 'Campo que guarda a que modulo pertenece la pregunta/respuesta',
  PRIMARY KEY (`c_id_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para guardar las preguntas/respuestas frecuentes' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE IF NOT EXISTS `t_usuarios` (
  `c_cedula_pk` int(9) NOT NULL COMMENT 'Campo para guardar la cedula de identidad del usuario',
  `c_nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Campo para guardar el(los) nombre(s) de los usuarios',
  `c_apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Campo para guardar el(los) apellido(s) de los usuarios',
  `c_alias_pk` varchar(32) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Campo para guardar el nombre/alias de usuario',
  `c_clave` varchar(32) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Campo para guardar la clave del usuario encriptada',
  `c_palabra_secreta` varchar(32) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Campo para guardar la palabra secreta del usuario',
  `c_rol` int(1) NOT NULL COMMENT 'Campo para identificar el rol de usuario',
  PRIMARY KEY (`c_cedula_pk`,`c_alias_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para guardar los estudiantes del SESTUE';

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`c_cedula_pk`, `c_nombres`, `c_apellidos`, `c_alias_pk`, `c_clave`, `c_palabra_secreta`, `c_rol`) VALUES
(1, 'Administrador', 'del Sistema', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(23658013, 'Ramon Eduard', 'Serrano', 'ramon', '266575d3c2b8a34f83817458f96152b1', 'ramon', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
