<?php 

$f = $_POST["e"];

 

?> 

 
		<select style="background:#fff; font-size:1.2rem; font-family:Raleway" required name="ciudad_id" id="ciudad_id" onchange="cargar_buscador3_proveedor(this.value)">

		<option value="" >Seleccione la Ciudad del Evento</option>

		<?php

		include ("conexion.php");


		$consulta_2= "SELECT * FROM ciudad WHERE pais_Paisid='$f' ORDER BY ciudad_nombre ";


		$ejecutar_consulta_2= $conexion->query($consulta_2) or die ("No se ejecutó estados");


		while ($registro_2 = $ejecutar_consulta_2->fetch_assoc())
		{

 
			
			echo "<option value='".$registro_2["ciudad_id"]."''>".utf8_encode($registro_2["ciudad_nombre"])."</option>";
		}


		?>

						</select>




		<div id="div_buscador3_proveedor" style="display: inline-block; float:right" > 






		</select>




 