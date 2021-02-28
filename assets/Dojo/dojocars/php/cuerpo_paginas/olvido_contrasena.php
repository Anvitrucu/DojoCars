  

	<?php 


	if ($idioma == "es") 

	{

			 ?>

					<form id="contra" name="contra" action="php/funciones/subir_olvido_contra.php" method="post" enctype="multipart/form-data">

						<fieldset>

						<center>

								<p class='titulo'>ESCRIBA SU DIRECCIÓN DE CORREO PARA VALIDAR INFORMACIÓN</p> <br>

								<input type="text" id="correo" size="57%" name="correo" placeholder="Tu Correo" title="Tu Correo" required><br><br><br>

								<input type="submit" id="boton_formulario" value="Buscar">

								<br><br><?php include("php/funciones/mensaje.php") ?>

								</center>

						</fieldset>

					</form>


			 <?php

	  } 


	else if ($idioma == "en")


	{

	   ?>


	  				 <form id="contra" name="contra" action="php/funciones/subir_olvido_contra.php" method="post" enctype="multipart/form-data">

						<fieldset>

						<center>

								<p class='titulo'>ENTER YOUR E-MAIL TO SEND YOUR PASSWORD</p> <br>

								<input type="text" id="correo" size="57%" name="correo" placeholder="Your E-Mail" title="Your E-Mail" required><br><br><br>

								<input type="submit" id="boton_formulario" value="SEARCH">

								<br><br><?php include("php/funciones/mensaje.php") ?>

								</center>

						</fieldset>

					</form>



	   <?php 

	}

	    ?>


		

		
	
 