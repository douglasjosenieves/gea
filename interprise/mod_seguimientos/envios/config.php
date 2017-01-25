<?php 

/*LOS NOMBRE DE LAS TABLAS QUE AFECTAN*/
define('TITULO'," ");  /*TITULO DEL LAS VISTAS */
define('TITULO2'," ");  /*TITULO DEL LAS VISTAS */
define('MODULO'," "); /*PARA EL LINK DE LOS PROCESOS*/
define('TABLA'," "); /*PARA EL LINK DE LOS PROCESOS*/
define('TAXONOMIA',"mod_seguimientos_cat"); /*PARA EL LINK DE LOS PROCESOS*/

 
  function 	categoria($id)
{


 

/*// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); */  

$resul =  mysql_query("SELECT * FROM `taxonomia` where id = $id");

 
$usuario = array();
while($row =  mysql_fetch_array($resul) ) {
$usuario[] = $row;# code...


}

$categoria = $usuario[0]['nombre'] ;

 

return $categoria;

}



 


//echo nombreAsessor(2);
 ?>

?>

 