	 
	<style type="text/css">
		
.i {

	    padding: 10px 10px;
}

	</style>
	<div class="recentTasks">
										<div class="checkboxes checkboxes-sm">
										 
										
									
<?php 		
		
		
		
/*require_once __DIR__ . '../../db_connect.php';
//sleep(2);

// carpeta interprise ../../db_connect.php  ../../../db_connect.php carpeta envios
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fechaphp = date("Y-m-d H:i:s");*/
require_once 'status_funtion_abierto_cerrado.php';

$i = 0;
$resul_seg =  mysql_query("SELECT * FROM seguimiento where anulado <> 1 order by id desc limit 8");
					while($row =  mysql_fetch_array($resul_seg) ) {
					
									
					// echo $row['nombre'];
					$mysql2['seguimiento'][$i]=$row;


 
	

 
	 ?>



	<div class="i">
				<label>
					
					<span><?php echo $mysql2['seguimiento'][$i]['id'].' | '.$mysql2['seguimiento'][$i]['nombres'].' | '.$mysql2['seguimiento'][$i]['asunto'].' | '.statusColor($mysql2['seguimiento'][$i]['status'])  ?></span>
				</label>
			</div>

<?php
 $i++;					
} 
?>
						




				</div>
									</div>								
			