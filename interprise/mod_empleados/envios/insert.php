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




$opcion_t_1 = serialize($opcion_tipo_1);
$opcion_t_2 = serialize($opcion_tipo_2);
$opcion_t_3 = serialize($opcion_tipo_3);
$opcion_t_4 = serialize($opcion_tipo_4);
$opcion_t_5 = serialize($opcion_tipo_5);
$opcion_t_6 = serialize($opcion_tipo_6);


$imagenes_array = serialize($imagenes);
$hijos_nombre_array=serialize($hijos_nombre);
$hijos_apellidos_array=serialize($hijos_apellidos);
$hijos_fecha_nacimiento_array=serialize($hijos_fecha_nacimiento);
$hijos_documentos_array=serialize($hijos_documentos);


$id_cliente=$_REQUEST['id_cliente'];
$des_cliente=$_REQUEST['des_cliente'];

$comentarios=$_REQUEST['comentarios'];
$fecha_terminacion=$_REQUEST['fecha_terminacion'];
$tipos=$_REQUEST['tipos'];
$id_cliente = serialize($id_cliente);
$des_cliente = serialize($des_cliente);

 



$qry = "INSERT INTO ".TABLA."
( 
`nombres`,
`apellidos`,
`documento`,
`cliente`,
`titulacion`,
`pais`,
`email`,
`email2`,
`movil`,
`movil2`,
`comentarios`,
`status`,
`tipo`,
`fecha_nacimiento`,
`fecha_inicio`,
`fecha_terminacion`,
`cargo`,
`salario`,
`dependiente`,
`direccion_oficina`,
`direccion_domicilio`,
`imagenes`,
`id_mobil`,
`id_cuenta`,
`ins_user`,
`ins_fecha`,
 
`ip`,
`verificado`,
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
'$email',
'$email2',
'$movil',
'$movil2',
'$comentarios',
'$status',
'$tipo',
'$fecha_nacimiento',
'$fecha_inicio',
'$fecha_terminacion',
'$cargo',
'$salario',
'$dependiente',
'$direccion_oficina',
'$direccion_domicilio',
'$imagenes',
'$id_mobil',
'$id_cuenta',
'$ins_user',
'$ins_fecha',
 
'$ip',
'$verificado',
'$anulado',
'$ext1',
'$ext2',
'$ext3',
'$ext4',
'$ext5');
";







$resul = mysql_query($qry);


 

if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}



  
   die;
 





?>