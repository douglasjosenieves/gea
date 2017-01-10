<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
require_once __DIR__ . '../../../../db_connect.php';
require_once 'config.php';
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
//$pre_ = serialize($pre_);
extract ($_POST);

 


$reg_id = serialize($reg_id);
$reg_nombre = serialize($reg_nombre);
$reg_descripcion = serialize($reg_descripcion);
$reg_cantidad = serialize($reg_cantidad);
$reg_und_med = serialize($reg_und_med);
$reg_stock = serialize($reg_stock);
$reg_precio = serialize($reg_precio);
$reg_tax = serialize($reg_tax);
$reg_tax_monto = serialize($reg_tax_monto);
$reg_subtotal = serialize($reg_subtotal);
$reg_subtotal_con_tax = serialize($reg_subtotal_con_tax);
$imagenes = serialize($imagenes);



 


$qry = "INSERT INTO `".TABLA1."`
( 
`enc_id_cliente`,
`enc_cliente`,
`enc_cliente_direccion`,
`enc_cliente_documento`,
`enc_cliente_tel`,
`enc_cliente_email`,
`enc_lugar_emision`,
`enc_fecha_emision`,
`enc_orden`,
`enc_comentarios`,
`reg_id`,
`reg_nombre`,
`reg_descripcion`,
`reg_cantidad`,
`reg_und_med`,
`reg_stock`,
`reg_precio`,
`reg_tax`,
`reg_tax_monto`,
`reg_subtotal`,
`reg_subtotal_con_tax`,
`total_parcial`,
`total_tax`,
`total_total`,
`tramitido_al_crm`,
`fecha`,
`elaborado_por`,
`verificado`,
`imagenes`,
`ip`,
`anulado`,
`ext1`)
VALUES
(

'$enc_id_cliente',
'$enc_cliente',
'$enc_cliente_direccion',
'$enc_cliente_documento',
'$enc_cliente_tel',
'$enc_cliente_email',

'$enc_lugar_emision',
'$enc_fecha_emision',
'$enc_orden',
'$enc_comentarios',
'$reg_id',
'$reg_nombre',
'$reg_descripcion',
'$reg_cantidad',
'$reg_und_med',
'$reg_stock',
'$reg_precio',
'$reg_tax',
'$reg_tax_monto',
'$reg_subtotal',
'$reg_subtotal_con_tax',
'$total_parcial',
'$total_tax',
'$total_total',
'$tramitido_al_crm',
'$fecha',
'$elaborado_por',
'$verificado',
'$imagenes',
'$ip',
'$anulado',
'$ext1');
";
 

$reg_id = unserialize($reg_id);
$reg_nombre = unserialize($reg_nombre);
$reg_descripcion = unserialize($reg_descripcion);
$reg_cantidad = unserialize($reg_cantidad);
$reg_und_med = unserialize($reg_und_med);
$reg_stock = unserialize($reg_stock);
$reg_precio = unserialize($reg_precio);
$reg_tax = unserialize($reg_tax);
$reg_tax_monto = unserialize($reg_tax_monto);
$reg_subtotal = unserialize($reg_subtotal);
$reg_subtotal_con_tax = unserialize($reg_subtotal_con_tax);
$imagenes = unserialize($imagenes);
 



 if (AFECTA_VENTAS == true) {

$resul = mysql_query($qry);

}



if ($resul==1) {
  


$resulf =  mysql_query("SELECT IF(ISNULL(max( id)+ 1),'1',max( id))  AS id FROM ".TABLA1."");
while($row =  mysql_fetch_array($resulf) ) {
$id_siguiente= $row['id'];
}



/* TABLA DE CUENTAS*/

	# code...


$qry_cta = "INSERT INTO ".TABLA4."
(
`id_cliente`,
`id_doc`,
`doc`,
`enc_cliente`,
`enc_cliente_direccion`,
`enc_cliente_documento`,
`enc_cliente_tel`,
`enc_cliente_email`,
`enc_lugar_emision`,
`enc_fecha_emision`,
`enc_orden`,
`enc_comentarios`,
`total_parcial`,
`total_tax`,
`total_total`,
`saldo`,
`status_saldo`,
`tramitido_al_crm`,
`elaborado_por`,
`fecha`,
`verificado`,
`ip`,
`anulado`)
VALUES
(
 
'$enc_id_cliente',
'".$id_siguiente."',
'".TIPO."',
'$enc_cliente',
'$enc_cliente_direccion',
'$enc_cliente_documento',
'$enc_cliente_tel',
'$enc_cliente_email',
'$enc_lugar_emision',
'$enc_fecha_emision',
'$enc_orden',
'$enc_comentarios',
'$total_parcial',
'$total_tax',
'$total_total',
'$total_total',
'PENDIENTE',
'$tramitido_al_crm',
'$elaborado_por',
'$fecha',
'$verificado',
 '$ip',
'$anulado');";

if (AFECTA_CUENTA == true) {
mysql_query($qry_cta);
//echo $qry_cta;

}


 /* FIN TABLA DE CUENTAS*/


foreach ($reg_id as $key => $value) {
//echo $reg_nombre[$key];

$qry2 = "INSERT INTO ".TABLA2."
(
`id_enc`,
`reg_id`,
`reg_nombre`,
`reg_descripcion`,
`reg_cantidad`,
`reg_und_med`,
`reg_stock`,
`reg_precio`,
`reg_tax`,
`reg_tax_monto`,
`reg_subtotal`,
`reg_subtotal_con_tax`,
`anulado`)
VALUES
(
'".$id_siguiente."',
'".$reg_id[$key]."',
'".$reg_nombre[$key]."',
'".$reg_descripcion[$key]."',
'".$reg_cantidad[$key]."',
'".$reg_und_med[$key]."',
'".$reg_stock[$key]."',
'".$reg_precio[$key]."',
'".$reg_tax[$key]."',
'".$reg_tax_monto[$key]."',
'".$reg_subtotal[$key]."',
'".$reg_subtotal_con_tax[$key]."',
'0')";

if (AFECTA_VENTAS == true) {
//echo $qry_m;
mysql_query($qry2);

}

/*INSERT A LA TABLA DE MOVIMIENTO*/



if ($reg_stock[$key] =='CANTIDAD') {
	# code...


$qry_m = "INSERT INTO ".TABLA3." (
 
`id_cliente_proveedor`,
`id_doc`,
`doc`,
`fecha_documento`,
`id_almacen`,
`reg_id`,
`reg_cantidad`,
`reg_und_med`,
`reg_stock`,
`reg_precio`,
`elaborado_por`,
`fecha`,
 `ip`,
`anulado`)
VALUES
(

'$enc_id_cliente',

'".$id_siguiente."',
'".TIPO."',

'$enc_fecha_emision',
'1',
'".$reg_id[$key]."',
'".SIGNO.$reg_cantidad[$key]."',
'".$reg_und_med[$key]."',
'".$reg_stock[$key]."',
'".$reg_precio[$key]."',
'$elaborado_por',
'$fecha',
 '$ip',
'$anulado');";

if (AFECTA_MOVIMENTO_INVENTARIO == true) {
mysql_query($qry_m);
}


}




 

/*INSERT A LA TABLA DE MOVIMIENTO*/



$resul_suma =  mysql_query("SELECT sum(reg_cantidad) as sum FROM ".TABLA3." where reg_id = '".$reg_id[$key]."' and anulado <> 1;");
while($row =  mysql_fetch_array($resul_suma) ) {
$suma = $row['sum'];
}


$qryupdateArt = "UPDATE ".TABLA5." SET `cantidad`= '".$suma."' WHERE `id`='".$reg_id[$key]."'";

mysql_query($qryupdateArt);

}













echo $resul;
}

else
{
echo 'false'.$qry;


}

 

 

  
   
 





?>