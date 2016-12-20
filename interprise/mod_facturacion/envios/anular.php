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


 


 



$qry = "UPDATE `".TABLA1."`
SET
`editado_por` = '$editado_por',
`editado_fecha` = '$fecha',
`anulado` = '$anulado'

WHERE `id` = '$referencia';
";
 


$qry2 = "UPDATE `".TABLA2."`
SET


`anulado` = '$anulado'

WHERE `id_enc` = '$referencia';
";




$qry3 = "UPDATE `".TABLA3."` SET `anulado`='1' WHERE `id_doc`= '$referencia' and `doc`= '".TIPO."';";
$qry4 = "UPDATE `".TABLA4."` SET `anulado`='1' WHERE `id_doc`= '$referencia' and `doc`= '".TIPO."';";


$resul = mysql_query($qry);

mysql_query($qry2);
mysql_query($qry3);
mysql_query($qry4);



if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}
 


  
   
 





?>