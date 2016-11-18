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
	<title>Mis seguimientos</title>
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
					<a href="#" title="#">Mis seguimientos</a>
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
									<th># Id</th>
									<th>Cliente</th>
									<th>Fecha ingreso</th>
									<th>Elaborado por</th>
									<th>Fecha modificado</th>
									<th>Asunto</th>
									<th>Categoria</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							

<?php 
require_once '../usuario_funtion.php';
require_once '../status_funtion_abierto_cerrado.php';
$usuario =  $_SESSION['usuario']['Id'] ;
                    $i=0;
                    $resul =  mysql_query("SELECT * FROM `seguimiento` where elaborado_por = $usuario and anulado <> 1   order by id desc");
                    while($row =  mysql_fetch_array($resul) ) {
                    

                                    
                    //echo $row['nombre_opcion'].'<br>';;
                    $contacto['contacto'][]=$row;
                    if ($contacto['contacto'][$i]['status']=='CERRADO') {
                    	$color = 'success';
                    	# code...
                    }
                    else {
                    	$color = 'danger';
                    }
                     
                     ?>





								<tr class="">
									<th scope="row"> <a href="../mod_seguimientos/index.php?editar_caso=<?php echo $contacto['contacto'][$i]['id']?>&id=<?php echo $contacto['contacto'][$i]['id_contacto'] ;?>"> <?php echo $contacto['contacto'][$i]['id']?></a></th>
									<td><?php echo $contacto['contacto'][$i]['cliente']?></td>
									<td><?php echo $contacto['contacto'][$i]['fecha']?></td>
									<td><?php $usuario = usuarioFuntion ($contacto['contacto'][$i]['elaborado_por']); echo ucwords($usuario[0]['nombre'].' '.$usuario[0]['apellido'])?></td>
										<td><?php echo $contacto['contacto'][$i]['editado_fecha']?></td>
									<td><?php echo $contacto['contacto'][$i]['asunto']?></td>
										<td><?php echo $contacto['contacto'][$i]['categoria']?></td>
									<td><?php echo statusColor($contacto['contacto'][$i]['status'])?></td>
								</tr>
							
								 


<?php  $i++ ;}?>


							</tbody>
						</table>
					</div>
				</div>
				</div>
					 
					 
					 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
  
				
				</div>
				</div>
				
			
			</div>
		</div>
	<!-- </div> -->
	
	
	<!-- Search modal -->
<?php require_once '../buscar.php'; ?>

	<!-- JS -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	 
	<script src="../assets/js/select2.min.js"></script>
	<script src="../assets/js/parsley.min.js"></script>
	<script src="../assets/js/throttle-debounce.min.js"></script>
	<script src="../assets/js/jquery.shuffle.min.js"></script>
	<script src="../assets/js/autosize.min.js"></script>
	<script src="../assets/js/raphael-min.js"></script>
	<script src="../assets/js/morris.min.js"></script>
	<script src="../assets/js/Chart.min.js"></script>
	<script src="../assets/js/chartist.min.js"></script>
	<script src="../assets/js/moment.min.js"></script>
	<script src="../assets/js/bootstrap-datepicker.min.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="../assets/js/jquery.fullscreen.min.js"></script>
	<script src="../assets/js/jquery.mask.min.js"></script>
	<script src="../assets/js/charCount.js"></script>
	<script src="../assets/js/bootstrap-maxlength.js"></script>
	<script src="../assets/js/pwstrength-bootstrap-1.2.9.min.js"></script>
	<script src="../assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="../assets/js/bootstrap-typeahead.js"></script>
	<script src="../assets/js/mention.js"></script>
	<script src="../assets/plugins/wysihtml-master/dist/wysihtml.min.js"></script>
	<script src="../assets/plugins/wysihtml-master/dist/wysihtml-toolbar.min.js"></script>
	<script src="../assets/plugins/wysihtml-master/parser_rules/advanced_and_extended.js"></script>
	<script src="../assets/plugins/ckeditor/ckeditor.js"></script>
	<script src="../assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
		<script src="../assets/js/datatables.min.js"></script>
<script src='http:../assets/tinymce/tinymce.min.js'></script>
 

	<div class="visible-xs visible-sm extendedChecker"></div>


	<script type="text/javascript">
$(document).ready(function() {
    $('#tabla').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
	
 

</script>
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>