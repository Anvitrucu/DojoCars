
 <p class='titulo'>
 <?php if ($idioma == "es") { ?>   PARA VERIFICAR LOS USUARIOS CARGADOS AL SISTEMA, HACER CLIC<?php } else if ($idioma == "en"){ ?> TO VERIFY USERS CHARGED TO THE SYSTEM, CLICK <?php } ?>
   <a href="tu_perfil.php?op=ver_usuarios_cargados">
   <?php if ($idioma == "es") { ?>AQUÍ<?php } else if ($idioma == "en"){ ?>HERE<?php } ?>
   </a></p>  <br> 


<center><b>
<?php
include ("php/funciones/mensaje.php");
?>
</center></b>

<center><section id="form_ventas" style="display:inline-block; width:100%;"><br><hr><hr></center>


	<?php 

	if (isset($_GET["id"])) {
		
		$id_usuario = $_GET["id"];

		?>
		<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_admin_usuario.php" method="POST" enctype="multipart/form-data">

			<input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">

		<?php

		$busqueda_usuario="SELECT * FROM usuario WHERE id_usuario='$id_usuario' ";

		$ejecutar_busqueda_usuario = $conexion->query($busqueda_usuario);

		$arreglo_busqueda = $ejecutar_busqueda_usuario->fetch_assoc();

		$usuario_nombre = utf8_encode($arreglo_busqueda['usuario_nombre']);

		$contrasena = $arreglo_busqueda['contrasena'];

		$tipousuario_tipousuarioid = $arreglo_busqueda['tipousuario_tipousuarioid'];

		$correo = $arreglo_busqueda['correo'];

		$telefono_1 = $arreglo_busqueda['telefono_1'];

		$latitud = $arreglo_busqueda['latitud'];

		$longitud = $arreglo_busqueda['longitud'];

		$rango = $arreglo_busqueda['rango'];

		$direccion = $arreglo_busqueda['direccion'];



		
	}

	else 

	{
		?>

		<form id="form_perfil" name="form_perfil" action="php/funciones/subir_crear_usuario.php" method="POST" enctype="multipart/form-data">

		<?php
	}


	?>
	 

		
 
<center>
	<?php if ($idioma == "es") { ?><h1>Formulario de Inscripción de Nuevo Usuario</h1><?php } else if ($idioma == "en"){ ?><h1>New User Registration Form</h1><?php } ?>
</center><br><br>

<?php 

if ($nivel_usuario==4) {
	?>

	<input type="hidden" name="nivel_usuario" value="3">

	<input type="hidden" name="cargado_por" value="<?php echo $id_usuario ?>">

	<?php
}

else

{
	?>

	<div>
				<label for="nombre" style="padding:1%; display: inline-block; float: left;"> 
				<?php if ($idioma == "es") { ?><p>Buscar Usuario Por Nivel</p><?php } else if ($idioma == "en"){ ?><p>Search User by Level:</p><?php } ?></label> &nbsp;&nbsp;&nbsp;&nbsp;
				<select name="nivel_usuario" required style="padding:1%; display: inline-block; float: left;">

					<option value="">
					<?php if ($idioma == "es") { ?><p>Seleccione su Nivel</p><?php } else if ($idioma == "en"){ ?><p>Select Your Level</p><?php } ?>
					</option>
					<option value="2" <?php if ($tipousuario_tipousuarioid=="2") {echo "selected";}   ?> >
						<?php if ($idioma == "es") { ?><p>Manager</p><?php } else if ($idioma == "en"){ ?><p>Manager</p><?php } ?>
					</option>
					 
					<option value="3" <?php if ($tipousuario_tipousuarioid=="3") {echo "selected";}   ?>>
						<?php if ($idioma == "es") { ?><p>Cliente</p><?php } else if ($idioma == "en"){ ?><p>Customer</p><?php } ?>
					</option>

					<option value="4" <?php if ($tipousuario_tipousuarioid=="4") {echo "selected";}   ?>>
						<?php if ($idioma == "es") { ?><p>Tecnicos</p><?php } else if ($idioma == "en"){ ?><p>Representative</p><?php } ?>
					</option>


					</select>
		</div><br><br>

	<?php
}

?>

		




		<div>
		<br>

				<label for="nombre" id="Formularios" > 
					<?php if ($idioma == "es") { ?><p>Nombre</p><?php } else if ($idioma == "en"){ ?><p>Name:</p><?php } ?></label><br><br><br>
				<input value="<?php echo $usuario_nombre ?>" type="text" id="nombre" class="cambio" style="width: 60%" maxlength="45" name="nombre" placeholder="<?php if ($idioma == "es") { ?>Escribe tu nombre<?php } elseif ($idioma == "en") { ?>Write your name<?php } ?>" title="Tu nombre (Campo Requerido)" required/><br><br><br>
		</div>



		 


		<div>
				<label for="contrasena" > 
					<?php if ($idioma == "es") { ?><p>Contraseña:</p><?php } else if ($idioma == "en"){ ?><p>Password:</p><?php } ?></label><br>
				<input value="<?php echo $contrasena ?>"  type="password" id="contrasena" class="cambio" style="width: 60%" name="contrasena" maxlength="45" placeholder="<?php if ($idioma == "es") { ?>Escribe tu contraseña<?php } elseif ($idioma == "en") { ?>Enter your password<?php } ?>" title="Por tu seguridad usa letras, numeros y caracteres" required/><br><br><br>
		</div>




		<div>
				<label for="contrasena2" > 	<?php if ($idioma == "es") { ?><p>Repita Contraseña:</p><?php } else if ($idioma == "en"){ ?><p>Repeat Password:</p><?php } ?></label><br>
				<input type="password" value="<?php echo $contrasena ?>" id="contrasena2" class="cambio" style="width: 60%" name="contrasena2" maxlength="45" placeholder="<?php if ($idioma == "es") { ?>Repite tu contraseña<?php } elseif ($idioma == "en") { ?>Repeat your password<?php } ?>" title="recuerda usar una contraseña segura" required/><br><br><br>
		</div>



		<div>
				<label for "email">
					<?php if ($idioma == "es") { ?><p>Correo electrónico:</p><?php } else if ($idioma == "en"){ ?><p>Email:</p><?php } ?></label><br>
				<input value="<?php echo $correo ?>" type="email" id="email" class="cambio" style="width: 60%" name="email" placeholder ="<?php if ($idioma == "es") { ?>Escribe tu Email<?php } elseif ($idioma == "en") { ?>Write your Email<?php } ?>" maxlength="45" title="Tu email (Campo Requerido)" required /><br><br><br>
		</div>


		<div>
				<label for "email">
					<?php if ($idioma == "es") { ?><p>Telefono:</p><?php } else if ($idioma == "en"){ ?><p>Phone number:</p><?php } ?></label><br>
				<input value="<?php echo $telefono_1 ?>" type="text" id="email" class="cambio" style="width: 60%" name="telefono_1" placeholder ="<?php if ($idioma == "es") { ?>Escribe tu Telefono<?php } elseif ($idioma == "en") { ?>Write your Phone Number<?php } ?>" maxlength="45"   required /><br><br><br>
		</div>


		<div>
				<label for "email">
					<?php if ($idioma == "es") { ?><p>Direccion:</p><?php } else if ($idioma == "en"){ ?><p>Adress:</p><?php } ?></label><br>
				<input value="<?php echo $direccion ?>" type="text" id="email" class="cambio" style="width: 60%" name="direccion" placeholder ="<?php if ($idioma == "es") { ?>Escribe tu direccion<?php } elseif ($idioma == "en") { ?>Write your Adress<?php } ?>" maxlength="45"  required /><br><br><br>
		</div>


		 



		<hr><br><br>

		<h1>- Informacion para los tecnicos -</h1>


		<div>
				 
				Coordenadas del Consultor:<br><br>

				<input value="<?php echo $latitud ?>" type="number" step="any" id="latitud" class="cambio" style="width: 60%; padding: 1%" name="latitud" placeholder ="Latitud" maxlength="45" title="Latitud" required /><br><br>


				<input type="number" value="<?php echo $longitud ?>" step="any"  id="longitud" class="cambio" style="width: 60%; padding: 1%" name="longitud" placeholder ="Longitud" maxlength="45" title="Longitud" required /><br><br><br>


				Rango de Trabajo (En Millas) <br><br>

				<input type="number" value="<?php echo $rango ?>" step="any" id="" class="cambio" style="width: 60%; padding: 1%" name="rango" placeholder ="Rango" maxlength="45" title="Rango" required /><br><br>



				<br>
		</div>
 
 


 				<input type="hidden" name="pais_Paisid" value="<?php echo 1 ?>">
 
				<input type="hidden" name="tipo" value="<?php echo $tipo ?>">


			<center>	<input type="submit" id='boton_formulario' value="        <?php if ($idioma == "es") { ?>Crear<?php } else if ($idioma == "en"){ ?>Create<?php } ?>        "></center>


		</form>
