<?php
session_start();
include ("conexion.php");

$idioma=$_SESSION["idioma"];

$consulta_pais = "SELECT * FROM departamento order by departamento_es";


$ejecutar_consulta_pais = $conexion->query($consulta_pais) or die ("No se ejecutó estados");

 
while ($registro_cat= $ejecutar_consulta_pais->fetch_assoc())
{

			if ($idioma == "es") 

			{
				echo "<option value='".$registro_cat["id_departamento"]."''>".utf8_encode($registro_cat["departamento_es"])."</option>";
			}

			 else if ($idioma == "en")

			{
				echo "<option value='".$registro_cat["id_departamento"]."''>".utf8_encode($registro_cat["departamento_in"])."</option>";
			}
 
}

 

?>