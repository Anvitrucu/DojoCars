 
<?php 

include ("php/funciones/comprobar_usuario.php");

 

?>
 <p class='titulo'> SELECCIONA EL AREA DE COVERTURA DE TU EMPRESA  </p>  

 

<form id="form_perfil" name="form_perfil" action="php/funciones/subir_usuario_covertura.php" method="POST" enctype="multipart/form-data">

<center> <label for="nombre_producto" > Selecciona tu Pais &nbsp;&nbsp;&nbsp; </label><br><br>


		<select style="background:#fff; font-size:1.2rem; font-family:Raleway"  id="pais_id" class="cambio" name="pais_id" required onchange="carga_ciudades(this.value)" >

								<option value="">Elige entre las opciones de la lista</option>

								<?php include("php/funciones/select_pais.php"); ?>

		</select><br> <br> <br>


</center>

		<div id="div_ciudades" style="display: inline-block; margin-left:15%" > </div><br> <br>

		<input type='hidden' value="<?php echo $id_usuario ?>" name='id_usuario'>

	<center><input type="submit" id="boton_formulario" style="display: inline-block; margin-left:5%" value="Continuar"><br> <br><br> <br></center>

</form> 