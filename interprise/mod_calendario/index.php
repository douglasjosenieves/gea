<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}

require_once '../../db_connect.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  

$id=$_GET['id'];
 
if (isset($id)) {
	# code...

 $resul =  mysql_query("SELECT * FROM  contactos_web where id =$id");
$data = array();
while($row =  mysql_fetch_array($resul) ) {
$data['data'][] = $row;
}
}



?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Calendario</title>
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
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#">Calendario</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="../index.php">Panel de controlo</a></li>
					<li class="active">Menu</li>
				</ol>
				 <form action="" id="formulario">
				<div class="box rte">
					<h2 class="boxHeadline">Calendario</h2>
					<h3 class="boxHeadlineSub">Agregar</h3>
<div class="row">


<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="referencia">Nº Referencia</label>
<input type="text" readonly required class="form-control" value="<?php echo $data2['data'][0]['id'] ?>" name="referencia" id="referencia" placeholder="Nº Referencia">

</div>
</div>


<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="elaborado_por" id="elaborado_por" placeholder="Elaborado Por:">

 <input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="editado_por" id="editado_por" placeholder="Elaborado Por:">






<?php require_once '../asesor_funtion.php'; ?>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Usuario::</label>
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
					 =            AQUI VA EL CONTENIDO DEL SITE-            =
					 =====================================================-->
					 
	<?php if (isset($id)) { ?>				
<div class="row">
	


	
	<div class="col-xs-12 col-sm-4">
	<div class="form-group">
	<label for="basicInput">Id cliente:</label>
	<input type="text" value="<?php echo $data['data'][0]['id'] ?>" required class="form-control" name="id_contacto" id="id_contacto" placeholder="Id cliente:">
	</div>
	</div>


	
	<div class="col-xs-12 col-sm-8">
	<div class="form-group">
	<label for="basicInput">Cliente:</label>
	<input type="text" value="<?php echo $data['data'][0]['cliente'] ?>" required class="form-control" name="nombre" id="nombre" placeholder="Cliente:">
	</div>
	</div>
	
	
</div>

<?php } ?>	
					 
		<div class="col-xs-12">

								<label for="datepicker-2-input">Consulte día disponible.</label>
								<div id="datepicker-2" class="input-group date">
									<input   class="form-control" id="diaSelect" name="dia" placeholder="Select date" type="date"><span id="consultarDia" class="input-group-addon"><i class="fa fa-search" ></i></span>
								</div>
							</div>

							<div id="agendados"></div>


<div class="row">

<div class="col-xs-6">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Inicio:</label>
            <input type="time" placeholder="hrs:mins" name="start" required  class="form-control" id="recipient-name">
          </div>
</div>
<div class="col-xs-6">
          <div class="form-group">
            <label for="message-text" class="control-label">Final:</label>
             <input type="time" placeholder="hrs:mins" name="end"  required  class="form-control" id="recipient-name">
          </div>
          </div>
        
</div>



<div class="row">
<label for="datepicker-2-input">Tipo.</label>





         <select name="tipo" id="tipo" required class="js-select" style="width:100%;">
								 
										<option value="" >- Seleccione -</option>
										<option value="CITA PRESENCIAL">CITA PRESENCIAL</option>
										<option value="CITA VIRTUAL">CITA VIRTUAL</option>
									<option value="SEGUNDA CITA">SEGUNDA CITA</option>
									<option value="CITA OFICINA ESPANA">CITA OFICINA ESPAÑA</option>		 
								 	<option value="CITA DE SEGUIMIENTO">CITA DE SEGUIMIENTO</option>
								 		<option value="CONTACTO DE CALENDARIO">CONTACTO DE CALENDARIO</option>
									</select>
									<br><br>

									<hr>
<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Titulo:</label>
<input type="text" value="<?php echo $data['data'][0]['titulo'] ?>" required class="form-control" name="titulo" id="titulo" placeholder="Titulo:">
</div>
</div>

<div class="form-group">
<label for="textarea-autosize">Descripción</label>
<textarea id="descripcion" name="descripcion" class="js-autogrow form-control" placeholder="Escriba comentarios!" rows="2" style="overflow: hidden; word-wrap: break-word; height: 74px;"></textarea>
</div>

<input type="hidden" name="id_contacto" value="<?php echo $id ?>">
<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['usuario']['Id']; ?>">
<input type="hidden" name="color" value="<?php echo $_SESSION['usuario']['Color']?>">

						
					
					</div>

				
				</div><!-- box rate -->
				<div class="box rte">
<input type="reset" value="Reset" class="btn bg-gray">
<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary">Guardar <i class="fa fa-save"></i></button><span class="cargando"><i class='fa fa-circle-o-notch fa-spin'></i>Loading...</span>
</div> <!-- en box rate -->
 </form>
				 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
				</div> <!-- end container -->
				
				
			
			</div> <!-- end extended -->
			
		</div> <!-- end pageWrap -->
 
	
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


	<script type="text/javascript">
		

		/*====================================
		=            Agendar cita            =
		====================================*/
		
		$(document).ready(function() {
	
$('.cargando').hide();
$('#formulario').on('submit',  function(event) {
	event.preventDefault();
	$('.cargando').hide();
$('#agendar').button('loading');
 $('.cargando').show();
	$.ajax({
		url: 'envios/calendario-insert.php',
		type: 'POST',
 
		data: $('#formulario').serialize(),
	})
	.done(function(data) {
		console.log("success");
		console.log(data);

    if (data==1) {

swal({ 
  title: "Enviado!",
   text: "Se ha procesado con éxito!",
    type: "success" 
  },
  function(){
 $('#formulario')[0].reset();
 

location.href="<?php echo BASE_URL ?>mod_calendario/index.php";
});

}

 

else {

sweetAlert("Oops...", "Consulte este error con su programador!", "error");
}




	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
		$('#agendar').button('reset');
		$('.cargando').hide();
	});
	
	/* Act on the event */
});




$('#consultarDia').on('click',  function(event) {
	event.preventDefault();
		$('#agendados').html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>Cargando...');
	/* Act on the event */
var diaSelect = $('#diaSelect').val();

 if (diaSelect == '') {
 	alert('Coloque una fecha a consultar!' );
 $('#agendados').html('');
 return true;
}


 $('.cargando').show();

$.ajax({
	url: 'async/calendarioDiasDisponible.php',
	type: 'POST',

	data: {dia: diaSelect},
})
.done(function(data) {
	console.log("success");
		console.log(data);
		$('#agendados').html(data);

		$('#agendar').removeAttr('disabled');
$('')

})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
	$('.cargando').hide();
});


});

});

		
		/*=====  End of Agendar cita  ======*/


		/*========================================
=            Buscar             =
========================================*/


$(document).ready(function() {

$('#buscar').on('keyup',  function(event) {
	event.preventDefault();
	buscarArticulos($(this).val());
	/* Act on the event */
});





function buscarArticulos(texto) {
$('.cargando').show();

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

	$('.cargando').hide();
});

	
}

});
/*=====  End of Buscar   ======*/
		
	</script>
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>