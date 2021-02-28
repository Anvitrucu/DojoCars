<?php 

$q=$_POST['q'];

session_start();

$idioma_temp  = $_SESSION["idioma_temp"]

?>


<select style="background:#fff; font-size:1.2rem; font-family:Raleway" id="id_categorias_especificas" class="cambio" name="id_categorias_especificas" required>

								<?php if ($idioma == "es") { ?>Categoría Específica<?php } else if ($idioma == "en"){ ?><option value="">Specify Category</option><?php } ?>

								

								<?php

								include ("conexion.php");


								$consulta_pais = "SELECT * FROM categorias_especificas WHERE categorias_general_id_categoria_producto='$q'  ";


								$ejecutar_consulta_pais = $conexion->query($consulta_pais) or die ("No se ejecutó estados");


								while ($registro_cat= $ejecutar_consulta_pais->fetch_assoc())
								{


										if ($idioma_temp == "es") 

										{
											echo "<option value='".$registro_cat["id_categorias_especificas"]."''>".utf8_encode($registro_cat["categoria_especifica"])."</option>";
										}

										 else if ($idioma_temp == "en")

										{
											echo "<option value='".$registro_cat["id_categorias_especificas"]."''>".utf8_encode($registro_cat["categoria_especifica_ingles"])."</option>";
										}

								 
									
								}



								 

								?>

</select>