-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2018 a las 03:31:38
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `felmat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `mensaje` varchar(2500) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gestion` int(11) NOT NULL,
  `fecha_gestion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `correo`, `telefono`, `mensaje`, `fecha`, `gestion`, `fecha_gestion`) VALUES
(3, 'sebastian vasquez', 'svasquez.music@gmail.com', '96411579', 'Mensaje de prueba', '2018-12-15 02:14:22', 1, '2018-12-15 02:26:50'),
(4, 'sebastian vasquez', 'svasquez.music@gmail.com', '12345678', 'Lorea El Ipsum Detonao pasa paca coshino ql canada los techeka hermano brocacochi chantale el pate shekea chantale el pate de finales, a treh deo tapao en joya longi blapo terrible de perkin qliao vendisuone tenÃ­ puro frÃ­o andai con meao machucao, de vio yuta la legal despavila el moco de corte pela pura falacia oe te tirita la pera. Ascurrio tapao en joya para la mano sablazo tillas sablazo de corte la cani, caracho vendisuone quieee picao matagatos odio, cuca Ã±oco los techeka pero pa q po teni mano? machucao.\nOe zi shekea choro zoronca soplamoco chantar conotao detonao, perro chico buquÃ© shilamediavola qliao odio de vioh despavila el moco, tapizao zoronca asikalao hechiza hermano te tiraste. Teni mano? oe si chantar abrazo pa lo amigo balazo pa lo enemigo tapizao me voy en cana shilamediavola bellako oe zi truco andai con meao oe si saque longi de vio, qliao la cani yuta saque quieee teni mano? matagatos readi fineza jato corte oe hermano.\nChantale el pate tapizao pura falacia oe pipazo calmao terrible de perkin tapizao rati para la mano de vio jato, paquepo calzar de finales pasa paca coshino ql washas soplamoco lorea shekea teni mano?. De corte de finales abrazo pa lo amigo balazo pa lo enemigo brocacochi blapo tenÃ­ puro frÃ­o cuca canada, embarao querÃ­ ser leyenda teni mano? de finales jato buquÃ© fierro, jato fineza fierro machucao vendisuone oe zi. Zorra saque de vio buquÃ© tapao en joya, tolompa puro gile.\nFierro de vioh terrible de perkin la yuta tapao en joya cuca asikalao shilamediavola fineza blapo brocacochi chantar shekea, terrible de perkin oe zi bellako paquepo canada teni mano? choro fierro choro para la mano qliao cuca conotao, corte matagatos yuta del corte tapao en joya pipazo tenÃ­ puro frÃ­o saque conotao te tiraste saque. Brocacochi la yuta tolompa abrazo pa lo amigo balazo pa lo enemigo ranazo a treh deo perro chico, quieee embarao ascurrio la legal.\nFierro y que saen soplamoco washas tapao en joya teni mano? zarpao calmao te tiraste longi hechiza, te tirita la pera jato pasa paca coshino ql para la mano te tirita la pera los techeka chantar a treh deo ascurrio, fineza teni mano? tenÃ­ puro frÃ­o calzar chantar oe zi qliao de corte sablazo. Rati shilamediavola tillas de finales para la mano chantar oe hermano, odio conotao de vio despavila el moco picao me voy en cana sablazo, tenÃ­ puro frÃ­o bellako yuta ranazo shekea.', '2018-11-30 00:05:55', 0, '2018-12-15 02:21:43'),
(5, 'sebastian vasquez', 'svasquez.music@gmail.com', '12345678', 'Lorea El Ipsum Detonao pasa paca coshino ql canada los techeka hermano brocacochi chantale el pate shekea chantale el pate de finales, a treh deo tapao en joya longi blapo terrible de perkin qliao vendisuone tenÃ­ puro frÃ­o andai con meao machucao, de vio yuta la legal despavila el moco de corte pela pura falacia oe te tirita la pera. Ascurrio tapao en joya para la mano sablazo tillas sablazo de corte la cani, caracho vendisuone quieee picao matagatos odio, cuca Ã±oco los techeka pero pa q po teni mano? machucao.\nOe zi shekea choro zoronca soplamoco chantar conotao detonao, perro chico buquÃ© shilamediavola qliao odio de vioh despavila el moco, tapizao zoronca asikalao hechiza hermano te tiraste. Teni mano? oe si chantar abrazo pa lo amigo balazo pa lo enemigo tapizao me voy en cana shilamediavola bellako oe zi truco andai con meao oe si saque longi de vio, qliao la cani yuta saque quieee teni mano? matagatos readi fineza jato corte oe hermano.\nChantale el pate tapizao pura falacia oe pipazo calmao terrible de perkin tapizao rati para la mano de vio jato, paquepo calzar de finales pasa paca coshino ql washas soplamoco lorea shekea teni mano?. De corte de finales abrazo pa lo amigo balazo pa lo enemigo brocacochi blapo tenÃ­ puro frÃ­o cuca canada, embarao querÃ­ ser leyenda teni mano? de finales jato buquÃ© fierro, jato fineza fierro machucao vendisuone oe zi. Zorra saque de vio buquÃ© tapao en joya, tolompa puro gile.\nFierro de vioh terrible de perkin la yuta tapao en joya cuca asikalao shilamediavola fineza blapo brocacochi chantar shekea, terrible de perkin oe zi bellako paquepo canada teni mano? choro fierro choro para la mano qliao cuca conotao, corte matagatos yuta del corte tapao en joya pipazo tenÃ­ puro frÃ­o saque conotao te tiraste saque. Brocacochi la yuta tolompa abrazo pa lo amigo balazo pa lo enemigo ranazo a treh deo perro chico, quieee embarao ascurrio la legal.\nFierro y que saen soplamoco washas tapao en joya teni mano? zarpao calmao te tiraste longi hechiza, te tirita la pera jato pasa paca coshino ql para la mano te tirita la pera los techeka chantar a treh deo ascurrio, fineza teni mano? tenÃ­ puro frÃ­o calzar chantar oe zi qliao de corte sablazo. Rati shilamediavola tillas de finales para la mano chantar oe hermano, odio conotao de vio despavila el moco picao me voy en cana sablazo, tenÃ­ puro frÃ­o bellako yuta ranazo shekea.', '2018-12-15 02:15:46', 1, '0000-00-00 00:00:00'),
(6, 'sebastian vasquez', 'svasquez.music@gmail.com', '96411579', 'kjasdkjjkaslkdlkjsadlsakjdalkjsdalksdkjc d aj dksakjdsajlkdad ajq r  ', '2018-11-30 00:20:39', 0, '0000-00-00 00:00:00'),
(7, 'sebastian vasquez', 'svasquez.music@gmail.com', '96411579', 'Lorea El Ipsum Zarpao Ã±oco canada rati zarpao de vio vendisuone anda a laar perro chico gila querÃ­ ser leyenda abrazo pa lo amigo balazo pa lo enemigo, fierro paquepo qliao del corte te tiraste la cani deja ganarme yuta pasa paca coshino ql jato machucao de vio, embarao asikalao chantale el pate conotao abrazo pa lo amigo balazo pa lo enemigo machucao chantale el pate washas de corte caracho. Bellako zarpao puro gile calmao jato readi choro yuta, tenÃ­ puro frÃ­o lorea longi rati machucao calmao.Lorea El Ipsum Zarpao Ã±oco canada rati zarpao de vio vendisuone anda a laar perro chico gila querÃ­ ser leyenda abrazo pa lo amigo balazo pa lo enemigo, fierro paquepo qliao del corte te tiraste la cani deja ganarme yuta pasa paca coshino ql jato machucao de vio, embarao asikalao chantale el pate conotao abrazo pa lo amigo balazo pa lo enemigo machucao chantale el pate washas de corte caracho. Bellako zarpao puro gile calmao jato readi choro yuta, tenÃ­ puro frÃ­o lorea longi rati machucao calmao.Lorea El Ipsum Zarpao Ã±oco canada rati zarpao de vio vendisuone anda a laar perro chico gila querÃ­ ser leyenda abrazo pa lo amigo balazo pa lo enemigo, fierro paquepo qliao del corte te tiraste la cani deja ganarme yuta pasa paca coshino ql jato machucao de vio, embarao asikalao chantale el pate conotao abrazo pa lo amigo balazo pa lo enemigo machucao chantale el pate washas de corte caracho. Bellako zarpao puro gile calmao jato readi choro yuta, tenÃ­ puro frÃ­o lorea longi rati machucao calmao.Lorea El Ipsum Zarpao Ã±oco canada rati zarpao de vio vendisuone anda a laar perro chico gila querÃ­ ser leyenda abrazo pa lo amigo balazo pa lo enemigo, fierro paquepo qliao del corte te tiraste la enemigo machucao chantale el pate washas de corte caracho. Bellako zarpao puro\nco canada rati zarpao de vio vendisuone anda a laar perro chico gila querÃ­ se', '2018-11-30 01:02:17', 0, '0000-00-00 00:00:00'),
(8, 'sebastian vasquez', 'svasquez.music@gmail.com', '96411579', 'asdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdasdasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdasdasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdasdasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdasdasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdasdasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdasdasdasdasddasdasdasdasdasdasdasdasdaasdasdasddasdas', '2018-11-30 12:53:29', 0, '0000-00-00 00:00:00'),
(9, 'sebastian vasquez', 'svasquez.music@gmail.com', '96411579', 'sdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWE', '2018-11-30 12:55:16', 1, '2018-12-15 02:19:31'),
(10, 'sebastian vasquez', 'svasquez.music@gmail.com', '96411579', 'sdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWEsdasfabfdafkljsdvjbq vfuehfcljfuclanl vkasjvnasdfnasdlfmÃ±lcjma,srcjÃ±aRFCLHACWEFHQWPMCREFIQJ,RCUHMCJRCUMPOERCUIQWE', '2018-11-30 12:56:25', 0, '0000-00-00 00:00:00'),
(11, 'sebastian vasquez', 'svasquez.music@gmail.com', '96411579', 'asdasd', '2018-11-30 13:13:34', 0, '0000-00-00 00:00:00'),
(12, 'sebastian vasquez', 'svasquez.music@gmail.com', '96411579', 'asdasd', '2018-12-15 02:16:15', 1, '0000-00-00 00:00:00'),
(13, 'Miguel MÃ¡rquez', 'mikemreyes.mm@gmail.com', '75144189', 'Mensaje de prueba para ver carÃ¡cteres espaÃ±oles tÃ­lde, coma Ã±Ã±Ã±Ã± \nÃ³ Ã³ Ãº Ãº etc.', '2018-12-15 02:29:28', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `clave`, `fecha`) VALUES
(1, 'admin', 'ppl123', '2018-12-01 21:22:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
