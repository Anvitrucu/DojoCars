<?php 

$id = $_GET["id"];

$usuario = $_GET["usuario"];


	include ("conexion.php");

	include ("funciones.php");
 
	 $consulta = "DELETE  FROM productos WHERE id_productos='$id'";

	 $ejecutar_consulta = $conexion->query($consulta);




	$extension ="../../img/perfil/".md5($usuario)."/".$id."-1";

 	  

	borrar_imagenes_borradas ($extension);


	$extension ="../../img/perfil/".md5($usuario)."/".$id."-2";
	
	borrar_imagenes_borradas ($extension);


	$extension ="../../img/perfil/".md5($usuario)."/".$id."-3";
	
	borrar_imagenes_borradas ($extension);


	$extension ="../../img/perfil/".md5($usuario)."/".$id."-4";
	
	borrar_imagenes_borradas ($extension);

 
	 header("Location: ../../tu_perfil.php?op=servicios_cargados");
 
 

?>