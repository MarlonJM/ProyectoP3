<?php include "authLogin.php"; ?>
<?php include "phpclass/persona.php"; ?>
<?php include "headerEdit.php" ?>

		<div id="intro">

			<video id="videoIntro" autoplay="autoplay" loop>
				<source src="video/back3.mp4" type="video/mp4"></source>
			</video>

			<div class="dropdown">
				  <i class="icon-menu"></i>
				  <div class="dropdown-content">
				    <a href="#acerca">Acerca</a>
				    <a href="#proyectos">Proyectos</a>
				    <a href="#galeria">Galería</a>
				  </div>
			</div>

			<div id="perfil">
				
			</div>
			
		</div>

		<div id="acerca">

			<div id="descripcion">
				<h1>Acerca de Mi</h1>
				
			</div>

			<div id="contacto">
				<div id="datos">
					<h1>Contacto</h1>
						
					
				</div>

				<div id="formacion">
					<h1>Formación Académica</h1>
				</div>
				
			</div>

		</div>

		<div id="proyectos">

			<h1>Proyectos</h1>

		</div>

		<div style="clear:both;"></div>


		<div id="galeria">
			<h1>Galería</h1>
		</div>

		<div id="pasatiempos">
			<h1>Pasatiempos</h1>
			<div id=contenedor>
				
			</div>
		</div>

<?php include "footer.php" ?>