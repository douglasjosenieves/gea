<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../../index.php');
}

require_once '../../db_connect.php';
require_once 'envios/config.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  

$id=$_GET['id'];
 
if (isset($id)) {
	# code...

 $resul =  mysql_query("SELECT * FROM  ".TABLA." where id =$id");
$data = array();
while($row =  mysql_fetch_array($resul) ) {
$data['data'][] = $row;
}
}
$id_cliente = unserialize($data['data'][0]['id_cliente']);
$des_cliente = unserialize($data['data'][0]['des_cliente']);

?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo TITULO ?></title>
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
	<link rel="stylesheet" href="../assets/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="../assets/css/app.min.css">
	
  <script src="../assets/tinymce/tinymce.min.js"></script>
  <script>
 


  </script>

	<link rel="stylesheet" href="../assets/sweetalert/sweetalert-master/dist/sweetalert.css">
	 
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
	<?php  require_once '../header.php'; ?>
	
	<?php  require_once '../tareas-pendientes.php'; ?>
	<!-- Page Wrap -->
	<form id="formulario">
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#"><?php echo TITULO ?></a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="../index.php">Panel de control</a></li>
					<li class="active">Tablas</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline"><?php echo TITULO ?></h2>
					<h3 class="boxHeadlineSub">Datos del contacto</h3>
<div class="row">


<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="referencia">Nº Referencia</label>
<input type="text" readonly value="<?php echo $data['data'][0]['id'] ?>"  required class="form-control" name="referencia" id="referencia" placeholder="Nº Referencia">
</div>
</div>


<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="elaborado_por" id="elaborado_por" placeholder="Elaborado Por:">

<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="editado_por" id="editado_por" placeholder="Elaborado Por:">


<?php require_once '../asesor_funtion.php'; ?>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Usuario:</label>
<input type="text" disabled value="<?php echo nombreAsessor($_SESSION['usuario']['Id'])?>" required class="form-control" name="elaborado" id="elaborado" placeholder="Elaborado:">
</div>
</div>

<div class="col-xs-12 col-sm-4 col-sm-offset-2">
<div class="form-group">
<label for="basicInput">Buscar:</label>
<input type="text" value="<?php echo $data['data'][0]['buscar'] ?>" class="form-control" name="buscar" id="buscar" placeholder="Buscar:" style="background-color: #accead; font-weight: 800;">
</div>

<div >
	<ul id="resultado_busqueda">
		 
	</ul>
</div>
</div>


</div>
					
				 <!--====================================================
					 =            DATOS DEL CONTACTO-            =
					 =====================================================-->
					 
					 <div class="row">
					 	

								<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Contacto Nombre:</label>
											<input type="text" value="<?php echo $data['data'][0]['nombres'] ?>" required class="form-control" name="nombres" id="nombres" placeholder="Nombres:">
																</div>
															</div>
								

								
									<div class="col-xs-12 col-sm-4">
																<div class="form-group">
																	<label for="basicInput">Contacto Apellido:</label>
											<input type="text" value="<?php echo $data['data'][0]['apellidos'] ?>" required class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos:">
																</div>
															</div>



															<div class="row customSelectWrap">
							<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>País</label>
									<select name="pais" id="pais" class="js-select ">
										<option value="" selected>- Select país -</option>
										<option value="PANAMA">Panamá</option>
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
<input type="email" value="<?php echo $data['data'][0]['email'] ?>" required class="form-control" name="email" id="email" placeholder="E-mail:">
</div>
</div>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Teléfono móvil:</label>
<input type="text" value="<?php echo $data['data'][0]['movil'] ?>" required class="form-control" name="movil" id="movil" placeholder="Teléfono móvil:">
</div>
</div>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Fecha de Inicio:</label>
<input type="date" value="<?php echo $data['data'][0]['fecha_nacimiento'] ?>"  class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de inicio:">
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
			<input type="text" value="<?php echo $data['data'][0]['documento'] ?>"  class="form-control"    name="documento" id="documento" placeholder="<?php echo RIF ?>:">
								</div>
							</div>



<div class="col-xs-12 col-sm-8">
<div class="form-group">
<label for="basicInput"> <?php echo TITULO ?>(Nombre)</label>
<input type="text" required  value="<?php echo $data['data'][0]['cliente'] ?>"  class="form-control" name="cliente" id="cliente" placeholder="Nombre">
</div>
</div>



							
							


				

											</div>


											<div class="row">
	
										
					<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label for="basicInput">Teléfono:</label>
							<input type="text" value="<?php echo $data['data'][0]['movil2'] ?>" class="form-control" name="movil2" id="movil2" placeholder="Teléfono:">
												</div>
											</div>

	 
<div class="col-xs-12 col-sm-6">
<div class="form-group">
<label for="basicInput">E-mail:</label>
<input type="email" value="<?php echo $data['data'][0]['email2'] ?>"  class="form-control" name="email2" id="email2" placeholder="E-mail:">
</div>
</div>


							
								

</div>


<div class="row">
	
	<div class="col-xs-12 col-sm-6">
															<div class="form-group">
																<label for="basicInput">Dirección</label>
										<input type="text" value="<?php echo $data['data'][0]['direccion_oficina'] ?>"  class="form-control" name="direccion_oficina"  required  id="direccion_oficina" placeholder="Dirección">
															</div>
														</div>


														<div class="col-xs-12 col-sm-6">
															<div class="form-group">
																<label for="basicInput">Comentarios</label>
										<input type="text" value="<?php echo $data['data'][0]['comentarios'] ?>"  class="form-control" name="comentarios"    id="comentarios" placeholder="Comentarios">
															</div>
														</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-4 i">
<div class="form-group">
<label>Status de obra</label>
<select id="tipos" required name="tipos" class="js-select ">
 
<option value="" >- Select Status -</option>
<option value="EJECUCION">EJECUCIÓN</option>
<option value="TERMINADA">TERMINADA</option>								
<option value="FACTURADA">FACTURADA</option>



</select>
</div>
</div>	




<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Fecha de Terminación</label>
<input type="date" value="<?php echo $data['data'][0]['fecha_terminacion'] ?>" required class="form-control" name="fecha_terminacion" id="fecha_terminacion" placeholder="Fecha de Terminacion">
</div>
</div>




<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Agregue <?php echo TEXTO ?> a <?php echo TITULO; ?></label>
<input style="background-color: #accead; "  type="text" value="<?php echo $data['data'][0]['buscar_cliente'] ?>"  class="form-control" name="buscar_cliente" id="buscar_cliente" placeholder="Agregue! Escriba aqui!">
</div>

<ul id="resultado_busqueda2">
		 
	</ul>
</div>



</div>
<hr>
<div class="row">
	
<div class="box rte box-without-bottom-padding">
					<h2 class="boxHeadline"><?php echo TEXTO ?> Agregados</h2>
					 
					
					<div class="tableWrap table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th># N°</th>
									<th>Id</th>
									<th>Nombre</th>
									<th>Borrar</th>
									 
								</tr>
							</thead>
							<tbody>
								
<?php if (isset($_GET['tipo'])): if ($id_cliente!='') {
	# code...
 ?>

	<?php foreach ($id_cliente as $key => $value) { ?>
	<tr>
									<th># <?php echo $key?></th>
									<th><?php echo $id_cliente[$key]?></th>
									<th><?php echo $des_cliente[$key]?></th>
									<th><a class='text-danger borrar-row delete' href='#'><i class='fa fa-trash'></i> Borrar</a></th>
								<input type='hidden'  name='id_cliente[]' id='id_cliente[]' value='<?php echo $id_cliente[$key]?>'>
								<input type='hidden'  name='des_cliente[]' id='des_cliente[]' value='<?php echo $des_cliente[$key]?>'>	 
								</tr>
<?php }} endif ?>

							
							</tbody>
						</table>
					</div>
				</div>

</div>

<hr>
<div class="row">
	<div class="col-xs-12 col-sm-4 i">
<div class="form-group">
<label>Status</label>
<select id="status" required name="status" class="js-select ">
 
<option value="" >- Select Status -</option>
<option value="ACTIVO">ACTIVO</option>
<option value="INTERESADO">INTERESADO</option>								
<option value="DESCARTADO">DESCARTADO</option>



</select>
</div>
</div>
</div>


</div> <!-- box-->
<!--====  End of DATOS COMERCIALES  ====-->


<!--==============================
=            COMANDOS            =
===============================-->

			<div class="box rte">
			 
<?php 

 if ($_GET['tipo']=='editar') {
 	$botonNombre= 'Editar';
 	$url= 'envios/update.php';
 }

 else{
	$botonNombre= 'Guardar';
	$url= 'envios/insert.php';

 }
 ?>
 

<input type="reset" value="Reset" class="btn bg-gray">
<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary"><?php echo $botonNombre; ?> <i class="fa fa-save"></i></button><span class="cargando"><i class='fa fa-circle-o-notch fa-spin'></i>Loading...</span>
					 



					
				</div> <!-- box  -->

<!--====  End of COMANDOS  ====-->

					




				</div>
				
			
			</div>
		</div>
	<!-- </div> -->
	</form>
	
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
<script src='http:../assets/tinymce/tinymce.min.js'></script>
 

	<div class="visible-xs visible-sm extendedChecker"></div>

<?php  require_once 'controlador/controlador.php'; ?>
	<script type="text/javascript">
		
$(document).ready(function() {
	$('.cargando').hide();
	$('#pais').val('<?php echo $data['data'][0]['pais'] ?>').change();
	$('#status').val('<?php echo $data['data'][0]['status'] ?>').change();
	$('#tipos').val('<?php echo $data['data'][0]['tipos'] ?>').change();
});



$('#formulario').on('submit', function(e){
e.preventDefault();
$('.cargando').show();
console.log('Envio el formulario');

$.ajax({
	 url: '<?php echo $url; ?>',
	type: 'POST',
	//dataType: 'json',
	data: $('#formulario').serialize(),
})
.done(function(data) {
	console.log(data);
	//console.log("success");
if (data==1) {

swal({ 
  title: "Enviado!",
   text: "Se ha procesado con éxito!",
    type: "success" 
  },
  function(){
 $('#formulario')[0].reset();
location.reload();
});

}

 

else {

sweetAlert("Oops...", "Consulte este error con su programador!", "error");
}

 
})
.fail(function(data) {
	console.log("error");
	console.log(data);

})
.always(function() {
	console.log("complete");
	$('.cargando').hide();
});

});

/*========================================
=            Buscar             =
========================================*/


$(document).ready(function() {

$('#buscar').on('keyup',  function(event) {
	event.preventDefault();
	buscarArticulos($(this).val());
	/* Act on the event */
});

$('#buscar_cliente').on('keyup',  function(event) {
	event.preventDefault();
	buscarClientes($(this).val());
	/* Act on the event */
});





function buscarArticulos(texto) {


$.ajax({
	url: 'async/buscar.php',
	type: 'POST',
 
	data: {parametro: texto},
})
.done(function(data) {
	console.log("success");
	$('#resultado_busqueda').html(data);
//alert(data);

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});

	
}

function buscarClientes(texto) {


$.ajax({
	url: '../mod_clientes/async/buscar2.php',
	type: 'POST',
 
	data: {parametro: texto},
})
.done(function(data) {
	console.log("success");
	$('#resultado_busqueda2').html(data);
//alert(data);

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});

	
}


});
/*=====  End of Buscar   ======*/

	</script>
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>