<?php 


$d = $_POST["d"];

if ($d == "1")

{
	?>

					<select style="background:#fff; font-size:1.2rem; font-family:Raleway" required name="pais_Paisid" id="pais_Paisid" onchange="cargar_buscador2_proveedor(this.value)">

					<option value="">Seleccione el Pais a Consultar</option>

											 <?php

					include ("conexion.php");


					$consulta_pais = "SELECT * FROM pais order by Pais_nombre";


					$ejecutar_consulta_pais = $conexion->query($consulta_pais) or die ("No se ejecutó estados");


					while ($registro_pais = $ejecutar_consulta_pais->fetch_assoc())
					{


						if ($registro_pais["Paisid"]==60 || $registro_pais["Paisid"]==2 || $registro_pais["Paisid"]==27 || $registro_pais["Paisid"]==35 || $registro_pais["Paisid"]==36 || $registro_pais["Paisid"]==38 || $registro_pais["Paisid"]==3   || $registro_pais["Paisid"]==4 || $registro_pais["Paisid"]==5 || $registro_pais["Paisid"]==6  || $registro_pais["Paisid"]==7   || $registro_pais["Paisid"]==10  || $registro_pais["Paisid"]==11   || $registro_pais["Paisid"]==16 || $registro_pais["Paisid"]==17  || $registro_pais["Paisid"]==18   || $registro_pais["Paisid"]==22 || $registro_pais["Paisid"]==24   || $registro_pais["Paisid"]==26  || $registro_pais["Paisid"]==28  || $registro_pais["Paisid"]==29 || $registro_pais["Paisid"]==32  || $registro_pais["Paisid"]==33 || $registro_pais["Paisid"]==34  || $registro_pais["Paisid"]==37    || $registro_pais["Paisid"]==41 || $registro_pais["Paisid"]==42 || $registro_pais["Paisid"]==48   || $registro_pais["Paisid"]==51 || $registro_pais["Paisid"]==53  || $registro_pais["Paisid"]==54 || $registro_pais["Paisid"]==55  || $registro_pais["Paisid"]==56 || $registro_pais["Paisid"]==57  )
	{continue;}
						
						echo "<option value='".$registro_pais["Paisid"]."''>".utf8_encode($registro_pais["Pais_nombre"])."</option>";
					}



					 

					?>

									</select>


						<div id="div_buscador2_proveedor" style="display: inline-block; float:right" ></div>

						



						<?php
}

else if ($d == "2")

{

					?>



					<select style="background:#fff; font-size:1.2rem; font-family:Raleway" required name="pais_Paisid" id="pais_Paisid" onchange="cargar_buscador2_servicio(this.value)">

					<option value="" >Seleccione el Pais a Consultar</option>

					<?php

					include ("conexion.php");
 

					$consulta_pais = "SELECT * FROM pais order by Pais_nombre";


					$ejecutar_consulta_pais = $conexion->query($consulta_pais) or die ("No se ejecutó estados");


					while ($registro_pais = $ejecutar_consulta_pais->fetch_assoc())
					{


						if ($registro_pais["Paisid"]==60 || $registro_pais["Paisid"]==2 || $registro_pais["Paisid"]==27 || $registro_pais["Paisid"]==35 || $registro_pais["Paisid"]==36 || $registro_pais["Paisid"]==38 || $registro_pais["Paisid"]==3   || $registro_pais["Paisid"]==4 || $registro_pais["Paisid"]==5 || $registro_pais["Paisid"]==6  || $registro_pais["Paisid"]==7   || $registro_pais["Paisid"]==10  || $registro_pais["Paisid"]==11   || $registro_pais["Paisid"]==16 || $registro_pais["Paisid"]==17  || $registro_pais["Paisid"]==18   || $registro_pais["Paisid"]==22 || $registro_pais["Paisid"]==24   || $registro_pais["Paisid"]==26  || $registro_pais["Paisid"]==28  || $registro_pais["Paisid"]==29 || $registro_pais["Paisid"]==32  || $registro_pais["Paisid"]==33 || $registro_pais["Paisid"]==34  || $registro_pais["Paisid"]==37    || $registro_pais["Paisid"]==41 || $registro_pais["Paisid"]==42 || $registro_pais["Paisid"]==48   || $registro_pais["Paisid"]==51 || $registro_pais["Paisid"]==53  || $registro_pais["Paisid"]==54 || $registro_pais["Paisid"]==55  || $registro_pais["Paisid"]==56 || $registro_pais["Paisid"]==57  )
	{continue;}
						
						echo "<option value='".$registro_pais["Paisid"]."''>".utf8_encode($registro_pais["Pais_nombre"])."</option>";
					}


					?>

									</select>
 

					<div id="div_buscador2_servicio" style="display: inline-block; float:right" ></div>

<?php				 

}

?>