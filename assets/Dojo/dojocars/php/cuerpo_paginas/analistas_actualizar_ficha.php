<?php 

		$id_usuario_asociado = $_GET["id"];

		$busqueda_user="SELECT * FROM usuario_asociado WHERE id_usuario_asociado='$id_usuario_asociado' ";

		$ejecutar_busqueda_user = $conexion->query($busqueda_user);

		$arreglo_user = $ejecutar_busqueda_user->fetch_assoc();

		$nombre_cliente = $arreglo_user['nombre_cliente'];

		$ficha_nombre = $arreglo_user['ficha_nombre'];	

		$ficha_referencia = $arreglo_user["ficha_referencia"];

		$ficha_cedula = $arreglo_user["ficha_cedula"];

		$ficha_direccion = $arreglo_user["ficha_direccion"];

		$ficha_descripcion = $arreglo_user["ficha_descripcion"];

		$ficha_pais = $arreglo_user["ficha_pais"];

		$ficha_ciudad = $arreglo_user["ficha_ciudad"];

		$id_cliente = $arreglo_user["id_cliente"];

		$ficha_telefono = $arreglo_user["ficha_telefono"];

		$ficha_fecha_de_nacimiento = date("d-m-Y", strtotime($arreglo_user["ficha_fecha_de_nacimiento"])) ;



		$busqueda_original = "SELECT * FROM usuario WHERE  id_usuario='$id_cliente'  ";

		$ejecutar_consulta_original = $conexion->query($busqueda_original);

		$regis_original = $ejecutar_consulta_original->fetch_assoc();

		$ficha_correo = $regis_original['correo'];

 
?>



<section id="Cuerpo_perfil">
 
<center>
	<?php if ($idioma == "es") { ?><h1>Actualizar Perfil del Suscriptor</h1><?php } else if ($idioma == "en"){ ?><h1>Update Profile</h1><?php } ?>
</center>


<div id="texto_perfil">		



 
 

<form id="form_perfil" name="form_perfil" action="php/funciones/subir_actualizar_ficha.php" method="GET" enctype="multipart/form-data">

	<input type="hidden" name="id_usuario_asociado" value="<?php echo $id_usuario_asociado ?>">

	<input type="hidden" name="id_usuario" value="<?php echo $id_cliente ?>">

	
		 
 		<center>
		Nombre:<br><br> <input  type="text" id="usuario_nombre" style="width: 70%" class="cambio" name="nombre_cliente" maxlength="45" value= "<?php echo utf8_encode ($nombre_cliente); ?>"   required /><br><br><br>

 

		Referencia (Palabras claves o breve frase que ayude a identificar al cliente):<br><br> <input  type="text" id="usuario_nombre" style="width: 70%" class="cambio" name="ficha_referencia" maxlength="45" value= "<?php echo utf8_encode ($ficha_referencia); ?>"   required /><br><br><br>


		Identificacion (S.S.N. - D.N.I. - C.I.): <br><br><input  type="text" id="usuario_nombre" style="width: 70%" class="cambio" name="ficha_cedula" maxlength="45" value= "<?php echo utf8_encode ($ficha_cedula); ?>"   required /><br><br><br>

 
		Pais:<br><br> <input  type="text" id="usuario_nombre" style="width: 70%" class="cambio" name="ficha_pais" maxlength="45" value= "<?php echo utf8_encode ($ficha_pais); ?>"   required /><br><br><br>


		Ciudad:<br><br> <input  type="text" id="usuario_nombre" style="width: 70%" class="cambio" name="ficha_ciudad" maxlength="45" value= "<?php echo utf8_encode ($ficha_ciudad); ?>"   required /><br><br><br>


		Direccion:<br><br> <input  type="text" id="usuario_nombre" style="width: 70%" class="cambio" name="ficha_direccion" maxlength="45" value= "<?php echo utf8_encode ($ficha_direccion); ?>"   required /><br><br><br>


		Detalles Relevantes:<br><br><textarea style="width: 70%" rows="10" name="ficha_descripcion"><?php echo utf8_encode ($ficha_descripcion); ?></textarea>  <br><br><br>


		Fecha de Nacimiento:<br><br> <input  id="datepicker" style="width: 70%; padding: 1%" class="cambio" name="ficha_fecha_de_nacimiento" maxlength="45" value= "<?php echo utf8_encode ($ficha_fecha_de_nacimiento); ?>"   required /><br><br><br>

		Telefono de contacto:<br><br> <input  id="datepicker" style="width: 70%; padding: 1%" class="cambio" name="ficha_telefono" maxlength="45" value= "<?php echo utf8_encode ($ficha_telefono); ?>"   required /><br><br><br>


		 

<b>
		<?php

		include ("php/funciones/mensaje.php");


		?>
</b>
		<center><input type="submit" id="boton_formulario" value="
		<?php if ($idioma == "es") { ?>Actualizar<?php } else if ($idioma == "en"){ ?> Update<?php } ?>
		"><br><br><br></center>

		

		

</form>
</div>
</section>


		

