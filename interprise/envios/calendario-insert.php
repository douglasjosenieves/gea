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
$id_contacto=$_REQUEST['id_contacto'];
$nombre=$_REQUEST['nombre'];
$color=$_REQUEST['color'];

$allDay=$_REQUEST['allDay'];
$start=$_REQUEST['start'];
$end=$_REQUEST['end'];

$titulo=$_REQUEST['titulo'];
$tipo=$_REQUEST['tipo'];
$descripcion=$_REQUEST['descripcion'];
 
$dia = $_REQUEST['dia'];
 
$horaInicio = $start;
$horaInicio = strtotime($horaInicio);
$horaInicio = date("H:i", $horaInicio);


$horaFinal = $end;
$horaFinal = strtotime($horaFinal);
$horaFinal = date("H:i", $horaFinal);
$inicio = $dia.' '.$horaInicio;
 $final = $dia.' '.$horaFinal;




/*INSERT INTO `admin_crm`.`calendario` (`id_contacto`, `nombre`, `start`, `end`, `color`, `titulo`, `allDay`) VALUES ('85', 'fulano', '2016-09-09 07:00:00', '2016-09-09 07:00:00', '#257e4a', '154', '');
*/



 


$resul = mysql_query("INSERT INTO `calendario` (`id_contacto`, `nombre`, `start`, `end`, `color`, `titulo`, `tipo`, `descripcion`, `allDay`) 
VALUES 
	(
	'".$id_contacto."', 
		'".$nombre."',
		'".$inicio."',
		'".$final."', 
	    '".$color."',
		'".$titulo."',
		'".$tipo."',
		'".$descripcion."',
		'".$allDay."');");








 


  
echo $resul ;




 





?>