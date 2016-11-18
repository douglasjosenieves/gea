<?php  session_start(); error_reporting(E_ERROR | E_PARSE); 
//error_reporting(0);
//header('Content-type: application/json');
/*
 * Following code will list all the products
 */
 
// array for JSON response

 
// include db connect class




require_once __DIR__ . '../../../db_connect.php';
sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fechaphp = date("Y-m-d H:i:s");


 
$ref=$_REQUEST['ref'];
$fecha=$fechaphp;
$elaborado_por=$_REQUEST['elaborado_por'];
$link=$_REQUEST['link'];
$sector=$_REQUEST['sector'];
$nombre_opcion=$_REQUEST['nombre_opcion'];
$direccion=$_REQUEST['direccion'];
$ciudad=$_REQUEST['ciudad'];
$zona=$_REQUEST['zona'];
$celular=$_REQUEST['celular'];
$local=$_REQUEST['local'];
$nombre_contacto=$_REQUEST['nombre_contacto'];
$vendedor_solicita=$_REQUEST['vendedor_solicita'];
$nosotros_ofrecemos=$_REQUEST['nosotros_ofrecemos'];
$tamano_local=$_REQUEST['tamano_local'];
$alquiler=$_REQUEST['alquiler'];
$antiguedad=$_REQUEST['antiguedad'];
$propietario_dispuesto_traspaso=$_REQUEST['propietario_dispuesto_traspaso'];
$website=$_REQUEST['website'];
$facturacion_mensual=$_REQUEST['facturacion_mensual'];
$datos_adicionales=$_REQUEST['datos_adicionales'];
$comentarios_sobre_negocio=$_REQUEST['comentarios_sobre_negocio'];
$comentarios_sobre_negocio_interno=$_REQUEST['comentarios_sobre_negocio_interno'];
$ventajas_comparativas=$_REQUEST['ventajas_comparativas'];
$capture1=$_REQUEST['capture1'];
$capture2=$_REQUEST['capture2'];
$editado_por=$_REQUEST['editado_por'];
$img = $_REQUEST['img'];

$canon_publicidad=$_REQUEST['canon_publicidad'];
$canon_entrada=$_REQUEST['canon_entrada'];
$inversion=$_REQUEST['inversion'];
$royalty=$_REQUEST['royalty'];
$contrato=$_REQUEST['contrato'];
$poblacion_minima=$_REQUEST['poblacion_minima'];



foreach( $img  as $key => $n ) {
 $imgArrreglo .= $img[$key].";";
}

$capture1=  $imgArrreglo  ;

 
 

	

$resul = mysql_query("UPDATE `form_fichas_opciones_franquicias` SET 
  

`editado_por`= '$editado_por', 
`editado_fecha`= '$fechaphp', 
`link`= '$link', 
`sector`= '$sector', 
`nombre_opcion`= '$nombre_opcion', 
`direccion`= '$direccion', 
`ciudad`= '$ciudad', 
`zona`= '$zona', 
`celular`= '$celular', 
`local`= '$local', 
`nombre_contacto`= '$nombre_contacto', 
`vendedor_solicita`= '$vendedor_solicita', 
`nosotros_ofrecemos`= '$nosotros_ofrecemos', 
`tamano_local`= '$tamano_local', 
`alquiler`= '$alquiler', 
`antiguedad`= '$antiguedad', 
`propietario_dispuesto_traspaso`= '$propietario_dispuesto_traspaso', 
`website`= '$website', 
`facturacion_mensual`= '$facturacion_mensual', 
`datos_adicionales`= '$datos_adicionales', 
`comentarios_sobre_negocio`= '$comentarios_sobre_negocio', 
`comentarios_sobre_negocio_interno`= '$comentarios_sobre_negocio_interno', 
`ventajas_comparativas`= '$ventajas_comparativas', 
`capture1`= '$capture1', 
`capture2`= '$capture2', 

`canon_publicidad`= '$canon_publicidad', 
`canon_entrada`= '$canon_entrada', 
`inversion`= '$inversion', 
`royalty`= '$royalty', 
`contrato`= '$contrato', 
`poblacion_minima`= '$poblacion_minima', 


`anulado`= '$anulado'





  WHERE `form_fichas_opciones_franquicias`.`ref` = $ref;");


//echo $resul;








 

if ($resul==1) {
  

 

   echo 'true';
 
}

else
{

 

     echo 'false';
  

}

 



?>