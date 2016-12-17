CREATE TABLE `calendario` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE `chat` (
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
) ENGINE=MyISAM AUTO_INCREMENT=536 DEFAULT CHARSET=latin1;

CREATE TABLE `contactos_web` (
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

CREATE TABLE `cotizacion_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_enc` int(11) NOT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_precio` text,
  `reg_subtotal` text,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE TABLE `cotizacion` (
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
  `reg_precio` text,
  `reg_subtotal` text,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE `cotizaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `elaborado_por` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL,
  `editado_por` varchar(500) NOT NULL,
  `editado_fecha` datetime NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `apellido` varchar(500) NOT NULL,
  `pais` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telefono` varchar(500) NOT NULL,
  `id_contacto` int(11) NOT NULL,
  `reglon_id` text NOT NULL,
  `reglon_servicio` text NOT NULL,
  `reglon_descripcion` text NOT NULL,
  `reglon_cantidad` text NOT NULL,
  `reglon_precio` text NOT NULL,
  `reglon_subtotal` text NOT NULL,
  `reglon_totalparcial` double NOT NULL,
  `reglon_tax` double NOT NULL,
  `reglon_total` double NOT NULL,
  `comentarios` text NOT NULL,
  `anulado` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

CREATE TABLE `factura` (
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
  `reg_precio` text,
  `reg_subtotal` text,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE `factura_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_enc` int(11) NOT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_precio` text,
  `reg_subtotal` text,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE `form_fichas_opciones` (
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
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=latin1;

CREATE TABLE `form_fichas_opciones_franquicias` (
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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

CREATE TABLE `inventario` (
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

CREATE TABLE `inventario_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE TABLE `nota_entrega` (
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
  `reg_precio` text,
  `reg_subtotal` text,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

CREATE TABLE `nota_entrega_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_enc` int(11) NOT NULL,
  `reg_id` text,
  `reg_nombre` text,
  `reg_descripcion` text,
  `reg_cantidad` text,
  `reg_precio` text,
  `reg_subtotal` text,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

CREATE TABLE `prueba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='esta es una prueba';

CREATE TABLE `seguimiento` (
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
) ENGINE=InnoDB AUTO_INCREMENT=705 DEFAULT CHARSET=latin1;

CREATE TABLE `seguimiento_cat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `anulado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `servicios` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE `servicios_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `fecha_emis` date NOT NULL,
  `fecha_login` datetime NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `clave` varchar(250) NOT NULL,
  `foto` text NOT NULL,
  `color` varchar(500) DEFAULT NULL,
  `pais` varchar(250) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `cargo` varchar(500) NOT NULL,
  `anulado` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
......

ALTER TABLE `inventario` ADD COLUMN `und_med` VARCHAR(500) NULL  AFTER `pro_inv_min` , ADD COLUMN `por_desperdicio` VARCHAR(500) NULL  AFTER `und_med`;

ALTER TABLE `cotizacion` ADD COLUMN `reg_und_med` TEXT NULL  AFTER `reg_cantidad`;
ALTER TABLE `factura` ADD COLUMN `reg_und_med` TEXT NULL  AFTER `reg_cantidad`;

ALTER TABLE `cotizacion` ADD COLUMN `ext1` TEXT NULL  AFTER `anulado` , ADD COLUMN `ext2` TEXT NULL  AFTER `ext1` , ADD COLUMN `ext3` TEXT NULL  AFTER `ext2` , ADD COLUMN `ext4` TEXT NULL  AFTER `ext3` , ADD COLUMN `ext5` TEXT NULL  AFTER `ext4`;
ALTER TABLE `factura` ADD COLUMN `ext1` TEXT NULL  AFTER `anulado` , ADD COLUMN `ext2` TEXT NULL  AFTER `ext1` , ADD COLUMN `ext3` TEXT NULL  AFTER `ext2` , ADD COLUMN `ext4` TEXT NULL  AFTER `ext3` , ADD COLUMN `ext5` TEXT NULL  AFTER `ext4`;

CREATE TABLE `nota_entrega` (
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
 `reg_precio` text,
 `reg_subtotal` text,
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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


CREATE TABLE `nota_entrega_detalle` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `id_enc` int(11) NOT NULL,
 `reg_id` text,
 `reg_nombre` text,
 `reg_descripcion` text,
 `reg_cantidad` text,
 `reg_precio` text,
 `reg_subtotal` text,
 `anulado` varchar(1) DEFAULT '0',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
