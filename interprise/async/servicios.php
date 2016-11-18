
				<?php require_once '../../PHPPaging.lib.php';

// connecting to db
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'] ;
require_once '../../db_connect.php';
require_once '../../PHPPaging.lib.php';

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 

 ?>

				<?php 
			
				$i=0;
				$servicios= array();
				$resul =  mysql_query("SELECT * FROM `servicios` where anulado <> 1 ");
				while($row =  mysql_fetch_array($resul) ) {
				
			
				$datos[]= $row;
				
				$i++;
		
				
  }

			


																	
					     
			 
			


 echo json_encode($datos);
				

					?>

					