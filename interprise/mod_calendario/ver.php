<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../../index.php');
}

require_once '../../db_connect.php';
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
	<link rel="stylesheet" href="../assets/css/fullcalendar.min.css">
	<link rel="stylesheet" href="../assets/css/fullcalendar.print.css" media='print'>
	<link rel="stylesheet" href="../assets/css/app.min.css">
	
  <script src="../assets/tinymce/tinymce.min.js"></script>
<style type="text/css">
	
	.rte a {
     color: #fff;
}
</style>
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
					<li><a href="index.php">Calendario</a></li>
					<li class="active">Menu</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline">Citas</h2>
					<h3 class="boxHeadlineSub">Programadas</h3>
					
					
				 <!--====================================================
					 =            AQUI VA EL CONTENIDO DEL SITE-            =
					 =====================================================-->
					 
					 <div id='calendario'></div>
					 
					 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
  
				
				</div>
				</div>
				
			
			</div>
		</div>
	<!-- </div> -->
	
 

<!--===============================================
=            PARA EDITAR FECHA DE CITA            =
================================================-->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agendar</h4>
      </div>
      <div class="modal-body">
     <form id="formulario_agendar_cita">
        <label for="datepicker-2-input">Cita.</label>
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


<div class="form-group">
									<label for="textarea-autosize">Descripción</label>
									<textarea id="descripcion" name="descripcion" class="js-autogrow form-control" placeholder="Escriba comentarios sobre la cita...!" rows="2" style="overflow: hidden; word-wrap: break-word; height: 74px;"></textarea>
								</div>

							<hr>	

          	<div class="col-xs-12">

								<label for="datepicker-2-input">Consulte día disponible:<span class="bg-info" id="etiqueta_dia"></span></label>
								<div id="datepicker-2" class="input-group date">
									<input   class="form-control" id="diaSelect" name="dia" placeholder="Select date" type="date"><span id="consultarDia" class="input-group-addon"><i class="fa fa-search" ></i></span>
								</div>
							</div>

							<div id="agendados"></div>


<div class="row">

<div class="col-xs-6">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Inicio: <span class="bg-info" id="etiqueta_start"></span></label>
            <input type="time" placeholder="hrs:mins" name="start" required  class="form-control" id="recipient-name">
          </div>
</div>
<div class="col-xs-6">
          <div class="form-group">
            <label for="message-text" class="control-label">Final:<span class="bg-info" id="etiqueta_end"></span></label>
             <input type="time" placeholder="hrs:mins" name="end"  required  class="form-control" id="recipient-name">
          </div>
          </div>
        
</div>

<div class="col-xs-12">
<div class="checkboxes">								


								<label>
									<input id="allDay" name="allDay" value="1" type="checkbox">
									<span>Evento para todo el dia?</span>
								</label>
							</div>
</div>

<input type="hidden" id="id_calendar" name="id_calendar" value="">
<input type="hidden" id="async_contacto" name="id_contacto" value="">
<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['usuario']['Id']; ?>">
<input type="hidden" name="color" value="<?php echo $_SESSION['usuario']['Color']?>">
<input type="hidden" id="async_titulo"  name="titulo" value="">
<input type="hidden" id="async_nombre"  name="nombre" value="">

	

     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
     <button type="submit" id="agendar" disabled class="btn btn-primary btnmuestra" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando...!"> Re-Agendar   </button>
     <button type="button" id="cancelar-cita" class="btn btn bg-red btnmuestra"> <i class="fa fa-ban"></i>  Cancelar cita  </button>
      </div>

         </form>
      </div>
     
    </div>
  </div>
</div>

<!--====  End of PARA EDITAR FECHA DE CITA  ====-->


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
	<script src="../assets/js/fullcalendar.min.js"></script>
	<script src="../assets/js/lang-all.js"></script>
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
		
var usuario = "<?php echo $_SESSION['usuario']['Id']  ?>";

$(document).ready(function() {
	$('#calendario').fullCalendar({
	header:{left:"prev,next today",center:"title",right:"month,agendaWeek,agendaDay"},
	  events: 'async/calendario.php',
	  lang: 'es',
	  
 

  eventRender: function (event, element) {


        element.attr('href', 'javascript:void(0);');
        element.click(function() {

        	if (event.id_usuario != usuario ) {

$('.btnmuestra').hide();

        	} else {
        		$('.btnmuestra').show();

        	}
        	//alert(event.start);

        	 

        	
        	$('#myModalLabel').html('<a href="<?php echo BASE_URL ?>mod_clientes/index.php?tipo=editar&id='+event.id_contacto+'" target="_blank">'+event.id_contacto+' '+event.nombre+'</a>');
        	$('#tipo').val(event.tipo).change();
        	$('#descripcion').val(event.descripcion);
        		$('#id_calendar').val(event.id);
$('#async_titulo').val(event.title);
$('#async_nombre').val(event.nombre);
$('#async_contacto').val(event.id_contacto);
        		
             $('#etiqueta_dia').text(event.start);
$('#etiqueta_start').text(event.start);
$('#etiqueta_end').text(event.end);
        	/*$('.modal-body').html('<i class="fa fa-clock-o"></i> Inicio: ');
            $('.modal-body').append(moment(event.start).format('MMM Do h:mm A'));
            $(".modal-body").append('<br>');
            $('.modal-body').append('<i class="fa fa-clock-o"></i> Fin: ');
            

            $(".modal-body").append(moment(event.end).format('MMM Do h:mm A'));
            $(".modal-body").append('<hr>');
            $('.modal-body').append('<CENTER><H2><strong> <i class=\"fa fa-bell\"></i>'+event.tipo+'</strong><H2> </CENTER>');
            $('.modal-body').append('<CENTER>'+event.descripcion+'</CENTER>');
*/
$('#cancelar-cita').attr('data-id', event.id);
            $('#myModal').modal('show');



        });
    


    }
 
 
});



$('#cancelar-cita').on('click',  function(event) {
	event.preventDefault();
	/* Act on the event */
 
id = $(this).attr('data-id');

//alert(id);


$.ajax({
	url: 'envios/calendar_anular.php',
	type: 'POST',
	
	data: {id: id},
})
.done(function(data) {
	console.log("success");

if (data==1) {
	swal({ 
	  title: "Good job! ",
	   text: "Cita cancelda con exito!",
	    type: "success" 
	  },
	  function(){
	//$('#formulario')[0].reset();
	location.reload();
	});
	}



	
})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});



});



/*=========================================
=             consulta de dias            =
=========================================*/

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
});


});

/*=====  End of  consulta de dias  ======*/

/*======================================
=            REAGENDAR CITA            =
======================================*/

$('#formulario_agendar_cita').on('submit',  function(event) {
	event.preventDefault();
$('#agendar').button('loading');

	$.ajax({
		url: 'envios/calendario-editar.php',
		type: 'POST',
 
		data: $('#formulario_agendar_cita').serialize(),
	})
	.done(function(data) {
		console.log("success");
		console.log(data);

if (data==1) {

swal({ 
  title: "Good job! ",
   text: "Cita agendada con éxito...!",
    type: "success" 
  },
  function(){
$('#formulario_agendar_cita')[0].reset();
//location.reload();
$('#agendados').html('');
location.reload();
});


}


	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
		$('#agendar').button('reset');
	});
	
	/* Act on the event */
});


/*=====  End of REAGENDAR CITA  ======*/



});




	</script>


</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>