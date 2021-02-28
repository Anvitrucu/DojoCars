<?php 

$pais_id = $_POST["pais_id"];

$contador = $_POST["contador"];

$ciudad = ""; 
 
$id_productos = $_POST["id"];


$i=1;

while ($i<=$contador)
{


if (isset($_POST["ciudad_".$i]))
{
	$ciudad = "*".$ciudad.$_POST["ciudad_".$i]."*";
}




$i = $i + 1;
	
}

include("conexion.php");

 
$insertar2 ="UPDATE productos SET ciudad_id='$ciudad', pais_id='$pais_id' WHERE id_productos='$id_productos' ";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("no se pudoo =( ");


header("location: ../../tu_perfil.php?op=producto_cargado&id=$id_productos");
		


?>