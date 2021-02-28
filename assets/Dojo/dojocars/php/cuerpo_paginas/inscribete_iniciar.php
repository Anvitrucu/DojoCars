














<br>

<section id ="inscribete_iniciar" style="background: #F6F6F6">
<br><br><br>

 			<?php 

 			if ($idioma == "es")

			{

				?>
	 
	  <center>
	<div id="iniciar_sesion2" style="background-color: #FFF;" >

			<h3>Inicie sesión para disfrutar de los beneficios de<br> DOJOCARS</h3> 

			

			<form id="form_perfil" name="form_perfil" action="php/funciones/sesion.php" method="post" enctype="multipart/form-data">


			<input type="email" id="buscador"  style="width: 80%"  maxlength="45" name="usuario" placeholder="Correo Electrónico" ><br><br>


			<input type="password" id="buscador" style="width: 80%"  name="contrasena" maxlength="45" placeholder= "Contraseña"><br><br>


			<input type="submit" id="boton_formulario" value="Continuar"><br><br><a href="index.php?menu=olvido_contrasena">Olvidó su contraseña?</a>&nbsp; - <a href="index.php?menu=suscribirse&tipo=3">Crea tu cuenta</a><br><br>
            
            <center><label>O</label></center><br> 

			<?php   include("php/funciones/login_facebook.php") ?> 

             

			</form> <br><br>  

			<?php include ("php/funciones/mensaje.php"); ?>


	</div>
				<?php

			}

			else if ($idioma == "en")

			{

				?>
	 
<center>
	  
	<div id="iniciar_sesion2" style="background-color: #FFF;" >

			<h3> You Must Sign In to pay or access your C-Panel </h3> 

			<form id="form_perfil" name="form_perfil" action="php/funciones/sesion.php" method="post" enctype="multipart/form-data">


			<input type="text" id="buscador" style="width: 80%" maxlength="45" name="usuario" placeholder="E-Mail" ><br><br>


			<input type="password" id="buscador" style="width: 80%"  name="contrasena" maxlength="45" placeholder= "Password"><br><br>


			<input type="submit" id="boton_formulario" value="Continue"><br><br><a href="index.php?menu=olvido_contrasena">Forgot Password?</a>&nbsp; - <a href="index.php?menu=suscribirse&tipo=3">Create your acount</a><br><br>

			 <center><label>Or</label></center><br> 

			<?php   include("php/funciones/login_facebook.php") ?> <br><br>



             

			</form>   

			<?php include ("php/funciones/mensaje.php"); ?>


	</div>
				<?php

			}
			?>


<BR><BR>


</section>





 