<?php 

		$pais_Paisid = $arreglo["pais_Paisid"];
		$ciudad_id = $arreglo["ciudad_id"];
		$alcance = "";
 
		$consulta_alca1= "SELECT * FROM ciudad WHERE pais_Paisid='$pais_Paisid' ORDER BY ciudad_nombre ";

		$ejecutar_consulta_alca1= $conexion->query($consulta_alca1) or die ("No se ejecutó estados");

		 

		while ($registro_alca1 = $ejecutar_consulta_alca1->fetch_assoc())
		{			 

			$ciudad_id =  "*".$registro_alca1["ciudad_id"]."*";

			$posicion_coincidencia = strpos($arreglo["ciudad_id"], $ciudad_id);

			
 
 
								if ($posicion_coincidencia !== false) 
									{
										$alcance = $alcance.", ".utf8_encode($registro_alca1["ciudad_nombre"]);
								    }
  
		}
 


?>
 <p class='titulo'> SELECCIONA EL AREA DE COVERTURA DE TU EMPRESA  </p>  
 <p class='titulo'>  <br> 
 
Actualmente puedes disfrutar de los servicios de <?php echo  utf8_encode($arreglo["usuario_nombre"])?> en <?php echo $alcance ?>
</p>
 



 

<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_usuario_covertura.php" method="POST" enctype="multipart/form-data">

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