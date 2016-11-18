<?php  header('Access-Control-Allow-Origin: *');  

require_once '../../PHPPaging.lib.php';

// connecting to db
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'] ;
require_once '../../db_connect.php';
require_once '../../PHPPaging.lib.php';

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 
require_once '../usuario_funtion.php';
$usuario = $_REQUEST['usuario'];

			$chat = array();
				$i=0;
				$resul =  mysql_query("SELECT * from chat where anulado <> 1 and visto <> 1 and id_para = $usuario or id_para = 0 order by id desc");
				while($row =  mysql_fetch_array($resul) ) { 
				


$mensaje = $row['mensaje']; 
$usuario = usuarioFuntion ($row['id_de']) ;
$de =  ucwords  ( $usuario[0]['nombre'].' '.$usuario[0]['apellido'] ); 
				
$chat['mensaje'][] = $row['mensaje'];
$chat['persona'][] = $de;

			 

 } 


echo json_encode($chat) ;
 ?>




