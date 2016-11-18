<?php  

 function 	usuarioFuntion ($id)
{
require_once __DIR__ . '../../db_connect.php';



/*// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); */  

$resul =  mysql_query("SELECT * FROM `usuarios` where id = $id");

 
$usuario = array();
while($row =  mysql_fetch_array($resul) ) {
$usuario[] = $row;# code...


}




return $usuario;

}


//echo nombreAsessor(2);

//$usuario = usuarioFuntion ($contacto['contacto'][$i]['elaborado_por']); echo ucwords($usuario[0]['nombre'].' '.$usuario[0]['apellido'])
 ?>