 
<center><fieldset style="width:90%"><br>

 			<?php 

 			if ($idioma == "es")

			{

				?>
				<h1>CONTACTO</h1><br>
				<?php

			}

			else if ($idioma == "en")

			{

				?>
				<h1>CONTACT</h1><br>
				<?php

			}
			?>


<br><br>
<br>

 

<div id ="suscribete">


			 
				<center><img src="img/pagina.png" width="80%"><img src="img/FORD_FOCU_2012-1.png" style="width: 80%"></center>
		 
</div>


			  
	<div id="iniciar_sesion"  >

			 <?php 

 			if ($idioma == "es")

			{

				?>
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_contactanos.php" method="GET" enctype="multipart/form-data">


			Nombre: <br><br> <input type="text" style="width: 80%" maxlength="45" name="nombre" placeholder="Tu Nombre" ><br><br>


			E-Mail: <br><br> <input type="text" style="width: 80%" name="correo" maxlength="45" placeholder= "Tu E-Mail"><br><br>


			Asunto: <br><br> <input type="text" style="width: 80%" name="pais" maxlength="45" placeholder= "Asunto"><br><br>


			Mensaje: <br><br> <textarea rows="6" style="width: 80%" name="mensaje"></textarea><br><br>


			 <center><input type="submit" id="boton_generico" value="Enviar"><br><br>

			 <?php include("php/funciones/mensaje.php") ?>

			 </center>


			</form> 
				<?php

			}

			else if ($idioma == "en")

			{

				?>
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_contactanos.php" method="GET" enctype="multipart/form-data">


			Name: <br><br> <input type="text" style="width: 80%"  maxlength="45" name="nombre" placeholder="Your Name" ><br><br>


			E-Mail: <br><br> <input type="text" id="password" style="width: 80%"    name="correo" maxlength="45" placeholder= "Your E-Mail"><br><br>


			Subject: <br><br> <input type="text" id="password" style="width: 80%"  name="pais" maxlength="45" placeholder= "Subject"><br><br>


			Mesaje: <br><br> <textarea rows="6" style="width: 80%"  name="mensaje"></textarea><br><br>


			 <center><input type="submit" id="boton_generico" value="Send"><br><br>

			 <?php include("php/funciones/mensaje.php") ?>

			 </center>


			</form> 
				<?php

			}
			?>


 

			 


	</div>



</section>
</div>
<br><br></fieldset>
