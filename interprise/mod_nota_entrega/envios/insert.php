<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
require_once __DIR__ . '../../../../db_connect.php';
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
$reg_precio = serialize($reg_precio);
$reg_subtotal = serialize($reg_subtotal);
$imagenes = serialize($imagenes);



 


$qry = "INSERT INTO `nota_entrega`
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
`reg_precio`,
`reg_subtotal`,
`total_parcial`,
`total_tax`,
`total_total`,
`tramitido_al_crm`,
`fecha`,
`elaborado_por`,
`verificado`,
`imagenes`,
`ip`,
`anulado`)
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
'$reg_precio',
'$reg_subtotal',
0,
0,
0,
'$tramitido_al_crm',
'$fecha',
'$elaborado_por',
'$verificado',
'$imagenes',
'$ip',
'$anulado');
";
 

$reg_id = unserialize($reg_id);
$reg_nombre = unserialize($reg_nombre);
$reg_descripcion = unserialize($reg_descripcion);
$reg_cantidad = unserialize($reg_cantidad);
$reg_precio = unserialize($reg_precio);
$reg_subtotal = unserialize($reg_subtotal);
$imagenes = unserialize($imagenes);
 



 
	 



 



$resul = mysql_query($qry);





if ($resul==1) {
  


$resulf =  mysql_query("SELECT IF(ISNULL(max( id)+ 1),'1',max( id))  AS id FROM nota_entrega");
while($row =  mysql_fetch_array($resulf) ) {
$id_siguiente= $row['id'];
}

foreach ($reg_id as $key => $value) {
//echo $reg_nombre[$key];

$qry2 = "INSERT INTO `nota_entrega_detalle`
(
`id_enc`,
`reg_id`,
`reg_nombre`,
`reg_descripcion`,
`reg_cantidad`,
`reg_precio`,
`reg_subtotal`,
`anulado`)
VALUES
(
'".$id_siguiente."',
'".$reg_id[$key]."',
'".$reg_nombre[$key]."',
'".$reg_descripcion[$key]."',
'".$reg_cantidad[$key]."',
'".$reg_precio[$key]."',
'".$reg_subtotal[$key]."',
'0')";


mysql_query($qry2);

}


echo $resul;
}

else
{
echo 'false'.$qry;


}

 

 

  
   
 





?>