<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
require_once __DIR__ . '../../../../db_connect.php';
//sleep(2);
 require_once 'config.php';
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d H:i:s");
$editado_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);


 
 



$qry = "INSERT INTO ".TABLA2."
(
`id_doc`,
`doc`,
`id_cliente`,
`enc_cliente`,
`id_banco_caja`,
`banco_caja`,
`tipo`,
`numero_ref`,
`enc_fecha_emision`,
`enc_comentarios`,
`total_parcial`,
`total_tax`,
`total_total`,
`saldo`,
`abono`,
`status`,
`ret1`,
`ret_desc1`,
`ret2`,
`ret_desc2`,
`ret3`,
`ret_desc3`,
`ret4`,
`ret_desc4`,
`ret5`,
`ret_desc5`,
`tramitido_al_crm`,
`elaborado_por`,
`fecha`,
`verificado`,
`editado_por`,
`editado_fecha`,
`imagenes`,
`ip`,
`anulado`,
`ext1`,
`ext2`,
`ext3`,
`ext4`,
`ext5`)
VALUES
(
'$id_doc',
'$doc',
'$id_cliente',
'$enc_cliente',
'$id_banco_caja',
'$banco_caja',
'$tipo',
'$numero_ref',
'$enc_fecha_emision',
'$enc_comentarios',
'$total_parcial',
'$total_tax',
'$total_total',
'$saldo',
'$abono',
'$status',
'$ret1',
'$ret_desc1',
'$ret2',
'$ret_desc2',
'$ret3',
'$ret_desc3',
'$ret4',
'$ret_desc4',
'$ret5',
'$ret_desc5',
'$tramitido_al_crm',
'$elaborado_por',
'$fecha',
'$verificado',
'$editado_por',
'$editado_fecha',
'$imagenes',
'$ip',
'$anulado',
'$ext1',
'$ext2',
'$ext3',
'$ext4',
'$ext5');

";
 

$resul = mysql_query($qry);



/*MOVIMIENTOS DE CAJA Y BANCOS*/
 

$qry2 = "INSERT INTO ".TABLA3."
(
`id_doc`,
`doc`,
`id_cliente`,
`enc_cliente`,
`id_banco_caja`,
`banco_caja`,
`tipo`,
`abono`,
`elaborado_por`,
`fecha`,
`verificado`,
`editado_por`,
`editado_fecha`,
`imagenes`,
`ip`,
`anulado`,
`ext1`,
`ext2`,
`ext3`,
`ext4`,
`ext5`)
VALUES
(
'$id_doc',
'$doc',
'$id_cliente',
'$enc_cliente',
'$id_banco_caja',
'$banco_caja',
'".TIPO."',
'".SIGNO.$abono."',
'$elaborado_por',
'$fecha',
'$verificado',
'$editado_por',
'$editado_fecha',
'$imagenes',
'$ip',
'$anulado',
'$ext1',
'$ext2',
'$ext3',
'$ext4',
'$ext5');

";
 

$resul = mysql_query($qry2);

/*MOVIMIENTOS DE CAJA Y BANCOS FIN*/

/*UPDATE CUENTA POR COBRAR O PAGAR*/
$resul_suma =  mysql_query("SELECT sum(abono) as sum FROM ".TABLA3." where id_doc = '$id_doc' and tipo ='".TIPO."' and anulado <> 1");
while($row =  mysql_fetch_array($resul_suma) ) {
$suma = $row['sum'];
}

/*3000 el PARCIAL
472 el otro abono
ctc saldo 472
*/
$sumar = $suma ;


$resta_abono =  $total_total-$sumar;





/*ACTUALIZA LA TABLA CXC O CXP*/

if ($resta_abono > 1) {
	$status_saldo= ", `status_saldo`='PARCIAL' ";
}
else if ($resta_abono == 0) {
	$status_saldo= ", `status_saldo`='LISTO' ";
}


$qryupdateArt = "UPDATE ".TABLA." SET `saldo`= '".$resta_abono."'  $status_saldo WHERE `id`='".$id_doc."'";

//echo $qryupdateArt;
mysql_query($qryupdateArt);
/*ACTUALIZA LA TABLA CXC O CXP*/






 /*UPDATE CUENTA POR COBRAR O PAGAR FIN*/

if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}


  
   
 





?>