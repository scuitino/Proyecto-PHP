-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 16, 2014 at 12:07 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `AuthAssignment`
--

CREATE TABLE `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('director', '8', NULL, 'N;'),
('empleado', '11', NULL, 'N;'),
('empleado', '15', NULL, 'N;'),
('registrado', '10', NULL, 'N;'),
('registrado', '13', NULL, 'N;'),
('registrado', '14', NULL, 'N;'),
('registrado', '16', NULL, 'N;'),
('registrado', '7', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItem`
--

CREATE TABLE `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('director', 2, '', NULL, 'N;'),
('empleado', 2, '', NULL, 'N;'),
('registrado', 2, '', '', 'N;'),
('updateOwnInmueble', 1, 'Modificar solo mis inmuebles', 'return Yii::app()->user->id==$params["inmuebles"]->Usuario_id;', 'N;'),
('updateOwnUser', 1, 'Modificar solo mis datos', 'return Yii::app()->user->id==$params["user"]->id;', 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItemChild`
--

CREATE TABLE `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AuthItemChild`
--

INSERT INTO `AuthItemChild` (`parent`, `child`) VALUES
('registrado', 'updateOwnInmueble'),
('registrado', 'updateOwnUser');

-- --------------------------------------------------------

--
-- Table structure for table `Barrio`
--

CREATE TABLE `Barrio` (
  `idBarrio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreBarrio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idBarrio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Barrio`
--

INSERT INTO `Barrio` (`idBarrio`, `nombreBarrio`) VALUES
(1, 'Malvin'),
(2, 'Prado'),
(3, 'Pocitos');

-- --------------------------------------------------------

--
-- Table structure for table `Contacto`
--

CREATE TABLE `Contacto` (
  `id_Contacto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  PRIMARY KEY (`id_Contacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Contacto`
--

INSERT INTO `Contacto` (`id_Contacto`, `nombre`, `email`, `mensaje`) VALUES
(1, 'Gio', 'dale@.com', 'Llamenme porfavor, vendo un apto'),
(2, 'registrado', 'ui', 'ui'),
(3, 'registrado', 'jojo', 'jojo'),
(4, 'registrado', 're@', 'Contactenme, estoy interesado en una casa');

-- --------------------------------------------------------

--
-- Table structure for table `Evento`
--

CREATE TABLE `Evento` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `Inmueble_idInmueble` int(11) NOT NULL,
  `fechaEvento` varchar(45) DEFAULT NULL,
  `descripcionEvento` varchar(45) DEFAULT NULL,
  `Usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`idEvento`),
  KEY `fk_Inmueble_has_Usuario_Inmueble1_idx` (`Inmueble_idInmueble`),
  KEY `fk_Evento_Usuario1_idx` (`Usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Imagen`
--

CREATE TABLE `Imagen` (
  `idImagen` int(11) NOT NULL AUTO_INCREMENT,
  `urlImagen` varchar(45) DEFAULT NULL,
  `Inmueble_idInmueble` int(11) NOT NULL,
  `portadaImagen` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idImagen`),
  KEY `fk_Imagen_Inmueble1_idx` (`Inmueble_idInmueble`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Imagen`
--

INSERT INTO `Imagen` (`idImagen`, `urlImagen`, `Inmueble_idInmueble`, `portadaImagen`) VALUES
(5, '/images/casa.jpg', 14, 0),
(6, '/images/casa.jpg', 15, 0),
(7, '/images/casa.jpg', 16, 0),
(8, '/images/casa.jpg', 17, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Inmueble`
--

CREATE TABLE `Inmueble` (
  `idInmueble` int(11) NOT NULL AUTO_INCREMENT,
  `tituloInmueble` varchar(45) DEFAULT NULL,
  `descripcionInmueble` varchar(45) DEFAULT NULL,
  `precioInmueble` int(11) DEFAULT NULL,
  `destacadoInmueble` tinyint(1) DEFAULT '0',
  `estadoInmueble` tinyint(1) DEFAULT '0',
  `habitacionesInmueble` int(11) DEFAULT NULL,
  `baniosInmuebles` int(11) DEFAULT NULL,
  `garageInmueble` int(11) DEFAULT NULL,
  `cocinaInmueble` tinyint(1) DEFAULT NULL,
  `superficieInmueble` int(11) DEFAULT NULL,
  `Barrio_idBarrio` int(11) NOT NULL,
  `Usuario_id` int(11) NOT NULL,
  `operacion` enum('Venta','Alquiler') NOT NULL,
  `tipoInmueble` enum('Casa','Apartamento','Local Comercial') NOT NULL,
  `Imagen_Id` int(11) NOT NULL,
  PRIMARY KEY (`idInmueble`),
  KEY `fk_Inmueble_Barrio1_idx` (`Barrio_idBarrio`),
  KEY `fk_Inmueble_Usuario1_idx` (`Usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `Inmueble`
--

INSERT INTO `Inmueble` (`idInmueble`, `tituloInmueble`, `descripcionInmueble`, `precioInmueble`, `destacadoInmueble`, `estadoInmueble`, `habitacionesInmueble`, `baniosInmuebles`, `garageInmueble`, `cocinaInmueble`, `superficieInmueble`, `Barrio_idBarrio`, `Usuario_id`, `operacion`, `tipoInmueble`, `Imagen_Id`) VALUES
(2, 'tit', 'desc', 500, 0, 0, 3, 3, 3, 0, 300, 3, 3, '', 'Casa', 0),
(3, 'tit', 'desc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 3, '', 'Casa', 0),
(5, 'Creado por Registrado', 'Buenaso pa vivir todo el aÃ±o', 2000000, 0, 0, 3, 2, 1, 1, 300, 2, 7, '', 'Casa', 0),
(6, 'Casa', 'Casa en el centro pasarla bomba', 200000, 0, 1, 3, 1, 1, 1, 200, 2, 7, '', 'Casa', 0),
(7, 'kame2', 'house', 200, 0, 0, 200, 200, 200, 127, 200, 1, 13, '', 'Casa', 0),
(8, 'ana', 'ana', 2, 0, 0, 2, 2, 2, 2, 2, 1, 16, '', 'Casa', 0),
(9, 'Casa2', 'casa2', 200000, 0, 1, 3, 1, 1, 1, 200, 2, 7, '', 'Casa', 0),
(14, 'conimagen', '1', 11, 1, 1, 1, 1, 1, 1, 11, 3, 8, '', 'Casa', 5),
(15, 'aprobado', 'a', 1, 0, 0, 22, 2, 22, 2, 1, 3, 8, '', 'Casa', 6),
(16, 'venta!', 'a', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 2, 8, '', 'Casa', 7),
(17, 'alquiler!', 'a', 1, 0, 0, NULL, NULL, NULL, NULL, NULL, 2, 8, '', 'Casa', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lookup`
--

CREATE TABLE `tbl_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_lookup`
--

INSERT INTO `tbl_lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(1, 'Draft', 1, 'PostStatus', 1),
(2, 'Published', 2, 'PostStatus', 2),
(3, 'Archived', 3, 'PostStatus', 3),
(4, 'Pending Approval', 1, 'CommentStatus', 1),
(5, 'Approved', 2, 'CommentStatus', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `frequency` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_tag`
--

INSERT INTO `tbl_tag` (`id`, `name`, `frequency`) VALUES
(1, 'yii', 1),
(2, 'blog', 1),
(3, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `profile` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `rol`, `username`, `password`, `email`, `profile`) VALUES
(3, '', 'admin', 'admin', 'admin', '2'),
(7, '', 'registrado', 'registrado', 'registrado@example.com', 'Saludos'),
(8, '', 'director', 'director', 'dire', ''),
(9, '', 'pepe', 'pepe', 'pepe', ''),
(10, '', 'lorenzo', 'lorenzo', 'ss', 'ss'),
(11, '', 'empleado', 'empleado', 'aa', ''),
(12, '', 'Fulano', '123', '@', 'prueba'),
(13, '', 'seba', 'seba', 'seba5', ''),
(14, 'registrado', 'sebita', 'sebita', 'sebita', ''),
(15, 'empleado', 'empleadito', 'empleadito', 'empleadito', ''),
(16, 'registrado', 'ana', 'ana', 'ana', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AuthAssignment`
--
ALTER TABLE `AuthAssignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `AuthItemChild`
--
ALTER TABLE `AuthItemChild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Evento`
--
ALTER TABLE `Evento`
  ADD CONSTRAINT `Evento_ibfk_1` FOREIGN KEY (`Inmueble_idInmueble`) REFERENCES `Inmueble` (`idInmueble`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Evento_ibfk_2` FOREIGN KEY (`Usuario_id`) REFERENCES `tbl_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Imagen`
--
ALTER TABLE `Imagen`
  ADD CONSTRAINT `Imagen_ibfk_1` FOREIGN KEY (`Inmueble_idInmueble`) REFERENCES `Inmueble` (`idInmueble`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Inmueble`
--
ALTER TABLE `Inmueble`
  ADD CONSTRAINT `Inmueble_ibfk_1` FOREIGN KEY (`Barrio_idBarrio`) REFERENCES `Barrio` (`idBarrio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Inmueble_ibfk_2` FOREIGN KEY (`Usuario_id`) REFERENCES `tbl_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
