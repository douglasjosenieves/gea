-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2017 a las 14:08:32
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `erp`
--

--
-- Volcado de datos para la tabla `cajas_bancos`
--

INSERT INTO `cajas_bancos` (`id`, `descripcion`, `tipo`, `numero_cuenta`, `direccion`, `ejecutivo`, `saldo_inicial`, `saldo_final`, `tramitido_al_crm`, `elaborado_por`, `fecha`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, 'CAJA MENUDA', 'CAJA', '', '', '', 10000, 15074.48, '', '1', '2017-01-15 15:09:51', '', '1', '2017-01-24 18:48:44', '', '::1', '0', '', '', '', '', ''),
(2, 'BANESCO PANAMA DEMO', 'BANCO', '0000000000000', 'BANESCO PANAMA CITY', 'PRUEBA', 100, 100, '', '1', '2017-01-24 18:49:38', '', '1', '2017-01-24 19:29:59', '', '::1', '0', '', '', '', '', '');

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombres`, `apellidos`, `documento`, `cliente`, `titulacion`, `pais`, `fecha_nacimiento`, `email`, `movil`, `email2`, `movil2`, `direccion_oficina`, `direccion_domicilio`, `comentario`, `status`, `ins_user`, `upd_user`, `ins_fecha`, `upd_fecha`, `id_categoria`, `id_vendedor`, `id_movil`, `id_cuenta`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, 'Pedro', 'Demo', '000001', 'CLIENTE DEMO CA', '', 'PA', '2017-01-24', 'demo@gmail.com', '04145552211', 'demo@gmail.com', '04145552211', 'Panama City ', '', 'ESTE ES UN CLIENTE DEMO', 'ACTIVO', '1', '1', '2017-01-24 18:35:43', '2017-01-24 22:09:33', '2', '1', '', '', '', '::1', '', '', '', '', '', '');

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombres`, `apellidos`, `documento`, `cliente`, `pais`, `email`, `email2`, `movil`, `movil2`, `pre_informacion`, `porque_espana`, `inversion`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`, `verificado`, `editado_por`, `editado_fecha`, `fecha_nacimiento`, `direccion_oficina`, `direccion_domicilio`, `titulacion`, `anos_laboral`, `imagenes`, `ip`, `anulado`) VALUES
(1, 'Douglas', 'Demo', '00000002', 'MI EMPRESA DEMO', 'PANAMA', 'empresa@gmail.com', 'empresa@gmail.com', '04145552211', '04145552211', NULL, NULL, NULL, 'ACTIVA', NULL, '2017-01-18 21:49:05', '1', 0, '1', '2017-01-24 18:50:01', '2017-01-18', 'Panama City ', NULL, NULL, NULL, NULL, '::1', '0');

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `codigo`, `nombre`, `descripcion`, `comentarios`, `precio`, `precio1`, `precio2`, `precio3`, `precio_compra`, `cantidad`, `pro_inv_max`, `pro_inv_min`, `und_med`, `por_desperdicio`, `tax`, `islr`, `id_categoria`, `estado`, `stock`, `tramitido_al_crm`, `fecha`, `elaborado_por`, `verificado`, `editado_por`, `editado_fecha`, `imagenes`, `ip`, `anulado`) VALUES
(1, '00001', 'MI PRODUCTO DEMO 1', 'DEMO 1 500ML DE GEA', 'DEMO PRUEBA', 20.5, 20, 20, 50, 500, 0, 100, 50, 'und', '', 12, 10, 11, 'ACTIVO', 'CANTIDAD', '', '2017-01-24 23:02:23', '1', '', NULL, NULL, 'N;', '::1', ''),
(2, '00002', 'MI PRODUCTO DEMO 2', 'PRODUCTO DESCRIPCION', 'PRUEBA DEMO', 12, 0, 0, 0, 9.2, 0, 4, 3, 'und', '', 10, 0, 11, 'ACTIVO', 'CANTIDAD', '', '2017-01-24 23:05:34', '1', '', NULL, NULL, 'N;', '::1', ''),
(3, '00003', 'MI PRODUCTO DEMO 3', 'PRODUCTO DESCRIPCION', 'PRUEBA DEMO', 22, 0, 0, 0, 9.2, 0, 4, 3, 'und', '', 10, 0, 11, 'ACTIVO', 'CANTIDAD', '', '2017-01-24 23:05:34', '1', '', '1', '2017-01-24 23:07:31', 'N;', '::1', '');

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`id`, `nombres`, `apellidos`, `documento`, `cliente`, `pais`, `email`, `email2`, `movil`, `movil2`, `comentarios`, `id_cliente`, `des_cliente`, `inversion`, `tipos`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`, `verificado`, `editado_por`, `editado_fecha`, `fecha_nacimiento`, `fecha_terminacion`, `direccion_oficina`, `direccion_domicilio`, `titulacion`, `anos_laboral`, `imagenes`, `ip`, `anulado`) VALUES
(1, 'Douglas', 'Nieves', '0001215', 'RETO2017', 'PANAMA', 'douglas.nieves@cohenyaguirre.es', 'douglasjosenieves@gmail.com', '04141331946', '041411331946', '', 'a:1:{i:0;s:1:"1";}', 'a:1:{i:0;s:15:"CLIENTE DEMO CA";}', NULL, 'EJECUCION', 'ACTIVO', NULL, '2017-01-17 10:03:55', '1', 0, '1', '2017-01-24 23:55:38', '2017-01-17', '2017-01-24', 'Caracas', NULL, NULL, NULL, NULL, '::1', '0');

--
-- Volcado de datos para la tabla `obras_detalle`
--

INSERT INTO `obras_detalle` (`id`, `id_doc`, `doc_id`, `doc_desc`, `anulado`) VALUES
(1, 1, '1', 'CLIENTE DEMO CA', '');

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombres`, `apellidos`, `documento`, `cliente`, `titulacion`, `pais`, `fecha_nacimiento`, `email`, `movil`, `email2`, `movil2`, `direccion_oficina`, `direccion_domicilio`, `comentario`, `status`, `ins_user`, `upd_user`, `ins_fecha`, `upd_fecha`, `id_categoria`, `id_vendedor`, `id_movil`, `id_cuenta`, `imagenes`, `ip`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, 'Juan', 'Demo', '000001', 'PROVEEDOR DEMO CA', '', 'PA', '2017-01-24', 'demo@gmail.com', '04145552211', 'demo@gmail.com', '04145552211', 'Panama City ', '', 'ESTE ES UN PROVEEDOR DEMO', 'ACTIVO', '1', '1', '2017-01-24 18:35:43', '2017-01-24 18:44:54', '6', '1', '', '', '', '::1', '0', '', '', '', '', '');

--
-- Volcado de datos para la tabla `taxonomia`
--

INSERT INTO `taxonomia` (`id`, `nombre`, `slug`, `term_group`, `descripcion`, `ins_user`, `upd_user`, `ins_fecha`, `upd_fecha`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`, `anulado`) VALUES
(1, 'TAXONOMIA', 'taxonoia1', '', 'Demo 1', '1', NULL, '2017-01-24 15:28:49', NULL, '', '', '', '', '', '0'),
(2, 'INDEPENDIENTES', 'independientes', '', 'CLIENTES INDEPENDIENTES', '1', NULL, '2017-01-24 15:32:31', NULL, '', '', '', '', '', '0'),
(3, 'CADENA', 'cadena', '', 'CLIENTES DE CADENA', '1', NULL, '2017-01-24 15:32:44', NULL, '', '', '', '', '', '0'),
(4, 'DISTRIBUIDOR', '', '', 'CLIENTE DISTRIBUIDOR', '1', '1', '2017-01-24 22:16:09', '2017-01-24 22:16:09', '', '', '', '', '', '0'),
(5, 'OTROS', 'otros', '', 'OTROS', '1', NULL, '2017-01-24 16:02:10', NULL, '', '', '', '', '', '0'),
(6, 'TIPO A', '', '', 'Esto son los que que dan mas descuento ', '1', '1', '2017-01-24 22:30:35', '2017-01-24 22:30:35', '', '', '', '', '', '0'),
(7, 'TIPO B', 'tipo-b', '', 'Proveedor Medio', '1', NULL, '2017-01-24 18:28:30', NULL, '', '', '', '', '', '0'),
(8, 'TIPO C', 'tipo-c', '', 'El peor', '1', NULL, '2017-01-24 18:28:57', NULL, '', '', '', '', '', '0'),
(9, 'OFICINA', '', '', 'CLIENTE DE OFICINA', '1', '1', '2017-01-24 22:11:51', '2017-01-24 22:11:51', '', '', '', '', '', '0'),
(10, 'DEMO', 'demo', '', 'DEMO', '1', NULL, '2017-01-24 22:12:25', NULL, '', '', '', '', '', '0'),
(11, 'EQUIPOS DE OFICINA', '', '', 'TODO LOS EQUIPO DE LA OFICINA', '1', '1', '2017-01-24 22:42:44', '2017-01-24 22:42:44', '', '', '', '', '', '0'),
(12, 'MATERIANES', 'materianes', '', 'MATERIALES DE OBRAS', '1', NULL, '2017-01-24 22:42:29', NULL, '', '', '', '', '', '0'),
(13, 'EJECUTIVO Y COMERCIAL', 'ejecutivo-y-comercial', '', 'EJECUTIVO Y COMERCIAL', '1', NULL, '2017-01-24 23:28:12', NULL, '', '', '', '', '', '0'),
(14, 'FINANCIERO', 'financiero', '', 'FINANCIERO', '1', NULL, '2017-01-24 23:28:26', NULL, '', '', '', '', '', '0'),
(15, 'LEGAL', 'legal', '', 'LEGAL', '1', NULL, '2017-01-24 23:28:41', NULL, '', '', '', '', '', '0'),
(16, 'ADMINISTRATIVO Y CONTABLE', 'administrativo-y-contable', '', 'ADMINISTRATIVO Y CONTABLE', '1', NULL, '2017-01-24 23:28:55', NULL, '', '', '', '', '', '0'),
(17, 'TECNOLOGIA', 'tecnologia', '', 'TECNOLOGIA', '1', NULL, '2017-01-24 23:29:09', NULL, '', '', '', '', '', '0');

--
-- Volcado de datos para la tabla `taxonomia_relacion`
--

INSERT INTO `taxonomia_relacion` (`id`, `id_taxonomia`, `taxonomia`, `descripcion`, `padre`, `contador`, `ins_user`, `upd_user`, `ins_fecha`, `upd_fecha`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`, `anulado`) VALUES
(1, 1, 'mod_taxonomias', 'Demo 1', 0, 0, '1', NULL, '2017-01-24 15:28:49', NULL, '', '', '', '', '', '0'),
(2, 2, 'mod_clientes_cat', 'CLIENTES INDEPENDIENTES', 0, 0, '1', NULL, '2017-01-24 15:32:31', NULL, '', '', '', '', '', '0'),
(3, 3, 'mod_clientes_cat', 'CLIENTES DE CADENA', 0, 0, '1', NULL, '2017-01-24 15:32:44', NULL, '', '', '', '', '', '0'),
(4, 4, 'mod_clientes_cat', 'CLIENTE DISTRIBUIDOR', 0, 0, '1', NULL, '2017-01-24 15:33:27', NULL, '', '', '', '', '', '0'),
(5, 5, 'mod_clientes_cat', 'OTROS', 0, 0, '1', NULL, '2017-01-24 16:02:10', NULL, '', '', '', '', '', '0'),
(6, 6, 'mod_proveedores_cat', 'Esto son los que que dan mas descuento', 0, 0, '1', NULL, '2017-01-24 18:28:10', NULL, '', '', '', '', '', '0'),
(7, 7, 'mod_proveedores_cat', 'Proveedor Medio', 0, 0, '1', NULL, '2017-01-24 18:28:30', NULL, '', '', '', '', '', '0'),
(8, 8, 'mod_proveedores_cat', 'El peor', 0, 0, '1', NULL, '2017-01-24 18:28:57', NULL, '', '', '', '', '', '0'),
(9, 9, 'mod_clientes_cat', 'CLIENTE DE OFICINA', 0, 0, '1', NULL, '2017-01-24 21:57:01', NULL, '', '', '', '', '', '0'),
(10, 10, 'mod_clientes_cat', 'DEMO', 0, 0, '1', NULL, '2017-01-24 22:12:25', NULL, '', '', '', '', '', '0'),
(11, 11, 'mod_articulos_cat', 'TODO LOS EQUIPO DE LA OFICINA', 0, 0, '1', NULL, '2017-01-24 22:41:48', NULL, '', '', '', '', '', '0'),
(12, 12, 'mod_articulos_cat', 'MATERIALES DE OBRAS', 0, 0, '1', NULL, '2017-01-24 22:42:29', NULL, '', '', '', '', '', '0'),
(13, 13, 'mod_seguimientos_cat', 'EJECUTIVO Y COMERCIAL', 0, 0, '1', NULL, '2017-01-24 23:28:12', NULL, '', '', '', '', '', '0'),
(14, 14, 'mod_seguimientos_cat', 'FINANCIERO', 0, 0, '1', NULL, '2017-01-24 23:28:26', NULL, '', '', '', '', '', '0'),
(15, 15, 'mod_seguimientos_cat', 'LEGAL', 0, 0, '1', NULL, '2017-01-24 23:28:41', NULL, '', '', '', '', '', '0'),
(16, 16, 'mod_seguimientos_cat', 'ADMINISTRATIVO Y CONTABLE', 0, 0, '1', NULL, '2017-01-24 23:28:55', NULL, '', '', '', '', '', '0'),
(17, 17, 'mod_seguimientos_cat', 'TECNOLOGIA', 0, 0, '1', NULL, '2017-01-24 23:29:09', NULL, '', '', '', '', '', '0');

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `sexo`, `email`, `tel`, `fecha_emis`, `fecha_login`, `usuario`, `clave`, `foto`, `color`, `pais`, `tipo`, `cargo`, `anulado`) VALUES
(1, 'SUPER', 'USUARIO', 'M', 'super@gmail.com', '04141331946', '2016-10-18 00:00:00', '2017-01-25 10:04:43', 'super@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hombre.jpg', '#212121', 'venezuela', 'SUPERUSER', 'PROGRAMADOR', '0'),
(2, 'Melanie', 'Hicks', 'F', 'cobros@gmail.com', '+861-36-6593225', '2017-01-14 09:54:37', '2017-01-14 12:37:05', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Totam blanditiis tempore eu id nisi laboriosam officia repellendus Hic totam maxime id ut', 'Qui consectetur optio ullamco vitae sit impedit', 'COBROS', 'Nihil quas repellendus Qui quia duis laboris vitae iste dolor reiciendis doloremque dolores magni velit', '0'),
(3, 'Tamara', 'Macias', 'M', 'ventas@gmail.com', '+913-97-1516515', '2017-01-14 09:56:38', '2017-01-14 10:31:44', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Velit quia incidunt duis numquam voluptas irure eaque aut expedita magna pariatur Recusandae Sit est nobis magni voluptatem', 'Ipsum vel reprehenderit voluptate ut praesentium dolorum', 'VENTAS', 'Architecto praesentium in irure aliquid enim id velit asperiores', '0'),
(4, 'Helen', 'Shaw', 'M', 'compras@gmail.com', '+357-21-4896404', '2017-01-14 10:17:16', '2017-01-18 21:15:30', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'hombre.jpg', 'Exercitationem aperiam amet nobis eiusmod quod laboriosam nulla quos veritatis blanditiis illum voluptatem error lorem eveniet pariatur Adipisci reiciendis consequatur', 'Do commodi laudantium aliqua Non perferendis beatae duis reiciendis omnis accusamus ullamco et odit illum in eos eum', 'COMPRAS', 'Perspiciatis eiusmod culpa laborum Omnis aspernatur omnis aut', '0'),
(5, 'Cora', 'Mckinney', 'M', 'pagos@gmail.com', '+594-25-9446618', '2017-01-14 10:24:42', '2017-01-14 12:36:27', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Officiis saepe minim omnis fugiat', 'Id praesentium et modi cumque facere commodi rerum deserunt autem ut sit quo suscipit molestias', 'PAGOS', 'Qui labore saepe sint autem eiusmod et eos et similique id', '0'),
(6, 'Nayda', 'Witt', 'F', 'administrador@gmail.com', '+568-85-1521677', '2017-01-14 10:27:22', '2017-01-14 10:27:34', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'mujer.jpg', 'Vel irure nemo asperiores quasi odit fugiat cum', 'Quia asperiores nulla nostrum eum non qui quis non non eu at amet excepturi laboris fuga', 'ADMINISTRADOR', 'Excepteur rerum consectetur est soluta reprehenderit numquam officiis cupiditate sint placeat modi laborum Voluptate veritatis maiores molestias provident repudiandae velit', '0'),
(7, 'Cody', 'Mcguire', 'F', 'operador@gmail.com', '+724-91-5123427', '2017-01-14 10:28:27', '2017-01-14 10:28:38', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'hombre.jpg', 'Quod inventore rerum officiis accusantium facilis similique qui omnis harum quisquam aperiam molestias libero', 'Commodo nulla quisquam et quia obcaecati ad magni et rerum aspernatur id incididunt consequuntur ab in', 'OPERADOR', 'Numquam nostrud blanditiis molestias duis deserunt suscipit aut dolorum', '0');

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id`, `nombres`, `apellidos`, `documento`, `cliente`, `titulacion`, `pais`, `email`, `email2`, `movil`, `movil2`, `comentarios`, `status`, `tipo`, `fecha_nacimiento`, `fecha_inicio`, `fecha_terminacion`, `cargo`, `salario`, `dependiente`, `direccion_oficina`, `direccion_domicilio`, `imagenes`, `id_categoria`, `id_mobil`, `id_cuenta`, `ins_user`, `ins_fecha`, `upd_user`, `upd_fecha`, `ip`, `verificado`, `anulado`, `ext1`, `ext2`, `ext3`, `ext4`, `ext5`) VALUES
(1, 'USUARIO', 'DEMO', '0001', 'DEMO', '', 'PA', 'mapuh@yahoo.com', 'sumyz@gmail.com', 'Modi culpa facilis aut possimus sed est in qui et', 'Temporibus magnam aspernatur sequi labore in', 'Quae dolore illum velit atque rerum aute culpa harum nesciunt ad placeat nihil consequat Praesentium incidunt', 'ACTIVO', 'PART-TIME', '1976-05-24', '1987-03-27', '1976-06-25', 'Sed occaecat cupiditate in velit voluptatem dolor Nam cupiditate vel ut rerum in laboriosam doloremque', 68, 'SI', 'Ut non enim qui laborum ratione eu vel enim quos amet omnis consectetur praesentium quo odio sed elit', '', '', NULL, '', '', '1', '2017-01-24 11:41:14', '1', '2017-01-24 23:47:07', '::1', '', '', '', '', '', '', ''),
(5, 'OFICINA', 'VENTA', 'J00005', 'OFICINA', '', 'PA', 'demo@gmail.com', 'demo@gmail.com', '04145552211', '04145552211', 'Demo', 'ACTIVO', 'FULL-TIME', '2017-01-24', '2017-01-24', '2017-01-24', 'Vendedor', 800, 'NO', 'Panama City ', '', '', NULL, '', '', '1', '2017-01-24 22:35:56', '1', '2017-01-24 22:36:24', '::1', '', '', '', '', '', '', '');
