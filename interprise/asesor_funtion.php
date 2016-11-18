<?php  

 function 	nombreAsessor($id)
{
require_once __DIR__ . '../../db_connect.php';

if ($id=='website') {
$user = 'website';	# code...
}

else {

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

$userNombre = $usuario[0]['nombre'].' '.$usuario[0]['apellido'];

$user =  strtoupper($userNombre);
}

return $user;

}


//echo nombreAsessor(2);
 ?>