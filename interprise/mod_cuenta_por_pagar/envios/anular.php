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
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);
$images = serialize($imagenes);


 


 

/*ANULA COBROS Y PAGOS*/

$qry = "UPDATE `".TABLA2."`
SET
`editado_por` = '$editado_por',
`editado_fecha` = '$fecha',
`anulado` = '$anulado'

WHERE `id` = '$referencia';
";
 
$resul = mysql_query($qry);
/*ANULA COBROS Y PAGOS FIN*/



/*ANULA MOVIMIENTO CAJA Y BANCO*/
$qry2 = "UPDATE `".TABLA3."`
SET `anulado` = '$anulado'
WHERE `id_doc` = '$id_documento'  and tipo = '".TIPO."' and fecha ='$fechai' and abono = '".SIGNO.$abonoi."';
";



//echo $qry2;
mysql_query($qry2);
/*ANULA MOVIMIENTO CAJA Y BANCO*/







/*UPDATE CAJAS Y BANCOS*/
require_once 'update_cajas_bancos.php';



/*UPDATE CXX*/
require_once 'update_cxx.php';







if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}
 


  
   
 





?>