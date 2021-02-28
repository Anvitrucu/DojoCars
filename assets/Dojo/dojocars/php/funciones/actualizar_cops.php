<?php

		include ("conexion.php");

		$status = utf8_decode($_POST["status"]);

 
 
		$busqueda_1="UPDATE `cops` SET `status` = '$status'  WHERE  `id_cops` = 1;";

		$ejecutar_consulta_1 = $conexion->query($busqueda_1);  


	 


		$mensaje = "<p style='color:green; font-family:Raleway; font-size:1.1rem; text-align: center'>Sistema Actualizado Correctamente</p>";

		header("Location: ../../tu_perfil.php?op=gestor_cops&mensaje=$mensaje");
 
	

?>
