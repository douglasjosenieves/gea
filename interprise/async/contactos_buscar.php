
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

$cliente = $_POST['nombre'];
//echo $cliente;
 ?>

				<?php 
			
				$i=0;
				$resul =  mysql_query("SELECT *, CONCAT(id,' ',nombres,' ',apellidos) as nombre_completo FROM `contactos_web`  where nombres 
					like '%".$cliente."%' OR apellidos like '%".$cliente."%' and anulado <> 1 ");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$opciones['contacto'][]=$row;
				
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
				


				<li>
									<a href="?id=<?php echo $opciones['contacto'][$i]['id']  ?>" title="#" class="clearfix">
										 <?php echo $opciones['contacto'][$i]['nombre_completo']  ?>
										
									</a>
								</li>



																	
					     
			 
					<?php $i++;  }?>
					