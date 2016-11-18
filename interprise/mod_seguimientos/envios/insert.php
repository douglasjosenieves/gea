<?php  session_start();  
 


require_once __DIR__ . '../../../../db_connect.php';
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d H:i:s");

//echo $_REQUEST['descripcion'];
 
//$id=$_REQUEST['id'];
$categoria=$_REQUEST['categoria'];
$status=$_REQUEST['status'];

$id_contacto=$_REQUEST['id_contacto'];
$cliente=$_REQUEST['cliente'];
 

$asunto=$_REQUEST['asunto'];
$descripcion=$_REQUEST['descripcion'];

 
 
$elaborado_por=$_REQUEST['elaborado_por'];


 

$fecha = date("Y-m-d H:i:s");

$qry = "INSERT INTO `seguimiento` ( `id_contacto`, `cliente`, `asunto`, `descripcion`, `categoria`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`) 


VALUES (

'$id_contacto',
'$cliente',
 '$asunto',
'$descripcion',
'$categoria',
'$status', 
'S',
'$fecha',
'$elaborado_por');";


$resul2 = mysql_query("UPDATE `contactos_web` SET `verificado`='1' WHERE `id`=".$id_contacto.";");

$resul = mysql_query($qry);








if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}




 





?>