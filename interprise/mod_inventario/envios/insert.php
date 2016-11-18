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

 
 $images = serialize($imagenes);




 


$qry = "INSERT INTO `inventario`
(
`codigo`,
`nombre`,
`descripcion`,
`precio`,
`precio1`,
`precio2`,
`precio3`,
`precio_compra`,
`cantidad`,
`pro_inv_max`,
`pro_inv_min`,
`tax`,
`islr`,
`id_cat`,
`estado`,
`stock`,
`tramitido_al_crm`,
`fecha`,
`elaborado_por`,
`verificado`,


`imagenes`,
`ip`,
`anulado`)
VALUES
(
'$codigo',
'$nombre',
'$descripcion',
$precio,
$precio1,
$precio2,
$precio3,
$precio_compra,
$cantidad,
$pro_inv_max,
$pro_inv_min,
$tax,
$islr,
'$id_cat',
'$estado',
'$stock',
'$tramitido_al_crm',
'$fecha',
'$elaborado_por',
'$verificado',


'$images',
'$ip',
'$anulado');
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