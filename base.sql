-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2017 a las 03:48:34
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `documento` varchar(200) DEFAULT NULL,
  `cliente` varchar(200) DEFAULT NULL,
  `titulacion` varchar(200) DEFAULT NULL,
  `pais` varchar(200) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `movil` varchar(200) DEFAULT NULL,
  `email2` varchar(200) DEFAULT NULL,
  `movil2` varchar(200) DEFAULT NULL,
  `direccion_oficina` text,
  `direccion_domicilio` text,
  `comentario` text,
  `status` varchar(200) DEFAULT NULL,
  `ins_user` varchar(200) DEFAULT NULL,
  `upd_user` varchar(200) DEFAULT NULL,
  `ins_fecha` datetime DEFAULT NULL,
  `upd_fecha` datetime DEFAULT NULL,
  `id_categoria` varchar(45) DEFAULT NULL,
  `id_vendedor` varchar(45) DEFAULT NULL,
  `id_movil` varchar(45) DEFAULT NULL,
  `id_cuenta` varchar(45) DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(200) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombres` varchar(500) DEFAULT NULL,
  `apellidos` varchar(500) DEFAULT NULL,
  `documento` varchar(500) DEFAULT NULL,
  `cliente` varchar(500) DEFAULT NULL,
  `titulacion` varchar(500) DEFAULT NULL,
  `pais` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `email2` varchar(500) DEFAULT NULL,
  `movil` varchar(500) DEFAULT NULL,
  `movil2` varchar(500) DEFAULT NULL,
  `comentarios` text,
  `status` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_terminacion` date DEFAULT NULL,
  `cargo` varchar(500) DEFAULT NULL,
  `salario` double DEFAULT NULL,
  `dependiente` varchar(500) DEFAULT NULL,
  `direccion_oficina` text,
  `direccion_domicilio` text,
  `imagenes` text,
  `id_categoria` varchar(45) DEFAULT NULL,
  `id_mobil` varchar(45) DEFAULT NULL,
  `id_cuenta` varchar(45) DEFAULT NULL,
  `ins_user` varchar(500) DEFAULT NULL,
  `ins_fecha` datetime DEFAULT NULL,
  `upd_user` varchar(500) DEFAULT NULL,
  `upd_fecha` datetime DEFAULT NULL,
  `ip` varchar(250) DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
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
-- Estructura de tabla para la tabla `instaladores_detalle`
--

CREATE TABLE `instaladores_detalle` (
  `id` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL,
  `doc_id` text,
  `doc_desc` text,
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
  `comentarios` text,
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
  `id_categoria` int(11) DEFAULT NULL,
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
  `nombres` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `documento` varchar(200) DEFAULT NULL,
  `cliente` varchar(200) DEFAULT NULL,
  `titulacion` varchar(200) DEFAULT NULL,
  `pais` varchar(200) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `movil` varchar(200) DEFAULT NULL,
  `email2` varchar(200) DEFAULT NULL,
  `movil2` varchar(200) DEFAULT NULL,
  `direccion_oficina` text,
  `direccion_domicilio` text,
  `comentario` text,
  `status` varchar(200) DEFAULT NULL,
  `ins_user` varchar(200) DEFAULT NULL,
  `upd_user` varchar(200) DEFAULT NULL,
  `ins_fecha` datetime DEFAULT NULL,
  `upd_fecha` datetime DEFAULT NULL,
  `id_categoria` varchar(45) DEFAULT NULL,
  `id_vendedor` varchar(45) DEFAULT NULL,
  `id_movil` varchar(45) DEFAULT NULL,
  `id_cuenta` varchar(45) DEFAULT NULL,
  `imagenes` text,
  `ip` varchar(200) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text
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
  `id_categoria` varchar(500) DEFAULT NULL,
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
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `codigo` varchar(500) DEFAULT NULL,
  `nombre` text,
  `descripcion` text,
  `comentarios` text,
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
  `id_categoria` int(11) DEFAULT NULL,
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
-- Estructura de tabla para la tabla `taxonomia`
--

CREATE TABLE `taxonomia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `term_group` varchar(10) DEFAULT NULL,
  `descripcion` text,
  `ins_user` varchar(45) DEFAULT NULL,
  `upd_user` varchar(45) DEFAULT NULL,
  `ins_fecha` datetime DEFAULT NULL,
  `upd_fecha` datetime DEFAULT NULL,
  `ext1` varchar(45) DEFAULT NULL,
  `ext2` varchar(45) DEFAULT NULL,
  `ext3` varchar(45) DEFAULT NULL,
  `ext4` varchar(45) DEFAULT NULL,
  `ext5` varchar(45) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taxonomia_relacion`
--

CREATE TABLE `taxonomia_relacion` (
  `id` int(11) NOT NULL,
  `id_taxonomia` int(11) DEFAULT NULL,
  `taxonomia` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `padre` bigint(20) DEFAULT NULL,
  `contador` bigint(20) DEFAULT NULL,
  `ins_user` varchar(45) DEFAULT NULL,
  `upd_user` varchar(45) DEFAULT NULL,
  `ins_fecha` datetime DEFAULT NULL,
  `upd_fecha` datetime DEFAULT NULL,
  `ext1` varchar(45) DEFAULT NULL,
  `ext2` varchar(45) DEFAULT NULL,
  `ext3` varchar(45) DEFAULT NULL,
  `ext4` varchar(45) DEFAULT NULL,
  `ext5` varchar(45) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT NULL
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL,
  `nombres` varchar(500) DEFAULT NULL,
  `apellidos` varchar(500) DEFAULT NULL,
  `documento` varchar(500) DEFAULT NULL,
  `cliente` varchar(500) DEFAULT NULL,
  `titulacion` varchar(500) DEFAULT NULL,
  `pais` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `email2` varchar(500) DEFAULT NULL,
  `movil` varchar(500) DEFAULT NULL,
  `movil2` varchar(500) DEFAULT NULL,
  `comentarios` text,
  `status` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_terminacion` date DEFAULT NULL,
  `cargo` varchar(500) DEFAULT NULL,
  `salario` double DEFAULT NULL,
  `dependiente` varchar(500) DEFAULT NULL,
  `direccion_oficina` text,
  `direccion_domicilio` text,
  `imagenes` text,
  `id_categoria` varchar(45) DEFAULT NULL,
  `id_mobil` varchar(45) DEFAULT NULL,
  `id_cuenta` varchar(45) DEFAULT NULL,
  `ins_user` varchar(500) DEFAULT NULL,
  `ins_fecha` datetime DEFAULT NULL,
  `upd_user` varchar(500) DEFAULT NULL,
  `upd_fecha` datetime DEFAULT NULL,
  `ip` varchar(250) DEFAULT NULL,
  `verificado` varchar(1) DEFAULT '0',
  `anulado` varchar(1) DEFAULT '0',
  `ext1` text,
  `ext2` text,
  `ext3` text,
  `ext4` text,
  `ext5` text
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
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
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
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
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
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `taxonomia`
--
ALTER TABLE `taxonomia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `taxonomia_relacion`
--
ALTER TABLE `taxonomia_relacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
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
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
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
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
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
-- AUTO_INCREMENT de la tabla `taxonomia`
--
ALTER TABLE `taxonomia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `taxonomia_relacion`
--
ALTER TABLE `taxonomia_relacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;