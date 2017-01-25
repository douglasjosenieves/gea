<?php 
require_once __DIR__ . '../../../../db_connect.php';
// connecting to db
$con = new DB_CONNECT();
require_once '../envios/config.php';
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 


$texto = $_POST['parametro'];
  if ($texto!='') {
 
			
				$i=0;


$resul =  mysql_query("	SELECT * FROM taxonomia a, taxonomia_relacion b where a.id = b.id_taxonomia and b.taxonomia = '".MODULO."' and    a.anulado <> 1 and  a.nombre like '%".$texto."%'  ");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$opciones['contacto'][]=$row;
				
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
				
	<li><a href="?tipo=editar&id=<?php echo $opciones['contacto'][$i]['id']  ?>"><?php echo $opciones['contacto'][$i]['id'].' '.$opciones['contacto'][$i]['nombre']  ?></a></li>

			 
															
					     
			 
					<?php $i++;  }}?>
					