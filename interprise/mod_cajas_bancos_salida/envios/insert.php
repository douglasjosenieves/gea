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
'0',
'$doc',
'$id_cliente',
'$enc_cliente',
'$id_banco_caja',
'$banco_caja',
'$tipo',
'$numero_ref',
'$enc_fecha_emision',
'$enc_comentarios',
 
 
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
 
'$imagenes',
'$ip',
'$anulado',
'$ext1',
'$ext2',
'$ext3',
'$ext4',
'$ext5');

";
// echo ($qry);

$resul = mysql_query($qry);



/*MOVIMIENTOS DE CAJA Y BANCOS*/
 $rs = mysql_query("SELECT id  AS id FROM ".TABLA2."  order by id desc limit 1;");
while($row =  mysql_fetch_array($rs) ) {
$id_doc = $row['id'];

}

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
 

$resul += mysql_query($qry2);

/*MOVIMIENTOS DE CAJA Y BANCOS FIN*/



/*ACTUALIZA EL SALDO FINAL*/

$resul_caja_banco =  mysql_query("SELECT sum(abono) as sum FROM ".TABLA3." where id_banco_caja = '$id_banco_caja' and anulado <> 1");
while($row2 =  mysql_fetch_array($resul_caja_banco) ) {
$suma = $row2['sum'];
}

$qryCajas = "UPDATE ".TABLA5." SET `saldo_final`='$suma' WHERE `id`='$id_banco_caja'";

//echo $qryupdateArt;
$resul += mysql_query($qryCajas);

/*ACTUALIZA EL SALDO FINAL* FIN/*/
 


if ($resul==3) {
  
echo 1;
}

else
{
echo 'false'.$qry;


}


  
   
 





?>