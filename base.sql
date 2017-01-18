-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2017 a las 22:29:51
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `erp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_bancos`
--

CREATE TABLE `cajas_bancos` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_bancos_entrada`
--

CREATE TABLE `cajas_bancos_entrada` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_bancos_movimientos`
--

CREATE TABLE `cajas_bancos_movimientos` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_bancos_salida`
--

CREATE TABLE `cajas_bancos_salida` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `id_de` int(11) DEFAULT NULL,
  `id_para` int(11) DEFAULT NULL,
  `mensaje` text,
  `fecha_envio` datetime DEFAULT NULL,
  `fecha_leido` datetime DEFAULT NULL,
  `envio_todos` tinyint(1) DEFAULT '0',
  `visto` tinyint(1) DEFAULT '0',
  `leido` tinyint(1) DEFAULT '0',
  `ip` varchar(200) DEFAULT NULL,
  `anulado` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobros`
--

CREATE TABLE `cobros` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_detalle`
--

CREATE TABLE `compras_detalle` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos_web`
--

CREATE TABLE `contactos_web` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_detalle`
--

CREATE TABLE `cotizacion_detalle` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_por_cobrar`
--

CREATE TABLE `cuenta_por_cobrar` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_por_pagar`
--

CREATE TABLE `cuenta_por_pagar` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_detalle`
--

CREATE TABLE `factura_detalle` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_fichas_opciones`
--

CREATE TABLE `form_fichas_opciones` (
  `ref` int(11) NOT NULL,
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
  `anulado` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_fichas_opciones_franquicias`
--

CREATE TABLE `form_fichas_opciones_franquicias` (
  `ref` int(11) NOT NULL,
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
  `anulado` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instaladores`
--

CREATE TABLE `instaladores` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `codigo` varchar(500) DEFAULT NULL,
  `nombre` text,
  `descripcion` text,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_cat`
--

CREATE TABLE `inventario_cat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_entrada`
--

CREATE TABLE `inventario_entrada` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_entrada_detalle`
--

CREATE TABLE `inventario_entrada_detalle` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_movimientos`
--

CREATE TABLE `inventario_movimientos` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_salida`
--

CREATE TABLE `inventario_salida` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_salida_detalle`
--

CREATE TABLE `inventario_salida_detalle` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_entrega`
--

CREATE TABLE `nota_entrega` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_entrega_detalle`
--

CREATE TABLE `nota_entrega_detalle` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE `obras` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_detalle`
--

CREATE TABLE `obras_detalle` (
  `id` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL,
  `doc_id` text,
  `doc_desc` text,
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
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
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `id` int(11) NOT NULL,
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
  `adjuntos` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento_cat`
--

CREATE TABLE `seguimiento_cat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `anulado` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_cat`
--

CREATE TABLE `servicios_cat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
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
  `anulado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cajas_bancos`
--
ALTER TABLE `cajas_bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_bancos_entrada`
--
ALTER TABLE `cajas_bancos_entrada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_bancos_movimientos`
--
ALTER TABLE `cajas_bancos_movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_bancos_salida`
--
ALTER TABLE `cajas_bancos_salida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cobros`
--
ALTER TABLE `cobros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras_detalle`
--
ALTER TABLE `compras_detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos_web`
--
ALTER TABLE `contactos_web`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cotizacion_detalle`
--
ALTER TABLE `cotizacion_detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuenta_por_cobrar`
--
ALTER TABLE `cuenta_por_cobrar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuenta_por_pagar`
--
ALTER TABLE `cuenta_por_pagar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura_detalle`
--
ALTER TABLE `factura_detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form_fichas_opciones`
--
ALTER TABLE `form_fichas_opciones`
  ADD PRIMARY KEY (`ref`);

--
-- Indices de la tabla `form_fichas_opciones_franquicias`
--
ALTER TABLE `form_fichas_opciones_franquicias`
  ADD PRIMARY KEY (`ref`);

--
-- Indices de la tabla `instaladores`
--
ALTER TABLE `instaladores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario_cat`
--
ALTER TABLE `inventario_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario_entrada`
--
ALTER TABLE `inventario_entrada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario_entrada_detalle`
--
ALTER TABLE `inventario_entrada_detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario_movimientos`
--
ALTER TABLE `inventario_movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario_salida`
--
ALTER TABLE `inventario_salida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario_salida_detalle`
--
ALTER TABLE `inventario_salida_detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nota_entrega`
--
ALTER TABLE `nota_entrega`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nota_entrega_detalle`
--
ALTER TABLE `nota_entrega_detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `obras_detalle`
--
ALTER TABLE `obras_detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguimiento_cat`
--
ALTER TABLE `seguimiento_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios_cat`
--
ALTER TABLE `servicios_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cajas_bancos`
--
ALTER TABLE `cajas_bancos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cajas_bancos_entrada`
--
ALTER TABLE `cajas_bancos_entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cajas_bancos_movimientos`
--
ALTER TABLE `cajas_bancos_movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cajas_bancos_salida`
--
ALTER TABLE `cajas_bancos_salida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cobros`
--
ALTER TABLE `cobros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `compras_detalle`
--
ALTER TABLE `compras_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contactos_web`
--
ALTER TABLE `contactos_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cotizacion_detalle`
--
ALTER TABLE `cotizacion_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cuenta_por_cobrar`
--
ALTER TABLE `cuenta_por_cobrar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cuenta_por_pagar`
--
ALTER TABLE `cuenta_por_pagar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `factura_detalle`
--
ALTER TABLE `factura_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `form_fichas_opciones`
--
ALTER TABLE `form_fichas_opciones`
  MODIFY `ref` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `form_fichas_opciones_franquicias`
--
ALTER TABLE `form_fichas_opciones_franquicias`
  MODIFY `ref` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `instaladores`
--
ALTER TABLE `instaladores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario_cat`
--
ALTER TABLE `inventario_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario_entrada`
--
ALTER TABLE `inventario_entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario_entrada_detalle`
--
ALTER TABLE `inventario_entrada_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario_movimientos`
--
ALTER TABLE `inventario_movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario_salida`
--
ALTER TABLE `inventario_salida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario_salida_detalle`
--
ALTER TABLE `inventario_salida_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nota_entrega`
--
ALTER TABLE `nota_entrega`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nota_entrega_detalle`
--
ALTER TABLE `nota_entrega_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `obras`
--
ALTER TABLE `obras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `obras_detalle`
--
ALTER TABLE `obras_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios_cat`
--
ALTER TABLE `servicios_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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