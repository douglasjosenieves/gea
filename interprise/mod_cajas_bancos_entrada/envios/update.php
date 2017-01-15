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


 
 



$qry = "UPDATE ".TABLA."
SET
 
`id_doc` = '$id_doc',
`doc` = '$doc',
`id_cliente` = '$id_cliente',
`enc_cliente` = '$enc_cliente',
`id_banco_caja` = '$id_banco_caja',
`banco_caja` = '$banco_caja',
`tipo` = '$tipo',
`numero_ref` = '$numero_ref',
`enc_fecha_emision` = '$enc_fecha_emision',
`enc_comentarios` = '$enc_comentarios',
 
`abono` = '$abono',
`status` = '$status',
`ret1` = '$ret1',
`ret_desc1` = '$ret_desc1',
`ret2` = '$ret2',
`ret_desc2` = '$ret_desc2',
`ret3` = '$ret3',
`ret_desc3` = '$ret_desc3',
`ret4` = '$ret4',
`ret_desc4` = '$ret_desc4',
`ret5` = '$ret5',
`ret_desc5` = '$ret_desc5',
`tramitido_al_crm` = '$tramitido_al_crm',
 
`verificado` = '$verificado',
`editado_por` = '$editado_por',
`editado_fecha` = '$editado_fecha',
`imagenes` = '$imagenes',
`ip` = '$ip',
`anulado` = '$anulado',
`ext1` = '$ext1',
`ext2` = '$ext2',
`ext3` = '$ext3',
`ext4` = '$ext4',
`ext5` = '$ext5'
WHERE `id` = '$referencia';
";
 

$resul += mysql_query($qry);



$qry2 = "UPDATE ".TABLA3."
SET

`anulado` = '$anulado'

WHERE `id_doc` = '$referencia' and `doc` = '$doc';
";
$resul += mysql_query($qry2);



/*ACTUALIZA EL SALDO FINAL*/

$resul_caja_banco =  mysql_query("SELECT sum(abono) as sum FROM ".TABLA3." where id_banco_caja = '$id_banco_caja' and anulado <> 1");
while($row2 =  mysql_fetch_array($resul_caja_banco) ) {
$suma = $row2['sum'];
}
if ($suma =='') {
	$suma=0;
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
echo 'false'.$qryCajas;


}


  
   
 





?>