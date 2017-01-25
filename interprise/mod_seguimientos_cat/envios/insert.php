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
$upd_fecha = date("Y-m-d H:i:s");
$ins_fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
//$pre_ = serialize($pre_);
extract ($_POST);

 function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}


$slug = slugify($nombre);
 

 $qry ="INSERT INTO ".TABLA."
( 
`nombre`,
`slug`,
`term_group`,
`descripcion`,
`ins_user`,
 
`ins_fecha`,
 
`ext1`,
`ext2`,
`ext3`,
`ext4`,
`ext5`,
`anulado`)
VALUES
(
 
'$nombre',
'$slug',
'$term_group',
'$descripcion',
'$ins_user',
 
'$ins_fecha',
 
'$ext1',
'$ext2',
'$ext3',
'$ext4',
'$ext5',
'$anulado'
);
";

$resul = mysql_query($qry);
$id_taxonomia= mysql_insert_id();
$taxonomia = MODULO;
$contador = '0'; 
$qry2 = "INSERT INTO ".TABLA2."
( 
`id_taxonomia`,
`taxonomia`,
`descripcion`,
`padre`,
`contador`,
`ins_user`,
`ins_fecha`,
`ext1`,
`ext2`,
`ext3`,
`ext4`,
`ext5`,
`anulado`)
VALUES
(

'$id_taxonomia',
'$taxonomia',
'$descripcion',
'$padre',
'$contador',
'$ins_user',

'$ins_fecha',

'$ext1',
'$ext2',
'$ext3',
'$ext4',
'$ext5',
'$anulado'
);
";

$resul += mysql_query($qry2);

 

if ($resul==2) {
  
echo $resul.'-'.$id_taxonomia;
}
else
{
echo 'false'.$qry2;
}
die;
 





?>