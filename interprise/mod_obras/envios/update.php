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
$editado_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);


 
 $id_cliente=$_REQUEST['id_cliente'];
$des_cliente=$_REQUEST['des_cliente'];

$comentarios=$_REQUEST['comentarios'];
$fecha_terminacion=$_REQUEST['fecha_terminacion'];
$tipos=$_REQUEST['tipos'];
$id_cliente = serialize($id_cliente);
$des_cliente = serialize($des_cliente);



$qry = "UPDATE `".TABLA."`
SET
`nombres` = '$nombres',
`apellidos` = '$apellidos',
`documento` = '$documento',
`cliente` = '$cliente',
`pais` = '$pais',
`email` = '$email',
`email2` = '$email2',
`movil` = '$movil',
`movil2` = '$movil2',
`status` = '$status',
`editado_por` = '$editado_por',
`editado_fecha` = '$editado_fecha',
`fecha_nacimiento` = '$fecha_nacimiento',
`direccion_oficina` = '$direccion_oficina',
`ip` = '$ip',

`id_cliente` = '$id_cliente',
`des_cliente` = '$des_cliente',
`tipos` = '$tipos',
`fecha_terminacion` = '$fecha_terminacion',
`comentarios` = '$comentarios'

WHERE `id` = '$referencia';
";
 

$resul = mysql_query($qry);


if ($resul==1) {
  


$resulf =  mysql_query("SELECT  max( id)  AS id FROM ".TABLA."");
while($row =  mysql_fetch_array($resulf) ) {
$id_doc= $row['id'];
}
$resul3 = mysql_query("DELETE FROM ".TABLA2." WHERE id_doc = '$id_doc' ");


$id_cliente = unserialize($id_cliente);
$des_cliente = unserialize($des_cliente);

foreach ($id_cliente as $key => $value) {

$qry2 ="INSERT INTO  `".TABLA2."`
(
`id_doc`,
`doc_id`,
`doc_desc`,
`anulado`)
VALUES
( 
'$id_doc',
'$id_cliente[$key]',
'$des_cliente[$key]',
'$anulado');
";

$resul2 = mysql_query($qry2);

}
} 






 

if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}


  
   
 





?>