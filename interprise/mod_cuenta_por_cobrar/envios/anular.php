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
SET


`anulado` = '$anulado'
WHERE `id_doc` = '$id_documento' and tipo = '".TIPO."';
";


/*echo $qry2;*/

mysql_query($qry2);

/*ANULA MOVIMIENTO CAJA Y BANCO*/




/*UPDATE LA TABLA DE CXC I CXP*/

$resul_suma =  mysql_query("SELECT sum(abono) as sum FROM `".TABLA3."` where id_doc = '".$id_documento."' and tipo = '".TIPO."' and anulado <> 1;");
while($row =  mysql_fetch_array($resul_suma) ) {
$suma = $row['sum'];

if ($suma=='') {
$suma =0;
}

$qryupdateArt = "UPDATE `".TABLA5."` SET `saldo_final`= '".$suma."' WHERE `id`='".$caja_banco."'";
/*echo $qryupdateArt.'<br>';*/
mysql_query($qryupdateArt);


}
/*UPDATE LA TABLA DE CXC I CXP*/

/*SELECT total_total FROM erp.cuenta_por_cobrar WHERE id = 5;
select sum(abono) from cajas_bancos_movimientos where id_doc =5*/


/*$cxc_result =  mysql_query("SELECT total_total FROM `".TABLA."` WHERE id = $id_documento");
while($row1 =  mysql_fetch_array($cxc_result) ) {

$total_c = $row1['total_total'];

}


$bm_result =  mysql_query("select sum(abono) as sum from `".TABL3."` where id_doc =$id_documento");
while($row2 =  mysql_fetch_array($bm_result) ) {

$total_b = $row2['sum'];

}


$total_saldo = $total_c - $total_b;
$qrycxc = "UPDATE `".TABLA."` SET `saldo`= '".$suma."' WHERE `id_doc`='".$id_documento."'";

//echo $qrycxc;
mysql_query($qrycxc);*/



if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}
 


  
   
 





?>