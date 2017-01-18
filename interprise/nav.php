<?php
require_once 'nav_define.php';
?>



		<nav class="simpleList asideNavigation">
			<ul>
				<li class="active"><a href="../index.php" title="#"><i class="zmdi zmdi-apps zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Panel de Control</span></a></li>
				
			

			<?php if (
$_SESSION['usuario']['Tipo']=='SUPERUSER'  OR 
$_SESSION['usuario']['Tipo']=='ADMINISTRADOR' OR 
$_SESSION['usuario']['Tipo']=='VENTAS' 

): ?>	

				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-account-add zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Clientes<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/index.php" title="#">Nuevo </a></li>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/reporte_clientes.php" title="#">Ver</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/reporte_clientes_status.php" title="#">Ver por status</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_clientes/anulados.php" title="Administracion de contactos">Anulados</a> </li>
			
			</ul>
			</li>
<?php endif ?>


			<?php if (
$_SESSION['usuario']['Tipo']=='SUPERUSER'  OR 
$_SESSION['usuario']['Tipo']=='ADMINISTRADOR' OR 
$_SESSION['usuario']['Tipo']=='COMPRAS' 

): ?>
 
						

								<li class="sub js-submenu">
					<div><i class="zmdi zmdi-account-box-o zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Proveedores<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
					<li><a href="<?php echo BASE_URL ?>mod_proveedores/index.php" title="#">Nuevo </a></li>
					<li><a href="<?php echo BASE_URL ?>mod_proveedores/reporte.php" title="#">Ver</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_proveedores/status.php" title="#">Ver por status</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_proveedores/anulados.php" title="Administracion de contactos">Anulados</a> </li>
			
			</ul>
			</li>
					 
<?php endif ?>

			<?php if (
$_SESSION['usuario']['Tipo']=='SUPERUSER'  OR 
$_SESSION['usuario']['Tipo']=='ADMINISTRADOR' 


): ?>	

<li class="sub js-submenu">
					<div><i class="zmdi zmdi-city-alt zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Obras (Proyectos)<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
					<li><a href="<?php echo BASE_URL ?>mod_obras/index.php" title="#">Nuevo </a></li>
					<li><a href="<?php echo BASE_URL ?>mod_obras/reporte.php" title="#">Ver</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_obras/status.php" title="#">Ver por status</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_obras/anulados.php" title="Administracion de contactos">Anulados</a> </li>
			
			</ul>
			</li>
					


					 						<li class="sub js-submenu">
					<div><i class="zmdi zmdi-accounts-alt zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Instaladores<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
					<li><a href="<?php echo BASE_URL ?>mod_instaladores/index.php" title="#">Nuevo </a></li>
					<li><a href="<?php echo BASE_URL ?>mod_instaladores/reporte.php" title="#">Ver</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_instaladores/status.php" title="#">Ver por status</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_instaladores/anulados.php" title="Administracion de contactos">Anulados</a> </li>
			
			</ul>
			</li>
					 

					  						
			
				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-dialpad zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Articulos<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
			

						<li><a href="<?php echo BASE_URL ?>mod_articulos/index.php" >Nuevo</a></li>
			 	        <li><a href="<?php echo BASE_URL ?>mod_articulos/reporte.php" title="#">Ver</a></li>


			   <li class="sub js-submenu">
					<div class="sub-menu"><i class="zmdi zmdi-layers zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Categorias<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_articulos_cat/index.php" >Nuevo</a></li>
<li><a href="<?php echo BASE_URL ?>mod_articulos_cat/reporte.php" >Ver</a></li>

			</ul>
			</li>	


			 	        
			 	        


			 	    <li class="sub js-submenu">
					<div class="sub-menu"><i class="zmdi zmdi-download zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Entrada<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_articulos_entrada/index.php" title="Administracion de contactos">Nuevo</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_articulos_entrada/reporte.php" title="Administracion de contactos">Ver</a> </li> 

			</ul>
			</li>	


 	    <li class="sub js-submenu">
					<div class="sub-menu"><i class="zmdi zmdi-upload zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Salida<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_articulos_salida/index.php" title="Administracion de contactos">Nuevo</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_articulos_salida/reporte.php" title="Administracion de contactos">Ver</a> </li> 

			</ul>
			</li>	
				 

<li><a href="<?php echo BASE_URL ?>mod_articulos/inventario.php" title="#">Inventario Actual</a></li>
<li><a href="<?php echo BASE_URL ?>mod_articulos/movimientos.php" title="#">Movimientos</a></li>

			</ul>
			</li>
<?php endif ?>
<!-- 
				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-assignment zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Servicio<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
			 		<li><a href="<?php //echo BASE_URL ?>mod_servicios/index.php" title="#">Nuevo</a></li>
				 	<li><a href="<?php //echo BASE_URL ?>mod_servicios/reporte.php" title="#">Ver</a></li>
			</ul>
			</li> -->

<?php if (
$_SESSION['usuario']['Tipo']=='SUPERUSER'  OR 
$_SESSION['usuario']['Tipo']=='ADMINISTRADOR' OR
$_SESSION['usuario']['Tipo']=='COMPRAS' 
): ?>				
<li class="sub js-submenu">
					<div><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Compras<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_compras/index.php" title="Administracion de contactos">Nuevo</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_compras/reporte.php" title="Administracion de contactos">Ver</a> </li> 

			</ul>
			</li>	
						

	<?php endif ?>

<?php if (
$_SESSION['usuario']['Tipo']=='SUPERUSER'  OR 
$_SESSION['usuario']['Tipo']=='ADMINISTRADOR' OR
$_SESSION['usuario']['Tipo']=='VENTAS' 
): ?>



						<li class="sub js-submenu">
					<div><i class="zmdi zmdi-file-text zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Cotización<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
			 <li><a href="<?php echo BASE_URL ?>mod_cotizacion/index.php" title="Administracion de contactos">Nuevo</a> </li> <li><a href="<?php echo BASE_URL ?>mod_cotizacion/reporte.php" title="Administracion de contactos">Ver</a> </li>
			</ul>
			</li>	

	<li class="sub js-submenu">
					<div><i class="zmdi zmdi-accounts-alt zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Nota de Entrega<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
			<li><a href="<?php echo BASE_URL ?>mod_nota_entrega/index.php" title="#">Nuevo</a></li> 
           <li><a href="<?php echo BASE_URL ?>mod_nota_entrega/reporte.php" title="#">Ver</a></li>

			</ul>
			</li>

				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-money zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Facturación<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_facturacion/index.php" title="Administracion de contactos">Nuevo</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_facturacion/reporte.php" title="Administracion de contactos">Ver</a> </li> 

			</ul>
			</li>	

			
	<?php endif ?>

		



		



		
<?php if (
$_SESSION['usuario']['Tipo']=='SUPERUSER'  OR 
$_SESSION['usuario']['Tipo']=='ADMINISTRADOR' 

): ?>


	<li class="sub js-submenu">
					<div><i class="zmdi zmdi-balance zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Cajas y Bancos<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
			<li><a href="<?php echo BASE_URL ?>mod_cajas_bancos/index.php" title="#">Nuevo</a></li> 
           <li><a href="<?php echo BASE_URL ?>mod_cajas_bancos/reporte.php" title="#">Ver</a></li>
              <li><a href="<?php echo BASE_URL ?>mod_cajas_bancos/movimientos.php" title="#">Movimientos</a></li>



 	    <li class="sub js-submenu">
					<div class="sub-menu"><i class="zmdi zmdi-download zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Entrada<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_cajas_bancos_entrada/index.php" title="Administracion de contactos">Nuevo</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_cajas_bancos_entrada/reporte.php" title="Administracion de contactos">Ver</a> </li> 

			</ul>
			</li>	


 	    <li class="sub js-submenu">
					<div class="sub-menu"><i class="zmdi zmdi-upload zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Salida<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_cajas_bancos_salida/index.php" title="Administracion de contactos">Nuevo</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_cajas_bancos_salida/reporte.php" title="Administracion de contactos">Ver</a> </li> 

			</ul>
			</li>	
			</ul>

	



			</li>


	<?php endif ?>

	<?php if (
$_SESSION['usuario']['Tipo']=='SUPERUSER'  OR 
$_SESSION['usuario']['Tipo']=='ADMINISTRADOR' OR
$_SESSION['usuario']['Tipo']=='COBROS' 
 
): ?>


	<li class="sub js-submenu">
					<div><i class="zmdi zmdi-plus-circle zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Cta Por Cobrar<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
			<!-- <li><a href="<?php // echo BASE_URL ?>mod_cuenta_por_cobrar/index.php" title="#">Nuevo</a></li>  -->
           <li><a href="<?php echo BASE_URL ?>mod_cuenta_por_cobrar/reporte.php" title="#">Ver</a></li>
           <li><a href="<?php echo BASE_URL ?>mod_cuenta_por_cobrar/procesados.php" title="#">Procesados</a></li>
                <li><a href="<?php echo BASE_URL ?>mod_cuenta_por_cobrar/movimientos.php" title="#">Movimientos</a></li>

			</ul>
			</li>

<?php endif ?>

	<?php if (
$_SESSION['usuario']['Tipo']=='SUPERUSER'  OR 
$_SESSION['usuario']['Tipo']=='ADMINISTRADOR' OR
$_SESSION['usuario']['Tipo']=='PAGOS' 
 
): ?>
	<li class="sub js-submenu">
					<div><i class="zmdi zmdi-minus-circle zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Cta Por Pagar<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<!-- 			<li><a href="<?php // echo BASE_URL ?>mod_cuenta_por_pagar/index.php" title="#">Nuevo</a></li>  -->
           <li><a href="<?php echo BASE_URL ?>mod_cuenta_por_pagar/reporte.php" title="#">Ver</a></li>

     

           <li><a href="<?php echo BASE_URL ?>mod_cuenta_por_pagar/procesados.php" title="#">Procesados</a></li>
                <li><a href="<?php echo BASE_URL ?>mod_cuenta_por_pagar/movimientos.php" title="#">Movimientos</a></li>

      	   <li class="sub js-submenu">
					<div class="sub-menu"><i class="zmdi zmdi-money zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Crear Pagos<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_cuenta_por_pagar_doc/index.php" >Nuevo</a></li>
<li><a href="<?php echo BASE_URL ?>mod_cuenta_por_pagar_doc/reporte.php" >Ver</a></li>

			</ul>
			</li>

			</ul>
			</li>

<?php endif ?>

 

						
<li class="sub js-submenu">
					<div><i class="zmdi zmdi-notifications-active zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm" title="Seguimientos o Incidencias">Seguimientos<i class="zmdi zmdi-plus plus"></i></span></div>
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

 <?php if ($_SESSION['usuario']['Tipo']=='SUPERUSER'): ?>
 	
 
 	
 

<li class="sub js-submenu">
					<div><i class="zmdi zmdi-accounts-add zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Usuarios<i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
<li><a href="<?php echo BASE_URL ?>mod_usuarios/index.php" title="Administracion de contactos">Nuevo</a> </li> 
<li><a href="<?php echo BASE_URL ?>mod_usuarios/reporte.php" title="Administracion de contactos">Ver</a> </li> 

			</ul>
			</li>	

	<?php endif ?>	
				
				
				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-playlist-plus zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Extras <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
						<li><a href="<?php echo BASE_URL ?>mod_usuarios/user-profile.php" title="Perfil del usuario">Perfil del usuario</a></li>

			<?php if (
$_SESSION['usuario']['Tipo']=='SUPERUSER'  OR 
$_SESSION['usuario']['Tipo']=='ADMINISTRADOR' 


): ?>	

						<li><a href="<?php echo BASE_URL ?>mod_listado_whatapp/index.php" title="#">Listado whatsapp</a>  </li>
							<li><a href="<?php echo BASE_URL ?>mod_empresa/index.php" title="#">Empresa</a>  </li>
<?php endif ?>	
						 
					</ul>
				</li>
			</ul>
		</nav>
		