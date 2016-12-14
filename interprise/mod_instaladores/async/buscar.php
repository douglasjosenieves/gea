<?php 
require_once __DIR__ . '../../../../db_connect.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 


$texto = $_POST['parametro'];
  if ($texto!='') {
 
			
				$i=0;
$resul =  mysql_query("SELECT * FROM  instaladores where anulado <> 1 and cliente like '%".$texto."%' OR nombres like '%".$texto."%'  OR  apellidos like '%".$texto."%'  ");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$opciones['contacto'][]=$row;
				
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
				
	<li><a href="?tipo=editar&id=<?php echo $opciones['contacto'][$i]['id']  ?>"><?php echo $opciones['contacto'][$i]['id'].' '.$opciones['contacto'][$i]['nombres'].' '.$opciones['contacto'][$i]['apellidos']  ?></a></li>

			 
															
					     
			 
					<?php $i++;  }}?>
					