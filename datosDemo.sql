-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2017 a las 00:05:42
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `erp`
--

--
-- Volcado de datos para la tabla `cajas_bancos`
--

INSERT INTO `cajas_bancos` (`id`, `descripcion`, `tipo`, `numero_cuenta`, `direccion`, `ejecutivo`, `saldo_inicial`, `saldo_final`, `tramitido_al_crm`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, 'Caja chica 1', 'CAJA', '', '', '', 10000, 15074.48, '', '1', '2017-01-15 15:09:51', '', '1', '2017-01-15 15:09:51', '', '::1', '0', '', '', '', '', '');

--
-- Volcado de datos para la tabla `cajas_bancos_entrada`
--

INSERT INTO `cajas_bancos_entrada` (`id`, `id_doc`, `doc`, `id_cliente`, `enc_cliente`, `id_banco_caja`, `banco_caja`, `tipo`, `numero_ref`, `enc_fecha_emision`, `enc_comentarios`, `total_parcial`, `total_tax`, `total_total`, `saldo`, `abono`, `status`, `ret1`, `ret_desc1`, `ret2`, `ret_desc2`, `ret3`, `ret_desc3`, `ret4`, `ret_desc4`, `ret5`, `ret_desc5`, `tramitido_al_crm`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, '0', 'AJUSTE ENTRADA', '0', 'LA EMPRESA', '1', 'CAJA CHICA 1', 'TRANSFERENCIA', '12341654984', '2017-01-15', 'Caja entrada ', 0, 0, 0, 0, 10000, '', '', '', '', '', '', '', '', '', '', '', '', '1', '2017-01-15 15:12:29', '', NULL, NULL, '', '::1', '0', '', '', '', '', '');

--
-- Volcado de datos para la tabla `cajas_bancos_movimientos`
--

INSERT INTO `cajas_bancos_movimientos` (`id`, `id_doc`, `doc`, `id_cliente`, `enc_cliente`, `id_banco_caja`, `banco_caja`, `tipo`, `abono`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, '0', 'SALDO INICIAL', '0', 'SALDO INICIAL', '1', 'Caja chica 1', 'INGRESO', 10000, '1', '2017-01-15 15:09:51', '', NULL, NULL, '', '::1', '0', '', '', '', '', ''),
(2, '1', 'AJUSTE SALIDA', '0', 'LA EMPRESA', '1', 'CAJA CHICA 1', 'AJUSTE SALIDA', -5000, '1', '2017-01-15 15:11:00', '', '1', '2017-01-15 15:11:00', '', '::1', '0', '', '', '', '', ''),
(3, '1', 'AJUSTE ENTRADA', '0', 'LA EMPRESA', '1', 'CAJA CHICA 1', 'AJUSTE ENTRADA', 10000, '1', '2017-01-15 15:12:29', '', '1', '2017-01-15 15:12:29', '', '::1', '0', '', '', '', '', ''),
(4, '1', 'FACTURA', '1', 'Douglas C.A', '1', 'CAJA CHICA 1', 'INGRESO', 70.48, '1', '2017-01-17 12:35:36', '', '1', '2017-01-17 12:35:36', '', '::1', '', '', '', '', '', ''),
(5, '1', 'FACTURA', '1', 'Douglas C.A', '1', 'CAJA CHICA 1', 'INGRESO', 4, '1', '2017-01-17 12:36:51', '', '1', '2017-01-17 12:36:51', '', '::1', '', '', '', '', '', '');

--
-- Volcado de datos para la tabla `cajas_bancos_salida`
--

INSERT INTO `cajas_bancos_salida` (`id`, `id_doc`, `doc`, `id_cliente`, `enc_cliente`, `id_banco_caja`, `banco_caja`, `tipo`, `numero_ref`, `enc_fecha_emision`, `enc_comentarios`, `total_parcial`, `total_tax`, `total_total`, `saldo`, `abono`, `status`, `ret1`, `ret_desc1`, `ret2`, `ret_desc2`, `ret3`, `ret_desc3`, `ret4`, `ret_desc4`, `ret5`, `ret_desc5`, `tramitido_al_crm`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, '0', 'AJUSTE SALIDA', '0', 'LA EMPRESA', '1', 'CAJA CHICA 1', 'TRANSFERENCIA', '1321564', '2017-01-15', 'Salida de emergencia', 0, 0, 0, 0, 5000, '', '', '', '', '', '', '', '', '', '', '', '', '1', '2017-01-15 15:11:00', '', NULL, NULL, '', '::1', '0', '', '', '', '', '');

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `id_de`, `id_para`, `mensaje`, `fecha_envio`, `fecha_leido`, `envio_todos`, `visto`, `leido`, `ip`, `anulado`) VALUES
(1, 1, 2, 'que mas', '2017-01-18 21:07:05', NULL, 0, 0, 0, '::1', 0),
(2, 1, 4, 'como te va', '2017-01-18 21:14:47', '2017-01-18 21:15:50', 0, 1, 0, '::1', 0),
(3, 1, 5, 'hola', '2017-01-18 21:19:43', NULL, 0, 0, 0, '::1', 0),
(4, 1, 6, 'holas', '2017-01-18 22:07:56', NULL, 0, 0, 0, '::1', 0);

--
-- Volcado de datos para la tabla `cobros`
--

INSERT INTO `cobros` (`id`, `id_doc`, `doc`, `id_cliente`, `enc_cliente`, `id_banco_caja`, `banco_caja`, `tipo`, `numero_ref`, `enc_fecha_emision`, `enc_comentarios`, `total_parcial`, `total_tax`, `total_total`, `saldo`, `abono`, `status`, `ret1`, `ret_desc1`, `ret2`, `ret_desc2`, `ret3`, `ret_desc3`, `ret4`, `ret_desc4`, `ret5`, `ret_desc5`, `tramitido_al_crm`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, '1', 'FACTURA', '1', 'Douglas C.A', '1', 'CAJA CHICA 1', 'TRANSFERENCIA', '16546516165', '2017-01-17', 'HOLA', 66.5, 7.98, 74.48, 74.48, 70.48, '', '', '', '', '', '', '', '', '', '', '', '', '1', '2017-01-17 12:35:36', '', '1', '2017-01-17 12:35:36', '', '::1', '', '', '', '', '', ''),
(2, '1', 'FACTURA', '1', 'Douglas C.A', '1', 'CAJA CHICA 1', 'TRANSFERENCIA', '16516541', '2017-01-17', '1231654', 66.5, 7.98, 74.48, 4, 4, '', '', '', '', '', '', '', '', '', '', '', '', '1', '2017-01-17 12:36:51', '', '1', '2017-01-17 12:36:51', '', '::1', '', '', '', '', '', '');

--
-- Volcado de datos para la tabla `contactos_web`
--

INSERT INTO `contactos_web` (`id`, `nombres`, `apellidos`, `documento`, `cliente`, `pais`, `email`, `email2`, `movil`, `movil2`, `pre_informacion`, `porque_espana`, `inversion`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`, `verificado`, `editado_por`, `editado_fecha`, `fecha_nacimiento`, `direccion_oficina`, `direccion_domicilio`, `titulacion`, `anos_laboral`, `imagenes`, `ip`, `anulado`) VALUES
(1, 'Douglas', 'nIEVES', '012125', 'Douglas C.A', 'PANAMA', 'douglas.nieves@cohenyaguirre.es', 'douglasjosenieves@gmail.com', '04141331946', '04141331946', NULL, NULL, NULL, 'CLIENTE', NULL, '2017-01-17 09:44:52', '1', 0, NULL, NULL, '2017-01-17', '04141331946', NULL, NULL, NULL, NULL, '::1', '0'),
(2, 'Douglas', 'Nieves', '124578', 'tuweblink.ca', 'PANAMA', 'douglas.nieves@cohenyaguirre.es', 'douglasjosenieves@gmail.com', '04141331946', '04141331946', NULL, NULL, NULL, 'CLIENTE', NULL, '2017-01-17 20:09:45', '1', 0, NULL, NULL, '2017-01-17', 'douglas', NULL, NULL, NULL, NULL, '::1', '0');

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`id`, `enc_id_cliente`, `enc_cliente`, `enc_cliente_direccion`, `enc_cliente_documento`, `enc_cliente_tel`, `enc_cliente_email`, `enc_lugar_emision`, `enc_fecha_emision`, `enc_orden`, `enc_comentarios`, `reg_id`, `reg_nombre`, `reg_descripcion`, `reg_cantidad`, `reg_und_med`, `reg_stock`, `reg_precio`, `reg_tax`, `reg_tax_monto`, `reg_subtotal`, `reg_subtotal_con_tax`, `total_parcial`, `total_tax`, `total_total`, `tramitido_al_crm`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, '1', 'Douglas C.A', '04141331946', '012125', '04141331946', 'douglas.nieves@cohenyaguirre.es', 'Caracas', '2017-01-17', '9856544', 'Como esta', 'a:3:{i:0;s:1:"1";i:1;s:1:"1";i:2;s:1:"1";}', 'a:3:{i:0;s:15:"Computadora Lg5";i:1;s:15:"Computadora Lg5";i:2;s:15:"Computadora Lg5";}', 'a:3:{i:0;s:11:"<p>comp</p>";i:1;s:11:"<p>comp</p>";i:2;s:11:"<p>comp</p>";}', 'a:3:{i:0;s:2:"34";i:1;s:2:"34";i:2;s:2:"65";}', 'a:3:{i:0;s:3:"und";i:1;s:3:"und";i:2;s:3:"und";}', 'a:3:{i:0;s:8:"CANTIDAD";i:1;s:8:"CANTIDAD";i:2;s:8:"CANTIDAD";}', 'a:3:{i:0;s:3:"0.5";i:1;s:3:"0.5";i:2;s:3:"0.5";}', 'a:3:{i:0;s:2:"12";i:1;s:2:"12";i:2;s:2:"12";}', 'a:3:{i:0;s:4:"2.04";i:1;s:4:"2.04";i:2;s:3:"3.9";}', 'a:3:{i:0;s:2:"17";i:1;s:2:"17";i:2;s:4:"32.5";}', 'a:3:{i:0;s:5:"19.04";i:1;s:5:"19.04";i:2;s:4:"36.4";}', 66.5, 7.98, 74.48, '', '1', '2017-01-17 11:00:49', '', NULL, NULL, 'N;', '::1', '', '1', NULL, NULL, NULL, NULL),
(2, '2', 'tuweblink.ca', 'douglas', '124578', '04141331946', 'douglas.nieves@cohenyaguirre.es', 'Caracas', '2017-01-18', '98756464', 'aprueba', 'a:1:{i:0;s:1:"1";}', 'a:1:{i:0;s:15:"Computadora Lg5";}', 'a:1:{i:0;s:20:"computadora hp2 DD3 ";}', 'a:1:{i:0;s:2:"34";}', 'a:1:{i:0;s:3:"und";}', 'a:1:{i:0;s:8:"CANTIDAD";}', 'a:1:{i:0;s:3:"0.5";}', 'a:1:{i:0;s:2:"12";}', 'a:1:{i:0;s:4:"2.04";}', 'a:1:{i:0;s:2:"17";}', 'a:1:{i:0;s:5:"19.04";}', 17, 2.04, 19.04, '', '1', '2017-01-18 21:26:00', '', NULL, NULL, 'N;', '::1', '', '1', NULL, NULL, NULL, NULL),
(3, '2', 'tuweblink.ca', 'douglas', '124578', '04141331946', 'douglas.nieves@cohenyaguirre.es', 'Caracas', '2017-01-18', '987465498', 'que mas', 'a:1:{i:0;s:1:"1";}', 'a:1:{i:0;s:40:"Computadora Lg5 hecha en venezuelas 100%";}', 'a:1:{i:0;s:20:"computadora hp2 DD3 ";}', 'a:1:{i:0;s:4:"3454";}', 'a:1:{i:0;s:3:"und";}', 'a:1:{i:0;s:8:"CANTIDAD";}', 'a:1:{i:0;s:3:"0.5";}', 'a:1:{i:0;s:2:"12";}', 'a:1:{i:0;s:6:"207.24";}', 'a:1:{i:0;s:4:"1727";}', 'a:1:{i:0;s:7:"1934.24";}', 1727, 207.24, 1934.24, '', '1', '2017-01-18 21:34:39', '', NULL, NULL, 'N;', '::1', '', '1', NULL, NULL, NULL, NULL),
(4, '2', 'tuweblink.ca', 'douglas', '124578', '04141331946', 'douglas.nieves@cohenyaguirre.es', 'Caracas', '2017-01-18', '9856478', 'hola', 'a:1:{i:0;s:1:"1";}', 'a:1:{i:0;s:35:"Computadora Lg5 hecha en venezuela.";}', 'a:1:{i:0;s:20:"computadora hp2 DD3 ";}', 'a:1:{i:0;s:2:"34";}', 'a:1:{i:0;s:3:"und";}', 'a:1:{i:0;s:8:"CANTIDAD";}', 'a:1:{i:0;s:3:"0.5";}', 'a:1:{i:0;s:2:"12";}', 'a:1:{i:0;s:4:"2.04";}', 'a:1:{i:0;s:2:"17";}', 'a:1:{i:0;s:5:"19.04";}', 17, 2.04, 19.04, '', '1', '2017-01-18 21:37:15', '', NULL, NULL, 'N;', '::1', '', '1', NULL, NULL, NULL, NULL);

--
-- Volcado de datos para la tabla `cotizacion_detalle`
--

INSERT INTO `cotizacion_detalle` (`id`, `id_enc`, `reg_id`, `reg_nombre`, `reg_descripcion`, `reg_cantidad`, `reg_und_med`, `reg_stock`, `reg_precio`, `reg_tax`, `reg_tax_monto`, `reg_subtotal`, `reg_subtotal_con_tax`, `anulado`) VALUES
(1, 1, '1', 'Computadora Lg5', '<p>comp</p>', '34', 'und', 'CANTIDAD', '0.5', '12', '2.04', '17', '19.04', '0'),
(2, 1, '1', 'Computadora Lg5', '<p>comp</p>', '34', 'und', 'CANTIDAD', '0.5', '12', '2.04', '17', '19.04', '0'),
(3, 1, '1', 'Computadora Lg5', '<p>comp</p>', '65', 'und', 'CANTIDAD', '0.5', '12', '3.9', '32.5', '36.4', '0'),
(4, 2, '1', 'Computadora Lg5', 'computadora hp2 DD3 ', '34', 'und', 'CANTIDAD', '0.5', '12', '2.04', '17', '19.04', '0'),
(5, 3, '1', 'Computadora Lg5 hecha en venezuelas 100%', 'computadora hp2 DD3 ', '3454', 'und', 'CANTIDAD', '0.5', '12', '207.24', '1727', '1934.24', '0'),
(6, 4, '1', 'Computadora Lg5 hecha en venezuela.', 'computadora hp2 DD3 ', '34', 'und', 'CANTIDAD', '0.5', '12', '2.04', '17', '19.04', '0');

--
-- Volcado de datos para la tabla `cuenta_por_cobrar`
--

INSERT INTO `cuenta_por_cobrar` (`id`, `id_doc`, `doc`, `id_cliente`, `enc_cliente`, `enc_cliente_direccion`, `enc_cliente_documento`, `enc_cliente_tel`, `enc_cliente_email`, `enc_lugar_emision`, `enc_fecha_emision`, `enc_orden`, `enc_comentarios`, `total_parcial`, `total_tax`, `total_total`, `saldo`, `status_saldo`, `tramitido_al_crm`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, '1', 'FACTURA', '1', 'Douglas C.A', '04141331946', '012125', '04141331946', 'douglas.nieves@cohenyaguirre.es', 'Caracas', '2017-01-17', '9856544', 'Como esta', 66.5, 7.98, 74.48, 0, 'PENDIENTE', '', '1', '2017-01-17 11:25:23', '', NULL, NULL, NULL, '::1', '', NULL, NULL, NULL, NULL, NULL),
(2, '2', 'FACTURA', '2', 'tuweblink.ca', 'douglas', '124578', '04141331946', 'douglas.nieves@cohenyaguirre.es', 'Caracas', '2017-01-18', '98765', 'que mas', 1.5, 0.18, 1.68, 1.68, 'PENDIENTE', '', '1', '2017-01-18 21:59:28', '', NULL, NULL, NULL, '::1', '', NULL, NULL, NULL, NULL, NULL);

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombres`, `apellidos`, `documento`, `cliente`, `pais`, `email`, `email2`, `movil`, `movil2`, `pre_informacion`, `porque_espana`, `inversion`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`, `verificado`, `editado_por`, `editado_fecha`, `fecha_nacimiento`, `direccion_oficina`, `direccion_domicilio`, `titulacion`, `anos_laboral`, `imagenes`, `ip`, `anulado`) VALUES
(1, 'Douglas', 'Nieves', '04141331946', 'Tuwebink International C.A', 'PANAMA', 'douglas.nieves@cohenyaguirre.es', 'douglasjosenieves@gmail.com', '04141331946', '04141331946', NULL, NULL, NULL, 'ACTIVA', NULL, '2017-01-18 21:49:05', '1', 0, NULL, NULL, '2017-01-18', 'que mas', NULL, NULL, NULL, NULL, '::1', '0');

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `enc_id_cliente`, `enc_cliente`, `enc_cliente_direccion`, `enc_cliente_documento`, `enc_cliente_tel`, `enc_cliente_email`, `enc_lugar_emision`, `enc_fecha_emision`, `enc_orden`, `enc_comentarios`, `reg_id`, `reg_nombre`, `reg_descripcion`, `reg_cantidad`, `reg_und_med`, `reg_stock`, `reg_precio`, `reg_tax`, `reg_tax_monto`, `reg_subtotal`, `reg_subtotal_con_tax`, `total_parcial`, `total_tax`, `total_total`, `tramitido_al_crm`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, '1', 'Douglas C.A', '04141331946', '012125', '04141331946', 'douglas.nieves@cohenyaguirre.es', 'Caracas', '2017-01-17', '9856544', 'Como esta', 'a:3:{i:0;s:1:"1";i:1;s:1:"1";i:2;s:1:"1";}', 'a:3:{i:0;s:15:"Computadora Lg5";i:1;s:15:"Computadora Lg5";i:2;s:15:"Computadora Lg5";}', 'a:3:{i:0;s:11:"<p>comp</p>";i:1;s:11:"<p>comp</p>";i:2;s:11:"<p>comp</p>";}', 'a:3:{i:0;s:2:"34";i:1;s:2:"34";i:2;s:2:"65";}', 'a:3:{i:0;s:3:"und";i:1;s:3:"und";i:2;s:3:"und";}', 'a:3:{i:0;s:8:"CANTIDAD";i:1;s:8:"CANTIDAD";i:2;s:8:"CANTIDAD";}', 'a:3:{i:0;s:3:"0.5";i:1;s:3:"0.5";i:2;s:3:"0.5";}', 'a:3:{i:0;s:2:"12";i:1;s:2:"12";i:2;s:2:"12";}', 'a:3:{i:0;s:4:"2.04";i:1;s:4:"2.04";i:2;s:3:"3.9";}', 'a:3:{i:0;s:2:"17";i:1;s:2:"17";i:2;s:4:"32.5";}', 'a:3:{i:0;s:5:"19.04";i:1;s:5:"19.04";i:2;s:4:"36.4";}', 66.5, 7.98, 74.48, '', '1', '2017-01-17 11:25:23', '', NULL, NULL, 'N;', '::1', '', '1', NULL, NULL, NULL, NULL),
(2, '2', 'tuweblink.ca', 'douglas', '124578', '04141331946', 'douglas.nieves@cohenyaguirre.es', 'Caracas', '2017-01-18', '98765', 'que mas', 'a:1:{i:0;s:1:"1";}', 'a:1:{i:0;s:35:"Computadora Lg5 hecha en venezuela.";}', 'a:1:{i:0;s:20:"computadora hp2 DD3 ";}', 'a:1:{i:0;s:1:"3";}', 'a:1:{i:0;s:3:"und";}', 'a:1:{i:0;s:8:"CANTIDAD";}', 'a:1:{i:0;s:3:"0.5";}', 'a:1:{i:0;s:2:"12";}', 'a:1:{i:0;s:4:"0.18";}', 'a:1:{i:0;s:3:"1.5";}', 'a:1:{i:0;s:4:"1.68";}', 1.5, 0.18, 1.68, '', '1', '2017-01-18 21:59:28', '', NULL, NULL, 'N;', '::1', '', '1', NULL, NULL, NULL, NULL);

--
-- Volcado de datos para la tabla `factura_detalle`
--

INSERT INTO `factura_detalle` (`id`, `id_enc`, `reg_id`, `reg_nombre`, `reg_descripcion`, `reg_cantidad`, `reg_und_med`, `reg_stock`, `reg_precio`, `reg_tax`, `reg_tax_monto`, `reg_subtotal`, `reg_subtotal_con_tax`, `anulado`) VALUES
(1, 1, '1', 'Computadora Lg5', '<p>comp</p>', '34', 'und', 'CANTIDAD', '0.5', '12', '2.04', '17', '19.04', '0'),
(2, 1, '1', 'Computadora Lg5', '<p>comp</p>', '34', 'und', 'CANTIDAD', '0.5', '12', '2.04', '17', '19.04', '0'),
(3, 1, '1', 'Computadora Lg5', '<p>comp</p>', '65', 'und', 'CANTIDAD', '0.5', '12', '3.9', '32.5', '36.4', '0'),
(4, 2, '1', 'Computadora Lg5 hecha en venezuela.', 'computadora hp2 DD3 ', '3', 'und', 'CANTIDAD', '0.5', '12', '0.18', '1.5', '1.68', '0');

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `codigo`, `nombre`, `descripcion`, `comentarios`, `precio`, `precio1`, `precio2`, `precio3`, `precio_compra`, `cantidad`, `pro_inv_max`, `pro_inv_min`, `und_med`, `por_desperdicio`, `tax`, `islr`, `id_cat`, `estado`, `stock`, `tramitido_al_crm`, `fecha`, `elaborado_por`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`) VALUES
(1, '0008', 'Computadora Lg5 hecha en venezuela.', 'computadora hp2 DD3 ', 'Este es un comentario de los articulos f', 0.5, 0.6, 0.7, 0.08, 0.5, 664, 200, 120, 'und', '', 12, 0, 1, 'ACTIVO', 'CANTIDAD', '', '2017-01-17 10:00:43', '1', '', '1', '2017-01-18 22:08:55', 'N;', '::1', ''),
(2, '00021', 'Mouse', '<p>Prueba</p>', NULL, 0.9, 60.9, 80.4, 70.6, 20.1, 0, 300, 100, 'und', '', 7, 0, 1, 'ACTIVO', 'CANTIDAD', '', '2017-01-17 13:38:39', '1', '', NULL, NULL, 'N;', '::1', ''),
(3, '130', 'Kimberly', '<p>1214654654564</p>', '', 35.05, 31, 29, 79, 85.5, 0, 14, 19, 'und', '', 41, 55, 1, 'ACTIVO', 'SERVICIO', '', '2017-01-18 20:46:09', '1', '', NULL, NULL, 'N;', '::1', ''),
(4, '335', 'Troy', 'Aut dolor quas conse', 'Obcaecati sequi est blanditiis temporibus quod repellendus. Adipisci odit eum id at.sdfsd', 77, 34, 1, 38, 1, 0, 54, 64, 'par', '', 40, 23, 1, 'PAUSADO', 'SERVICIO', '', '2017-01-18 20:52:23', '1', '', NULL, NULL, 'N;', '::1', ''),
(5, '821', 'Shaine', '22222222222222222222', '333333333333333333333333333333333333333333333', 0.5, 12, 94, 21, 58, 0, 55, 5, 'pza', '', 95, 10, 1, 'PAUSADO', 'SERVICIO', '', '2017-01-18 20:54:51', '1', '', '1', '2017-01-18 21:00:51', 'N;', '::1', '');

--
-- Volcado de datos para la tabla `inventario_cat`
--

INSERT INTO `inventario_cat` (`id`, `nombre`, `anulado`) VALUES
(1, 'Computacion', '0');

--
-- Volcado de datos para la tabla `inventario_entrada`
--

INSERT INTO `inventario_entrada` (`id`, `enc_id_cliente`, `enc_cliente`, `enc_cliente_direccion`, `enc_cliente_documento`, `enc_cliente_tel`, `enc_cliente_email`, `enc_lugar_emision`, `enc_fecha_emision`, `enc_orden`, `enc_comentarios`, `reg_id`, `reg_nombre`, `reg_descripcion`, `reg_cantidad`, `reg_und_med`, `reg_stock`, `reg_precio`, `reg_tax`, `reg_tax_monto`, `reg_subtotal`, `reg_subtotal_con_tax`, `total_parcial`, `total_tax`, `total_total`, `tramitido_al_crm`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, '1', 'Tuwebink International C.A', 'que mas', '04141331946', '04141331946', 'douglas.nieves@cohenyaguirre.es', 'Caracas', '2017-01-18', '985657', 'prueba', 'a:1:{i:0;s:1:"1";}', 'a:1:{i:0;s:35:"Computadora Lg5 hecha en venezuela.";}', 'a:1:{i:0;s:20:"computadora hp2 DD3 ";}', 'a:1:{i:0;s:3:"800";}', 'a:1:{i:0;s:3:"und";}', 'a:1:{i:0;s:8:"CANTIDAD";}', 'a:1:{i:0;s:3:"0.5";}', 'a:1:{i:0;s:2:"12";}', 'a:1:{i:0;s:2:"48";}', 'a:1:{i:0;s:3:"400";}', 'a:1:{i:0;s:3:"448";}', 400, 48, 448, '', '1', '2017-01-18 21:49:46', '', NULL, NULL, 'N;', '::1', '', '1', NULL, NULL, NULL, NULL);

--
-- Volcado de datos para la tabla `inventario_entrada_detalle`
--

INSERT INTO `inventario_entrada_detalle` (`id`, `id_enc`, `reg_id`, `reg_nombre`, `reg_descripcion`, `reg_cantidad`, `reg_und_med`, `reg_stock`, `reg_precio`, `reg_tax`, `reg_tax_monto`, `reg_subtotal`, `reg_subtotal_con_tax`, `anulado`) VALUES
(1, 1, '1', 'Computadora Lg5 hecha en venezuela.', 'computadora hp2 DD3 ', '800', 'und', 'CANTIDAD', '0.5', '12', '48', '400', '448', '0');

--
-- Volcado de datos para la tabla `inventario_movimientos`
--

INSERT INTO `inventario_movimientos` (`id`, `id_doc`, `doc`, `id_cliente_proveedor`, `fecha_documento`, `id_almacen`, `reg_id`, `reg_cantidad`, `reg_und_med`, `reg_stock`, `reg_precio`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `ip`, `anulado`) VALUES
(1, '1', 'FACTURA', '1', '2017-01-17', '1', '1', '-34', 'und', 'CANTIDAD', '0.5', '1', '2017-01-17 11:25:23', '0', NULL, NULL, '::1', ''),
(2, '1', 'FACTURA', '1', '2017-01-17', '1', '1', '-34', 'und', 'CANTIDAD', '0.5', '1', '2017-01-17 11:25:23', '0', NULL, NULL, '::1', ''),
(3, '1', 'FACTURA', '1', '2017-01-17', '1', '1', '-65', 'und', 'CANTIDAD', '0.5', '1', '2017-01-17 11:25:23', '0', NULL, NULL, '::1', ''),
(4, '1', 'AJUSTE ENTRADA', '1', '2017-01-18', '1', '1', '800', 'und', 'CANTIDAD', '0.5', '1', '2017-01-18 21:49:46', '0', NULL, NULL, '::1', ''),
(5, '2', 'FACTURA', '2', '2017-01-18', '1', '1', '-3', 'und', 'CANTIDAD', '0.5', '1', '2017-01-18 21:59:28', '0', NULL, NULL, '::1', '');

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`id`, `nombres`, `apellidos`, `documento`, `cliente`, `pais`, `email`, `email2`, `movil`, `movil2`, `comentarios`, `id_cliente`, `des_cliente`, `inversion`, `tipos`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`, `verificado`, `editado_por`, `editado_fecha`, `fecha_nacimiento`, `fecha_terminacion`, `direccion_oficina`, `direccion_domicilio`, `titulacion`, `anos_laboral`, `imagenes`, `ip`, `anulado`) VALUES
(1, 'Douglas', 'Nieves', '0001215', 'RETO2017', 'PANAMA', 'douglas.nieves@cohenyaguirre.es', 'douglasjosenieves@gmail.com', '04141331946', '041411331946', NULL, NULL, NULL, NULL, NULL, 'ACTIVO', NULL, '2017-01-17 10:03:55', '1', 0, NULL, NULL, '2017-01-17', NULL, 'Caracas', NULL, NULL, NULL, NULL, '::1', '0'),
(2, 'Quincy', 'Wilkinson', '619', 'Garza and Farrell Trading', 'PANAMA', 'kavegu@hotmail.com', 'siqoquti@gmail.com', '+627-27-4728133', '+586-43-8635556', NULL, 'Array', 'des_cliente', NULL, NULL, 'ACTIVO', NULL, '2017-01-17 20:16:38', '1', 0, NULL, NULL, '2015-10-15', NULL, 'Repudiandae nobis commodi voluptate dignissimos et dolore optio nostrum ad proident nisi irure', NULL, NULL, NULL, NULL, '::1', '0'),
(3, 'Hanna', 'Sexton', '994', 'Murray Lee Co', 'PANAMA', 'xetazevu@yahoo.com', 'kezuwecup@gmail.com', '+625-77-2883540', '+513-25-6353551', NULL, 'a:2:{i:0;s:1:"1";i:1;s:1:"2";}', 'a:2:{i:0;s:11:"Douglas C.A";i:1;s:12:"tuweblink.ca";}', NULL, NULL, 'ACTIVO', NULL, '2017-01-17 20:18:14', '1', 0, NULL, NULL, '1996-01-09', NULL, 'Cumque voluptas impedit doloribus harum facilis consequat Nemo sint explicabo Est vel eos consequuntur vero eveniet praesentium dicta sit aperiam', NULL, NULL, NULL, NULL, '::1', '0'),
(4, 'Plato', 'Stout', '612', 'Peterson and Hubbard Co', 'ESPANA', 'ninyj@gmail.com', 'dykupeku@yahoo.com', '+838-55-8602961', '+364-47-5731274', 'Reiciendis ullam rerum et et doloremque aperiam numquam magna quasi eaque atque', 'a:2:{i:0;s:1:"1";i:1;s:1:"2";}', 'a:2:{i:0;s:11:"Douglas C.A";i:1;s:12:"tuweblink.ca";}', NULL, NULL, 'INTERESADO', NULL, '2017-01-17 20:20:26', '1', 0, NULL, NULL, '2004-11-13', '1987-01-19', 'Ut blanditiis aliquam quas ea minus reprehenderit libero rerum', NULL, NULL, NULL, NULL, '::1', '0'),
(5, 'Violet', 'Hughes', '546', 'Rocha and Hartman Traders', 'OTRO', 'gopiwoxedi@gmail.com', 'vope@gmail.com', '+424-50-9333646', '+394-55-4037974', 'Do alias non amet explicabo Vitae consectetur voluptatem repellendus Modi ipsam fugiat veniam ipsa qui repudiandae facilis ipsam sint', 'a:2:{i:0;s:1:"1";i:1;s:1:"2";}', 'a:2:{i:0;s:11:"Douglas C.A";i:1;s:12:"tuweblink.ca";}', NULL, NULL, 'INTERESADO', NULL, '2017-01-17 20:21:06', '1', 0, NULL, NULL, '1973-11-11', '2017-01-17', 'Numquam quidem officiis quam est', NULL, NULL, NULL, NULL, '::1', '0'),
(6, 'Amal', 'Vang', '65', 'Burt and Lynch Associates', 'USA', 'libezyn@yahoo.com', 'giga@gmail.com', '+759-13-7032637', '+313-37-1076456', 'Ex dicta in ut tempore incidunt obcaecati deserunt', 'a:1:{i:0;s:1:"1";}', 'a:1:{i:0;s:11:"Douglas C.A";}', NULL, 'EJECUCION', 'ACTIVO', NULL, '2017-01-17 20:38:53', '1', 0, '1', '2017-01-18 12:35:26', '1976-04-08', '2017-01-18', 'Laudantium sunt nemo in maxime qui saepe et voluptate obcaecati dolores fugiat cum nesciunt aut est aliquam commodi soluta ut', NULL, NULL, NULL, NULL, '::1', '0'),
(7, 'Mechelle', 'Leon', '831', 'Curtis and Rasmussen Associates', 'PANAMA', 'nyme@hotmail.com', 'tajyvize@gmail.com', '+873-71-7471499', '+928-94-8898615', 'Nisi aut illum omnis lorem vel velit quia', 'a:5:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"1";i:3;s:1:"2";i:4;s:1:"1";}', 'a:5:{i:0;s:11:"Douglas C.A";i:1;s:12:"tuweblink.ca";i:2;s:11:"Douglas C.A";i:3;s:12:"tuweblink.ca";i:4;s:11:"Douglas C.A";}', NULL, 'EJECUCION', 'ACTIVO', NULL, '2017-01-18 12:51:19', '1', 0, NULL, NULL, '1984-04-01', '1998-12-09', 'Explicabo Tempora dolores eius in quisquam est consequatur ab qui et ratione ut mollit et eum nihil', NULL, NULL, NULL, NULL, '::1', '0'),
(8, 'Mechelle', 'Leon', '831', 'Curtis and Rasmussen Associates', 'PANAMA', 'nyme@hotmail.com', 'tajyvize@gmail.com', '+873-71-7471499', '+928-94-8898615', 'Nisi aut illum omnis lorem vel velit quia', 'a:2:{i:0;s:1:"2";i:1;s:1:"2";}', 'a:2:{i:0;s:12:"tuweblink.ca";i:1;s:12:"tuweblink.ca";}', NULL, 'EJECUCION', 'ACTIVO', NULL, '2017-01-18 12:54:08', '1', 0, '1', '2017-01-18 16:47:11', '1984-04-01', '1998-12-09', 'Explicabo Tempora dolores eius in quisquam est consequatur ab qui et ratione ut mollit et eum nihil', NULL, NULL, NULL, NULL, '::1', '0'),
(9, 'Travis', 'Webster', '382', 'Dudley and Keller LLC', 'OTRO', 'rexivimob@gmail.com', 'sadusyje@yahoo.com', '+361-37-7130200', '+955-40-5607443', 'asdasd', 'a:3:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:1:"1";}', 'a:3:{i:0;s:12:"tuweblink.ca";i:1;s:12:"tuweblink.ca";i:2;s:11:"Douglas C.A";}', NULL, 'EJECUCION', 'ACTIVO', NULL, '2017-01-18 16:48:02', '4', 0, '1', '2017-01-18 22:15:04', '1996-04-01', '1990-11-07', 'Ipsum nulla nesciunt consequat Nesciunt non veniam non', NULL, NULL, NULL, NULL, '::1', '0');

--
-- Volcado de datos para la tabla `obras_detalle`
--

INSERT INTO `obras_detalle` (`id`, `id_doc`, `doc_id`, `doc_desc`, `anulado`) VALUES
(1, 8, '1', 'Douglas C.A', ''),
(2, 8, '2', 'tuweblink.ca', ''),
(3, 8, '1', 'Douglas C.A', ''),
(4, 8, '2', 'tuweblink.ca', ''),
(5, 8, '1', 'Douglas C.A', ''),
(6, 8, '1', 'Douglas C.A', ''),
(7, 8, '2', 'tuweblink.ca', ''),
(8, 8, '1', 'Douglas C.A', ''),
(9, 8, '2', 'tuweblink.ca', ''),
(10, 8, '1', 'Douglas C.A', ''),
(11, 8, '2', 'tuweblink.ca', ''),
(12, 8, '2', 'tuweblink.ca', ''),
(26, 9, '2', 'tuweblink.ca', ''),
(27, 9, '2', 'tuweblink.ca', ''),
(28, 9, '1', 'Douglas C.A', '');

--
-- Volcado de datos para la tabla `seguimiento_cat`
--

INSERT INTO `seguimiento_cat` (`id`, `nombre`, `anulado`) VALUES
(1, 'EJECUTIVO Y COMERCIAL', 0),
(2, 'FINANCIERO', 0),
(3, 'LEGAL', 0),
(4, 'ADMINISTRATIVO Y CONTABLE', 0),
(5, 'TECNOLOGIA', 0);

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `sexo`, `email`, `tel`, `fecha_emis`, `fecha_login`, `usuario`, `clave`, `foto`, `color`, `pais`, `tipo`, `cargo`, `anulado`) VALUES
(1, 'SUPER', 'USUARIO', 'M', 'super@gmail.com', '04141331946', '2016-10-18 00:00:00', '2017-01-19 19:34:02', 'super@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hombre.jpg', '#212121', 'venezuela', 'SUPERUSER', 'PROGRAMADOR', '0'),
(2, 'Melanie', 'Hicks', 'F', 'cobros@gmail.com', '+861-36-6593225', '2017-01-14 09:54:37', '2017-01-14 12:37:05', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Totam blanditiis tempore eu id nisi laboriosam officia repellendus Hic totam maxime id ut', 'Qui consectetur optio ullamco vitae sit impedit', 'COBROS', 'Nihil quas repellendus Qui quia duis laboris vitae iste dolor reiciendis doloremque dolores magni velit', '0'),
(3, 'Tamara', 'Macias', 'M', 'ventas@gmail.com', '+913-97-1516515', '2017-01-14 09:56:38', '2017-01-14 10:31:44', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Velit quia incidunt duis numquam voluptas irure eaque aut expedita magna pariatur Recusandae Sit est nobis magni voluptatem', 'Ipsum vel reprehenderit voluptate ut praesentium dolorum', 'VENTAS', 'Architecto praesentium in irure aliquid enim id velit asperiores', '0'),
(4, 'Helen', 'Shaw', 'M', 'compras@gmail.com', '+357-21-4896404', '2017-01-14 10:17:16', '2017-01-18 21:15:30', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'hombre.jpg', 'Exercitationem aperiam amet nobis eiusmod quod laboriosam nulla quos veritatis blanditiis illum voluptatem error lorem eveniet pariatur Adipisci reiciendis consequatur', 'Do commodi laudantium aliqua Non perferendis beatae duis reiciendis omnis accusamus ullamco et odit illum in eos eum', 'COMPRAS', 'Perspiciatis eiusmod culpa laborum Omnis aspernatur omnis aut', '0'),
(5, 'Cora', 'Mckinney', 'M', 'pagos@gmail.com', '+594-25-9446618', '2017-01-14 10:24:42', '2017-01-14 12:36:27', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Officiis saepe minim omnis fugiat', 'Id praesentium et modi cumque facere commodi rerum deserunt autem ut sit quo suscipit molestias', 'PAGOS', 'Qui labore saepe sint autem eiusmod et eos et similique id', '0'),
(6, 'Nayda', 'Witt', 'F', 'administrador@gmail.com', '+568-85-1521677', '2017-01-14 10:27:22', '2017-01-14 10:27:34', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Vel irure nemo asperiores quasi odit fugiat cum', 'Quia asperiores nulla nostrum eum non qui quis non non eu at amet excepturi laboris fuga', 'ADMINISTRADOR', 'Excepteur rerum consectetur est soluta reprehenderit numquam officiis cupiditate sint placeat modi laborum Voluptate veritatis maiores molestias provident repudiandae velit', '0'),
(7, 'Cody', 'Mcguire', 'F', 'operador@gmail.com', '+724-91-5123427', '2017-01-14 10:28:27', '2017-01-14 10:28:38', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'hombre.jpg', 'Quod inventore rerum officiis accusantium facilis similique qui omnis harum quisquam aperiam molestias libero', 'Commodo nulla quisquam et quia obcaecati ad magni et rerum aspernatur id incididunt consequuntur ab in', 'OPERADOR', 'Numquam nostrud blanditiis molestias duis deserunt suscipit aut dolorum', '0');
