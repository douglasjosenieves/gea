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
	<title>Nota de entrega</title>
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
		<link rel="stylesheet" href="../assets/css/dropzone.css">

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
<form id="formulario">
		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#">Nota de entrega</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="../index.php">Panel de controlo</a></li>
					<li class="active">Menu</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline">Crear</h2>
					<h3 class="boxHeadlineSub">Datos Obligatorios</h3>
<div class="row">


<div class="col-xs-12 col-sm-2">
<div class="form-group">
<label for="referencia">Nº Referencia</label>
<input type="text" readonly required class="form-control" value="<?php echo $data['data'][0]['id'] ?>" name="referencia" id="referencia" placeholder="Nº Referencia">
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
<label for="basicInput">Buscar Cliente:</label>
<input type="text" value="<?php echo $data['data'][0]['buscar'] ?>" class="form-control" name="buscar" id="buscar" placeholder="Buscar:" style="background-color: #accead; font-weight: 800;">
</div>

<div >
	<ul id="resultado_busqueda">
		 
	</ul>
</div>
</div>


</div>
		
		<hr>			
				 <!--====================================================
					 =            AQUI VA EL CONTENIDO DEL SITE-            =
					 =====================================================-->
<div class="row">
					
 <div class="col-xs-12 col-sm-4">
 <div class="form-group">
 <label for="basicInput">Id:</label>
 <input type="text" value="<?php echo $data['data'][0]['id'] ?>" required class="form-control" name="enc_id_cliente" id="enc_id_cliente" placeholder="id:">
 </div>
 </div>
 



<div class="col-xs-12 col-sm-8">
<div class="form-group">
<label for="basicInput">Cliente:</labe8>
<input type="text" value="<?php echo $data['data'][0]['cliente'] ?>" required class="form-control" name="enc_cliente" id="enc_cliente" placeholder="Cliente:">
<div class="input-default-msg"><?php echo $data['data'][0]['direccion_oficina'] ?></div>


<input type="hidden" value="<?php echo $data['data'][0]['direccion_oficina'] ?>" required class="form-control" name="enc_cliente_direccion" id="enc_cliente_direccion" placeholder="Cliente:">
 

<input type="hidden" value="<?php echo $data['data'][0]['documento'] ?>" required class="form-control" name="enc_cliente_documento" id="enc_cliente_documento" placeholder="Cliente:">
 

 <input type="hidden" value="<?php echo $data['data'][0]['movil'] ?>" required class="form-control" name="enc_cliente_tel" id="enc_cliente_tel" placeholder="Cliente:">

 <input type="hidden" value="<?php echo $data['data'][0]['email'] ?>" required class="form-control" name="enc_cliente_email" id="enc_cliente_email" placeholder="Cliente:">

</div>
</div>
 
</div>

      <div class="row">
	                  	
 
 
 
 
 <div class="col-xs-12 col-sm-4">
	                  	<div class="form-group">
	                  	<label for="basicInput">Lugar de Emisión</label>
	                  	<input type="text" value="<?php echo $enc['enc_contacto'][0]['enc_lugar_emision'] ?>" required class="form-control" name="enc_lugar_emision" id="enc_lugar_emision" placeholder="Lugar de Emisión">
	                  	</div>
	                  	</div>



 
<div class="col-xs-12 col-sm-4">
 <div class="form-group">
 <label for="basicInput">Fecha de Emisión</label>
 <input type="date" value="<?php echo $enc['enc_contacto'][0]['enc_fecha_emision'] ?>" required class="form-control" name="enc_fecha_emision" id="enc_fecha_emision" placeholder="Fecha de Emision">
 </div>
 </div>
 
 
 <div class="col-xs-12 col-sm-4">
	                  	<div class="form-group">
	                  	<label for="basicInput">Orden #</label>
	                  	<input type="text" value="<?php echo $enc['enc_contacto'][0]['enc_orden'] ?>" required class="form-control" name="enc_orden" id="enc_orden" placeholder="Orden #">
	                  	</div>
	                  	</div>
 


	                  </div>


 
<div class="row">
 <div class="col-xs-12 col-sm-12">
<div class="form-group">
<label for="textarea-autosize">Comentarios:</label>
<textarea id="enc_comentarios" name="enc_comentarios" class="js-autogrow form-control" placeholder="Comentarios...!" rows="2"><?php echo $enc['enc_contacto'][0]['enc_comentarios'] ?></textarea>
</div>
</div>
</div>	 
					 
 
	


</div> <!-- boxreta -->

	<div class="box rte">
					<h2 class="boxHeadline">Items</h2>
					<h3 class="boxHeadlineSub" id="itemsBuscado"></h3>
<div id="container-items">
<div class="row itemsrow">
	


<div class="col-xs-12 col-sm-3">
<div class="form-group">

<input type="text" readonly value="<?php echo $art['reg'][0]['reg_id'] ?>" required class="form-control reg_id" name="reg_id[]" id="reg_id" placeholder="Id">
</div>
</div>




<div class="col-xs-12 col-sm-6">
<div class="form-group">

<input type="text" name="reg_nombre[]"  autocomplete="off" id="reg_nombre" required  class="form-control buscaritems" />
<input type="hidden" name="reg_descripcion[]"  id="reg_descripcion" required  class="form-control" /> 
<div class="respuestaItems"></div>



</div>
 
</div>





<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="text" value="<?php echo $art['reg'][0]['reg_cantidad'] ?>" required class="form-control" name="reg_cantidad[]" id="reg_cantidad" placeholder="Cantidad">
</div>

</div>

<div class="col-xs-12 col-sm-1">
<div class="form-group">

<div style="margin-top: 15px"><a class="text-danger borrar-row" href="#"><i class="fa fa-trash"></i> Borrar</a></div>
</div>

</div>


</div>

</div><!-- Container Items -->


<button id="agregar-row" type="button" class="btn bg-green">+ Agregar Items</button>
 


				
	</div> <!-- boxreta -->	 


<!--=============================================
=            botones guardar y reset            =
==============================================-->

<div class="box rte">
<input type="reset"  value="Reset" class="btn bg-gray">
 
<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary">Guardar <i class="fa fa-save"></i></button><span class="cargando"><i class='fa fa-circle-o-notch fa-spin'></i>Loading...</span>
</div> <!-- en box rate -->

<!--====  End of botones guardar y reset  ====-->


				
					
				 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
				</div>
				
			
			</div>
			</form>
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
	  <script src="../assets/js/dropzone.js"></script>
<script src='http:../assets/tinymce/tinymce.min.js'></script>
 
 

	<div class="visible-xs visible-sm extendedChecker"></div>


 
<?php  require_once 'controlador/controlador.php'; ?>
 	


<script type="text/javascript">
 
	/*==========================================================
=            AJAX REQUES        =
==========================================================*/
 


$(document).ready(function() {

//enc_lugar_emision


$('#formulario').on('submit',  function(event) {
    event.preventDefault();
 

 $('.reg_id').each(function(idx, el) {
    console.log($(this).val()); 

if ($(this).val() == '') {

alert('No se reconoce un items seleccionado. Verifique el Id de cada uno de los Items!');
defectuoso = true

}
else {
defectuoso = false


}

});

 
if (defectuoso == true) {

return true

 }
 



 


 
//alert('aaa');
$('.cargando').show();
$.ajax({
    url: 'envios/insert.php',
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
   window.location='index.php';
});

}

 

else {

sweetAlert("Oops...", "Consulte este error con su programador!", "error");
}

 


 
})
.fail(function() {
    console.log("error");
sweetAlert("Oops...", "Consulte este error con su programador!", "error");
})
.always(function() {
    console.log("complete");
$('.cargando').hide();

});



});



});

 

</script>

 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>