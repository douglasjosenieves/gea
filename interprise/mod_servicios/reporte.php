<?php session_start();
if (!isset($_SESSION['usuario'] )) {
header('Location: ../../index.php');
}
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'].'asdasdasdsas' ;
require_once '../../db_connect.php';
require_once '../../PHPPaging.lib.php';

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   
?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:29 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>servicios</title>
	<meta name="description" content="...">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Icons -->
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	
	<!-- CSS -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="../assets/css/select2.min.css">
	<link rel="stylesheet" href="../assets/font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/fontello.css">
	<link rel="stylesheet" href="../assets/css/chartist.min.css">
	<link rel="stylesheet" href="../assets/css/datatables.min.css">
	<link rel="stylesheet" href="../assets/css/app.min.css">
	
	<!-- Modernizr -->
	<script src="../assets/js/modernizr-2.8.3.min.js"></script>

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
</head>
<body>



	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Header -->
		<!-- Header -->
	<?php  require_once '../header.php'; ?>
	
	<?php  require_once '../tareas-pendientes.php'; ?>
	<!-- Page Wrap -->

	<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#">servicios </a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Sharpen</a></li>
					<li class="active">Reportes</li>
				</ol>
				
			
				<!-- Data Table -->
				<div class="box box-without-bottom-padding">
					<h2 class="boxHeadline">Table</h2>
					<h3 class="boxHeadlineSub">Reporte</h3>
				 
					
					<div class="tableWrap dataTable table-responsive js-select">
								<table  id="tabla" class="table">
							<thead>
								<tr>
									<th >Id</th>
									<th>Codigo</th>
								   <th>Nombre</th>
									<th>Precio</th>
									<th>Cantidad</th>
									<th>Estado</th>
								 
									<th>Procesos</th>
								
								</tr>
							</thead>
							<tbody>
							

						
					
					
					<!--============================================================
					=            AQUI VA LA CONSULTA A LA BASE DE DATOS            =
					=============================================================-->
					


	                <?php 
require_once '../asesor_funtion.php';
	                  require_once '../status_estado.php';
					$i=0;
					$resul =  mysql_query("SELECT * FROM `servicios` where anulado <> 1");
					while($row =  mysql_fetch_array($resul) ) {
					
									
					// echo $row['nombre'];
					$opciones['opciones'][]=$row;
					
					  
					 ?>
					

					
																		
					
					
					<tr>
						<td> <?php echo $opciones['opciones'][$i]['id']; ?></td>
						<td><?php echo $opciones['opciones'][$i]['codigo']; ?></td>
						<td><?php echo $opciones['opciones'][$i]['nombre']; ?></td>
					    <td><?php echo $opciones['opciones'][$i]['precio']; ?></td>
					    <td><?php echo $opciones['opciones'][$i]['cantidad']; ?></td>
					    <td><?php echo statusestado($opciones['opciones'][$i]['estado']); ?></td>
			 
					    <td>
					    	
					 <!-- Button Extra small -->
						<div class="btn-group">
							<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Procesos <i class="fa fa-chevron-down"></i>
							</button>
							<ul class="dropdown-menu">
								<li><a href="../mod_servicios/index.php?tipo=editar&id=<?php echo $opciones['opciones'][$i]['id']; ?>" title="#"><i class="fa fa-eye"></i> Gestionar</a></li>
							
						
								
							<!-- 	<li><a href="reporte-clientes-excel.php?id=<?php //echo $opciones['opciones'][$i]['id']; ?>" title="Exportar a excel"><i class="fa fa-file-excel-o"></i> Exportar a EXCEL</a></li> -->
							</ul>
						</div>
					  
					     



					    </td>
					</tr>
						<?php $i++;  }?>
					<!--====  End of AQUI VA LA CONSULTA A LA BASE DE DATOS  ====-->
					
					
					
						
						
						
								
								
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Search modal -->
	<div class="modal fade in" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form>
						<input type="text" class="form-control" placeholder="Type search term...">
						<button type="submit" class="btn">Go</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
	<script src="../assets/js/select2.min.js"></script>
	<script src="../assets/js/parsley.min.js"></script>
	<script src="../assets/js/throttle-debounce.min.js"></script>
	<script src="../assets/js/jquery.shuffle.min.js"></script>
	<script src="../assets/js/autosize.min.js"></script>
	<script src="../assets/js/raphael-min.js"></script>
	<script src="../assets/js/morris.min.js"></script>
	<script src="../assets/js/Chart.min.js"></script>
	<script src="../assets/js/chartist.min.js"></script>
	<script src="../assets/js/datatables.min.js"></script>
	<script src="../assets/js/jquery.fullscreen.min.js"></script>
	<script src="../assets/js/app.min.js"></script>

	<div class="visible-xs visible-sm extendedChecker"></div>
<script type="text/javascript">
$(document).ready(function() {
    $('#tabla').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
	
 

</script>
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
</html>