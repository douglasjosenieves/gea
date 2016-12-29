	<?php 
require_once __DIR__ . '../../../../db_connect.php';
 require_once '../envios/config.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 


$texto = $_POST['parametro'];
  if ($texto!='') {
 
			
				$i=0;
$resul =  mysql_query("SELECT * FROM  ".TABLA." where anulado <> 1 and enc_cliente like '%".$texto."%' and saldo <> 0 and anulado <> 1  ");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$opciones['contacto'][]=$row;
				
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
				
	<li><a href="?tipo=editar&id=<?php echo $opciones['contacto'][$i]['id']  ?>"><?php echo 'N°:'.$opciones['contacto'][$i]['id'].'  |  CLIENTE:'.$opciones['contacto'][$i]['enc_cliente'].' | SALDO: '.$opciones['contacto'][$i]['saldo']  ?></a></li>

			 
															
					     
			 
					<?php $i++;  }}?>
					