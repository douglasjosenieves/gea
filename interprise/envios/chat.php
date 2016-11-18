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
 


$mensaje = $_REQUEST['mensaje'];
$de = $_REQUEST['de'];
$para = $_REQUEST['para'];
$ip=$_SERVER['REMOTE_ADDR'];

if ($para == '0') {
	$qry = "INSERT INTO chat (`id_para`, `id_de`, `mensaje`, `fecha_envio`, `ip`) SELECT id , '".$de."', '".$mensaje."', '".$fechaphp."', '".$ip."' FROM usuarios where anulado <> 1;";


} else {
	$qry = "INSERT INTO `chat` (`id_de`, `id_para`, `mensaje`, `fecha_envio`, `ip`) 

VALUES 
('".$de."', '".$para."', '".$mensaje."', '".$fechaphp."','".$ip."' );";
}





 

$resul = mysql_query($qry);








 

echo $resul ;

  
   
 





?>