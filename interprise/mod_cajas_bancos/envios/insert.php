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


 
 
$saldo_final = $saldo_inicial;


$qry = "INSERT INTO `".TABLA."`
( 
`descripcion`,
`tipo`,
`numero_cuenta`,
`direccion`,
`ejecutivo`,
`saldo_inicial`,
`saldo_final`,

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
'$descripcion',
'$tipo',
'$numero_cuenta',
'$direccion',
'$ejecutivo',
'$saldo_inicial',
'$saldo_final',

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




if ($resul==1) {


$rs = mysql_query("SELECT  descripcion, id  AS id FROM ".TABLA."  order by id desc limit 1;");
while($row =  mysql_fetch_array($rs) ) {
$id_banco_caja = $row['id'];
$banco_caja = $row['descripcion'];
}

$abono= $saldo_inicial ;

$qry2 = "INSERT INTO ".TABLA2."
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
'$tipo_movimiento',
'$abono',
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



$resul2 = mysql_query($qry2);

}

else
{
echo 'false'.$qry;
}



if ($resul2==1) {
  
echo $resul2;
}

else
{
echo 'false'.$qry2;


}


  
   
 





?>