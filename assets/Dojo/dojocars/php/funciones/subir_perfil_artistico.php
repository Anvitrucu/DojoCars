<?php

	$biografia = utf8_decode($_POST["biografia"]);

	$biografia = addslashes($biografia);

	$telefono = $_POST["telefono"];

	$pagina_web = utf8_decode($_POST ["pagina_web"]);

	$direccion = utf8_decode($_POST ["direccion"]);
 
 	$direccion = addslashes($direccion);

	$red_twitter =utf8_decode($_POST["red_twitter"]);

	$red_facebook =utf8_decode($_POST["red_facebook"]);

	$red_instagram =utf8_decode($_POST["red_instagram"]);

	$red_youtube =utf8_decode($_POST["red_youtube"]);

	$red_printeres =utf8_decode($_POST["red_printeres"]);

	$red_google =utf8_decode($_POST["red_google"]);

	$descripcion_imagen = addslashes($_POST["descripcion_imagen"]);

	// ------------- Variables de sesion globales --------------- // 

	include ("conexion.php");

	session_start();

	$usuario = $_SESSION["usuario"];

	$contrasena = $_SESSION["contrasena"];	




			$busqueda="SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena'";

			$ejecutar_consulta_bus = $conexion->query($busqueda);

			$registro = $ejecutar_consulta_bus->fetch_assoc();

			$id_usuario = $registro['id_usuario'];	
 
 

			$arreglo = $ejecutar_consulta_bus->num_rows;

			 
		 
 

			 $consulta = "UPDATE `usuario` SET `artista_bio` = '$biografia', `descripcion_imagen` = '$descripcion_imagen', `telefono` = '$telefono', `pagina_web` = '$pagina_web', `red_twitter` = '$red_twitter', `red_facebook` = '$red_facebook', `red_instagram` = '$red_instagram', `red_youtube` = '$red_youtube', `red_printeres` = '$red_printeres', `red_google` = '$red_google' , `direccion` = '$direccion' WHERE `id_usuario` = $id_usuario;";



			

			 $ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


 

 //$conexion->close();

 //include ("cerrar_sesion.php");


header("location: ../../tu_perfil.php?op=tu_portafolio");

?>	