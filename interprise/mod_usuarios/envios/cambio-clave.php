<?php session_start(); 

require_once __DIR__ . '../../../../db_connect.php';


// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

 
$clave=$_REQUEST['clave'];
$id=$_REQUEST['id'];
 
$clavemd5 = md5($clave); 
//$clave='122';
//$id='1';

 $resul =  mysql_query("UPDATE `usuarios` SET `clave` = '$clavemd5' WHERE `usuarios`.`id` = $id;");

/*=============================================
=            Section comment block            =
=============================================

while($row =  mysql_fetch_array($resul) ) {
$duplicidad = $row['nombre'];
$usuario = $row['usuario'];
$nombre = $row['nombre'];
$apellido = $row['apellido'];
$email = $row['email'];
$id = $row['id'];
$telefono = $row['tel'];
$documento = $row['documento'];
$tipo = $row['tipo'];
$foto = $row['foto'];
$anulado =  $row['anulado'];
 
}


=====  End of Section comment block  ======*/




if ($resul  == TRUE) { echo "true"; } else {echo 'false';} 

  
?>