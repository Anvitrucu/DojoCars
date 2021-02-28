<?php

session_start();

include ("php/funciones/conexion.php");

$_SESSION["idioma_temp"] = $idioma;

$consulta_pais = "SELECT * FROM categorias_general WHERE id_categoria_producto <> '1' order by categoria_producto";


$ejecutar_consulta_pais = $conexion->query($consulta_pais) or die ("No se ejecutó estados");


while ($registro_cat= $ejecutar_consulta_pais->fetch_assoc())
{

			if ($idioma == "es") 

			{
				echo "<option value='".$registro_cat["id_categoria_producto"]."''>".utf8_encode($registro_cat["categoria_producto"])."</option>";
			}

			 else if ($idioma == "en")

			{
				echo "<option value='".$registro_cat["id_categoria_producto"]."''>".utf8_encode($registro_cat["categoria_ingles"])."</option>";
			}
 
}

 

?>