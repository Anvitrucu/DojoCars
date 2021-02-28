
<center>
	<?php if ($idioma == "es") { ?><h1>Gestor de Departamentos de Productos </h1><?php } else if ($idioma == "en"){ ?><h1>Department Manager</h1><?php } ?>
</center>


<?php 

		if (isset($_GET["id_departamento"]))

		{
			$id_departamento = $_GET["id_departamento"];

			$consulta_gen ="SELECT * FROM departamento WHERE id_departamento='$id_departamento' ";

			$ejecutar_consulta_gen = $conexion->query($consulta_gen) or die ("No se ejecuto query");

			$areglo_mod = $ejecutar_consulta_gen->fetch_assoc();

			$departamento_es = $areglo_mod['departamento_es'];

			$departamento_in = $areglo_mod['departamento_in'];

			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_departamento.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_departamento" value="<?php echo $id_departamento ?>">
 
			<?php
 
		}

		else

		{

			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_departamento_1.php" method="post" enctype="multipart/form-data">
 
			<?php
 


		}


?>




			<?php if ($idioma == "es") { ?>Departamento (Español):<?php } else if ($idioma == "en"){ ?> Department (Spanish): <?php } ?>

			<br><br>
			<input value="<?php echo $departamento_es  ?>" type="text" name="departamento_es" size="80%"><br><br>

			<?php if ($idioma == "es") { ?>Departamento (Inglés):<?php } else if ($idioma == "en"){ ?> Department (English):   <?php } ?>

			<br><br>
			<input value="<?php echo $departamento_in  ?>" type="text" name="departamento_in" size="80%"><br><br>


			<center><input id="boton_formulario" type="submit" value="<?php if ($idioma == "es") { ?>Continuar<?php } else if ($idioma == "en"){ ?> Continue <?php } ?>"></center><br><br>

			<hr><hr>


</form>


