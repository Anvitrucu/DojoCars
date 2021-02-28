


<?php 

$tipo = $_GET["tipo"];

?>
<?php 

 			if ($idioma == "es")

			{

				?>
					<h1>Pánel de Registro de Usuarios</h1>
<fieldset>
 	


 	<form id="form_perfil" name="form_perfil" action="php/funciones/subir_inscribirse.php" method="POST" enctype="multipart/form-data">


            <?php include("php/funciones/login_facebook.php") ?><br><br><hr><hr><br>

		<center><section id="form_ventas" style="display:inline-block; width:80%;">
	
		<p class='titulo'>.... O LLENE LOS CAMPOS QUE SE REQUIEREN A CONTINUACIÓN </p>  <br> 

		<div>
				<label for="nombre" > Tu Nombre <br><br> </label>
				<input type="text" id="nombre" class="cambio" style="width: 80%"  maxlength="45" name="nombre" placeholder="Tu Nombre" title="Tu Nombre (Requerido)" required/><br><br><br> 
		</div>

 

		<div>
				<label for="contrasena" > Contraseña  <br><br></label>
				<input type="password" id="contrasena" class="cambio" style="width: 80%"  name="contrasena" maxlength="45" placeholder="Contraseña(Requerido)" title="Password (Required)" required/><br><br><br> 
		</div>




		<div>
				<label for="contrasena2" > Repita su Contraseña:  <br><br></label>
				<input type="password" id="contrasena2" class="cambio" style="width: 80%"  name="contrasena2" maxlength="45" placeholder="Repita su Contraseña" title="Repeat yout password" required/><br><br><br> 
		</div>



		<div>
				<label for "email">Correo Electrónico  <br><br></label>
				<input type="email" id="email" class="cambio" style="width: 80%"  name="email" placeholder ="Email (Required)" maxlength="45" title="Correo Electrónico (Requerido)" required /><br><br><br> 
		</div>
 
 


 				<input type="hidden" name="pais_Paisid" value="<?php echo 1 ?>">
 
				<input type="hidden" name="tipo" value="<?php echo $tipo ?>">


			<center>	<input type="submit" id='boton_formulario' value="Continuar"></center>


<?php
include ("php/funciones/mensaje.php");
?>
		</form>
	</fieldset><br><br> 
</section>
</center>



				<?php

			}

			else if ($idioma == "en")

			{

				?>
					<h1>User Registration Panel</h1>
<fieldset>
 	


 	<form id="form_perfil" name="form_perfil" action="php/funciones/subir_inscribirse.php" method="POST" enctype="multipart/form-data">


         <?php include("php/funciones/login_facebook.php") ?><br><br><hr><hr><br>

		<center>
		<section id="form_ventas" style="display:inline-block; width:80%;">
	
		<br>

		<p class='titulo'>.... OR FILL OUT THE FIELDS REQUIRED BELOW </p>  <br> 

		<div>
				<label for="nombre" > Your Name  <br><br></label>
				<input type="text" id="nombre" class="cambio" style="width: 80%"  maxlength="45" name="nombre" placeholder="Your Name " title="Your Name (Required)" required/><br><br><br> 
		</div>


 
 


		<div>
				<label for="contrasena" > Password  <br><br></label>
				<input type="password" id="contrasena" class="cambio" style="width: 80%" name="contrasena" maxlength="45" placeholder="Password (Required)" title="Password (Required)" required/><br><br><br> 
		</div>




		<div>
				<label for="contrasena2" > Repeat yout password:  <br><br></label>
				<input type="password" id="contrasena2" class="cambio" style="width: 80%" name="contrasena2" maxlength="45" placeholder="Repeat yout password" title="Repeat yout password" required/><br><br><br> 
		</div>



		<div>
				<label for "email">Email  <br><br>;</label>
				<input type="email" id="email" class="cambio" style="width: 80%" name="email" placeholder ="Email (Required)" maxlength="45" title="Email (Required)" required /><br><br><br> 
		</div>
 
 


 				<input type="hidden" name="pais_Paisid" value="<?php echo 1 ?>">
 
				<input type="hidden" name="tipo" value="<?php echo $tipo ?>">


			<center>	<input type="submit" id='boton_formulario' value="Continue"></center>


<?php
include ("php/funciones/mensaje.php");
?>
		</form>
	</fieldset><br><br> 
</section>
</center>


				<?php

			}
			?>