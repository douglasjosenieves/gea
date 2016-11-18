<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
/*
 * Following code will list all the products
 */
 
// array for JSON response

 
// include db connect class




require_once __DIR__ . '../../../db_connect.php';
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fechaphp = date("Y-m-d H:i:s");


 
$id=$_REQUEST['id'];
 
$id=$_REQUEST['id'];
$elaborado_por=$_REQUEST['elaborado_por'];
$fecha=$fechaphp;
$editado_por=$_REQUEST['editado_por'];
$editado_fecha=$_REQUEST['editado_fecha'];
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$pais=$_REQUEST['pais'];
$email=$_REQUEST['email'];
$telefono=$_REQUEST['telefono'];
$id_contacto=$_REQUEST['id_contacto'];
$reglon_id=$_REQUEST['reglon_id'];
$reglon_servicio=$_REQUEST['reglon_servicio'];
$reglon_descripcion=$_REQUEST['reglon_descripcion'];
$reglon_cantidad=$_REQUEST['reglon_cantidad'];
$reglon_precio=$_REQUEST['reglon_precio'];
$reglon_subtotal=$_REQUEST['reglon_subtotal'];
$reglon_totalparcial=$_REQUEST['reglon_totalparcial'];
$reglon_tax=$_REQUEST['reglon_tax'];
$reglon_total=$_REQUEST['reglon_total'];
$comentarios=$_REQUEST['comentarios'];
$anulado=$_REQUEST['anulado'];






$reglon_id_array = serialize($reglon_id);
$reglon_servicio_array=serialize($reglon_servicio);
$reglon_descripcion_array=serialize($reglon_descripcion);
$reglon_cantidad_array=serialize($reglon_cantidad);
$reglon_precio_array=serialize($reglon_precio);
$reglon_subtotal_array=serialize($reglon_subtotal);

$resul = mysql_query("INSERT INTO `cotizaciones` (

`id`,
`elaborado_por`,
`fecha`,
`editado_por`,
`editado_fecha`,
`nombre`,
`apellido`,
`pais`,
`email`,
`telefono`,
`id_contacto`,
`reglon_id`,
`reglon_servicio`,
`reglon_descripcion`,
`reglon_cantidad`,
`reglon_precio`,
`reglon_subtotal`,
`reglon_totalparcial`,
`reglon_tax`,
`reglon_total`,
`comentarios`,
`anulado`



) VALUES ( 
  '$id',
 '$elaborado_por',
 '$fecha',
 '$editado_por',
 '$editado_fecha',
 '$nombre',
 '$apellido',
 '$pais',
 '$email',
 '$telefono',
 '$id_contacto',
 '$reglon_id_array',
 '$reglon_servicio_array',
 '$reglon_descripcion_array',
 '$reglon_cantidad_array',
 '$reglon_precio_array',
 '$reglon_subtotal_array',
 '$reglon_totalparcial',
 '$reglon_tax',
 '$reglon_total',
 '$comentarios',
 '$anulado'




);");








 

if ($resul==1) {
  
echo 'true';




}

else
{
echo 'false';


}

  
   die;
 





?>