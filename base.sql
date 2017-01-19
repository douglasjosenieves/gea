-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-01-2017 a las 07:46:37
-- Versión del servidor: 5.5.52-cll-lve
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `decotota_base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_bancos`
--

CREATE TABLE IF NOT EXISTS `cajas_bancos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `numero_cuenta` varchar(500) DEFAULT NULL,
  `direccion` text,
  `ejecutivo` varchar(500) DEFAULT NULL,
  `saldo_inicial` double DEFAULT '0',
  `saldo_final` double DEFAULT '0',
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_bancos_entrada`
--

CREATE TABLE IF NOT EXISTS `cajas_bancos_entrada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doc` varchar(500) DEFAULT NULL,
  `doc` varchar(500) DEFAULT NULL,
  `id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `id_banco_caja` varchar(500) DEFAULT NULL,
  `banco_caja` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `numero_ref` text,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `saldo` double DEFAULT '0',
  `abono` double DEFAULT '0',
  `status` varchar(500) DEFAULT NULL,
  `ret1` text,
  `ret_desc1` text,
  `ret2` text,
  `ret_desc2` text,
  `ret3` text,
  `ret_desc3` text,
  `ret4` text,
  `ret_desc4` text,
  `ret5` text,
  `ret_desc5` text,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_bancos_movimientos`
--

CREATE TABLE IF NOT EXISTS `cajas_bancos_movimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doc` varchar(500) DEFAULT NULL,
  `doc` varchar(500) DEFAULT NULL,
  `id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `id_banco_caja` varchar(500) DEFAULT NULL,
  `banco_caja` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `abono` double DEFAULT '0',
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_bancos_salida`
--

CREATE TABLE IF NOT EXISTS `cajas_bancos_salida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doc` varchar(500) DEFAULT NULL,
  `doc` varchar(500) DEFAULT NULL,
  `id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `id_banco_caja` varchar(500) DEFAULT NULL,
  `banco_caja` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `numero_ref` text,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `saldo` double DEFAULT '0',
  `abono` double DEFAULT '0',
  `status` varchar(500) DEFAULT NULL,
  `ret1` text,
  `ret_desc1` text,
  `ret2` text,
  `ret_desc2` text,
  `ret3` text,
  `ret_desc3` text,
  `ret4` text,
  `ret_desc4` text,
  `ret5` text,
  `ret_desc5` text,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE IF NOT EXISTS `calendario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contacto` varchar(500) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `color` varchar(300) DEFAULT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `descripcion` text,
  `allDay` varchar(1) DEFAULT '0',
  `notificado` varchar(1) DEFAULT '0',
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_de` int(11) DEFAULT NULL,
  `id_para` int(11) DEFAULT NULL,
  `mensaje` text,
  `fecha_envio` datetime DEFAULT NULL,
  `fecha_leido` datetime DEFAULT NULL,
  `envio_todos` tinyint(1) DEFAULT '0',
  `visto` tinyint(1) DEFAULT '0',
  `leido` tinyint(1) DEFAULT '0',
  `ip` varchar(200) DEFAULT NULL,
  `anulado` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobros`
--

CREATE TABLE IF NOT EXISTS `cobros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doc` varchar(500) DEFAULT NULL,
  `doc` varchar(500) DEFAULT NULL,
  `id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `id_banco_caja` varchar(500) DEFAULT NULL,
  `banco_caja` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `numero_ref` text,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `saldo` double DEFAULT '0',
  `abono` double DEFAULT '0',
  `status` varchar(500) DEFAULT NULL,
  `ret1` text,
  `ret_desc1` text,
  `ret2` text,
  `ret_desc2` text,
  `ret3` text,
  `ret_desc3` text,
  `ret4` text,
  `ret_desc4` text,
  `ret5` text,
  `ret_desc5` text,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enc_id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente_direccion` varchar(500) DEFAULT NULL,
  `enc_cliente_documento` varchar(500) DEFAULT NULL,
  `enc_cliente_tel` varchar(500) DEFAULT NULL,
  `enc_cliente_email` varchar(500) DEFAULT NULL,
  `enc_lugar_emision` varchar(500) DEFAULT NULL,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_orden` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_detalle`
--

CREATE TABLE IF NOT EXISTS `compras_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_enc` int(11) NOT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos_web`
--

CREATE TABLE IF NOT EXISTS `contactos_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(500) DEFAULT NULL,
  `apellidos` varchar(500) DEFAULT NULL,
  `documento` varchar(500) DEFAULT NULL,
  `cliente` varchar(500) DEFAULT NULL,
  `pais` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `email2` varchar(500) DEFAULT NULL,
  `movil` varchar(500) DEFAULT NULL,
  `movil2` varchar(500) DEFAULT NULL,
  `pre_informacion` text,
  `porque_espana` text,
  `inversion` double DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `verificado` tinyint(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion_oficina` text,
  `direccion_domicilio` text,
  `titulacion` text,
  `anos_laboral` int(11) DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enc_id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente_direccion` varchar(500) DEFAULT NULL,
  `enc_cliente_documento` varchar(500) DEFAULT NULL,
  `enc_cliente_tel` varchar(500) DEFAULT NULL,
  `enc_cliente_email` varchar(500) DEFAULT NULL,
  `enc_lugar_emision` varchar(500) DEFAULT NULL,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_orden` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_detalle`
--

CREATE TABLE IF NOT EXISTS `cotizacion_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_enc` int(11) NOT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_por_cobrar`
--

CREATE TABLE IF NOT EXISTS `cuenta_por_cobrar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doc` varchar(500) DEFAULT NULL,
  `doc` varchar(500) DEFAULT NULL,
  `id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente_direccion` varchar(500) DEFAULT NULL,
  `enc_cliente_documento` varchar(500) DEFAULT NULL,
  `enc_cliente_tel` varchar(500) DEFAULT NULL,
  `enc_cliente_email` varchar(500) DEFAULT NULL,
  `enc_lugar_emision` varchar(500) DEFAULT NULL,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_orden` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `saldo` double DEFAULT '0',
  `status_saldo` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_por_pagar`
--

CREATE TABLE IF NOT EXISTS `cuenta_por_pagar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doc` varchar(500) DEFAULT NULL,
  `doc` varchar(500) DEFAULT NULL,
  `id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente_direccion` varchar(500) DEFAULT NULL,
  `enc_cliente_documento` varchar(500) DEFAULT NULL,
  `enc_cliente_tel` varchar(500) DEFAULT NULL,
  `enc_cliente_email` varchar(500) DEFAULT NULL,
  `enc_lugar_emision` varchar(500) DEFAULT NULL,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_orden` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `saldo` double DEFAULT '0',
  `status_saldo` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(500) DEFAULT NULL,
  `apellidos` varchar(500) DEFAULT NULL,
  `documento` varchar(500) DEFAULT NULL,
  `cliente` varchar(500) DEFAULT NULL,
  `pais` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `email2` varchar(500) DEFAULT NULL,
  `movil` varchar(500) DEFAULT NULL,
  `movil2` varchar(500) DEFAULT NULL,
  `pre_informacion` text,
  `porque_espana` text,
  `inversion` double DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `verificado` tinyint(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion_oficina` text,
  `direccion_domicilio` text,
  `titulacion` text,
  `anos_laboral` int(11) DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enc_id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente_direccion` varchar(500) DEFAULT NULL,
  `enc_cliente_documento` varchar(500) DEFAULT NULL,
  `enc_cliente_tel` varchar(500) DEFAULT NULL,
  `enc_cliente_email` varchar(500) DEFAULT NULL,
  `enc_lugar_emision` varchar(500) DEFAULT NULL,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_orden` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_detalle`
--

CREATE TABLE IF NOT EXISTS `factura_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_enc` int(11) NOT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_fichas_opciones`
--

CREATE TABLE IF NOT EXISTS `form_fichas_opciones` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `elaborado_por` varchar(500) NOT NULL,
  `editado_por` varchar(500) NOT NULL,
  `editado_fecha` datetime NOT NULL,
  `link` text NOT NULL,
  `sector` varchar(500) NOT NULL,
  `nombre_opcion` text NOT NULL,
  `direccion` text NOT NULL,
  `ciudad` varchar(500) NOT NULL,
  `zona` varchar(500) NOT NULL,
  `celular` varchar(500) NOT NULL,
  `local` varchar(500) NOT NULL,
  `nombre_contacto` varchar(500) NOT NULL,
  `vendedor_solicita` double NOT NULL,
  `nosotros_ofrecemos` double NOT NULL,
  `tamano_local` int(11) NOT NULL,
  `alquiler` double NOT NULL,
  `antiguedad` int(11) NOT NULL,
  `propietario_dispuesto_traspaso` float NOT NULL,
  `website` text NOT NULL,
  `facturacion_mensual` double NOT NULL,
  `datos_adicionales` text NOT NULL,
  `comentarios_sobre_negocio` text NOT NULL,
  `comentarios_sobre_negocio_interno` text NOT NULL,
  `ventajas_comparativas` text NOT NULL,
  `capture1` varchar(500) NOT NULL,
  `capture2` varchar(500) NOT NULL,
  `anulado` float NOT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_fichas_opciones_franquicias`
--

CREATE TABLE IF NOT EXISTS `form_fichas_opciones_franquicias` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `elaborado_por` varchar(500) NOT NULL,
  `editado_por` varchar(500) NOT NULL,
  `editado_fecha` datetime NOT NULL,
  `link` text NOT NULL,
  `sector` varchar(500) NOT NULL,
  `nombre_opcion` text NOT NULL,
  `direccion` text NOT NULL,
  `ciudad` varchar(500) NOT NULL,
  `zona` varchar(500) NOT NULL,
  `celular` varchar(500) NOT NULL,
  `local` varchar(500) NOT NULL,
  `nombre_contacto` varchar(500) NOT NULL,
  `vendedor_solicita` double NOT NULL,
  `nosotros_ofrecemos` double NOT NULL,
  `tamano_local` int(11) NOT NULL,
  `alquiler` double NOT NULL,
  `antiguedad` int(11) NOT NULL,
  `propietario_dispuesto_traspaso` float NOT NULL,
  `website` text NOT NULL,
  `facturacion_mensual` double NOT NULL,
  `datos_adicionales` text NOT NULL,
  `comentarios_sobre_negocio` text NOT NULL,
  `comentarios_sobre_negocio_interno` text NOT NULL,
  `ventajas_comparativas` text NOT NULL,
  `capture1` varchar(500) NOT NULL,
  `capture2` varchar(500) NOT NULL,
  `canon_publicidad` varchar(500) NOT NULL,
  `canon_entrada` varchar(500) NOT NULL,
  `inversion` double NOT NULL,
  `royalty` varchar(500) NOT NULL,
  `contrato` text NOT NULL,
  `poblacion_minima` int(11) NOT NULL,
  `anulado` float NOT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instaladores`
--

CREATE TABLE IF NOT EXISTS `instaladores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(500) DEFAULT NULL,
  `apellidos` varchar(500) DEFAULT NULL,
  `documento` varchar(500) DEFAULT NULL,
  `cliente` varchar(500) DEFAULT NULL,
  `pais` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `email2` varchar(500) DEFAULT NULL,
  `movil` varchar(500) DEFAULT NULL,
  `movil2` varchar(500) DEFAULT NULL,
  `pre_informacion` text,
  `porque_espana` text,
  `inversion` double DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `verificado` tinyint(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion_oficina` text,
  `direccion_domicilio` text,
  `titulacion` text,
  `anos_laboral` int(11) DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(500) DEFAULT NULL,
  `nombre` text,
  `descripcion` text,
  `comentarios` text NOT NULL,
  `precio` double DEFAULT '0',
  `precio1` double DEFAULT '0',
  `precio2` double DEFAULT '0',
  `precio3` double DEFAULT '0',
  `precio_compra` double DEFAULT '0',
  `cantidad` int(11) DEFAULT NULL,
  `pro_inv_max` int(11) DEFAULT NULL,
  `pro_inv_min` int(11) DEFAULT NULL,
  `und_med` varchar(500) DEFAULT NULL,
  `por_desperdicio` varchar(500) DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `islr` double DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `estado` varchar(500) DEFAULT NULL,
  `stock` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_cat`
--

CREATE TABLE IF NOT EXISTS `inventario_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_entrada`
--

CREATE TABLE IF NOT EXISTS `inventario_entrada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enc_id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente_direccion` varchar(500) DEFAULT NULL,
  `enc_cliente_documento` varchar(500) DEFAULT NULL,
  `enc_cliente_tel` varchar(500) DEFAULT NULL,
  `enc_cliente_email` varchar(500) DEFAULT NULL,
  `enc_lugar_emision` varchar(500) DEFAULT NULL,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_orden` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_entrada_detalle`
--

CREATE TABLE IF NOT EXISTS `inventario_entrada_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_enc` int(11) NOT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_movimientos`
--

CREATE TABLE IF NOT EXISTS `inventario_movimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doc` varchar(500) DEFAULT NULL,
  `doc` varchar(500) DEFAULT NULL,
  `id_cliente_proveedor` varchar(500) DEFAULT NULL,
  `fecha_documento` varchar(500) DEFAULT NULL,
  `id_almacen` varchar(500) DEFAULT NULL,
  `reg_id` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_salida`
--

CREATE TABLE IF NOT EXISTS `inventario_salida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enc_id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente_direccion` varchar(500) DEFAULT NULL,
  `enc_cliente_documento` varchar(500) DEFAULT NULL,
  `enc_cliente_tel` varchar(500) DEFAULT NULL,
  `enc_cliente_email` varchar(500) DEFAULT NULL,
  `enc_lugar_emision` varchar(500) DEFAULT NULL,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_orden` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_salida_detalle`
--

CREATE TABLE IF NOT EXISTS `inventario_salida_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_enc` int(11) NOT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_entrega`
--

CREATE TABLE IF NOT EXISTS `nota_entrega` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enc_id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente_direccion` varchar(500) DEFAULT NULL,
  `enc_cliente_documento` varchar(500) DEFAULT NULL,
  `enc_cliente_tel` varchar(500) DEFAULT NULL,
  `enc_cliente_email` varchar(500) DEFAULT NULL,
  `enc_lugar_emision` varchar(500) DEFAULT NULL,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_orden` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_entrega_detalle`
--

CREATE TABLE IF NOT EXISTS `nota_entrega_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_enc` int(11) NOT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_und_med` text,
  `reg_stock` text,
  `reg_precio` text,
  `reg_tax` text,
  `reg_tax_monto` text,
  `reg_subtotal` text,
  `reg_subtotal_con_tax` text,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(500) DEFAULT NULL,
  `apellidos` varchar(500) DEFAULT NULL,
  `documento` varchar(500) DEFAULT NULL,
  `cliente` varchar(500) DEFAULT NULL,
  `pais` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `email2` varchar(500) DEFAULT NULL,
  `movil` varchar(500) DEFAULT NULL,
  `movil2` varchar(500) DEFAULT NULL,
  `comentarios` text,
  `id_cliente` text,
  `des_cliente` text,
  `inversion` double DEFAULT NULL,
  `tipos` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `verificado` tinyint(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_terminacion` date DEFAULT NULL,
  `direccion_oficina` text,
  `direccion_domicilio` text,
  `titulacion` text,
  `anos_laboral` int(11) DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_detalle`
--

CREATE TABLE IF NOT EXISTS `obras_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doc` int(11) NOT NULL,
  `doc_id` text,
  `doc_desc` text,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doc` varchar(500) DEFAULT NULL,
  `doc` varchar(500) DEFAULT NULL,
  `id_cliente` varchar(500) DEFAULT NULL,
  `enc_cliente` varchar(500) DEFAULT NULL,
  `id_banco_caja` varchar(500) DEFAULT NULL,
  `banco_caja` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `numero_ref` text,
  `enc_fecha_emision` varchar(500) DEFAULT NULL,
  `enc_comentarios` varchar(500) DEFAULT NULL,
  `total_parcial` double DEFAULT '0',
  `total_tax` double DEFAULT '0',
  `total_total` double DEFAULT '0',
  `saldo` double DEFAULT '0',
  `abono` double DEFAULT '0',
  `status` varchar(500) DEFAULT NULL,
  `ret1` text,
  `ret_desc1` text,
  `ret2` text,
  `ret_desc2` text,
  `ret3` text,
  `ret_desc3` text,
  `ret4` text,
  `ret_desc4` text,
  `ret5` text,
  `ret_desc5` text,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(500) DEFAULT NULL,
  `apellidos` varchar(500) DEFAULT NULL,
  `documento` varchar(500) DEFAULT NULL,
  `cliente` varchar(500) DEFAULT NULL,
  `pais` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `email2` varchar(500) DEFAULT NULL,
  `movil` varchar(500) DEFAULT NULL,
  `movil2` varchar(500) DEFAULT NULL,
  `pre_informacion` text,
  `porque_espana` text,
  `inversion` double DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `verificado` tinyint(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion_oficina` text,
  `direccion_domicilio` text,
  `titulacion` text,
  `anos_laboral` int(11) DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE IF NOT EXISTS `seguimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contacto` int(11) NOT NULL,
  `cliente` varchar(500) DEFAULT NULL,
  `asunto` text,
  `descripcion` text,
  `categoria` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `adjuntos` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento_cat`
--

CREATE TABLE IF NOT EXISTS `seguimiento_cat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `anulado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(500) DEFAULT NULL,
  `nombre` text,
  `descripcion` text,
  `precio` double DEFAULT NULL,
  `precio1` double DEFAULT NULL,
  `precio2` double DEFAULT NULL,
  `precio3` double DEFAULT NULL,
  `precio_compra` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `pro_inv_max` int(11) DEFAULT NULL,
  `pro_inv_min` int(11) DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `islr` double DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `estado` varchar(500) DEFAULT NULL,
  `stock` varchar(500) DEFAULT NULL,
  `tramitido_al_crm` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `elaborado_por` varchar(500) DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `editado_por` varchar(500) DEFAULT NULL,
  `editado_fecha` datetime DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(250) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_cat`
--

CREATE TABLE IF NOT EXISTS `servicios_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `apellido` varchar(250) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `tel` varchar(250) DEFAULT NULL,
  `fecha_emis` datetime DEFAULT NULL,
  `fecha_login` datetime DEFAULT NULL,
  `usuario` varchar(250) DEFAULT NULL,
  `clave` varchar(250) DEFAULT NULL,
  `foto` text,
  `color` varchar(500) DEFAULT NULL,
  `pais` varchar(250) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `cargo` varchar(500) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


  INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `sexo`, `email`, `tel`, `fecha_emis`, `fecha_login`, `usuario`, `clave`, `foto`, `color`, `pais`, `tipo`, `cargo`, `anulado`) VALUES
(1, 'SUPER', 'USUARIO', 'M', 'super@gmail.com', '04141331946', '2016-10-18 00:00:00', '2017-01-14 12:45:51', 'super@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hombre.jpg', '#212121', 'venezuela', 'SUPERUSER', 'PROGRAMADOR', '0'),
(2, 'Melanie', 'Hicks', 'F', 'cobros@gmail.com', '+861-36-6593225', '2017-01-14 09:54:37', '2017-01-14 12:37:05', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Totam blanditiis tempore eu id nisi laboriosam officia repellendus Hic totam maxime id ut', 'Qui consectetur optio ullamco vitae sit impedit', 'COBROS', 'Nihil quas repellendus Qui quia duis laboris vitae iste dolor reiciendis doloremque dolores magni velit', '0'),
(3, 'Tamara', 'Macias', 'M', 'ventas@gmail.com', '+913-97-1516515', '2017-01-14 09:56:38', '2017-01-14 10:31:44', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Velit quia incidunt duis numquam voluptas irure eaque aut expedita magna pariatur Recusandae Sit est nobis magni voluptatem', 'Ipsum vel reprehenderit voluptate ut praesentium dolorum', 'VENTAS', 'Architecto praesentium in irure aliquid enim id velit asperiores', '0'),
(4, 'Helen', 'Shaw', 'M', 'compras@gmail.com', '+357-21-4896404', '2017-01-14 10:17:16', '2017-01-14 10:18:03', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'hombre.jpg', 'Exercitationem aperiam amet nobis eiusmod quod laboriosam nulla quos veritatis blanditiis illum voluptatem error lorem eveniet pariatur Adipisci reiciendis consequatur', 'Do commodi laudantium aliqua Non perferendis beatae duis reiciendis omnis accusamus ullamco et odit illum in eos eum', 'COMPRAS', 'Perspiciatis eiusmod culpa laborum Omnis aspernatur omnis aut', '0'),
(5, 'Cora', 'Mckinney', 'M', 'pagos@gmail.com', '+594-25-9446618', '2017-01-14 10:24:42', '2017-01-14 12:36:27', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Officiis saepe minim omnis fugiat', 'Id praesentium et modi cumque facere commodi rerum deserunt autem ut sit quo suscipit molestias', 'PAGOS', 'Qui labore saepe sint autem eiusmod et eos et similique id', '0'),
(6, 'Nayda', 'Witt', 'F', 'administrador@gmail.com', '+568-85-1521677', '2017-01-14 10:27:22', '2017-01-14 10:27:34', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Vel irure nemo asperiores quasi odit fugiat cum', 'Quia asperiores nulla nostrum eum non qui quis non non eu at amet excepturi laboris fuga', 'ADMINISTRADOR', 'Excepteur rerum consectetur est soluta reprehenderit numquam officiis cupiditate sint placeat modi laborum Voluptate veritatis maiores molestias provident repudiandae velit', '0'),
(7, 'Cody', 'Mcguire', 'F', 'operador@gmail.com', '+724-91-5123427', '2017-01-14 10:28:27', '2017-01-14 10:28:38', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'hombre.jpg', 'Quod inventore rerum officiis accusantium facilis similique qui omnis harum quisquam aperiam molestias libero', 'Commodo nulla quisquam et quia obcaecati ad magni et rerum aspernatur id incididunt consequuntur ab in', 'OPERADOR', 'Numquam nostrud blanditiis molestias duis deserunt suscipit aut dolorum', '0');

INSERT INTO `seguimiento_cat` (`id`, `nombre`, `anulado`) VALUES
(1, 'EJECUTIVO Y COMERCIAL', 0),
(2, 'FINANCIERO', 0),
(3, 'LEGAL', 0),
(4, 'ADMINISTRATIVO Y CONTABLE', 0),
(5, 'TECNOLOGIA', 0);