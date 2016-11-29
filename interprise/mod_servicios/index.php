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

 $resul =  mysql_query("SELECT * FROM  servicios where id =$id");
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
					<a href="#" title="#">servicios</a>
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
<label for="basicInput">Buscar:</label>
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
 <label for="basicInput">Codigo:</label>
 <input type="text" value="<?php echo $data['data'][0]['codigo'] ?>" required class="form-control" name="codigo" id="codigo" placeholder="Codigo:">
 </div>
 </div>
 



<div class="col-xs-12 col-sm-8">
<div class="form-group">
<label for="basicInput">Nombre:</labe8>
<input type="text" value="<?php echo $data['data'][0]['nombre'] ?>" required class="form-control" name="nombre" id="nombre" placeholder="Nombre:">
</div>
</div>
 
</div>

<div class="row">
<div class="col-xs-12 col-sm-12">
<div class="form-group">
<label for="basicInput">Descripción:</label>
<textarea  id="mytextarea" class="mceEditor" ><?php echo  $data['data'][0]['descripcion']; ?></textarea>
<input type="hidden" name="descripcion" value=""  id="question_html" name="question_html" />
</div>
</div>


</div>
	<hr>
	<div class="row">
		
<div class="col-xs-12 col-sm-3">
		<div class="form-group">
		<label for="basicInput">Precio:</label>
		<input type="number" value="<?php echo $data['data'][0]['precio'] ?>" required class="form-control" name="precio" id="precio" placeholder="Precio:">
		</div>
		</div>


 


<div class="col-xs-12 col-sm-3">
<div class="form-group">
<label for="basicInput">Cantidad:</label>
<input type="number" value="<?php echo $data['data'][0]['cantidad'] ?>" required class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad:">
</div>
</div>

	 



<div class="col-xs-12 col-sm-3">
<div class="form-group">
<label for="basicInput">Promedio Mínimo:</label>
<input type="number" value="<?php echo $data['data'][0]['pro_inv_min'] ?>"  required class="form-control" name="pro_inv_min" id="pro_inv_min" placeholder="Promedio Minimo:">
</div>
</div>



<div class="col-xs-12 col-sm-3">
<div class="form-group">
<label for="basicInput">Promedio Máximo</label>
<input type="number" value="<?php echo $data['data'][0]['pro_inv_max'] ?>"  required class="form-control" name="pro_inv_max" id="pro_inv_max" placeholder="Promedio Maximo">
</div>
</div>

	 


	</div>				 
					 
 
	<div class="row">
		
<!--======================================================
=            Buscar lista en la base de datos            =
=======================================================-->
<?php 
			
$v=0;
$dato ='';
$datoid =array();
$resulv =  mysql_query("SELECT * FROM servicios_cat where anulado <> 1");
while($rowv =  mysql_fetch_array($resulv) ) { 
$dato .= '<option value="';
$dato .= $rowv['id'];
$dato .= '">';
$dato .= strtoupper($rowv['nombre']);
$dato .= '</option>';
$datoid[] = $rowv['id'];
$v++;}
?>

	
<!--====  End of Buscar lista en la base de datos  ====-->
		
<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Categoría:</label>

<select required id="id_cat" name="id_cat" data-id=""  class="js-select">
<option  value="" >- Seleccionar -</option>
<?php echo 	$dato  ?>
</select>	

</div>
</div>



<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Estado:</label>
<select required id="estado" name="estado" data-id=""  class="js-select">
<option  value="" >- Seleccionar -</option>
 <option  value="ACTIVO" >ACTIVO</option>
 <option  value="PAUSADO" >PAUSADO</option>
</select>	
</div>
</div>


<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Stock:</label>
<select required id="stock" name="stock" data-id=""  class="js-select">
<option  value="" >- Seleccionar -</option>
 <option  value="CANTIDAD" >CANTIDAD</option>
 <option  value="SIEMPRE DISPONIBLE" >SIEMPRE DISPONIBLE</option>
</select>	
</div>
</div>

	</div>


</div> <!-- boxreta -->

<div class="box rte">
					<h2 class="boxHeadline">Datos</h2>
					<h3 class="boxHeadlineSub">Complementarios</h3>

	<div class="row">
		
 
 
 <div class="col-xs-12 col-sm-3">
 <div class="form-group">
 <label for="basicInput">Precio de compra:</label>
 <input type="number" value="<?php echo $data['data'][0]['precio_compra'] ?>"  required class="form-control" name="precio_compra" id="precio_compra" placeholder="Precio de compra:">
 </div>
 </div>
 


	<div class="col-xs-12 col-sm-3">
		<div class="form-group">
		<label for="basicInput">Precio1:</label>
		<input type="number" value="<?php echo $data['data'][0]['precio1'] ?>"  required class="form-control" name="precio1" id="precio1" placeholder="Precio1:">
		</div>
		</div>

		<div class="col-xs-12 col-sm-3">
		<div class="form-group">
		<label for="basicInput">Precio2:</label>
		<input type="number" value="<?php echo $data['data'][0]['precio2'] ?>"  required class="form-control" name="precio2" id="precio2" placeholder="Precio2:">
		</div>
		</div>


		<div class="col-xs-12 col-sm-3">
		<div class="form-group">
		<label for="basicInput">Precio3:</label>
		<input type="number" value="<?php echo $data['data'][0]['precio3'] ?>"  required class="form-control" name="precio3" id="precio3" placeholder="Precio3:">
		</div>
		</div>	


	</div>	


<div class="row">
	


	
	<div class="col-xs-12 col-sm-4">
	<div class="form-group">
	<label for="basicInput">Tax:</label>
	<input type="number" value="<?php echo $data['data'][0]['tax'] ?>" required class="form-control" name="tax" id="tax" placeholder="Tax:">
	</div>
	</div>


	
	<div class="col-xs-12 col-sm-4">
	<div class="form-group">
	<label for="basicInput">ISLR:</label>
	<input type="number" value="<?php echo $data['data'][0]['islr'] ?>"  required class="form-control" name="islr" id="islr" placeholder="ISLR:">
	</div>
	</div>
	
	
</div>
					
  
				
				</div><!-- box rate -->


				<div class="box rte">
					<h2 class="boxHeadline">Imagen</h2>
					<h3 class="boxHeadlineSub">Cargar</h3>

<div class="row">
<?php  if ($_GET['tipo']=='editar') {
$img = unserialize( $data['data'][0]['imagenes']);
 
 
if ($img[0] !='') {
	# code...

 ?>

	<img id="img_muestra" src="images/<?php echo $img[0] ?>" class="" alt=""><span id="borrar-img" class="text-danger"> Borrar <i class="fa fa-trash" aria-hidden="true"></i></span>

<?php } ?>
   <input type="hidden" id="imgRemover" name="imagenes[]" value="<?php echo $img[0] ?>" class="imageninput" placeholder="Texto"/></div>
<?php }  ?>


	<label for="comentarios_sobre_negocio"><i class="fa fa-image" style="font-size: 30px;
    color: #fe5621;"></i> Cargar imagen o soltar imagen aquí!</label>
<div id="dZUpload" class="dropzone" style=" border-color: #e6e7ed;border-left: 3px solid #4bae4f;  " >
<div class="dz-default dz-message"></div>
</div>
<div id="img"></div>

</div>

					</div><!-- end box rate -->


<!--=============================================
=            botones guardar y reset            =
==============================================-->

<div class="box rte">
<input type="reset" value="Reset" class="btn bg-gray">
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
<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary"><?php echo $botonNombre; ?> <i class="fa fa-save"></i></button><span class="cargando"><i class='fa fa-circle-o-notch fa-spin'></i>Loading...</span>
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
<script src='http:../assets/tinymce/tinymce.min.js'></script>


<script type="text/javascript">
	

	$(document).ready(function() {
			$('.cargando').hide();
$('#id_cat').val('<?php echo $data['data'][0]['id_cat'] ?>').change();
$('#estado').val('<?php echo $data['data'][0]['estado'] ?>').change();
$('#stock').val('<?php echo $data['data'][0]['stock'] ?>').change();

		
	 var imgr = $('#imgRemover').val();

	 if (imgr=='') {
 $('#imgRemover').remove();
	 }
	
$('#borrar-img').on('click',  function(event) {
	event.preventDefault();
	$.ajax({
url: "imagen_borrar.php",
type: "POST",
data: { "name" : '<?php echo $img[0] ?>' }
});
$('#img_muestra').hide();
 $('#imgRemover').remove();
alert('Borrado');
	/* Act on the event */
});
	 



	 
	});

/*========================================
=            Buscar productos            =
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
/*=====  End of Buscar productos  ======*/



	/*==========================================================
=            AJAX REQUES        =
==========================================================*/

$(document).ready(function() {



$('#formulario').on('submit',  function(event) {
    event.preventDefault();
    
       content();
 var question_html = $('#question_html').val();
if (question_html == '') {
alert('Describa una descripción!');
return true
    }
 


 
//alert('aaa');
$('.cargando').show();
$.ajax({
    url: '<?php echo $url; ?>',
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
location.reload();
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

/*=====  AJAX  ======*/
</script>

	
 <script type="text/javascript">
 	
 	  tinymce.init({
  selector: '#mytextarea',
  height: 200,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
 
});

function content() {
	//alert(tinyMCE.get('mytextarea').getContent());
	$('#question_html').val(tinyMCE.get('mytextarea').getContent());
}






 </script>





 <script type="text/javascript">
 	

/*================================
=            DROPZONE            =
================================*/


    Dropzone.autoDiscover = false;
jQuery(document).ready(function() {
 var fileList = new Array;
 var i =0;
 var date = moment().format('DDMYYYY');
//alert(date);
 
 
myDropzone = new Dropzone("#dZUpload", { 
    url: 'imagen_subida.php',
    dictDefaultMessage: "your custom message",
    autoProcessQueue:true, //BARRRA DE CARGA 
    maxFilesize: 1, // MB
    maxFiles: 1, //CANTIDAD DE ARCHIVOS PERMITIDOS
    addRemoveLinks: true, ///MOSTRAR EL LINK DE REMOVER IMAGEN
    acceptedFiles: 'image/*', //SOLO ACEPTAR IMAGEN FORMATO
    success: function (file, serverFileName) {
    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                        console.log(fileList);
                        i++; 	
   console.log(serverFileName);
    	 swal("Good job!", "Uploas a imagen!", "success");
 
    	   $('#img').append('<div><input type="hidden" name="imagenes[]" value="'+serverFileName+'"id="" class="imageninput" placeholder="Texto"/></div>');
    	  return file.previewElement.classList.add("dz-success");
       // console.log("Sucesso");
       // console.log("Sucesso");
       // console.log(response); 'name': file.name


    },
     removedfile: function(file) { 
      var _ref;
  var rmvFile = "";
                        for(f=0;f<fileList.length;f++){

                            if(fileList[f].fileName == file.name)
                            {
                                rmvFile = fileList[f].serverFileName;
                         
                            }

                        }

                        if (rmvFile){
                            $.ajax({
                               url: "imagen_borrar.php",
                                type: "POST",
                                data: { "name" : rmvFile }
                            });
                           $('#img :input[value="'+rmvFile+'"]').remove();
                        }
                    

 


return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
				

    },


 
  });

  });
/*=====  End of DROPZONE  ======*/
   

 </script>


 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>