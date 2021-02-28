<?php 

	include ("conexion.php");

	include ("funciones.php");

	$id_producto = $_GET["id_producto"];

	$id_comprador = $_GET["id_comprador"];
 
	 $consulta = "DELETE  FROM favoritos WHERE id_producto='$id_producto' AND id_comprador='$id_comprador'";

	 $ejecutar_consulta = $conexion->query($consulta);


	 header("Location: ../../tu_perfil.php?op=favoritos");


?>