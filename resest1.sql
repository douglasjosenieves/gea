delete FROM cotizacion;
delete FROM cotizacion_detalle;
ALTER TABLE `cotizacion` 
AUTO_INCREMENT = 1;
ALTER TABLE `cotizacion_detalle` 
AUTO_INCREMENT = 1;


delete FROM factura;
delete FROM factura_detalle;
ALTER TABLE `factura` 
AUTO_INCREMENT = 1;
ALTER TABLE `factura_detalle` 
AUTO_INCREMENT = 1;


delete FROM compras;
delete FROM compras_detalle;
ALTER TABLE `compras` 
AUTO_INCREMENT = 1;
ALTER TABLE `compras_detalle` 
AUTO_INCREMENT = 1;


delete FROM cajas_bancos_movimientos;
delete FROM pagos;
delete FROM cuenta_por_pagar;

ALTER TABLE `pagos` 
AUTO_INCREMENT = 1;
ALTER TABLE `cuenta_por_pagar` 
AUTO_INCREMENT = 1;
ALTER TABLE `cajas_bancos_movimientos` 
AUTO_INCREMENT = 1;



delete FROM cajas_bancos_movimientos;
delete FROM cobros;
delete FROM cuenta_por_cobrar;

ALTER TABLE `cobros` 
AUTO_INCREMENT = 1;

ALTER TABLE `cuenta_por_cobrar` 
AUTO_INCREMENT = 1;

ALTER TABLE `cajas_bancos_movimientos` 
AUTO_INCREMENT = 1;


UPDATE `cajas_bancos` SET `saldo_final`='0' ;