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

 $resul =  mysql_query("SELECT * FROM  ".TABLA6." where id =$id");
$data = array();
while($row =  mysql_fetch_array($resul) ) {
$data['data'][] = $row;
}
}

?>


<!--===========================================================
=            PARA CUANDO SE IMPORTE UNA COTIZACION            =
============================================================-->
<?php 
$importar = $_GET['importar'];
$id_cot = $_GET['id_cot'];
if ($importar == 'si') {
	# code...

$i=0;
$resul =  mysql_query("SELECT * FROM ".TABLA_IMPORTA." WHERE id=$id_cot");
while($row =  mysql_fetch_array($resul) ) {
$import['import'][]=$row;
}

//echo $import['import'][0]['enc_cliente'];

$importada =  " | Documento Importado ".TABLA_IMPORTA.": N°".$id_cot." ".$import['import'][0]['enc_cliente'];
$enc_fecha_emision= $import['import'][0]['enc_fecha_emision'];
$enc_lugar_emision= $import['import'][0]['enc_lugar_emision'];
$enc_orden= $import['import'][0]['enc_orden'];
$enc_comentarios= $import['import'][0]['enc_comentarios'];
$ext1= $import['import'][0]['ext1'];
 
$reg_id= $import['import'][0]['reg_id'];
$reg_nombre= $import['import'][0]['reg_nombre'];
$reg_descripcion= $import['import'][0]['reg_descripcion'];
$reg_cantidad= $import['import'][0]['reg_cantidad'];
$reg_und_med= $import['import'][0]['reg_und_med'];
$reg_stock= $import['import'][0]['reg_stock'];
$reg_precio= $import['import'][0]['reg_precio'];
$reg_tax= $import['import'][0]['reg_tax'];
$reg_tax_monto= $import['import'][0]['reg_tax_monto'];
$reg_subtotal= $import['import'][0]['reg_subtotal'];
$imagenes= $import['import'][0]['imagenes'];

$reg_id = unserialize($reg_id);
$reg_nombre = unserialize($reg_nombre);
$reg_descripcion = unserialize($reg_descripcion);
$reg_cantidad = unserialize($reg_cantidad);
$reg_und_med = unserialize($reg_und_med);
$reg_stock = unserialize($reg_stock);
$reg_precio = unserialize($reg_precio);
$reg_tax = unserialize($reg_tax);
$reg_tax_monto = unserialize($reg_tax_monto);
$reg_subtotal = unserialize($reg_subtotal);
$imagenes = unserialize($imagenes);
}

 ?>


<!--====  End of PARA CUANDO SE IMPORTE UNA COTIZACION  ====-->

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
					<a href="#" title="#"><?php echo TITULO." ".$importada ?></a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="../index.php">Panel de control</a></li>
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
<label for="basicInput">Buscar <?php echo TITULO3 ?>:</label>
<input type="text" autocomplete="off" value="<?php echo $data['data'][0]['buscar'] ?>" class="form-control" name="buscar" id="buscar" placeholder="Buscar:" style="background-color: #accead; font-weight: 800;">
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
					
 <div class="col-xs-12 col-sm-2">
 <div class="form-group">
 <label for="basicInput">Id:</label>
 <input type="text" readonly="true" value="<?php echo $data['data'][0]['id'] ?>" required class="form-control" name="enc_id_cliente" id="enc_id_cliente" placeholder="id:">
 </div>
 </div>
 


<div class="col-xs-12 col-sm-3">
<div class="form-group">
<label for="basicInput"><?php echo RIF  ?></label>
<input type="text" readonly="true" value="<?php echo $data['data'][0]['documento'] ?>" required class="form-control" name="enc_cliente_documento" id="enc_cliente_documento" placeholder="<?php echo RIF  ?>">
</div>
</div>



<div class="col-xs-12 col-sm-7">
<div class="form-group">
<label for="basicInput"><?php echo TITULO3 ?>:</labe8>
<input type="text" readonly="true" value="<?php echo $data['data'][0]['cliente'] ?>" required class="form-control" name="enc_cliente" id="enc_cliente" placeholder="<?php echo TITULO3 ?>:">
<div class="input-default-msg"><?php echo $data['data'][0]['direccion_oficina'] ?></div>


<input type="hidden" value="<?php echo $data['data'][0]['direccion_oficina'] ?>" required class="form-control" name="enc_cliente_direccion" id="enc_cliente_direccion" placeholder="Cliente:">
 

 
 

 <input type="hidden" value="<?php echo $data['data'][0]['movil'] ?>" required class="form-control" name="enc_cliente_tel" id="enc_cliente_tel" placeholder="Cliente:">

 <input type="hidden" value="<?php echo $data['data'][0]['email'] ?>" required class="form-control" name="enc_cliente_email" id="enc_cliente_email" placeholder="Cliente:">

</div>
</div>
 
</div>

      <div class="row">
	                  	
 
 
 
 
 <div class="col-xs-12 col-sm-4">
	                  	<div class="form-group">
	                  	<label for="basicInput">Lugar de Emisión</label>
	                  	<input type="text" value="<?php echo $enc_lugar_emision ?>" required class="form-control" name="enc_lugar_emision" id="enc_lugar_emision" placeholder="Lugar de Emisión">
	                  	</div>
	                  	</div>



 
<div class="col-xs-12 col-sm-4">
 <div class="form-group">
 <label for="basicInput">Fecha de Emisión</label>
 <input type="date" value="<?php echo $enc_fecha_emision ?>" required class="form-control" name="enc_fecha_emision" id="enc_fecha_emision" placeholder="Fecha de Emision">
 </div>
 </div>
 
 <div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Fecha de Vencimiento</label>
<input type="date" value="<?php echo $ficha['ficha_contacto'][0]['enc_fecha_vencimiento'] ?>"  class="form-control" name="enc_fecha_vencimiento" id="enc_fecha_vencimiento" placeholder="Fecha de Vencimiento">
</div>
</div>
 



	                  </div>


<!-- informacion adicional opcional -->
<div class="row">
	
<!--======================================================
=            Buscar lista en la base de datos            =
=======================================================-->
<?php 
			
$v=0;
$dato ='';
$datoid =array();
$resulv =  mysql_query("SELECT * FROM obras where anulado <> 1");
while($rowv =  mysql_fetch_array($resulv) ) { 
$dato .= '<option value="';
$dato .= $rowv['id'];
$dato .= '">';
$dato .= strtoupper($rowv['cliente']);
$dato .= '</option>';
$datoid[] = $rowv['id'];
$v++;}
?>

	
<!--====  End of Buscar lista en la base de datos  ====-->
		
<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Proyecto:</label>

<select required id="ext1" name="ext1" data-id=""  class="js-select">
<option  value="" >- Seleccionar -</option>
<?php echo 	$dato  ?>
</select>	

</div>
</div>





<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Descuento Monto <?php echo MONEDA ?></label>
<input type="number" step="0.01"  value="<?php echo $ficha['ficha_contacto'][0]['descuento'] ?>"  class="form-control" name="descuento" id="descuento" placeholder="Descuento Monto <?php MONEDA ?>">
</div>
</div>


 <div class="col-xs-12 col-sm-4">
	                  	<div class="form-group">
	                  	<label for="basicInput">Orden #</label>
	                  	<input type="text" value="<?php echo $enc_orden ?>"  class="form-control" name="enc_orden" id="enc_orden" placeholder="Orden #">
	                  	</div>
	                  	</div>
 
</div>





<!-- informacion adicional opcional -->
 
<div class="row">
 <div class="col-xs-12 col-sm-12">
<div class="form-group">
<label for="textarea-autosize">Comentarios:</label>
<textarea id="enc_comentarios" name="enc_comentarios" class="js-autogrow form-control" placeholder="Comentarios...!" rows="2"><?php echo $enc_comentarios ?></textarea>
</div>
</div>
</div>	 
					 
 
	


</div> <!-- boxreta -->

	<div class="box rte">
					<h2 class="boxHeadline">Items</h2>
					<h3 class="boxHeadlineSub" id="itemsBuscado"></h3>
<div id="container-items">


<!--====================================================
=            PARA IMPORTAR AQUI VA EL BUCLE            =
=====================================================-->


<?php 

if (isset($importar)) {
	require_once 'items_import.php';
} else {



 

 	?>


<div class="row itemsrow">
	


<div class="col-xs-12 col-sm-1">
<div class="form-group">

<input type="text" readonly value="<?php echo $art['reg'][0]['reg_id'] ?>" required class="form-control reg_id" name="reg_id[]" id="reg_id" placeholder="Id">
</div>
</div>




<div class="col-xs-12 col-sm-4">
<div class="form-group">

<input type="text" name="reg_nombre[]"  autocomplete="off" id="reg_nombre" required  class="form-control buscaritems" />
<input type="hidden" name="reg_descripcion[]"  id="reg_descripcion" required  class="form-control" /> 
<div class="respuestaItems"></div>



</div>
 
</div>





<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="number" value="<?php echo $art['reg'][0]['reg_cantidad'] ?>" required class="form-control cantidad" name="reg_cantidad[]" id="reg_cantidad" placeholder="Cantidad">

<input type="hidden" value="<?php echo $art['reg'][0]['und_med'] ?>" required class="form-control" name="reg_und_med[]" id="und_med" placeholder="und_med">

<input type="hidden" value="<?php echo $art['reg'][0]['stock'] ?>" required class="form-control" name="reg_stock[]" id="stock" placeholder="stock">


<input type="hidden" value="<?php echo $art['reg'][0]['tax'] ?>" required class="form-control tax" name="reg_tax[]" id="tax" placeholder="tax">

</div>

</div>

<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="number" step="0.01" value="<?php echo $art['reg'][0]['reg_precio'] ?>" required class="form-control precio" name="reg_precio[]" id="reg_precio" placeholder="Precio">
<div class="textinf  etiqueta_tax"><?php  echo IVA ?>: 0</div>

</div>

</div>



<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="text" value="<?php echo $art['reg'][0]['reg_subtotal'] ?>"  readonly  class="form-control subtotal"  name="reg_subtotal[]" id="reg_subtotal" placeholder="subtotal">
<div class="textinf  subtotalmastax"><?php  echo IVA ?>: <span class="totalcontax"></span> | <span class="totalcontax2"></span></div>



<input type="hidden" data-iva="" value="<?php echo $art['reg'][0]['reg_tax_monto'] ?>"  readonly  class="form-control reg_tax_monto"  name="reg_tax_monto[]" id="reg_tax_monto" placeholder="reg_tax_monto">

<input type="hidden" value="<?php echo $art['reg'][0]['reg_subtotal_con_tax'] ?>"  readonly  class="form-control reg_subtotal_con_tax"  name="reg_subtotal_con_tax[]" id="reg_subtotal_con_tax" placeholder="reg_subtotal_con_tax">


</div>
</div>



<div class="col-xs-12 col-sm-1">
<div class="form-group">

<div style="margin-top: 15px"><a class="text-danger borrar-row" href="#"><i class="fa fa-trash"></i> Borrar</a></div>
</div>

</div>


</div>
<?php } ?>
<!--====  End of PARA IMPORTAR AQUI VA EL BUCLE  ====-->

</div><!-- Container Items -->

<div class="hidden">
<input type="text" value="" readonly class="form-control"  name="total_parcial" id="total_parcial" placeholder="total_parcial" style="font-weight: bold;">
<input type="text" value="" readonly  class="form-control"  name="total_tax" id="total_tax" placeholder="total_tax" style="font-weight: bold;">
<input type="text" value="" readonly class="form-control"  name="total_total" id="total_total" placeholder="total_total" style="font-weight: bold;">
</div>

<div class="row">
	
	<div class="col-md-6"></div>
	<div class="col-md-6" style="font-size: 16px;font-weight: bold;">
		
<div class="row ">
	
	<div class="col-md-6">TOTAL PARCIAL</div>
	<div class="col-md-6" id="e_total_parcial">0</div>
</div>

<div class="misbaseimponible">
</div>

<div class="row">
	
	<div class="col-md-6">TOTAL <?php  echo IVA ?></div>
	<div class="col-md-6" id="e_total_tax" >0</div>
</div>

<div class="row">
	
	<div class="col-md-6">TOTAL A CANCELAR (<?php  echo MONEDA ?>)</div>
	<div class="col-md-6" id="e_total_total" >0</div>
</div>

	</div>
</div>
<button id="agregar-row" type="button" class="btn bg-green">+ Agregar Items</button>
 
<!--  <button id="subtotal-sum" type="button" class="btn bg-green">+ sumar sub total</button>  -->

				
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


	$('#ext1').val('<?php echo $ext1 ?>').change();

//enc_lugar_emision


$('#formulario').on('submit',  function(event) {
    event.preventDefault();
   sumarSubTotales();

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