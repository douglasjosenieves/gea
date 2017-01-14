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
date_default_timezone_set('America/New_York');
$fecha = date("Y-m-d H:i:s");
$editado_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);


$anio=date("Y");
$mes=date("m");
$dia=date("d");
$hora=date("H");
/* 
 SELECT * FROM calendario where day(start) = 24 and month(start) = 10 and year(start) = 2016 and hour(start) = 23 and minute(start) = 57  ;*/

$fecha_sys = date("Y-m-d H:i");

$i = 0;
$qry = "SELECT * , (start - INTERVAL 15 MINUTE) as quince_min,  (start - INTERVAL 10 MINUTE) as diez_min, (start - INTERVAL 5 MINUTE) as cinco_min , (start - INTERVAL 1 MINUTE) as un_min FROM calendario where hour(start) = '$hora' and day(start) = '$dia' and month(start) = '$mes' and year(start) = '$anio' and notificado <> 1 and anulado  <> 1  ;";

 $resul =  mysql_query($qry);
$data = array();
while($row =  mysql_fetch_array($resul) ) {
$data['data'][] = $row;
$id_usuario = $data['data'][$i]['id_usuario'];
$titulo = $data['data'][$i]['titulo'];
$descripcion = $data['data'][$i]['descripcion'];
$nombre = $data['data'][$i]['nombre'];
$tipo = $data['data'][$i]['tipo'];
$start = $data['data'][$i]['start'];

$quince = $data['data'][$i]['quince_min'];
$diez = $data['data'][$i]['diez_min'];
$cinco = $data['data'][$i]['cinco_min'];
$uno = $data['data'][$i]['un_min'];
$id = $data['data'][$i]['id'];


$quince_f= new DateTime($quince);
$quince_Min = date_format($quince_f, 'Y-m-d H:i');

$diez_f= new DateTime($diez);
$diez_Min = date_format($diez_f, 'Y-m-d H:i');

$cinco_f= new DateTime($cinco);
$cinco_Min = date_format($cinco_f, 'Y-m-d H:i');

$uno_f= new DateTime($uno);
$uno_Min = date_format($uno_f, 'Y-m-d H:i');





$qry2 = "INSERT INTO chat (`id_para`, `id_de`, `mensaje`, `fecha_envio`, `ip`) SELECT id , '".$id_usuario."', '".'Calendario recordatorio: Titulo:'.$titulo.' Nombre:'.$nombre.' '.$tipo.' '.$descripcion.' '.$start."', '".$fecha."', '".$ip."' FROM usuarios where anulado <> 1 and tipo = 'ADMINISTRADOR';";
$resul2 = mysql_query($qry2);

$qry3 = "UPDATE `calendario` SET `notificado`='1' WHERE `id`='$id'";
$resul3 = mysql_query($qry3);
echo $resul2.$resul3;





echo $fecha_sys.'  -  '.$start;
echo '<br>';
echo $quince_Min;
echo '<br>';
/*echo $diez_Min;
echo '<br>';
echo $cinco_Min;
echo '<br>';
echo $uno_Min;*/
echo '<br>';
echo '<br>';
echo '<br>';
$i++;
}



/*$fecha = date('Y-m-j');
$nuevafecha = strtotime ( '+1 hour' , strtotime ( $fecha ) ) ;
$nuevafecha = strtotime ( '+13 minute' , strtotime ( $fecha ) ) ;
$nuevafecha = strtotime ( '+30 second' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
 
echo $nuevafecha;*/




//$qry = "";
 

//$resul = mysql_query($qry);








 



  
   
 





?>