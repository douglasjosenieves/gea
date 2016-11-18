<?php session_start(); error_reporting(-1);
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'].'asdasdasdsas' ;
require_once '../db_connect.php';
require_once '../PHPPaging.lib.php';

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
	<title>Admon contacto</title>
	<meta name="description" content="...">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Icons -->
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	
	<!-- CSS -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="assets/font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/fontello.css">
	<link rel="stylesheet" href="assets/css/chartist.min.css">
	<link rel="stylesheet" href="assets/css/datatables.min.css">
	<link rel="stylesheet" href="assets/css/app.min.css">
	
	<!-- Modernizr -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/sweetalert/sweetalert-master/dist/sweetalert.css">
</head>
<body>

	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<!-- Header -->
	<?php  require_once 'header.php'; ?>
	
	<?php  require_once 'tareas-pendientes.php'; ?>
	<!-- Page Wrap -->
	<div class="pageWrap">

		<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#">Administración de contacto </a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Sharpen</a></li>
					<li class="active">Reporte</li>
				</ol>
				
			
				<!-- Data Table -->
				<div class="box box-without-bottom-padding">
					<h2 class="boxHeadline">Tabla</h2>
					<h3 class="boxHeadlineSub">Contacto</h3>
				 
					
					<div class="tableWrap dataTable table-responsive js-select">
								<table  id="tabla" class="table">
			 
							<thead>
								<tr>
									<th >Id</th>
									<th>Nombre</th>
										<th>Apellido</th>
									<th>Asesor</th>
									<th>Anulado</th>
									
								 
								
								</tr>
							</thead>
							<tbody>
							

						
					
					
					<!--============================================================
					=            AQUI VA LA CONSULTA A LA BASE DE DATOS            =
					=============================================================-->
					


	                <?php 

			
$v=0;
	/*<option value="ESPANA">España</option>*/
$teleo ='';
$teleoid =array();
				$resulv =  mysql_query("SELECT * FROM usuarios where anulado <> 1 and cargo = 'teleoperador' ");
				while($rowv =  mysql_fetch_array($resulv) ) { 
$teleo .= '<option value="';
$teleo .= $rowv['id'];
$teleo .= '">';
$teleo .= strtoupper($rowv['nombre'].' '.$rowv['apellido']);
$teleo .= '</option>';
$teleoid[] = $rowv['id'];

            
            //$teleoperador['teleoperador'][]=$row;
					$v++;}




require_once 'asesor_funtion.php';


	                  require_once 'status_funtion.php';
					$i=0;
					$resul =  mysql_query("SELECT * FROM `contactos_web` order by id desc ");
					while($row =  mysql_fetch_array($resul) ) {
					
									
					// echo $row['nombre'];
					$opciones['opciones'][]=$row;
					
					  
					 ?>
					

				
																		
					
					
					<tr>
						<td> <?php echo $opciones['opciones'][$i]['id']; ?></td>
						<td><?php echo  $opciones['opciones'][$i]['nombres']; ?></td>
						<td><?php echo $opciones['opciones'][$i]['apellidos']; ?></td>
					    

					
					    <td>

  <?php $idElaborabo =  $opciones['opciones'][$i]['elaborado_por']; ?>
	<select  name="operador[]"  data-id="<?php echo $opciones['opciones'][$i]['id']; ?>"  class="js-select operador asesor">
										<option  value="<?php echo $idElaborabo ?>" >- <?php echo nombreAsessor($idElaborabo);?>-</option>
										<option value="website">- website-</option>
										<?php echo 	$teleo  ?>
										
								 
									</select>

					  
					    	




					    </td>
					       



					        <td >


					    <?php 
					    $anulado = $opciones['opciones'][$i]['anulado']; 
					   // echo $anulado;
if ($anulado=='1') {
	$checked ='checked';
	
}
else
{
$checked ='';

}

					    ?>
							<div class="row checkboxes">
							<label>
							<input type="checkbox"  class="anulados" data-id="<?php echo $opciones['opciones'][$i]['id']; ?>" <?php echo $checked?> >
							<span>Anulado</span>
							</label>
							</div>

					    	

					    </td>
					</tr>
						<?php $i++;  }?>
					<!--====  End of AQUI VA LA CONSULTA A LA BASE DE DATOS  ====-->
					
					
					
						
						
						
								
								
								
							</tbody>
						</table>
					</div>
					 </div>
					 
					 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
  
				
				</div>
				</div>
				
			
			</div>
		</div>
	<!-- </div> -->
	
	
	<!-- Search modal -->
<?php //require_once 'buscar.php'; ?>

	<!-- JS -->
<!-- JS -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/parsley.min.js"></script>
	<script src="assets/js/throttle-debounce.min.js"></script>
	<script src="assets/js/jquery.shuffle.min.js"></script>
	<script src="assets/js/autosize.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/chartist.min.js"></script>
	<script src="assets/js/datatables.min.js"></script>
	<script src="assets/js/jquery.fullscreen.min.js"></script>
	<script src="assets/js/app.min.js"></script>
		<script src="assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>

	<div class="visible-xs visible-sm extendedChecker"></div>
<script type="text/javascript">


/*$(document).ready(function() {
    $('#tabla').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );*/
	 
 


$(document).ready(function() {

console.log('Admin que mas');

$('.asesor').on('change', function(event) {
	event.preventDefault();
	/* Act on the event */

var Self = $(this);
 
var id = Self.data('id');
var val = Self.val();
cambiarDeAsesor(id , val);

console.log(id+''+val);

});



$('.anulados').on('change', function(event) {
	event.preventDefault();
	/* Act on the event */

var Self = $(this);
 
var id = Self.data('id');
var val = Self.val();

  if(Self.is(':checked')) {  
          val = 1;  
        } else {  
            val = 0; 
        } 


cambiarAnulado(id , val);

console.log(id+''+val);

});


function cambiarDeAsesor(idcontacto, elaborado) {

$.ajax({
	url: 'envios/admonContacto.php',
	type: 'POST',

	data: {tipo:'asesor', id:idcontacto, elaborado_por:elaborado },
})
.done(function(data) {
	console.log("success");
if (data ==1) {

//alert(data);
swal({ 
  title: "Good job! ",
   text: "Cambio de asesor realizado con éxito!",
    type: "success" 
  },
  function(){

//location.reload();
});

}

else{
alert("Error 401 comunique al departamento de sistemas!")

}

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});



}


function cambiarAnulado(idcontacto, elaborado) {

$.ajax({
	url: 'envios/admonContacto.php',
	type: 'POST',

	data: {tipo:'anulado', id:idcontacto, anulado:elaborado },
})
.done(function(data) {
	console.log("success");
if (data ==1) {


swal({ 
  title: "Good job! ",
   text: "Cambio de status anulado con éxito!",
    type: "success" 
  },
  function(){

//location.reload();
});

}

else{
alert("Error 401 comunique al departamento de sistemas!")

}

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});



}




});

</script>
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>