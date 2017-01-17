<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}

require_once '../db_connect.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  




?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Clientes</title>
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
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="assets/css/app.min.css">
	
  <script src="../assets/tinymce/tinymce.min.js"></script>
  <script>
 


  </script>

	<link rel="stylesheet" href="assets/sweetalert/sweetalert-master/dist/sweetalert.css">
	 
	<!-- Modernizr -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<!-- Header -->
	<?php  require_once 'header.php'; ?>
	
	<?php  require_once 'tareas-pendientes.php'; ?>
	<!-- Page Wrap -->
	<form id="formulario">
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#">Clientes</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Sharpen</a></li>
					<li class="active">Tablas</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline">Clientes</h2>
					<h3 class="boxHeadlineSub">Datos del contacto</h3>
<div class="row">


<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="referencia">Nº Referencia</label>
<input type="text" readonly required class="form-control" name="referencia" id="referencia" placeholder="Nº Referencia">
</div>
</div>




<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="editado_por" id="editado_por" placeholder="Elaborado Por:">


<?php require_once 'asesor_funtion.php'; ?>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Elaborado:</label>
<input type="text" disabled value="<?php echo nombreAsessor($_SESSION['usuario']['Id'])?>" required class="form-control" name="elaborado" id="elaborado" placeholder="Elaborado:">
</div>
</div>


</div>
					
				 <!--====================================================
					 =            DATOS DEL CONTACTO-            =
					 =====================================================-->
					 
					 <div class="row">
					 	

								<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Nombres:</label>
											<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['nombres'] ?>" required class="form-control" name="nombres" id="nombres" placeholder="Nombres:">
																</div>
															</div>
								

								
									<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Apellidos:</label>
											<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['apellidos'] ?>" required class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos:">
																</div>
															</div>



															<div class="row customSelectWrap">
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>País</label>
									<select name="pais" class="js-select ">
										<option disabled selected>- Select país -</option>
										<option value="VENEZUELA">Venezuela</option>
										<option value="ESPANA">España</option>
											<option value="USA">Usa</option>
											<option value="OTRO">Otro</option>
								 
									</select>
								</div>
							</div></div>


							</div>


<div class="row">



<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">E-mail:</label>
<input type="email" value="<?php echo $ficha['ficha_contacto'][0]['email'] ?>" required class="form-control" name="email" id="email" placeholder="E-mail:">
</div>
</div>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Teléfono móvil:</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['movil'] ?>" required class="form-control" name="movil" id="movil" placeholder="Teléfono móvil:">
</div>
</div>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Fecha de nacimiento:</label>
<input type="date" value="<?php echo $ficha['ficha_contacto'][0]['fecha_nacimiento'] ?>"  class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de nacimiento:">
</div>
</div>

</div>
			 


					
				
				
				</div>  <!--  boxrate -->


<!--=======================================
=            DATOS COMERCIALES            =
========================================-->

<div class="box rte">
 <h3 class="boxHeadlineSub">Datos comerciales</h3>
<div class="row">
						


	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput"><?php echo RIF ?>:</label>
			<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['documento'] ?>"  class="form-control" name="documento" id="documento" placeholder="<?php echo RIF ?>:">
								</div>
							</div>



<div class="col-xs-12 col-sm-8">
<div class="form-group">
<label for="basicInput">Nombre del Cliente Fiscal</label>
<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['cliente'] ?>"  class="form-control" name="cliente" id="cliente" placeholder="Nombre del Cliente Fiscal">
</div>
</div>



							
							


				

											</div>


											<div class="row">
	
										
					<div class="col-xs-12 col-sm-4">
												<div class="form-group">
													<label for="basicInput">Teléfono de oficina:</label>
							<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['telefono_oficina'] ?>" class="form-control" name="telefono_oficina" id="telefono_oficina" placeholder="Teléfono de oficina:">
												</div>
											</div>

	 



							
								<div class="col-xs-12 col-sm-8">
															<div class="form-group">
																<label for="basicInput">Dirección de oficina</label>
										<input type="text" value="<?php echo $ficha['ficha_contacto'][0]['direccion_oficina'] ?>"  class="form-control" name="direccion_oficina" id="direccion_oficina" placeholder="Dirección de oficina">
															</div>
														</div>

</div>


</div> <!-- box-->
<!--====  End of DATOS COMERCIALES  ====-->


<!--==============================
=            COMANDOS            =
===============================-->

			<div class="box rte">
			 

 

<input type="reset" value="Reset" class="btn bg-gray">
<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
					 



					
				</div> <!-- box  -->

<!--====  End of COMANDOS  ====-->

					




				</div>
				
			
			</div>
		</div>
	<!-- </div> -->
	</form>
	
	<!-- Search modal -->
<?php require_once 'buscar.php'; ?>

	<!-- JS -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	 
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/parsley.min.js"></script>
	<script src="assets/js/throttle-debounce.min.js"></script>
	<script src="assets/js/jquery.shuffle.min.js"></script>
	<script src="assets/js/autosize.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/chartist.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/jquery.fullscreen.min.js"></script>
	<script src="assets/js/jquery.mask.min.js"></script>
	<script src="assets/js/charCount.js"></script>
	<script src="assets/js/bootstrap-maxlength.js"></script>
	<script src="assets/js/pwstrength-bootstrap-1.2.9.min.js"></script>
	<script src="assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/js/bootstrap-typeahead.js"></script>
	<script src="assets/js/mention.js"></script>
	<script src="assets/plugins/wysihtml-master/dist/wysihtml.min.js"></script>
	<script src="assets/plugins/wysihtml-master/dist/wysihtml-toolbar.min.js"></script>
	<script src="assets/plugins/wysihtml-master/parser_rules/advanced_and_extended.js"></script>
	<script src="assets/plugins/ckeditor/ckeditor.js"></script>
	<script src="assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
	<script src="assets/js/app.min.js"></script>
<script src='http:../assets/tinymce/tinymce.min.js'></script>
 

	<div class="visible-xs visible-sm extendedChecker"></div>


	<script type="text/javascript">
		

$('#formulario').on('submit', function(e){
e.preventDefault();
$('#boton').button('loading');
console.log('Envio el formulario');

$.ajax({
	url: 'envios/form-fichas-contacto-insert-base.php',
	type: 'POST',
	//dataType: 'json',
	data: $('#formulario').serialize(),
})
.done(function(data) {
	console.log(data);
	//console.log("success");
if (data == 'true') {
document.getElementById("formulario").reset();

 
  $('#img :input').remove();

swal({ 
  title: "Good job!",
   text: "You clicked the button!",
    type: "success" 
  },
  function(){
   location.reload();
   // window.location.href = 'login.html';
});

}
else{

sweetAlert("Oops...", "Something went wrong!", "error");
}
//swal("Good job!", "You clicked the button!", "success");
//location.reload();
})
.fail(function(data) {
	console.log("error");
	console.log(data);

})
.always(function() {
	console.log("complete");
	$('#boton').button('reset');
});

});


	</script>
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>