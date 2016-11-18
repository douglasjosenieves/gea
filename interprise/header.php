<?php require_once 'nav_define.php'; ?>
<script type="text/javascript">var usuarioOnline = <?php echo $_SESSION['usuario']['Id']; ?>;</script>
<header id="header" class="hidden-print">
		<h1 class="logo">
			<a href="#" title="#" class="js-nav-toggler">
				<i class="icon icon-close"></i>
			</a>
			<a href="<?php echo BASE_URL ?>index.php" title="GEA ERP"><img src="<?php echo BASE_URL ?>/img/icon-logo.png"> <span></span></a>
		</h1>

		<div class="pageContent">
			<div class="container">
				<ul class="topNavigation">
					<li>
						<div class="btn-group simpleList simpleListLighten messages">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="zmdi zmdi-email zmdi-hc-fw icon"></i>
								<span class="badge" id="chatCount"></span>
							</button>
							
							<ul id="chatRapido" class="dropdown-menu pull-right">
								


								<!-- <li>
									<a href="#" title="#" class="clearfix">
										<img src="tmp/44x44-3.jpg" alt="#" width="44" height="44" class="pull-left">
										<span class="pull-left">
											<strong class="text-gray">John Doe</strong><br />
											<span class="text-gray">Proin vel sapien at risus...</span>
										</span>
										<span class="pull-right">22 sec. ago</span>
									</a>
								</li> -->
							
							</ul>
							
						</div>
					</li>
					<li>
						<div class="btn-group simpleList list-sm">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="zmdi zmdi-bookmark zmdi-hc-fw icon"></i>
								<span id="contactos_nuevos_total" class="badge"></span>
							</button>

							<ul id="contactos_nuevos" class="dropdown-menu pull-right">
							
								
							
							</ul>

						</div>
					</li>

						<li>
						<a href="#"  id="reload" title="Refrescar">
					<i class="zmdi zmdi-refresh-sync icon"></i>
						</a>
					</li>
 

					<li>
						<a href="#" title="#">
							<i class="zmdi zmdi-fullscreen-alt zmdi-hc-fw icon js-fullscreen-enter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="#" data-toggle="modal" data-target="#searchModal">
							<i class="zmdi zmdi-search zmdi-hc-fw icon"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</header>