<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
require_once __DIR__ . '../../../../db_connect.php';
//sleep(2);
 require_once '../config.php';
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d H:i:s");
$editado_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);


 
 

$saldo = $total_total;

$qry = "UPDATE ".TABLA."
SET
 
`id_doc` = '$id_doc',
`doc` = '$doc',
`id_cliente` = '$id_cliente',
`enc_cliente` = '$enc_cliente',
`enc_cliente_direccion` = '$enc_cliente_direccion',
`enc_cliente_documento` = '$enc_cliente_documento',
`enc_cliente_tel` = '$enc_cliente_tel',
`enc_cliente_email` = '$enc_cliente_email',
`enc_lugar_emision` = '$enc_lugar_emision',
`enc_fecha_emision` = '$enc_fecha_emision',
`enc_orden` = '$enc_orden',
`enc_comentarios` = '$enc_comentarios',
`total_parcial` = '$total_parcial',
`total_tax` = '$total_tax',
`total_total` = '$total_total',
`saldo` = '$saldo',
`status_saldo` = '$status_saldo',
`tramitido_al_crm` = '$tramitido_al_crm',
 
`verificado` = '$verificado',
`editado_por` = '$editado_por',
`editado_fecha` = '$fecha',
`imagenes` = '$imagenes',
`ip` = '$ip',
`anulado` = '$anulado',
`ext1` = '$ext1',
`ext2` = '$ext2',
`ext3` = '$ext3',
`ext4` = '$ext4',
`ext5` = '$ext5'
WHERE `id` = '$referencia';


";
 

$resul = mysql_query($qry);








 

if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}


  
   
 





?>