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
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);
$images = serialize($imagenes);


 

$cantidad = ($cantidad=='') ? '0': $cantidad ;

$pro_inv_max = ($pro_inv_max=='') ? '0': $pro_inv_max ;
$pro_inv_min = ($pro_inv_min=='') ? '0': $pro_inv_min ;


$precio1 = ($precio1=='') ? '0': $precio1 ;
$precio2 = ($precio2=='') ? '0': $precio2 ;
$precio3 = ($precio3=='') ? '0': $precio3 ;
$precio_compra = ($precio_compra=='') ? '0': $precio_compra ;


$islr = ($islr=='') ? '0': $islr ;
$tax = ($tax=='') ? '0': $tax ;
 



$qry = "UPDATE `inventario`
SET

`codigo` = '$codigo',
`nombre` = '$nombre',
`descripcion` = '$descripcion',
`comentarios` = '$comentarios',
`precio` = '$precio',
`precio1` = '$precio1',
`precio2` = '$precio2',
`precio3` = '$precio3',
`precio_compra` = '$precio_compra',
`cantidad` = '$cantidad',
`pro_inv_max` = '$pro_inv_max',
`pro_inv_min` = '$pro_inv_min',

`und_med` = '$und_med',
`por_desperdicio` = '$por_desperdicio',

`tax` = '$tax',
`islr` = '$islr',
`id_categoria` = '$id_categoria',
`estado` = '$estado',
`stock` = '$stock',
`editado_por` = '$editado_por',
`editado_fecha` = '$fecha',
`imagenes` = '$images',
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