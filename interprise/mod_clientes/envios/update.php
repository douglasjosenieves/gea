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
$editado_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);


 
 



$qry = "UPDATE `contactos_web`
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
`ip` = '$ip'
WHERE `id` = '$referencia';
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