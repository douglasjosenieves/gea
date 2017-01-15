<?php  /*session_start();  
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


 */


 





$qryupdateArt1 = "UPDATE `".TABLA5."` SET `saldo_final`= '0' ";
$resul1 = mysql_query($qryupdateArt1);



$result0001 =  mysql_query("SELECT id,  id_banco_caja, sum(abono) as sum FROM `".TABLA3."` where anulado <> 1 group by (id_banco_caja)");
while($row0001 =  mysql_fetch_array($result0001) ) {
$suma = $row0001['sum'];
$id = $row0001['id'];

//echo 'id'.$id.' :'.$suma.'<br>';

/*UPDATE CAJA BANCOS*/

$qryupdateArt2 = "UPDATE `".TABLA5."` SET `saldo_final`= '".$suma."' WHERE `id`='".$id."'";
//echo $qryupdateArt2.'<br>';
$resul2 = mysql_query($qryupdateArt2);

}



/*if ($resul2==1) {
  
echo $resul2;
}

else
{
echo 'false'.$qry;


}*/
 


  
   
 





?>