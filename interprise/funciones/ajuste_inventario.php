<?php  session_start();  

//header('Content-type: application/json');
require_once __DIR__ . '../../../db_connect.php';
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fechaphp = date("Y-m-d H:i:s");


$id = $_REQUEST['id'];
$operador = $_REQUEST['operador'];






$qry =  mysql_query("SELECT * FROM inventario where stock = 'CANTIDAD';");
while($fila =  mysql_fetch_array($qry) ) {
//echo $fila['id'];





$resul_suma =  mysql_query("SELECT sum(reg_cantidad) as sum FROM inventario_movimientos where reg_id = '".$fila['id']."' and anulado <> 1;");
while($row =  mysql_fetch_array($resul_suma) ) {
$suma = $row['sum'];

if ($suma=='') {
$suma =0;
}

$qryupdateArt = "UPDATE inventario SET `cantidad`= '".$suma."' WHERE `id`='".$fila['id']."'";


echo $qryupdateArt.'<br>';
mysql_query($qryupdateArt);

}







}






echo $resul ;

  
   
 





?>



