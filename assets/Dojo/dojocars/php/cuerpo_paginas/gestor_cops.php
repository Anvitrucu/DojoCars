<?php 



		$busqueda="SELECT * FROM cops WHERE id_cops='1'";

		$ejecutar_consulta = $conexion->query($busqueda);

		$arreglo = $ejecutar_consulta->fetch_assoc();

		$status = $arreglo['status'];

?>


<section id="Cuerpo_perfil">
 
<center>
	<?php if ($idioma == "es") { ?><h1>GESTOR DE LA PLATAFORMA COPS</h1><?php } else if ($idioma == "en"){ ?><h1>GESTOR DE LA PLATAFORMA COPSe</h1><?php } ?>
</center>


<div id="texto_perfil">		


<?php 

if ($status=="ON") {
	echo "<br><br><p  style='text-align:center; font-family:Raleway'>El COPS se encuentra Activo</p><br>";
}

else

{
	echo "<br><br><p  style='text-align:center; font-family:Raleway'>El COPS se encuentra Inactivo</p><br>";
}

?>
 
 

<form id="form_perfil" name="form_perfil" action="php/funciones/actualizar_cops.php" method="POST" enctype="multipart/form-data">

	<center> 
		<select  name="status" style="font-size: 1.3rem; padding: 2%; width: 50%">
			<option> Seleccione la Opción a Procesar</option>
			<option value="ON">Activar sincronizador (Elimina la carga de Productos desde la web)</option>
			<option value="OFF">Desactivar sincronizador (Activa la carga de Productos desde la web)</option>
		</select><br><br><br><br>
	 
 
 		<input type="submit" id="boton_formulario" value="
		<?php if ($idioma == "es") { ?>Actualizar<?php } else if ($idioma == "en"){ ?> Update<?php } ?>
		"><br><br><br></center>

		

		

</form>
</div>
</section>


		

