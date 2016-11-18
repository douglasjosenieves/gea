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
$fecha = date("Y-m-d H:i:s");

//echo $_REQUEST['descripcion'];
 
//$id=$_REQUEST['id'];
$categoria=$_REQUEST['categoria'];
$status=$_REQUEST['status'];

$id_contacto=$_REQUEST['id_contacto'];
$nombres=$_REQUEST['nombres'];
$apellidos=$_REQUEST['apellidos'];

$asunto=$_REQUEST['asunto'];
$descripcion=$_REQUEST['descripcion'];

 
 
$elaborado_por=$_REQUEST['elaborado_por'];

$referencia=$_REQUEST['referencia'];
 

$fecha = date("Y-m-d H:i:s");






/*INSERT INTO `seguimiento` (`id`, `id_contacto`, `nombres`, `apellidos`, `asunto`, `descripcion`, `categoria`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`, `editado_por`, `editado_fecha`, `anulado`, `adjuntos`) VALUES ('', '1', '1', '1', '1', '1', '1', '1', '1', '2016-09-02 00:00:00', '1', '1', '2016-09-02', '1', '1');
*/



 


$resul = mysql_query("UPDATE `seguimiento` SET 

	`editado_por`='$elaborado_por',
	`editado_fecha`='$fecha' ,
    `status`='$status',
    `categoria`='$categoria',
    `asunto`='$asunto' ,
    `descripcion`='$descripcion'
   


	WHERE `id`='$referencia'");








/* echo "UPDATE `seguimiento` SET 

	`editado_por`='$elaborado_por',
	`editado_fecha`='$fecha' ,
    `status`='$status',
    `categoria`='$categoria',
    `asunto`='$asunto' ,
    `descripcion`='$descripcion'
   


	WHERE `id`='$referencia'";

*/
  
echo $resul ;




 





?>