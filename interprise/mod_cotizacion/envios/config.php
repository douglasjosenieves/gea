<?php 

/*LOS NOMBRE DE LAS TABLAS QUE AFECTAN*/
define('TITULO',"Cotizaciones");  /*TITULO DEL LAS VISTAS */
define('TITULO2',"Cotización"); /*TITULO DEL LAS VISTAS  DEL DOCUMENTO GENERADO*/
define('TITULO3',"Cliente"); /*TITULO DEL LAS VISTAS  DEL DOCUMENTO GENERADO*/
define('TOTAL_A',"TOTAL A PAGAR"); /*TITULO DEL LAS VISTAS  DEL DOCUMENTO GENERADO*/
define('MODULO',"mod_cotizacion"); /*PARA EL LINK DE LOS PROCESOS*/
define('MODULO2',"mod_clientes"); /*PARA LA BUSQUEDA ASYNC DE LOS CLIENTES O PROVEEDORE*/
define('EXPORTAR',TRUE); /*PARA EXPORTAR EL DOCUMENTO*/
define('EXPORTAR_A','Factura'); /*PARA EXPORTAR EL DOCUMENTO*/
define('MODULO_EXPORTAR',"mod_facturacion"); /*PARA EXPORTAR EL DOCUMENTO*/
define('TABLA1',"cotizacion"); /*LLAMADA DE TABLA EN EL ENVIO DE INFORMACION A LA BASE DE DATOS*/
define('TABLA2',"cotizacion_detalle"); /*LLAMADA DE TABLA EN EL ENVIO DE INFORMACION A LA BASE DE DATOS*/
define('TABLA3',"inventario_movimientos");  /*LLAMADA DE TABLA EN EL ENVIO DE INFORMACION A LA BASE DE DATOS*/
define('TABLA4',"cuenta_por_cobrar");  /*LLAMADA DE TABLA EN EL ENVIO DE INFORMACION A LA BASE DE DATOS*/
define('TABLA5',"inventario");  /*LLAMADA DE TABLA EN EL ENVIO DE INFORMACION A LA BASE DE DATOS*/
define('TABLA6',"clientes");  /*LLAMADA DE TABLA EN EL ENVIO DE INFORMACION A LA BASE DE DATOS*/

/*define('TIPO',"FACTURA");*/  /*TIPO DE DOCUMENTO EJEMPLO FACTURA, COMPRA, AJUSTE*/
/*define('SIGNO',"-"); */ /*SIGNO QUE MODIFICA PARA LA ENTRADA DE CANTIDADES POSITIVO O NEGATIVO TABLA DE MOVIMIENTO DE INVENTARIO*/

define('AFECTA_MOVIMENTO_INVENTARIO',FALSE);  /*SIGNO QUE MODIFICA PARA LA ENTRADA DE CANTIDADES POSITIVO O NEGATIVO TABLA DE MOVIMIENTO DE INVENTARIO*/
define('AFECTA_CUENTA',FALSE);  /*SIGNO QUE MODIFICA PARA LA ENTRADA DE CANTIDADES POSITIVO O NEGATIVO TABLA DE MOVIMIENTO DE INVENTARIO*/

define('AFECTA_VENTAS',TRUE);  /*SIGNO QUE MODIFICA PARA LA ENTRADA DE CANTIDADES POSITIVO O NEGATIVO TABLA DE MOVIMIENTO DE INVENTARIO*/

?>

