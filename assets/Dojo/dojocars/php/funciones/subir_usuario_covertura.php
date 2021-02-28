<?php 



$pais_id = $_POST["pais_id"];

$contador = $_POST["contador"];

 
 
$id_usuario = $_POST["id_usuario"];


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

 
 
 $insertar2 ="UPDATE usuario SET ciudad_id='$ciudad', pais_Paisid='$pais_id' WHERE id_usuario='$id_usuario' ";

 $ejecutar_consulta2 = $conexion->query($insertar2) or die ("no se pudoo =( ");


 header("location: ../../index.php?menu=intro_1_5");
		


?>