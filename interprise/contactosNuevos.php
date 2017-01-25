<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}

if ($_SESSION['usuario']['Tipo'] != 'administrador') {
header('Location: errorAcceso.php');
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
	<title>Contactos Nuevos</title>
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
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
			<form id="formulario">
				<h1 class="pageTitle">
					<a href="#" title="#">Contactos Nuevos</a>
				</h1>
				<ol class="breadcrumb">
			<li><a href="index.php">Sharpen</a></li>
					<li class="active">Procesos</li>
				</ol>
				
				<div class="box rte">
				
					<h2 class="boxHeadline">Contactos</h2>
					<h3 class="boxHeadlineSub">Por asignar</h3>
					
					
				<!-- Basic table -->
				<div class="box rte box-without-bottom-padding">
					<h2 class="boxHeadline">Clientes por asignar</h2>
					<h3 class="boxHeadlineSub">Departamento atención al cliente</h3>
					
					<div class="tableWrap table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>#Id</th>
									<th>Nombre</th>
									<th>Email</th>
								 
									<th>fecha</th>
									<th>Asignar a:</th>
								</tr>
							</thead>
							<tbody>
								
	<?php 
			
$v=0;
	/*<option value="ESPANA">España</option>*/
$teleo ='';
$teleoid =array();
				$resulv =  mysql_query("SELECT * FROM usuarios where anulado <> 1 and cargo = 'teleoperador'");
				while($rowv =  mysql_fetch_array($resulv) ) { 
$teleo .= '<option value="';
$teleo .= $rowv['id'];
$teleo .= '">';
$teleo .= strtoupper($rowv['nombre'].' '.$rowv['apellido']);
$teleo .= '</option>';
$teleoid[] = $rowv['id'];

            
            //$teleoperador['teleoperador'][]=$row;
					$v++;}


				$i=0;
				$resul =  mysql_query("SELECT * FROM `clientes` where anulado <> 1 and elaborado_por ='website'");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$contacto['contacto'][]=$row;
				
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>

								<tr>
									<th scope="row"><?php echo 	$contacto['contacto'][$i]['id']  ?></th>
									<td><?php echo 	$contacto['contacto'][$i]['nombres']  ?></td>
									<td><?php echo 	$contacto['contacto'][$i]['email']  ?></td>
							 
									<td><?php echo 	$contacto['contacto'][$i]['fecha']  ?></td>
									<td>
										<select  name="operador[]" data-id="<?php echo 	$contacto['contacto'][$i]['id']  ?>"  class="js-select operador">
										<option  value="" >- Seleccionar -</option>
										<?php echo 	$teleo  ?>
										
								 
									</select>

<input type="hidden" value="<?php echo 	$contacto['contacto'][$i]['id']  ?>" class="id" name="id[]">
									</td>
								</tr>
								
					<?php $i++;  }?>


							</tbody>
						</table>
					</div>
				</div>
				
  
				
				</div>

				<div class="box rte">
				<center>
<?php //echo var_dump($teleoid) ?>
<button type="button"  value="" onclick="" id="random" class="btn bg-dark-gray">Random <i class="fa fa-random"></i></button>
<button type="submit" id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
						</center>



					
				</div>
				</form>
				</div>  <!-- containes -->
				
			
			</div>
		</div>
	<!-- </div> -->
	
	
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





    
$(document).ready(function() {
$('#formulario').on('submit',  function(event) {
    event.preventDefault();
$('#boton').button('loading');
//alert('aaa');

$('.operador').each(function(index, el) {
	
var Self = $(this);
var id = Self.data('id');
var valor = Self.val();


//console.log(id+' '+valor);

});


$.ajax({
    url: 'envios/contactosNuevosAsignar.php',
    type: 'POST',
 
    data: $('#formulario').serialize(),
})
.done(function(data) {
    console.log("success");
    console.log(data);
    if (data==1) {

swal({ 
  title: "Good job!",
   text: "You clicked the button!",
    type: "success" 
  },
  function(){
 $('#formulario')[0].reset();
location.reload();
});

}





})
.fail(function() {
    console.log("error");
})
.always(function() {
    console.log("complete");
$('#boton').button('reset');

});



});

});



</script>




<script>



		
$(document).ready(function() {


 



var nombre = <?php echo json_encode($teleoid); ?>;


 for(var i=0;i<nombre.length;i++)
    {
console.log(nombre[i])
    }

    function dameElOperador(i) {


    var rand = nombre[i];

    return rand	// body...
    
    }

console.log('Total teleoperador:'+nombre.length);

$('#random').on('click', function(event) {
	event.preventDefault();
	random();
});

function random() {
	// body...


numero = 0;	
$('.operador').each(function (i) {
// getting options from html 
var Self = $(this);
var id = Self.data('id');


if (numero >= nombre.length )
{
numero = 0;

}
//console.log('Este es el coño: '+numero);

$(this).val(dameElOperador(numero)).change();
numero++;

//console.log(id)
});

}

});





	</script>
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>