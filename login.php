<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
<meta charset="UTF-8">


<div class="login">

	<?php if(isset($_GET['error']) && $_GET['error'] == 'acceso-denegado') { ?>
		<div class="log-error error">
			<p>Acceso denegado</p>
		</div>
	<?php } ?>

	<form action="validarLogin.php" method="post">
		<div id="logo">
			<img src="img/LOGO1_opt.png">
		</div>
		<input type="text" name="user" class="login-input" placeholder="Usuario" autofocus>
		<input type="password" name="password" class="login-input" placeholder="Contraseña">
		<button class="login-button" name="iniciar">Iniciar Sesion</button>
	</form>

	<?php if (isset($_GET['error']) && $_GET['error'] == 'datos-incorrectos') { ?>
		<div class="log-error alert">
			<p>Usuario o contraseña incorrecta</p>
		</div>
	<?php } ?>

</div>