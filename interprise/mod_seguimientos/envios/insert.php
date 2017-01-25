<?php  session_start();  
 


require_once __DIR__ . '../../../../db_connect.php';
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d H:i:s");

extract($_POST);

 

 

$fecha = date("Y-m-d H:i:s");

$qry = "INSERT INTO `seguimiento` ( `id_contacto`, `cliente`, `asunto`, `descripcion`, `id_categoria`, `status`, `tramitido_al_crm`, `fecha`, `elaborado_por`) 


VALUES (

'$id_contacto',
'$cliente',
 '$asunto',
'$descripcion',
'$id_categoria',
'$status', 
'S',
'$fecha',
'$elaborado_por');";


$resul2 = mysql_query("UPDATE `clientes` SET `verificado`='1' WHERE `id`=".$id_contacto.";");

$resul = mysql_query($qry);








if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}




 





?>