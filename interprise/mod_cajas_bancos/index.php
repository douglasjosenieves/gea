<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
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
	<form id="formulario">

	<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#"><?php echo TITULO ?></a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="../index.php">Panel de controlo</a></li>
					<li class="active">Menu</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline"><?php echo TITULO ?></h2>
					<h3 class="boxHeadlineSub">Proceso</h3>
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
					 =            AQUI VA EL CONTENIDO DEL SITE-            =
					 =====================================================-->
				
<div class="row">

<div class="col-xs-12 col-sm-4 i">
<div class="form-group">
<label>Tipo</label>
<select id="tipo" required name="tipo" class="js-select ">
 
<option value="" >- Seleccione tipo -</option>
<option value="CAJA">CAJA</option>								
<option value="BANCO">BANCO</option>
 



</select>
</div>
</div>

					 
<div class="col-xs-12 col-sm-8">
<div class="form-group">
<label for="basicInput">Descripción</label>
<input type="text" value="<?php echo $data['data'][0]['descripcion'] ?>" required class="form-control" name="descripcion" id="descripcion" placeholder="Descripción">
</div>
</div>
					 	 
</div>		
		<div class="row">
			


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Numero de Cuentas / *Si es un Banco</label>
<input type="text" value="<?php echo $data['data'][0]['numero_cuenta'] ?>"  class="form-control" name="numero_cuenta" id="numero_cuenta" placeholder="Numero de Cuentas / *Si es un Banco">
</div>
</div>




<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Dirección / *Si es un Banco</label>
<input type="text" value="<?php echo $data['data'][0]['direccion'] ?>"  class="form-control" name="direccion" id="direccion" placeholder="Dirección / *Si es un Banco">
</div>
</div>





<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Ejecutivo nombre / *Si es un Banco</label>
<input type="text" value="<?php echo $data['data'][0]['ejecutivo'] ?>"  class="form-control" name="ejecutivo" id="ejecutivo" placeholder="Ejecutivo nombre / *Si es un Banco">
</div>
</div>

</div>	

<div class="row">

<?php if ($_GET['tipo']!='editar'): ?>
	


<div class="col-xs-12 col-sm-6">
<div class="form-group">
<label for="basicInput">Saldo inicial</label>
<input type="number"  value="<?php echo $data['data'][0]['saldo_inicial'] ?>" required class="form-control" name="saldo_inicial" id="saldo_inicial" placeholder="Saldo inicial">
</div>
</div>
<?php endif ?>

				 
<div class="col-xs-12 col-sm-6">
<div class="form-group">
<label for="basicInput">Saldo final</label>
<input type="number" readonly value="<?php echo $data['data'][0]['saldo_final'] ?>" required class="form-control" name="saldo_final" id="saldo_final" placeholder="Saldo final">
</div>
</div>


</div>

<div class="row">
	
<div class="col-xs-12 col-sm-3 i">
<div class="form-group">
<label>Anulado?</label>
<select id="anulado"  required name="anulado" class="js-select ">
 <option value="" >- Select -</option>
 
<option value="0">ACTIVO</option>
<option value="1">ANULADO</option>								

 



</select>
</div>
</div>


</div>
					
			
			<div class="row hidden">
				


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">id_doc</label>
<input type="text" value="0" required class="form-control" name="id_doc" id="id_doc" placeholder="id_doc">
</div>
</div>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">doc</label>
<input type="text" value="SALDO INICIAL" required class="form-control" name="doc" id="doc" placeholder="doc">
</div>
</div>




<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">id_cliente</label>
<input type="text" value="0" required class="form-control" name="id_cliente" id="id_cliente" placeholder="id_cliente">
</div>
</div>



<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">tipo</label>
<input type="text" value="INGRESO" required class="form-control" name="tipo_movimiento" id="tipo_movimiento" placeholder="tipo">
</div>
</div>



 



<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">enc_cliente</label>
<input type="text" value="SALDO INICIAL" required class="form-control" name="enc_cliente" id="enc_cliente" placeholder="enc_cliente">
</div>
</div>



			</div>		
 
				
				</div><!-- box rate -->

<!--====  End of AQUI VA EL CONTENIDO DEL SITE 1.1-  ====-->

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
				 </div> <!-- container -->

<!--====  End of COMANDOS  ====-->
				

				



 <!--====  End of AQUI VA EL CONTENIDO DEL SITE 1.2-  ====-->








				</div> <!-- end container -->
				
				
			
			</div> <!-- end extended -->
			
		</div> <!-- end pageWrap -->
 
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

<script type="text/javascript">
		
$(document).ready(function() {
	$('.cargando').hide();
	$('#tipo').val('<?php echo $data['data'][0]['tipo'] ?>').change();
	$('#anulado').val('<?php echo $data['data'][0]['anulado'] ?>').change();
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

});
/*=====  End of Buscar   ======*/

	</script>
	
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>