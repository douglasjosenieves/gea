
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
				$resul =  mysql_query("SELECT * FROM `contactos_web` where anulado <> 1 and elaborado_por ='website'");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$opciones['contacto'][]=$row;
				
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
				


				<li>
									<a href="#" title="#" class="clearfix">
										<span class="pull-left"><i class="zmdi zmdi-accounts-add zmdi-hc-fw icon"></i> <span class="label label-info">Nuevo</span> <?php echo $opciones['contacto'][$i]['nombres']  ?></span>
										<span class="pull-right info"><?php echo $opciones['contacto'][$i]['fecha']  ?></span>
									</a>
								</li>



																	
					     
			 
					<?php $i++;  }?>
						<li>
									<a href="#" title="#" class="clearfix text-center">
										<i class="zmdi zmdi-plus-square icon"></i> See all
									</a>
								</li>