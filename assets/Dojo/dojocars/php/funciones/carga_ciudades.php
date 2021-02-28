</center>

<?php 

include("conexion.php");

$c = $_POST["c"];

$cont = 0;

	$consulta_pais = "SELECT * FROM ciudad WHERE pais_Paisid='$c'  ";


	$ejecutar_consulta_pais = $conexion->query($consulta_pais) or die ("No se ejecutó estados");


	while ($registro_cat= $ejecutar_consulta_pais->fetch_assoc())
	{

	$cont = $cont + 1;



	 echo "<div style='width:30%; display:inline-block; float: left; margin-bottom:2%;'> 

	 <input type='checkbox' value=".$registro_cat["ciudad_id"]." name='ciudad_".$cont."'> 

	 &nbsp;&nbsp;&nbsp;".utf8_encode($registro_cat["ciudad_nombre"])."</div>";


	 
	 
		
	}

	echo "<input type='hidden' value=".$cont." name='contador'> ";



?>

