<?php

	session_start();

 

	
 	?>

		<form id="form_perfil" name="form_perfil" action="php/funciones/subir_contacto.php" method="POST" enctype="multipart/form-data">
<center><b>
		<?php 

		include ("php/funciones/mensaje.php");

		?>
 </center></b>
<img src='img/divisor.png' width='80%' style='margin-left:10%'><p class='titulo'>Escriba su mensaje especificando su problema o duda</p><img src='img/divisor.png' width='80%' style='margin-left:10%'> <br><br>
		<div id="texto_perfil">

				<br>Nombre de Usuario:<br><br>
				
				<input type="text" id="usuario" class="cambio" size="80%" name="usuario" placeholder="Escribe tu nombre de usuario" title="Escribe tu nombre de usuario" maxlength="60" required/><br><br>
		
				Correo Electrónico:<br><br>
				<input type="email" id="correo" class="cambio" maxlength="45" size="80%" name="correo" placeholder="Escribe tu direccion de correo electrónico" title="Escribe tu direccion de correo electrónico" required/><br><br>
		
				
				
				<textarea cols="60" rows="10"  id="mensaje" class="cambio" name="mensaje" maxlength="1200" required/></textarea><br><br>

				<center><input type="submit" id='boton_formulario' value="Enviar"><br><br></center>
			
		</div>




		</form>


 