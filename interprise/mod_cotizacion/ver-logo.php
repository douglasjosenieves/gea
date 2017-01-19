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

 $resul =  mysql_query("SELECT * FROM  ".TABLA1." where id =$id");
$data = array();
while($row =  mysql_fetch_array($resul) ) {
$data['data'][] = $row;
}
}


if ($data['data'][0]['anulado']!=1) {
						$estado = 'ACTIVO';
					} else {
						$estado = 'ANULADO';
					}


$reg_id_uns =  unserialize($data['data'][0]['reg_id']);
$reg_nombre_uns =  unserialize($data['data'][0]['reg_nombre']);
$reg_descripcion_uns =  unserialize($data['data'][0]['reg_descripcion']);

$reg_und_med_uns =  unserialize($data['data'][0]['reg_und_med']);
$reg_cantidad_uns =  unserialize($data['data'][0]['reg_cantidad']);


$reg_precio_uns =  unserialize($data['data'][0]['reg_precio']);
$reg_subtotal_uns =  unserialize($data['data'][0]['reg_subtotal']);
$reg_subtotal_con_tax_uns =  unserialize($data['data'][0]['reg_subtotal_con_tax']);
$reg_tax_uns =  unserialize($data['data'][0]['reg_tax']);
$reg='';





 


foreach ($reg_id_uns as $key => $value) {
	//[ 'Value 1', 'Value 2', 'Value 3', 'Value 4' ]
	//{ text: 'Nombre', fontSize: 8 }
	

$reg .= "[";	
$reg .= "{ text: '".$reg_id_uns[$key].' | %'.$reg_tax_uns[$key]."', fontSize: 8 }, ";
$reg .= "{ text: '".strip_tags($reg_nombre_uns[$key])."', fontSize: 8 }, ";
$reg .= "{ text: '".strip_tags($reg_descripcion_uns[$key])."', fontSize: 8 }, ";
$reg .= "{ text: '".$reg_cantidad_uns[$key].$reg_und_med_uns[$key].' x '.$reg_precio_uns[$key].MONEDA."', fontSize: 8 }, ";
 
$reg .= "{ text: '".MONEDA.$reg_subtotal_uns[$key]."', fontSize: 8 }, ";
$reg .= "{ text: '".MONEDA.$reg_subtotal_con_tax_uns[$key]."', fontSize: 8 }, ";
$reg .= "],";

}


$total_parcial =  $data['data'][0]['total_parcial'];

$total_tax =  $data['data'][0]['total_tax'];
$total_total =  $data['data'][0]['total_total'];
 
 

?>
<!doctype html>
<html class="no-js" ng-app lang="es">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo TITULO ?> (Ver)</title>
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

<!--   <script src="../../assets/tinymce/tinymce.min.js"></script> -->
  <script src="../assets/tinymce/tinymce.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  <script>
 


  </script>

	<link rel="stylesheet" href="../assets/sweetalert/sweetalert-master/dist/sweetalert.css">
	 
	<!-- Modernizr -->
	<script src="../assets/js/modernizr-2.8.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-animate.js"></script> 

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
					<a href="#" title="#"><?php echo TITULO ?> (Ver)</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Sharpen</a></li>
					<li class="active">Procesos</li>
				</ol>
				
				<div class="box rte">
					<h2 class="boxHeadline"><?php echo TITULO ?> (Ver)</h2>
					<h3 class="boxHeadlineSub">Generar documentos</h3>
					
										<div class="row">
	
		


 <div class="col-xs-12 col-sm-2">
								<div class="form-group">
									<label for="referencia">Nº Referencia</label>
									<input type="text" readonly required class="form-control" name="referencia" id="referencia" placeholder="Nº Referencia">
								</div>
							</div>

								 
														 
															
						 


<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="elaborado_por" id="elaborado_por" placeholder="Elaborado Por:">

<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="editado_por" id="editado_por" placeholder="Elaborado Por:">



<?php require_once '../asesor_funtion.php'; ?>

						 	
						 	<div class="col-xs-12 col-sm-4">
						 	<div class="form-group">
						 	<label for="basicInput">Elaborado:</label>
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

<?php    require_once '../status_estado.php'; ?>
 <div class="row">
 	<div class="col-xs-12 col-sm-4 i">
								<div class="form-group">
									<label>El documento se encuentra: <?php echo statusestado($estado); ?></label>
									<select id="anular" class="js-select">
										<option value="">- Seleccione -</option>
										<option value="1">ANULADO</option>
										<option value="0">ACTIVADO</option>
								 
									</select>
								</div>
							</div>



 </div>

<div class="row">
	
	<div class="col-xs-12 col-sm-4 i">
							 <a href="reporte.php" id="salir" type="button" class="btn bg-green"> <i class="fa fa-reply"></i>Salir</a>
							</div>
</div>
 	

 </div>






			
				 <!--====================================================
					 =            AQUI VA EL CONTENIDO DEL SITE-            =
					 =====================================================-->
					 
					 
				  <iframe id='pdfV' style="width:100%; height: 500px;" > </iframe> 
					 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
  
				
				</div>
				</div>
				
			
			</div>
		</div>
	<!-- </div> -->
	
	
	<!-- Search modal -->
<?php require_once '../buscar.php'; ?>
<?php require_once '../funciones/proyectos.php'; ?>
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
 

<script src="../assets/pdfmake/pdfmake.min.js"></script>
<script src="../assets/pdfmake/vfs_fonts.js"></script>

<script src="../assets/js/empresa_logo.js"></script>
<script src="../assets/js/empresa.js"></script>

 <script type="text/javascript">



var id = '<?php echo $data['data'][0]['id'] ?>';
var enc_cliente = '<?php echo $data['data'][0]['enc_cliente'] ?>';
var enc_cliente_documento = '<?php echo $data['data'][0]['enc_cliente_documento'] ?>';
var enc_cliente_direccion = '<?php echo $data['data'][0]['enc_cliente_direccion'] ?>';
var enc_cliente_tel = '<?php echo $data['data'][0]['enc_cliente_tel'] ?>';
var enc_cliente_email = '<?php echo $data['data'][0]['enc_cliente_email'] ?>';
var enc_lugar_emision = '<?php echo $data['data'][0]['enc_lugar_emision'] ?>';
var enc_fecha_emision = '<?php echo $data['data'][0]['enc_fecha_emision'] ?>';
var enc_comentarios = '<?php echo $data['data'][0]['enc_comentarios'] ?>';
var enc_orden = '<?php echo $data['data'][0]['enc_orden'] ?>';
 
var reg_id = <?php echo json_encode($reg_id_uns) ?>;
var reg_nombre = <?php echo json_encode($reg_nombre_uns) ?>;
var reg_descripcion = <?php echo json_encode($reg_descripcion_uns) ?>;
var reg_cantidad = <?php echo json_encode($reg_cantidad_uns) ?>;
var reg_precio = <?php echo json_encode($reg_precio_uns) ?>;
var reg_subtotal = <?php echo json_encode($reg_subtotal_uns) ?>;
var reg_subtotal_con_tax = <?php echo json_encode($reg_subtotal_con_tax_uns) ?>;
var total_parcial = "<?php echo MONEDA.$total_parcial ?>";
var total_tax = "<?php echo MONEDA.$total_tax ?>";
var total_total = "<?php echo MONEDA.$total_total ?>";

var ext1 = '<?php echo proyectos($data['data'][0]['ext1']) ?>';

  if (reg_id!=null) {
for(var i=0;i<reg_id.length;i++)
    {
       console.log(reg_nombre[i]);
   

 


    }
 
}



update();
	





function update() {
 
 
var docDefinition = {
	content: [
		

   {
       image: logo,
		width: 150
    },
 

{ text: emp_nombre+' '+emp_documento, fontSize: 12, bold: true ,  alignment: 'left',margin: [ 0, 20, 0, 0 ]},
{ text: emp_dir, fontSize: 8 ,  alignment: 'left'},
{ text: emp_tel, fontSize: 8,  alignment: 'left'},
{ text: emp_email, fontSize: 8,  alignment: 'left'},
{ text: emp_web, fontSize: 8,  alignment: 'left'},
	 
 

{ text: '<?php echo TITULO2 ?> # '+id+'', style:'header' ,  alignment: 'right',margin: [ 0, 20, 0, 0 ]},		
               

{ text: ''+enc_cliente+' '+enc_cliente_documento, fontSize: 12, bold: true ,  alignment: 'right',margin: [ 0, 5, 0, 0 ]},
{ text: enc_cliente_direccion, fontSize: 8 ,  alignment: 'right'},
{ text: enc_cliente_tel, fontSize: 8,  alignment: 'right'},
{ text: enc_cliente_email, fontSize: 8,  alignment: 'right'},

{ text: enc_lugar_emision +' '+enc_fecha_emision, fontSize: 8,  alignment: 'right',margin: [ 0, 5, 0, 0 ]},
{ text: 'Orden #: '+enc_orden, fontSize: 8,  alignment: 'right'},
		
{ text: 'Comentarios: '+enc_comentarios, fontSize: 10,  alignment: 'left',margin: [ 0, 5, 0, 20 ]},
{ text: 'Proyecto: '+ext1, fontSize: 10,  alignment: 'left',margin: [ 0, 5, 0, 20 ]},

/*=============================================
=            Aqui van los reglones            =
=============================================*/
 {
      table: {
        // headers are automatically repeated if the table spans over multiple pages
        // you can declare how many rows should be treated as headers
         style: 'tableExample',
        headerRows: 1,
   widths: [ 30, '*', 90, 60 , 60, 60],
        body: [
          [ { text: 'Id', bold: true }, 
          { text: 'Nombre', bold: true }, 
          { text: 'Descripción', bold: true }, 
          { text: 'Cantidad', bold: true }, 
        
          { text: 'Subtotal', bold: true },  
          { text: 'Total', bold: true },  
          ],

/*=====================================================
=            Aqui va el siclo de los items            =
=====================================================*/

//  [ 'Value 1', 'Value 2', 'Value 3', 'Value 4' ],

<?php echo $reg ?>



/*=====  End of Aqui va el siclo de los items  ======*/
[ '', '', '', '', '', ' '],
   [ '', '', '', '',  {text: 'SUB-TOTAL:', bold: true, fontSize: 8 }, total_parcial ],
   [ '', '', '', '',  {text: '<?php echo IVA ?>:', bold: true, fontSize: 8 }, total_tax],
     [ '', '', '', '',  {text: '<?php echo TOTAL_A ?>', bold: true, fontSize: 12 }, {text: total_total, bold: true }],
          
        ]
      },

      layout: {
                                                        hLineWidth: function(i, node) {
                                                                return (i === 0 || i === node.table.body.length) ? 2 : 1;
                                                        },
                                                        vLineWidth: function(i, node) {
                                                                return (i === 0 || i === node.table.widths.length) ? 2 : 1;
                                                        },
                                                        hLineColor: function(i, node) {
                                                                return (i === 0 || i === node.table.body.length) ? 'black' : 'gray';
                                                        },
                                                        vLineColor: function(i, node) {
                                                                return (i === 0 || i === node.table.widths.length) ? 'black' : 'gray';
                                                        },
                                                        // paddingLeft: function(i, node) { return 4; },
                                                        // paddingRight: function(i, node) { return 4; },
                                                        // paddingTop: function(i, node) { return 2; },
                                                        // paddingBottom: function(i, node) { return 2; }
                        }
     
    },




/*=====  End of Aqui van los reglones  ======*/


	],


	styles: {
		header: {
			fontSize: 18,
			bold: true,
		    margin: [0,20,0,20]
		},
		subheader: {
			fontSize: 14,
			bold: true
		},
		quote: {
			italics: true
		},
			tableExample: {
			margin: [0, 5, 0, 15],
			fontSize: 8
		},
		small: {
			fontSize: 10,
			margin: [0,20,0,80]
		}
	}
}


pdfMake.createPdf(docDefinition).getDataUrl(function (outDoc) {
document.getElementById('pdfV').src = outDoc;
});

//$('#pdfV').replaceWith($('#pdfV').clone());
//document.getElementById('pdfV').src = document.getElementById('pdfV').src
//document.location.reload([true]);

	//alert('update');
	// body...
}

  // open the PDF in a new window
 //pdfMake.createPdf(docDefinition).open();

 // print the PDF (temporarily Chrome-only)
 //pdfMake.createPdf(docDefinition).print();

 // download the PDF (temporarily Chrome-only)
 //pdfMake.createPdf(docDefinition).download('optionalName.pdf');

  





 
 </script>

 <script type="text/javascript">
 	
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


/*========================================
=            Anular Ducumento            =
========================================*/

$('#anular').on('change', function(event) {
	event.preventDefault();

	var valor = $(this).val();
	//alert('vAs a anular un ducumento!');

$.ajax({
	url: 'envios/anular.php',
	type: 'POST',

	data: {referencia: id, anulado:valor, editado_por:usuarioOnline},
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

location.reload();
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
});


});



/*=====  End of Anular Ducumento  ======*/


 </script>
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>