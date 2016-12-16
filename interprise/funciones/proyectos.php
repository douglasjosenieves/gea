<?php  

 function 	proyectos($id)
{
 
  

$resul =  mysql_query("SELECT * FROM `obras` where id = $id");

 
$usuario = array();
while($row =  mysql_fetch_array($resul) ) {
$usuario[] = $row;# code...


}

$userNombre = $usuario[0]['cliente'];

$user =  strtoupper($userNombre);

if ($user=='') {
	$user = 'N/A';
}
return $user;

}


//echo nombreAsessor(2);
 ?>