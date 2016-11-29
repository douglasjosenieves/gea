<?php session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');

}
require_once __DIR__ . '../../db_connect.php';



$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  

$resul =  mysql_query("SELECT distinct status, count(status) as cuenta FROM contactos_web where anulado <> 1 group by status;");

 $st = 0;
$status = array();
 
while($row =  mysql_fetch_array($resul) ) {
$status[$row['status']] = $row['cuenta'];
 }


 
 ?>






<!doctype html>
<html class="no-js" lang="es">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:05:06 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>ERP | GEA</title>
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
		<!-- html comment <link rel="stylesheet" href="assets/css/fontello.css">-->
	<link rel="stylesheet" href="assets/css/chartist.min.css">
	<link rel="stylesheet" href="assets/css/app.min.css">
   
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
	
	<aside class="aside">
		<!-- User profile -->
		<?php require_once 'usuario.php'; ?>
         <?php require_once 'nav.php'; ?>
		
		<!-- Pending tasks -->
		
	</aside>
	
	<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<div class="boxHeader pageBoxHeader clearfix">
					<div class="pull-left">
						<h1 class="pageTitle">
							<a href="#" title="#">Panel de control <?php// echo print_r($status) ?>
</a>
						</h1>
						<ol class="breadcrumb">
							<li><a href="index.php">Sharpen</a></li>
							<li class="active">Dashboard</li>
						</ol>
					</div>

					<div class="btn-group pull-right boxHeaderOptions">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="zmdi zmdi-more-vert"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Today</a></li>
							<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Yesterday</a></li>
							<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Last week</a></li>
							<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Last month</a></li>
						</ul>
					</div>
				</div>
				

				<!-- Statsbar -->
				<div class="statsBar">
					<div class="row">
						<div class="col-xs-12 col-md-4 i yellow">
							<a href="#" title="#" class="c">
								<h3 class="title">Website traffic</h3>
								<div class="num">256,521</div>
								<i class="icon zmdi zmdi-globe"></i>
							</a>
						</div>
						<div class="col-xs-12 col-md-4 i pink">
							<a href="#" title="#" class="c">
								<h3 class="title">Files downloaded</h3>
								<div class="num">5,478,123</div>
								<i class="icon zmdi zmdi-square-down"></i>
							</a>
						</div>
						<div class="col-xs-12 col-md-4 i green">
							<a href="#" title="#" class="c">
								<h3 class="title">Total sales</h3>
								<div class="num">14,789</div>
								<i class="icon zmdi zmdi-card"></i>
							</a>
						</div>
					</div>
				</div>
	     
	 

	    
</div>

				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="box box-without-padding">

							<div class="clearfix boxHeader">
								<h2 class="boxTitle pull-left"></h2>
								<div class="btn-group pull-right boxHeaderOptions">
									<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="zmdi zmdi-more-vert"></i>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Time span</a></li>
										<li><a href="#" title="#"><i class="zmdi zmdi-chart zmdi-hc-fw"></i> Chart type</a></li>
										<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
									</ul>
								</div>	
							</div>

							<!-- Tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#tab-item-1" aria-controls="tab-item-1" role="tab" data-toggle="tab">Countries</a></li>
								<li role="presentation"><a href="#tab-item-2" aria-controls="tab-item-2" role="tab" data-toggle="tab">Used devices</a></li>
							</ul>

							<div class="tab-content">

								<!-- Countries -->
								<div role="tabpanel" class="tab-pane fade in active" id="tab-item-1">
									<!-- <div id="donut-chart"></div> -->


									<div style="padding:20px">
										<div>
											<canvas id="lineChart" height="195"></canvas>
										</div>
									</div>

									<div class="row statsInfo clearfix">
										<div class="col-xs-6 i">
											<div class="count">256,521</div>
											<div class="text">monthly total</div>
										</div>
										<div class="col-xs-6 i">
											<div class="count">10,907</div>
											<div class="text">today total</div>
										</div>
									</div>
								</div>

								<!-- Used devices -->
								<div role="tabpanel" class="tab-pane fade" id="tab-item-2">
									<div class="side-padding-25">
										<p>Mauris vitae felis vel velit rutrum accumsan. Sed quis vehicula purus. In non sem bibendum, gravida nisl in, lacinia elit. Sed vel tortor ligula. Mauris consectetur massa ac tellus vestibulum tempus non et augue. Vivamus condimentum in justo eu ornare. Curabitur arcu tellus, venenatis pulvinar ultricies vitae, vulputate id enim. Fusce eros ex, venenatis sit amet magna at, tempor interdum sem. Sed at erat eget lacus condimentum ultrices a in est. Morbi vitae dolor ut ex dignissim molestie eget facilisis ligula. Phasellus ornare interdum leo, ut facilisis sem pretium ut. Vivamus semper feugiat fermentum. Nam eu maximus mi.</p>
										<p>Proin laoreet accumsan odio interdum mattis. In et ante elementum, pharetra neque nec, maximus metus. In eu tristique risus. Vivamus tempor id sapien id lacinia. Ut tincidunt quam sed tortor lacinia, quis vulputate odio faucibus. Donec cursus vel diam a molestie. Praesent sit amet viverra diam. Phasellus eleifend blandit varius. Integer scelerisque massa vitae felis consequat blandit.</p>
									</div>

									<div class="row statsInfo clearfix">
										<div class="col-xs-6 i">
											<div class="count">256,521</div>
											<div class="text">monthly total</div>
										</div>
										<div class="col-xs-6 i">
											<div class="count">10,907</div>
											<div class="text">today total</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="col-xs-6 ct-pie-chart">
								<div class="box box-without-padding">
									<div id="ct-chart-1" class="ct-perfect-fourth"></div>
									<div class="text">Free storage</div>
									<div class="info"><span>77</span>%</div>
								</div>
							</div>
							<div class="col-xs-6 ct-pie-chart">
								<div class="box box-without-padding">
									<div id="ct-chart-2" class="ct-perfect-fourth"></div>
									<div class="text">Bandwidth</div>
									<div class="info"><span>1,5</span>Gb/s</div>
								</div>
							</div>
					</div>


					<div class="col-xs-12 col-md-6">

					<div class="col-xs-12 box">
	<?php require_once 'usuariosGet.php'; ?>
<div class="box box-without-padding">
									<div class="clearfix boxHeader">
										<h2 class="boxTitle pull-left">Chat Interno</h2>
										<div class="btn-group pull-right boxHeaderOptions">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="zmdi zmdi-more-vert"></i>
											</button>
											<ul class="dropdown-menu">
												
												<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
											</ul>
										</div>

									</div>

<div class="form-group">
									<label for="textarea1">Mensajes</label>
									<textarea id="textareaMensaje" readonly class="form-control" rows="11"> </textarea>
								</div>

<form id="formChat">
								<div class="row">
										<div class="col-xs-12 col-sm-12 i">
								<div class="form-group">
									<label>Para:</label>
									<select name="para" required class="js-select" id="usuariosActivoSelect">
										<option  value="">- Enviar a -</option>
										<?php echo $teleo; ?>
										<option value="0">TODOS</option>
									</select>
									
								</div>
							</div>

								</div>


								<div class="row">
								<div class="col-xs-12 col-sm-9">
								<div class="form-group">
								 
									<input type="text" required name="mensaje"  class="form-control" id="basicInput" placeholder="Su mensaje aqui...">
									<input type="hidden" name="de" value="<?php echo $_SESSION['usuario']['Id']; ?>">
								</div>
							</div>


							<div class="col-xs-12 col-sm-2">
									<button type="submit" id="boton" class="btn btn-primary" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando...!"> Enviar <i class="fa fa-send"></i>   </button>

							</div>

</div>
</form>

									</div>

</div> 
						<div class="row">
							
					

							<div class="col-xs-12">
								<div class="box box-without-padding">
									<div class="clearfix boxHeader">
										<h2 class="boxTitle pull-left">Ultimos Seguimientos</h2>
										<div class="btn-group pull-right boxHeaderOptions">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="zmdi zmdi-more-vert"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Time span</a></li>
												<li><a href="#" title="#"><i class="zmdi zmdi-chart zmdi-hc-fw"></i> Chart type</a></li>
												<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
											</ul>
										</div>	
									</div>

									<?php require_once 'recientes_seguimientos.php'; ?>
								
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<!-- Sharpen stats -->
					<div class="col-xs-12 col-sm-6 col-lg-3">
						<div class="box box-without-padding">
							<div class="bgTitle">
								<h3 class="boxTitle">Sharpen</h3>
							</div>
							<div class="simpleList simpleListLighten">
								<ul>
									<li>
										<a href="#" title="#" class="clearfix">
											<span class="pull-left"><i class="zmdi zmdi-accounts-add zmdi-hc-fw icon"></i> Followers</span>
											<span class="pull-right info">109,073</span>
										</a>
									</li>
									<li>
										<a href="#" title="#" class="clearfix">
											<span class="pull-left"><i class="zmdi zmdi-accounts-list-alt zmdi-hc-fw icon"></i> Subscribers</span>
											<span class="pull-right info">26,114</span>
										</a>
									</li>
									<li>
										<a href="#" title="#" class="clearfix">
											<span class="pull-left"><i class="zmdi zmdi-assignment-o zmdi-hc-fw icon"></i> Products sold</span>
											<span class="pull-right info">1,557,669</span>
										</a>
									</li>
									<li>
										<a href="#" title="#" class="clearfix">
											<span class="pull-left"><i class="zmdi zmdi-bookmark zmdi-hc-fw icon"></i> Awards</span>
											<span class="pull-right info">14</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Charts -->
					<div class="col-xs-12 col-sm-6 col-lg-3 pull-right">

						<!-- Sales -->
						<div class="box box-without-padding">
							<div id="line-chart-1-wrap" class="line-chart-wrap">
								<div class="clearfix boxHeader">
									<h2 class="boxTitle pull-left">Sales</h2>
									<div class="btn-group pull-right boxHeaderOptions">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="zmdi zmdi-more-vert"></i>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Time span</a></li>
											<li><a href="#" title="#"><i class="zmdi zmdi-chart zmdi-hc-fw"></i> Chart type</a></li>
											<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
										</ul>
									</div>
								</div>

								<div class="clearfix stats">
									<div class="count pull-left">2,547</div>
									<div class="info pull-left">Last month<br /><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i> 4%</div>
								</div>

								<div id="line-chart-1" class="line-chart"></div>
							</div>
						</div>
						
						<!-- Subscribers -->
						<div class="box box-without-padding">
							<div id="line-chart-2-wrap" class="line-chart-wrap">
								<div class="clearfix boxHeader">
									<h2 class="boxTitle pull-left">Subscribers</h2>
									<div class="btn-group pull-right boxHeaderOptions">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="zmdi zmdi-more-vert"></i>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Time span</a></li>
											<li><a href="#" title="#"><i class="zmdi zmdi-chart zmdi-hc-fw"></i> Chart type</a></li>
											<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
										</ul>
									</div>
								</div>

								<div class="clearfix stats">
									<div class="count pull-left">32,547</div>
									<div class="info pull-left">Last month<br /><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i> 4%</div>
								</div>

								<div id="line-chart-2" class="line-chart"></div>
							</div>
						</div>
					</div>



					<!-- Reciente opciones -->
		 
		<!-- Recent orders -->
					<div class="col-xs-12 col-lg-6">
						<div class="box box-without-padding">
							<div class="clearfix boxHeader boxHeaderBorders">
								<h2 class="boxTitle pull-left">Recent orders</h2>
								<div class="btn-group pull-right boxHeaderOptions">
									<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="zmdi zmdi-more-vert"></i>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Time span</a></li>
										<li><a href="#" title="#"><i class="zmdi zmdi-chart zmdi-hc-fw"></i> Chart type</a></li>
										<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
									</ul>
								</div>	
							</div>

							<div class="simpleList simpleListImages">
								<ul>
									<li>
										<a href="#" title="#">
											<i class="zmdi zmdi-chevron-right arrow"></i>
											<div class="image">
												<img src="tmp/iphone.png" alt="#" width="81" height="66">
											</div>
											iPhone 6s + Apple Green cover IU/T
											<span class="info">6 min. ago</span>
										</a>
									</li>
									<li>
										<a href="#" title="#">
											<i class="zmdi zmdi-chevron-right arrow"></i>
											<div class="image">
												<img src="tmp/macbook.png" alt="#" width="96" height="60">
											</div>
											MacBook Pro 15 "Retina CZ 2014
											<span class="info">9 min. ago</span>
										</a>
									</li>
									<li>
										<a href="#" title="#">
											<i class="zmdi zmdi-chevron-right arrow"></i>
											<div class="image">
												<img src="tmp/samsung.png" alt="#" width="65" height="73">
											</div>
											Samsung Galaxy S6 edge (SM-G925F) 32GB Black Sapphire
											<span class="info">15 min. ago</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				<div class="box box-without-padding">

<!-- <div id="mychat"><a href="http://www.phpfreechat.net">Creating chat rooms everywhere - phpFreeChat</a></div> -->

			  </div>
			</div>
		</div>
	</div>

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
	<script src="assets/js/jquery.fullscreen.min.js"></script>
	<script src="assets/js/app_index.min.js"></script>
   <script src="assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
	<div class="visible-xs visible-sm extendedChecker"></div>
	 
</body>

<script type="text/javascript">

/*==========================================================
	=            Envio de un chat por el formulario            =
	==========================================================*/
	
	$(document).ready(function() {
		
	 

$('#formChat').on('submit',  function(event) {
    event.preventDefault();
$('#boton').button('loading');
//alert('aaa');

$.ajax({
    url: 'envios/chat.php',
    type: 'POST',
 
    data: $('#formChat').serialize(),
})
.done(function(data) {
    console.log("success");
    console.log(data);
    if (data==1) {

swal({ 
  title: "Enviado!",
   text: "Su mensaje se ha enviado con exito!",
    type: "success" 
  },
  function(){
 $('#formChat')[0].reset();
 verificaChatTexArea() ;
 verificaChatNotificaciones();
  verificaChat() ;
//location.reload();
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
	
	/*=====  End of Envio de un chat por el formulario  ======*/
	

	

	/*=======================================
	=            TexArea Mensaje            =
	=======================================*/
	
	
var usuarioOnline = <?php echo $_SESSION['usuario']['Id']; ?>;

 
   verificaChatTexArea() ;
   setInterval(function(){verificaChatTexArea();},10000);

  
function verificaChatTexArea() {

	$.ajax({
		url: 'async/chatTexarea.php',
		type: 'POST',
	
		data: {usuario: usuarioOnline},
	})
	.done(function(data) {
		console.log("success chatTexArea comprobado");
		//console.log(data);
 
$('#textareaMensaje').text(data);




	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
	//	console.log("complete");
	});
	
	// body...
}



	
	/*=====  End of TexArea Mensaje  ======*/


/*==================================================
=            Verifica en notificaciones            =
==================================================*/

var usuarioOnline = <?php echo $_SESSION['usuario']['Id']; ?>;

 verificaChatNotificaciones();
 //setInterval(function(){verificaChatNotificaciones();},9000);

  
function verificaChatNotificaciones() {

	$.ajax({
		url: 'async/chatNotification.php',
		type: 'POST',
	    dataType: 'json',
		data: {usuario: usuarioOnline},
	})
	.done(function(data) {
		console.log("success Notification comprobado");
		//console.log(data);
 
 if (data!='') {
$.each(data['mensaje'], function(i, item) {
   /* console.log(data['persona'][i]);
    console.log(data['mensaje'][i]);*/

prueba_notificacion(data['persona'][i], data['mensaje'][i])

});

 }
 

 

 	})


	.fail(function() {
		console.log("error");
	})
	.always(function() {
	//	console.log("complete");
	});
	
	// body...
}




/*=====  End of Verifica en notificaciones  ======*/


	/*=====================================
	=            Las vi todas             =
	=====================================*/
	function lasViTodas() {
var usuarioOnline = <?php echo $_SESSION['usuario']['Id']; ?>;

$.ajax({
	url: 'envios/chat_lasViTodas.php',
	type: 'POST',
	
	data: {usuario: usuarioOnline},
})
.done(function(data) {
	console.log("success Las vi todas");
    console.log(data);
})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});

		
	}
	
	
	/*=====  End of Las vi todas   ======*/
	

	/*================================================
	=            Notificaciones en chrome            =
	================================================*/
	//prueba_notificacion();
	function prueba_notificacion(titulo, body) {
if (Notification) {
if (Notification.permission !== "granted") {
Notification.requestPermission()
}
var title = titulo
var extra = {
icon: "img/logo-light.png",
body: body,
sound: 'audio/alert.mp3'
}
var noti = new Notification( title, extra)
noti.onclick = function(event) {
  event.preventDefault(); // prevent the browser from focusing the Notification's tab
  window.focus(); 
  lasViTodas();

}
noti.onclose = function(event) {
  event.preventDefault(); // prevent the browser from focusing the Notification's tab
  window.focus(); 
  lasViTodas();

}
setTimeout( function() { noti.close() }, 10000)
}
}
	
	/*=====  End of Notificaciones en chrome  ======*/
	
	
/*==================================================================
=            Detecto cuando la ventana esta activa o no            =
==================================================================*/



	


window.addEventListener('focus', function() {
    //document.title = 'focused';
   // prueba_notificacion('hola', 'como estas');
});

window.addEventListener('blur', function() {
    //document.title = 'not focused';
verificaChatNotificaciones();
});
/*=====  End of Detecto cuando la ventana esta activa o no  ======*/


</script>
<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:05:52 GMT -->
</html>