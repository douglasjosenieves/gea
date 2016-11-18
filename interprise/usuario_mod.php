<div class="asideUserProfile">
			<a href="<?php echo BASE_URL ?>mod_usuarios/user-profile.php" title="#" class="c">
				<img src="../img/usuarios/<?php echo $_SESSION['usuario']['Foto'] ?>" alt="#" class="img-responsive">
				<span class="name hidden-xs hidden-sm"><?php echo $_SESSION['usuario']['Tipo'] ?><br /> <?php echo $_SESSION['usuario']['Nombre'] ?>-<?php echo $_SESSION['usuario']['Apellido'] ?></span>
			</a>
		</div>