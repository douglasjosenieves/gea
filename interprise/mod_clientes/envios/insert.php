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
$upd_fecha = date("Y-m-d H:i:s");
$ins_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
//$pre_ = serialize($pre_);
extract ($_POST);

 
 

 $qry ="INSERT INTO ".TABLA."
(
`nombres`,
`apellidos`,
`documento`,
`cliente`,
`titulacion`,
`pais`,
`fecha_nacimiento`,
`email`,
`movil`,
`email2`,
`movil2`,
`direccion_oficina`,
`direccion_domicilio`,
`comentario`,
`status`,
`ins_user`,
 
`ins_fecha`,
 
`id_categoria`,
`id_vendedor`,
`id_movil`,
`id_cuenta`,
`imagenes`,
`ip`,
`anulado`,
`ext1`,
`ext2`,
`ext3`,
`ext4`,
`ext5`)
VALUES
(

'$nombres',
'$apellidos',
'$documento',
'$cliente',
'$titulacion',
'$pais',
'$fecha_nacimiento',
'$email',
'$movil',
'$email2',
'$movil2',
'$direccion_oficina',
'$direccion_domicilio',
'$comentario',
'$status',
'$ins_user',
 
'$ins_fecha',
 
'$id_categoria',
'$id_vendedor',
'$id_movil',
'$id_cuenta',
'$imagenes',
'$ip',
'$anulado',
'$ext1',
'$ext2',
'$ext3',
'$ext4',
'$ext5'
);

";

$resul = mysql_query($qry);
$id_asignado = mysql_insert_id();

if ($resul==1) {
  
echo $resul.'-'.$id_asignado;
}

else
{
echo 'false'.$qry;


}

die;
 





?>