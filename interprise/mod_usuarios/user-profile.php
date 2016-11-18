<?php session_start();
if (!isset($_SESSION['usuario'] )) {
header('Location: ../../index.php');
}
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'] ;
require_once '../../db_connect.php';
require_once '../../PHPPaging.lib.php';

// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   
?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:25 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Usuario perfil</title>
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
	<link rel="stylesheet" href="../assets/css/app.min.css">
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

				<!-- Task Cards -->
				<h1 class="pageTitle">
					<a href="#" title="#">Perfil de usuario</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="dashboard.html">Sharpen</a></li>
					<li><a href="#">Extras</a></li>
					<li class="active">Perfil de usuario</li>
				</ol>
				
				<div class="row">
					<div class="col-xs-12 col-md-4 col-lg-3">
						<div class="userProfileInfo">
							<div class="image">
								<img src="<?php echo BASE_URL ?>img/usuarios/<?php echo $_SESSION['usuario']['Foto'] ?>" alt="#" class="img-responsive">
								<a href="#" title="#" class="editImage">
									<i class="fa fa-camera"></i>
								</a>
							</div>

							<div class="box">
								<div class="name text-capitalize"><strong><?php echo $_SESSION['usuario']['Nombre'] ?> <?php echo $_SESSION['usuario']['Apellido'] ?></strong></div>
								<div class="info">
									<span><i class="fa fa-fw fa-clock-o"></i> <a href="tel:+<?php echo $_SESSION['usuario']['Telefono'] ?>" title="#">+<?php echo $_SESSION['usuario']['Telefono'] ?></a></span>
									<span><i class="fa fa-fw fa-list-alt"></i> <a href="#" title="#"><?php echo $_SESSION['usuario']['Email'] ?></a></span>
									<span class="text-capitalize"><i class="fa fa-fw fa-cog"></i> <?php echo $_SESSION['usuario']['Tipo'] ?></span>
								</div>
								<div class="socialIcons clearfix">
									<form id="log-out">
									<button type="submit" class="btn btn-large btn-block btn bg-red">Log Out <i class="fa fa-power-off"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-md-8 col-lg-9">
						<div class="box">
							<h2 class="boxTitle">Personal information</h2>

							<!-- Tabs -->
							<ul class="nav nav-tabs userProfileTabs" role="tablist">
								<li role="presentation" class="active"><a href="#tab-item-1" aria-controls="tab-item-1" role="tab" data-toggle="tab">Cambio de clave</a></li>
								<li role="presentation"><a href="#tab-item-2" aria-controls="tab-item-2" role="tab" data-toggle="tab">Actividades</a></li>
								
							</ul>

							<div class="tab-content">

								<!-- About -->
								<div role="tabpanel" class="tab-pane fade in active" id="tab-item-1">
									
									<div class="userProfileContent">
									
									
<!--=====================================
=            CAmbio de clave            =
======================================-->

<form  id="nueva-clave" action="" method="POST" class="form-inline" role="form">

	<div class="form-group">
		<label class="sr-only" for="">Nueva Clave:</label>
		<input type="hidden" name="id" value="<?php echo $_SESSION['usuario']['Id'] ?>">
		<input type="password" name="clave" class="form-control" id="" placeholder="Nueva Clave:">
	</div>

	

	<button type="submit" class="btn btn-primary">Cambiar Clave...!</button>
</form>

<!--====  End of CAmbio de clave  ====-->

									</div>
								</div>

								<!-- Activities -->
								<div role="tabpanel" class="tab-pane fade" id="tab-item-2">
									<div class="userActivities">
										
						 
<!--===========================================
=            Actividad del usuario            =
============================================-->



<!--====  End of Actividad del usuario  ====-->

							 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Search modal -->
	<div class="modal fade in" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form>
						<input type="text" class="form-control" placeholder="Type search term...">
						<button type="submit" class="btn">Go</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
	<script src="../assets/js/select2.min.js"></script>
	<script src="../assets/js/parsley.min.js"></script>
	<script src="../assets/js/throttle-debounce.min.js"></script>
	<script src="../assets/js/jquery.shuffle.min.js"></script>
	<script src="../assets/js/autosize.min.js"></script>
	<script src="../assets/js/raphael-min.js"></script>
	<script src="../assets/js/morris.min.js"></script>
	<script src="../assets/js/Chart.min.js"></script>
	<script src="../assets/js/chartist.min.js"></script>
	<script src="../assets/js/jquery.fullscreen.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
<script src="../assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
	<div class="visible-xs visible-sm extendedChecker"></div>
</body>

<script type="text/javascript">
	
	$(document).ready(function() {
		$('#log-out').on('submit',  function(event) {
			event.preventDefault();
			/* Act on the event */
//alert('log out');
$.ajax({
	url: 'envios/log-out.php',
	type: 'POST',
	
	data: $('#log-out').serialize(),
})
.done(function(data) {
	console.log("success");
	

swal({ 
  title: "Sesión cerrada exitosamente!",
   text: "Lo esperamos pronto!",
    type: "success" 
  },
  function(){
  // location.reload();
    window.location.href = 'index.php';
});


})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});


		});
	});


$(document).ready(function() {
	
$('#nueva-clave').on('submit',  function(event) {
	event.preventDefault();
	/* Act on the event */




	$.ajax({
		url: 'envios/cambio-clave.php',
		type: 'POST',
		
		data: $('#nueva-clave').serialize(),
	})
	.done(function(data) {
		console.log("success");
		console.log(data);

		if (data == 'true') {

 swal("Good job!", "Clave actualizada con éxito...!", "success");

		}
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});


	});
	
});

</script>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:29 GMT -->
</html>