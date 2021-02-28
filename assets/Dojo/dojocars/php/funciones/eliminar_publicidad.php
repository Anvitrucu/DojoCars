<?php

	include ("conexion.php");

	include ("funciones.php");

	$id_publicidad = $_GET["id"];

	$tipo_publicidad = $_GET["tipo_publicidad"];

	 
 
	
  	$extension ="../../img/promo/".$tipo_publicidad;

 	  

	borrar_imagenes_borradas ($extension);


 

	 $consulta = "DELETE  FROM promociones WHERE id_promociones='$id_publicidad'";

	$ejecutar_consulta = $conexion->query($consulta);

	 
	 header("Location: ../../tu_perfil.php?op=cargar_promociones"); 
			
?>