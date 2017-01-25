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

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	# code...




                    $c=0;
                    $resul =  mysql_query("SELECT * FROM `clientes` where anulado <> 1 and id='".$id."'");
                    while($row =  mysql_fetch_array($resul) ) {
                                                        
                    // echo $row['nombre'].'<br>';;
                    $cliente['cliente'][]=$row;
                     $c++;
                      }
                   }
?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Seguimientos</title>
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
					<a href="#" title="#">Seguimiento de cliente </a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Sharpen</a></li>
					<li class="active">Procesos</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline">Seguimiento</h2>
					<!-- <h3 class="boxHeadlineSub">Coordinación comercial</h3> -->
					<?php if (isset($_GET['editar_caso'])) {

						$tex='_editar';

   $e=0;
                    $resul =  mysql_query("SELECT * FROM `seguimiento` where anulado <> 1 and id='".$_GET['editar_caso']."'");
                    while($row =  mysql_fetch_array($resul) ) {
                                                        
                    // echo $row['nombre'].'<br>';;
                    $casos['casos'][]=$row;
                     $e++;
                      }



						} ?>

					
					<form id="formulario<?php echo  $tex ?>" action=""  class="dropzone" enctype="multipart/form-data">
						
<div class="row">
	
		


 <div class="col-xs-12 col-sm-2">
								<div class="form-group">
									<label for="referencia">Nº Referencia</label>
									<input type="text" value="<?php echo $casos['casos'][0]['id'] ?>" readonly required class="form-control" name="referencia" id="referencia" placeholder="Nº Referencia">
								</div>
							</div>

								 <div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="elaborado_por">Elaborado Por:</label>
															<input  readonly type="text" required class="form-control" value="<?php echo $_SESSION['usuario']['Nombre'].' '.$_SESSION['usuario']['Apellido'] ?>" name="soloLectura" id="elaborado_por" placeholder="Elaborado Por:">


															<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id'] ?>" name="elaborado_por" id="elaborado_por" placeholder="Elaborado Por:">
														</div>
													</div>

<div class="col-xs-12 col-sm-4 col-sm-offset-2">
<div class="form-group">
<label for="basicInput">Buscar:</label>
<input type="text" autocomplete="off" value="<?php echo $data['data'][0]['buscar'] ?>" class="form-control" name="buscar" id="buscar" placeholder="Buscar:" style="background-color: #accead; font-weight: 800;">
</div>

<div >
	<ul id="resultado_busqueda">
		 
	</ul>
</div>
</div>



</div>

<hr>
	<div class="row">

						 <div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="id_contacto">Id conctacto:</label>
															<input type="text" required readonly class="form-control" name="id_contacto" id="id_contacto" placeholder="Id contacto:" value="<?php echo $cliente['cliente'][0]['id'] ?>">
														</div>
													</div>
							 
<div class="col-xs-12 col-sm-8">
<div class="form-group">
<label for="cliente">cliente:</label>
<input type="text" required readonly class="form-control" name="cliente" id="cliente" placeholder="cliente:" value="<?php echo $cliente['cliente'][0]['cliente'] ?>" style="font-weight: bold;">
														</div>
													</div>


											
											 


						</div>

						<div class="row">
	

	 <div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Categoria</label>
<?php 
      
$v=0;
$categoria ='';
$categoriaid =array();
$resulv =  mysql_query("SELECT * FROM taxonomia a, taxonomia_relacion b where a.id = b.id_taxonomia and b.taxonomia = '".TAXONOMIA."' and a.anulado <> 1");
while($rowv =  mysql_fetch_array($resulv) ) { 
$categoria .= '<option value="';
$categoria .= $rowv['id'];
$categoria .= '">';
$categoria .= strtoupper($rowv['nombre']);
$categoria .= '</option>';
 
$v++;}
?>

<select required id="id_categoria" name="id_categoria" data-id=""  class="js-select">
<option  value="" >- Seleccionar -</option>

<?php echo  $categoria  ?>
</select>
</div>
</div>
					
	

<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>Status:</label>
									<select name="status" required class="js-select">

											<?php if (isset($_GET['editar_caso'])) {
                                        echo  '<option value="';
										echo  $casos['casos'][0]['status'];
										echo '" selected>';
										echo  $casos['casos'][0]['status'];
										echo '</option>';
										# code...
									} ?>
									<option value=""  >- Select status -</option>
				

<option value="ABIERTO">ABIERTO </option>
<option value="CERRADO">CERRADO </option>
                        
         


										
									

										
									</select>
								</div>
							</div>
					

	

						</div>

						
					
<hr />
						 
					

<h2 class="boxHeadline">Comentarios.</h2>				 
<div class="row">
 <div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="asunto">Asunto:</label>
															<input type="text" value="<?php echo  $casos['casos'][0]['asunto']; ?>" required class="form-control" name="asunto" id="asunto" placeholder="Asunto:">
														</div>
													</div>
</div>

				
				

 
		

<textarea  id="mytextarea" class="mceEditor" ><?php echo  $casos['casos'][0]['descripcion']; ?></textarea>
<input type="hidden" name="descripcion" value=""  id="question_html" name="question_html" />
					
<hr />
						

						<?php if ($_GET['editar_caso']) {
							 ?>
							<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary">Editar y Guardar</button> 


							
						<?php } else{ ?>
<button type="submit"  id="boton2" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary">Guardar</button>
						<?php }  ?>

						<span class="cargando"><i class='fa fa-circle-o-notch fa-spin'></i>Loading...</span>
					</form>
  

 


<div class="box rte box-without-bottom-padding">
					<h2 class="boxHeadline">Histórico de seguimientos</h2>
					<h3 class="boxHeadlineSub"></h3>
					
					<div class="tableWrap table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th># Id</th>
									<th>Cliente</th>
									<th>Fecha ingreso</th>
									<th>Fecha modificado</th>
									<th>Asunto</th>
									<th>Categoria</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							

<?php 

require_once '../status_funtion_abierto_cerrado.php';
                    $i=0;
                    $resul =  mysql_query("SELECT * FROM `seguimiento` where anulado <> 1 and id_contacto ='".$id."' order by id desc");
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





								<tr class="<?php echo $color  ?>">
									<th scope="row"> <a href="?editar_caso=<?php echo $contacto['contacto'][$i]['id']?>&id=<?php echo $id ;?>"> <?php echo $contacto['contacto'][$i]['id']?></a></th>
									<td><?php echo $contacto['contacto'][$i]['cliente']?></td>
									<td><?php echo $contacto['contacto'][$i]['fecha']?></td>
										<td><?php echo $contacto['contacto'][$i]['editado_fecha']?></td>
									<td><?php echo $contacto['contacto'][$i]['asunto']?></td>
										<td><?php echo categoria($contacto['contacto'][$i]['id_categoria'])?></td>
									<td><?php echo statusColor($contacto['contacto'][$i]['status'])?></td>
								</tr>
							
								 


<?php  $i++ ;}?>


							</tbody>
						</table>
					</div>
				</div>

</div>
				</div>
				
			


			</div>
		</div>
	</div>
	
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

/*========================================
=            Buscar             =
========================================*/


$(document).ready(function() {
$('.cargando').hide();
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

 

   
jQuery(document).ready(function() {
 var fileList = new Array;
 var i =0;
 var date = moment().format('DDMYYYY');
//alert(date);
 
 

   
});
 
/*=======================================================
=            CUANDO SE GUARDA EL SEGUIMIENTO            =
=======================================================*/





$(document).ready(function() {
 

	console.log("ready");

 

$('#formulario').on('submit', function(e){
e.preventDefault();
$('.cargando').show();
 content();






 var nombre = $('#nombres').val();
if (nombre == '') {
alert('Primero debe seleccionar el cliente!');
return true
}


 var question_html = $('#question_html').val();
if (question_html == '') {
alert('Describa su seguimiento antes de continuar!');
return true
}





console.log('Envio el formulario');

$.ajax({
	url: 'envios/insert.php',
	type: 'POST',
	//dataType: 'json',
	data: $('#formulario').serialize(),
})
.done(function(data) {
	console.log("success");
		console.log(data);



if (data==1) {
	$('#img :input').remove();

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


 

//swal("Good job!", "You clicked the button!", "success");
//location.reload();
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



});


/*=====  End of CUANDO SE GUARDA EL SEGUIMIENTO  ======*/


/*======================================================
=            CUANDO SE EDITA EL SEGUIMIENTO            =
======================================================*/

$(document).ready(function() {
 

	console.log("ready");

 

$('#formulario_editar').on('submit', function(e){
e.preventDefault();
$('.cargando').show();
 content();
 var nombre = $('#nombres').val();
if (nombre == '') {
alert('Primero debe seleccionar el cliente!');
return true
}


 var question_html = $('#question_html').val();
if (question_html == '') {
alert('Describa su seguimiento antes de continuar!');
return true
}



 
console.log('Envio el formulario');

$.ajax({
	url: 'envios/update.php',
	type: 'POST',
	//dataType: 'json',
	data: $('#formulario_editar').serialize(),
})
.done(function(data) {
	console.log("success");
		console.log(data);


 


if (data==1) {
	$('#img :input').remove();

swal({ 
  title: "Enviado!",
   text: "Se ha procesado con éxito!",
    type: "success" 
  },
  function(){
 //$('#formulario')[0].reset();
location.reload();
});

}

 

else {

sweetAlert("Oops...", "Consulte este error con su programador!", "error");
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
	$('.cargando').hide();
});

});



});

/*=====  End of CUANDO SE EDITA EL SEGUIMIENTO  ======*/


	</script>
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>