
<ul class=""  >
<?php 
require_once __DIR__ . '../../../../db_connect.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 


$texto = $_POST['parametro'];
$index = $_POST['index'];
 
 if ($texto!='') {
 	# code...
 
			
				$i=0;
$resul =  mysql_query("SELECT * FROM  servicios where anulado <> 1 and nombre like '%".$texto."%'");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$opciones['data'][]=$row;
				
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
	
<li  class="active li">




	<a href="#" class="arti st" data-index="<?php echo $index?>" data-id="<?php echo $opciones['data'][$i]['id']?>" data-nombre="<?php echo $opciones['data'][$i]['nombre']?>" data-descripcion="<?php echo $opciones['data'][$i]['descripcion']?>" data-precio="<?php echo $opciones['data'][$i]['precio']?>" >


	<?php echo $opciones['data'][$i]['id'] .' '.$opciones['data'][$i]['nombre'].': '.$opciones['data'][$i]['cantidad']  ?>
		

</a>
	</li>

			 
															
					     
			 
					<?php $i++;  }}?>
					</ul>


 

						
							 
				 