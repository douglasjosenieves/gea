<?php  session_start();  
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
extract ($_POST);

 

$tipo = $_REQUEST['tipo']; 
$elaborado_por = $_REQUEST['elaborado_por'];
$id = $_REQUEST['id'];
$anulado = $_REQUEST['anulado'];
 

if ($tipo == 'asesor') {
	


$qry = "UPDATE ".TABLA." SET `elaborado_por`='$elaborado_por' WHERE `id`='$id';";
$resul = mysql_query($qry);
echo $resul ;

  
   }
 



if ($tipo == 'anulado') {
	


$qry = "UPDATE ".TABLA." SET `anulado`='$anulado' WHERE `id`='$id';";
$resul = mysql_query($qry);

$qry2 = "UPDATE ".TABLA2." SET `anulado`='$anulado' WHERE `id_doc`='$id';";
$resul2 = mysql_query($qry2);

echo $resul ;



  
   }


?>