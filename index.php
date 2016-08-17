<?php
include 'phpclass/conectar.php';
include 'phpclass/persona.php';
include 'gestion_personas.php';
?>
<?php include "headerAdmin.php" ?>

			<div id="Intro">

				<video id="videoIntro" autoplay="autoplay" loop>
				    <source src="video/back5.mp4" type="video/mp4"></source>
				</video><!-- 
				<div style="margin-bottom:30px;height:50px;">
					
				</div> -->

				<nav id="menu">
					<ul>
						<li><a href="#who">¿Quienes Somos?</a></li>
						<li><a href="#team">Nuestro Equipo</a></li>
						<li><a href="#formulario">Forma Parte</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>	
				</nav>
			

				<div id="logo" style="margin-top:150px;">
					<img src="img/LOGO1.png">
				</div>
	
			</div>
			
			<div id="who">

			<div id="descWho">

			<h1>Somos</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

				<div class="servicios">
					<img src="img/htmlLogo.png">
					<h1>HTML</h1>
				</div>

				<div class="servicios">
					<img src="img/lapiz.png">
					<h1>Diseño</h1>
				</div>

				<div class="servicios">
					<img src="img/community2.png">
					<h1>Comunidad</h1>
				</div>
				
			</div>

			<div id="team">
				
			</div>


			<div id="formulario">
				<div id="contenedor">
					<div id="cuadro">
						<h1 style="text-align:center;color: #C43B3C; margin-bottom:10px;font-size:70px;">Formulario</h1>
						<form action="insertarPersona.php" method="post">
							<label style="margin-top:60px;">Nombre:</label><input type="" name="nombre" class="text">
							<label>Primer Apellido:</label><input type="" name="primerapellido" class="text">
							<label>Correo Electrónico:</label><input type="" name="correo" class="text">
							<label>Usuario:</label><input type="" name="usuario" class="text">
							<label>Contraseña:</label><input type="" name="clave" class="text">
							<button id="boton">Enviar</button>
						</form>
					</div>

				</div>
				
			</div>

			<footer>
				<h1>PKMS Design</h1>
			</footer>


<?php include "footerAdmin.php" ?>