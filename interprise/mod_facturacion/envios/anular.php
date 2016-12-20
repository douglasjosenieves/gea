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




$qry3 = "UPDATE `".TABLA3."` SET `anulado`='$anulado' WHERE `id_doc`= '$referencia' and `doc`= '".TIPO."';";
$qry4 = "UPDATE `".TABLA4."` SET `anulado`='$anulado' WHERE `id_doc`= '$referencia' and `doc`= '".TIPO."';";














$resul = mysql_query($qry);

mysql_query($qry2);
mysql_query($qry3);
mysql_query($qry4);

$reg_id = array();
$resul_suma1 =  mysql_query("SELECT * FROM `".TABLA2."` WHERE id_enc = '$referencia'");
while($row =  mysql_fetch_array($resul_suma1) ) {
$reg_id[] = $row['reg_id'];


}


foreach ($reg_id as $key => $value) { 

 

$resul_suma =  mysql_query("SELECT sum(reg_cantidad) as sum FROM ".TABLA3." where reg_id = '".$reg_id[$key]."' and anulado <> 1;");
while($row =  mysql_fetch_array($resul_suma) ) {
$suma = $row['sum'];

if ($suma=='') {
$suma =0;
}


$qryupdateArt = "UPDATE ".TABLA5." SET `cantidad`= '".$suma."' WHERE `id`='".$reg_id[$key]."'";

mysql_query($qryupdateArt);
}
}





if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}
 


  
   
 





?>