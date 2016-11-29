<?php
require_once 'nav_define.php';
?>
<?php//  if ($_SESSION['usuario']['Tipo'] == 'administrador') {?>
<?php// } ?>


		<nav class="simpleList asideNavigation">
			<ul>
				<li class="active"><a href="../index.php" title="#"><i class="zmdi zmdi-apps zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Panel de Control</span></a></li>
				
				

				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Cliente<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/index.php" title="#">Nuevo </a></li>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/reporte_clientes.php" title="#">Ver</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/reporte_clientes_status.php" title="#">Ver por status</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/anulados.php" title="Administracion de contactos">Anulados</a> </li>
			
			</ul>
			</li>
						 
					
			
				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Inventario<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
						<li><a href="<?php echo BASE_URL ?>mod_inventario/index.php" >Nuevo</a></li>
			 	        <li><a href="<?php echo BASE_URL ?>mod_inventario/reporte.php" title="#">Ver</a></li>
				 
			</ul>
			</li>


				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Servicio<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
			 		<li><a href="<?php echo BASE_URL ?>mod_servicios/index.php" title="#">Nuevo</a></li>
				 	<li><a href="<?php echo BASE_URL ?>mod_servicios/reporte.php" title="#">Ver</a></li>
			</ul>
			</li>
					

						<li class="sub js-submenu">
					<div><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Cotización<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
			 <li><a href="<?php echo BASE_URL ?>mod_cotizacion/index.php" title="Administracion de contactos">Nuevo</a> </li> <li><a href="<?php echo BASE_URL ?>mod_cotizacion/reporte.php" title="Administracion de contactos">Ver</a> </li>
			</ul>
			</li>	

				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Facturación<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_facturacion/index.php" title="Administracion de contactos">Nuevo</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_facturacion/reporte.php" title="Administracion de contactos">Ver</a> </li> 

			</ul>
			</li>	

			


		



			<li class="sub js-submenu">
					<div><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Notas de Entregas<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
			<li><a href="<?php echo BASE_URL ?>mod_nota_entrega/index.php" title="#">Nuevo</a></li> 
           <li><a href="<?php echo BASE_URL ?>mod_nota_entrega/reporte.php" title="#">Ver</a></li>

			</ul>
			</li>



						
<li class="sub js-submenu">
					<div><i class="zmdi zmdi-border-color zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm" title="Seguimientos o Incidencias">Seguimientos<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_seguimientos/index.php" title="#">Nuevo</a></li>
 <li><a href="<?php echo BASE_URL ?>mod_seguimientos/reporte-seguimientos-abiertos.php" title="#">Ver<span class="label label-danger">ABIERTO</span></a></li>

			</ul>
			</li>	



		<li class="sub js-submenu">
					<div><i class="zmdi zmdi-calendar-check zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Calendario Eventos <i class="zmdi zmdi-plus plus"></i></span></div>
                 <ul>
					    <li><a href="<?php echo BASE_URL ?>mod_calendario/index.php" title="Perfil del usuario">Nuevo</a></li>
						<li><a href="<?php echo BASE_URL ?>mod_calendario/ver.php" title="Perfil del usuario">Ver</a></li>
 

						 
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
					<div><i class="zmdi zmdi-playlist-plus zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Extras <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
						<li><a href="<?php echo BASE_URL ?>mod_usuarios/user-profile.php" title="Perfil del usuario">Perfil del usuario</a></li>
						<li><a href="<?php echo BASE_URL ?>mod_listado_whatapp/index.php" title="#">Listado whatsapp</a>  </li>
						

						 
					</ul>
				</li>
			</ul>
		</nav>
		