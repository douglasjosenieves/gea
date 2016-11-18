<?php
require_once 'nav_define.php';
?>


		<nav class="simpleList asideNavigation">
			<ul>
				<li class="active"><a href="../index.php" title="#"><i class="zmdi zmdi-apps zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Panel de Control</span></a></li>
				
				

				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Tablas <i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/index.php" title="#">Clientes </a></li>
					<li><a href="<?php echo BASE_URL ?>mod_inventario/index.php" >Articulos </a></li>
					</li>
						 
					</ul>
				</li>


<li class="sub js-submenu">
					<div><i class="zmdi zmdi-tune zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Procesos  <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul>
							
					<li><a href="<?php echo BASE_URL ?>mod_seguimientos/index.php" title="#">Seguimientos</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_servicios/index.php" title="#">Servicios</a></li>
					
				
			<!-- 	<li><a href="documentos.php" title="#">Documentos</a> -->
<li><a href="<?php echo BASE_URL ?>mod_listado_whatapp/index.php" title="#">Listado whatsapp</a>  </li>

					<?php  if ($_SESSION['usuario']['Tipo'] == 'administrador') {?>
<li><a href="<?php echo BASE_URL ?>mod_clientes/anulados.php" title="Administracion de contactos">Clientes Anulados</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_nota_entrega/index.php" title="#">Crear Nota de Entrega</a></li>

<li><a href="<?php echo BASE_URL ?>mod_cotizacion/index.php" title="Administracion de contactos">Crear Cotizacion</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_facturacion/index.php" title="Administracion de contactos">Crear Factura</a> </li> 
						<?php } ?>

					</ul>
				</li>

	<li class="sub js-submenu">
					<div><i class="zmdi zmdi-account-circle zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Mi Gestión <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
						<li><a href="<?php echo BASE_URL ?>mod_mi_gestion/mis_clientes.php" title="Perfil del usuario">Mis clientes</a></li>
						<li><a target="" href="<?php echo BASE_URL ?>mod_mi_gestion/mis_seguimientos.php" title="Perfil del usuario">Mis seguimientos</a></li>
 

						 
					</ul>
				</li>




				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-chart zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Reportes  <i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>

					<?php  if ($_SESSION['usuario']['Tipo'] == 'administrador') {

?>

					<li><a href="<?php echo BASE_URL ?>mod_clientes/reporte_clientes.php" title="#">Clientes</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/reporte_clientes_status.php" title="#">Clientes por status</a></li>
						<li><a href="<?php echo BASE_URL ?>mod_inventario/reporte.php" title="#">Artículos</a></li>
<li><a href="<?php echo BASE_URL ?>mod_nota_entrega/reporte.php" title="#">Notas de entrega</a></li>
<li><a href="<?php echo BASE_URL ?>mod_cotizacion/reporte.php" title="Administracion de contactos">Cotizaciones</a> </li>
<li><a href="<?php echo BASE_URL ?>mod_facturacion/reporte.php" title="Administracion de contactos">Facturas</a> </li> 



			<li><a href="<?php echo BASE_URL ?>mod_seguimientos/reporte-seguimientos-abiertos.php" title="#">Seguimientos<span class="label label-danger">ABIERTO</span></a></li>
			<li><a href="<?php echo BASE_URL ?>mod_servicios/reporte.php" title="#">Servicios</a></li>
			

<?php } ?>

					 
						



<!-- <li><a href="reporte-fichas-opciones-pdf.php" title="#">Ficha de opciones Pdf</a></li> -->





						
					</ul>


				</li>






				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-calendar-check zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Calendario <i class="zmdi zmdi-plus plus"></i></span></div>
                 <ul>
					    <li><a href="<?php echo BASE_URL ?>mod_calendario/index.php" title="Perfil del usuario">Crear evento</a></li>
						<li><a href="<?php echo BASE_URL ?>mod_calendario/ver.php" title="Perfil del usuario">Ver Calendario</a></li>
 

						 
					</ul>

				</li>
				
				
				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-playlist-plus zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Extras <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
						<li><a href="<?php echo BASE_URL ?>mod_usuarios/user-profile.php" title="Perfil del usuario">Perfil del usuario</a></li>
						

						 
					</ul>
				</li>
			</ul>
		</nav>
		