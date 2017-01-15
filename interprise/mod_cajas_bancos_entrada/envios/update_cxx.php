<?php /*session_start();  
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
$images = serialize($imagenes);*/


 

/*
$id_documento = '7';

$total_total_envio = '54723.2';*/




$qry_t = "UPDATE `".TABLA."` SET `saldo`= '".$total_total_envio."' WHERE `id_doc`='".$id_documento."' and doc = '".TIPO2."'";

//echo $qry_t;
$resul_t = mysql_query($qry_t);


$resul_cxx =  mysql_query("SELECT id_doc,  id_banco_caja, sum(abono) as sum FROM `".TABLA3."` where doc = '".TIPO2."' and anulado <> 1 group by (id_doc)");
while($row_cxx =  mysql_fetch_array($resul_cxx) ) {
$suma = $row_cxx['sum'];
$id = $row_cxx['id_doc'];

//echo 'id'.$id.' :'.$suma.'<br>';

/*CUENTAS CXX*/
$sumar = $suma * CAMBIASIGNO ;



$resta_abono =   $total_total_envio - $sumar;

$qryupdateArt_cxx = "UPDATE `".TABLA."` SET `saldo`= '".$resta_abono."' WHERE `id_doc`='".$id."' and doc = '".TIPO2."'";
//echo $qryupdateArt_cxx.'<br>';
$resul2 = mysql_query($qryupdateArt_cxx);
//echo $qryupdateArt_cxx;
}



/*if ($resul2==1) {
  
echo $resul2;
}

else
{
echo 'false'.$qry;


}*/
 


  
   
 





?>