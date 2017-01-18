<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
/*
 * Following code will list all the products
 */
 
// array for JSON response

 
// include db connect class




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


 
$id=$_REQUEST['id'];
$nombres=$_REQUEST['nombres'];
$apellidos=$_REQUEST['apellidos'];
$pais=$_REQUEST['pais'];
$email=$_REQUEST['email'];
$movil=$_REQUEST['movil'];
$email2=$_REQUEST['email2'];
$movil2=$_REQUEST['movil2'];
$pre_informacion=$_REQUEST['pre_informacion'];
$porque_espana=$_REQUEST['porque_espana'];
$inversion=$_REQUEST['inversion'];
$status=$_REQUEST['status'];
$tramitido_al_crm=$_REQUEST['tramitido_al_crm'];
$fecha=$_REQUEST['fecha'];
$ip=$_REQUEST['ip'];

$elaborado_por=$_REQUEST['elaborado_por'];


$anulado=$_REQUEST['anulado'];



$pre_informacion = serialize($pre_informacion);




$fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];


$documento=$_REQUEST['documento'];
$cliente=$_REQUEST['cliente'];
$fecha_nacimiento=$_REQUEST['fecha_nacimiento'];
$telefono_oficina=$_REQUEST['telefono_oficina'];
$direccion_domicilio=$_REQUEST['direccion_domicilio'];
$direccion_oficina=$_REQUEST['direccion_oficina'];
$titulacion=$_REQUEST['titulacion'];
$anos_laboral=$_REQUEST['anos_laboral'];
$monto_minimo_inversion=$_REQUEST['monto_minimo_inversion'];
$monto_maximo_inversion=$_REQUEST['monto_maximo_inversion'];
$ultima_visita_espana=$_REQUEST['ultima_visita_espana'];
$tiempo_estadia_ultima_visita=$_REQUEST['tiempo_estadia_ultima_visita'];
$ciudades__visitadas=$_REQUEST['ciudades__visitadas'];
$fecha_estipulada_llegada_espana=$_REQUEST['fecha_estipulada_llegada_espana'];
$integrantes_familiar=$_REQUEST['integrantes_familiar'];
$conyuge_nombres=$_REQUEST['conyuge_nombres'];
$conyuge_apellidos=$_REQUEST['conyuge_apellidos'];
$conyuge_fecha_nacimiento=$_REQUEST['conyuge_fecha_nacimiento'];
$conyuge_documentos=$_REQUEST['conyuge_documentos'];
$conyuge_tel_movil=$_REQUEST['conyuge_tel_movil'];
$conyuge_tel_oficina=$_REQUEST['conyuge_tel_oficina'];
$conyuge_email=$_REQUEST['conyuge_email'];
$hijos_nombre=$_REQUEST['hijos_nombre'];
$hijos_apellidos=$_REQUEST['hijos_apellidos'];
$hijos_fecha_nacimiento=$_REQUEST['hijos_fecha_nacimiento'];
$hijos_documentos=$_REQUEST['hijos_documentos'];
$imagenes=$_REQUEST['imagenes'];

$opcion1=$_REQUEST['opcion1'];
$opcion2=$_REQUEST['opcion2'];
$opcion3=$_REQUEST['opcion3'];
$opcion4=$_REQUEST['opcion4'];
$opcion5=$_REQUEST['opcion5'];
$opcion6=$_REQUEST['opcion6'];

$opcion_tipo_1=$_REQUEST['opcion_1_tipo'];
$opcion_tipo_2=$_REQUEST['opcion_2_tipo'];
$opcion_tipo_3=$_REQUEST['opcion_3_tipo'];
$opcion_tipo_4=$_REQUEST['opcion_4_tipo'];
$opcion_tipo_5=$_REQUEST['opcion_5_tipo'];
$opcion_tipo_6=$_REQUEST['opcion_6_tipo'];


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

 



$qry = "INSERT INTO `".TABLA."` (`nombres`, `apellidos`, `pais`, `email`, `email2`,`movil`,`movil2`, `status`, `fecha`, `ip`, `elaborado_por`, `documento`, `cliente`, `fecha_nacimiento`, `direccion_oficina`, `id_cliente`, `des_cliente`, `comentarios`, `fecha_terminacion`, `tipos`) 


VALUES 
('$nombres', '$apellidos', '$pais', '$email', '$email2', '$movil', '$movil2', '$status', '$fecha', '$ip', '$elaborado_por', '$documento', '$cliente', '$fecha_nacimiento',  '$direccion_oficina', '$id_cliente', '$des_cliente', '$comentarios', '$fecha_terminacion', '$tipos' );";







$resul = mysql_query($qry);


if ($resul==1) {
  


$resulf =  mysql_query("SELECT  max( id)  AS id FROM ".TABLA."");
while($row =  mysql_fetch_array($resulf) ) {
$id_doc= $row['id'];
}

$id_cliente = unserialize($id_cliente);
$des_cliente = unserialize($des_cliente);

foreach ($id_cliente as $key => $value) {

$qry2 ="INSERT INTO  `".TABLA2."`
(
`id_doc`,
`doc_id`,
`doc_desc`,
`anulado`)
VALUES
( 
'$id_doc',
'$id_cliente[$key]',
'$des_cliente[$key]',
'$anulado');
";

$resul2 = mysql_query($qry2);

}
} 

if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}



  
   die;
 





?>