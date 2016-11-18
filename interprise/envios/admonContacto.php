<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
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
//$pre_ = serialize($pre_);
 

$tipo = $_REQUEST['tipo']; 
$elaborado_por = $_REQUEST['elaborado_por'];
$id = $_REQUEST['id'];
$anulado = $_REQUEST['anulado'];
 

if ($tipo == 'asesor') {
	


$qry = "UPDATE `contactos_web` SET `elaborado_por`='$elaborado_por' WHERE `id`='$id';";
$resul = mysql_query($qry);
echo $resul ;

  
   }
 



if ($tipo == 'anulado') {
	


$qry = "UPDATE `contactos_web` SET `anulado`='$anulado' WHERE `id`='$id';";
$resul = mysql_query($qry);
echo $resul ;

  
   }


?>