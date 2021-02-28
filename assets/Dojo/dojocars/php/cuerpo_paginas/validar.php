<br><br><br>

<section id ="inscribete_iniciar">


 <center>
			  
	<div id="iniciar_sesion" style="display:inline-block; float:left; width:60%">

			<p class="titulo">Debe validar su usuario para procesar su solicitud </p> 

			<form id="form_perfil" name="form_perfil" action="php/funciones/sesion.php" method="post" enctype="multipart/form-data">


			User: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="buscador" size="50%" maxlength="45" name="usuario" placeholder="Username" ><br><br>


			Password: &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="buscador" size="50%" name="contrasena" maxlength="45" placeholder= "Password"><br><br>


			<input type="submit" id="boton_formulario" value="Continue">&nbsp;&nbsp;&nbsp;<a href="index.php?menu=olvido_contrasena">Forgot Password?</a> 


			</form> <br><br><br><br><br><br>  

			<?php include ("php/funciones/mensaje.php"); ?>


	</div>


</center>
</section>
