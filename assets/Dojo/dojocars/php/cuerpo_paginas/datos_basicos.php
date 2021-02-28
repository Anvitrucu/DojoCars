<section id="Cuerpo_perfil">
 
<center>
	<?php if ($idioma == "es") { ?><h1>Actualizar Perfil</h1><?php } else if ($idioma == "en"){ ?><h1>Update Profile</h1><?php } ?>
</center>


<center>
<b>
		<?php

		include ("php/funciones/mensaje.php");


		?>
</b>
</center>


<div id="texto_perfil">		

<?php 

if ($nivel_usuario==4) {

?>
<form id="form_perfil" name="form_perfil" action="php/funciones/actualizar_biografia.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id_usuario" value=<?php echo $id_usuario ?> >

	<center>

 
<?php 


if (is_null($foto_perfil_general)) 

	{ $foto_perfil = "perfil.png"; } 

else 

	{$foto_perfil = $foto_perfil_general; }



 

if (is_null($biografia_general) || $biografia_general=="" ) 

	{ $biografia_general = "- No aviable -"; } 

else 

	{$biografia_general = nl2br(utf8_encode($biografia_general)); }
 
 
?>

Actualizar Foto de Perfil <br><br> <input type="file" name="foto_perfil"><br><br>


<img src="img/perfil/<?php echo $foto_perfil ?>" style="width: 25%">


	 

	<br><br>

	


	<textarea style="width: 90%" name="biografia" rows="5"><?php echo $biografia_general ?></textarea><br><br>
 

	 

		<?php 

		if ($establecimiento_activo_general=="SI") {
			?>

			<h3>- Su establecimiento fue registrado correctamente en el sistema -</h3>

			<p style="font-family: Arial; text-align: center;"><?php echo $establecimiento_direccion_general ?></p><br><br>



			<select name='establecimiento_activo' required style="width: 90%; padding: 2%" >
				<option value="YES">Deseo mantener el establecimiento registrado</option>
				<option value="NO">Deseo eliminar el establecimiento actual</option>
				 
			</select><br><br>



			<?php
		}

		if ($establecimiento_activo_general!="SI")

		{
			?>

			<script type="text/javascript">
				
				function cargar_establecimiento(valor){

					if (valor=="SI") {document.getElementById("establecimiento").innerHTML ="<br><input type='text' style='width:90%' name='establecimiento' placeholder='Direccion del Establecimiento' required><br><br><input type='checkbox' required> Declaro que mi establecimiento o area de trabajo, cumple con todos los permisos  y condiciones para trabajar normalmente de acuerdo a las leyes y exigencias locales<br><br>";}

					else {document.getElementById("establecimiento").innerHTML =" ";

					}

					
				}
			</script>

			<select name='establecimiento_activo' required style="width: 90%; padding: 2%" onchange="cargar_establecimiento(this.value)">
				<option value="">Desea anexar un nuevo establecimiento a su perfil</option>
				<option value="SI">SI</option>
				<option value="NO">NO</option>
			</select> 

			<div id="establecimiento" style="width: 100%"></div><br><br>

			<?php
		}

		?>



		Hora de apertura :
		<select name="hora_entrada">


			<?php 

			if (!is_null($hora_entrada_general)) {
				?>

				<option><?php echo $hora_entrada_general ?>:00</option>

				<?php
			}

			for ($i=01; $i < 24; $i++) { 
				?>

				<option><?php echo $i ?>:00</option>

				<?php
			}

			?>
		</select>


		Hora de cierre :
		<select name="hora_salida">
			<?php 

			if (!is_null($hora_salida_general)) {
				?>

				<option><?php echo $hora_salida_general ?>:00</option>

				<?php
			}

			for ($i=01; $i < 24; $i++) { 
				?>

				<option><?php echo $i ?>:00</option>

				<?php
			}

			?>
		</select>

 <br><br>

	<input type="submit" id="boton_generico"   ><br><br>



</form>
 
 <hr><hr>

<br> 
<a href="index.php?menu=profile&id=<?php echo $id_de_usuario ?>"><input type="button" id="boton_generico" value="Visita tu Ficha Técnica"></a><br><br>
<hr><hr>

 <?php 


}

 ?>
 

<form id="form_perfil" name="form_perfil" action="php/funciones/subir_perfil_datos.php" method="POST" enctype="multipart/form-data">

	
		
		<input type="text" id="foto_oculta" name="foto_oculta" value= "<?php echo $arreglo["foto_perfil"]; ?>" hidden/> 


 

		<label for "usuario_nombre"> <?php if ($idioma == "es") { ?><h4> Tu Nombre: </h4><?php } else if ($idioma == "en"){ ?><h4> Your Name:</h4><?php } ?> </label>&nbsp;&nbsp;<br><br>

		<input  type="text" id="usuario_nombre" style="width: 60%" class="cambio" name="usuario_nombre" maxlength="45" value= "<?php echo utf8_encode ($arreglo["usuario_nombre"]); ?>"   required /><br><br><br>
		

		


		<label for "email">
		 <?php if ($idioma == "es") { ?><h4>Tu Correo Electronico:</h4> <?php } else if ($idioma == "en"){ ?><h4> Your E-Mail:</h4><?php } ?> 
		</label>&nbsp;&nbsp;<br><br>
		<input type="email" name="email" id="email"  style="width: 60%"  maxlength="45" value="<?php echo utf8_encode ($arreglo["correo"]);?>" /><br><br><br>



 
		<label for "contrasena">
		 <?php if ($idioma == "es") { ?><h4>Tu Contraseña: </h4> <?php } else if ($idioma == "en"){ ?><h4> Your Password: </h4><?php } ?> 
		</label>&nbsp;&nbsp;<br><br>
		<input  type="password" id="contrasena" maxlength="45" style="width: 60%"  class="cambio" name="contrasena" placeholder ="Escribe tu contraseña" title="Tu nueva contraseña" value= "<?php echo utf8_encode ($arreglo["contrasena"]); ?>"   required /><br><br><br>


		<label for "r_contrasena">
		<?php if ($idioma == "es") { ?><h4> Repertir Contraseña:</h4><?php } else if ($idioma == "en"){ ?><h4> Repeat Your Password:</h4><?php } ?>  
		</label>&nbsp;&nbsp;<br><br>
		<input  type="password" id="r_contrasena" maxlength="45" class="cambio" name="r_contrasena" placeholder ="Escribe tu contraseña" title="Tu nueva contraseña"  style="width: 60%"  value= "<?php echo utf8_encode($arreglo["contrasena"]); ?>"   required /><br><br>


		<center><input type="submit" id="boton_formulario" value="
		<?php if ($idioma == "es") { ?>Actualizar<?php } else if ($idioma == "en"){ ?> Update<?php } ?>
		"><br><br><br></center>

		

		

</form>
</div>
</section>


		

