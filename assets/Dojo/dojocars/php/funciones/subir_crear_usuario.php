<?php

	include ("conexion.php");

	$nombre = utf8_decode($_POST["nombre"]);

	$usuario = $_POST["email"];

	$contrasena = $_POST ["contrasena"];

	$contrasena2 = $_POST ["contrasena2"];

	$email = utf8_decode($_POST["email"]);

	$tipo = utf8_decode($_POST["tipo"]);

	$pais_Paisid = $_POST["pais_Paisid"];

	$nivel_usuario = $_POST["nivel_usuario"];



	$latitud = utf8_decode($_POST["latitud"]);

	$longitud = $_POST["longitud"];

	$rango = $_POST["rango"];

	$telefono_1 = $_POST["telefono_1"];

	$direccion = $_POST["direccion"];


 


	if ((strstr($usuario,"ñ")) || (strstr($contrasena,"ñ")) || (strstr($contrasena,"á"))|| (strstr($usuario,"á"))|| (strstr($usuario,"é"))|| (strstr($usuario,"é"))|| (strstr($usuario,"í"))|| (strstr($usuario,"í"))|| (strstr($usuario,"ó"))|| (strstr($usuario,"ó"))|| (strstr($usuario,"ú"))|| (strstr($usuario,"ú")))

	{
		$mensaje = "<b> El usuario o la contraseña no pueden contener caracteres especiales</b>";

		

		header("Location: ../../tu_perfil.php?op=gestionar_usuarios&mensaje=$mensaje");

	}


	else if ($contrasena!=$contrasena2 )

	{
		$mensaje = "<b>Las contraseñas no coinciden, intente de nuevo </b>";

		header("Location: ../../tu_perfil.php?op=gestionar_usuarios&mensaje=$mensaje");

	}



	else if ($contrasena==$contrasena2 )
	{

		
		$busqueda="SELECT * FROM usuario WHERE usuario='$usuario' OR correo='$email'";

		$ejecutar_consulta = $conexion->query($busqueda);

		$arreglo = $ejecutar_consulta->num_rows;

				if ($arreglo<1) 

					{

						if (isset($_POST["cargado_por"])) {
							
							$cargado_por = $_POST["cargado_por"];

							$consulta ="INSERT INTO  `usuario` (`id_usuario`, `usuario`, `usuario_nombre`, `contrasena`, `pais_Paisid`, `ciudad_id`, `tipousuario_tipousuarioid`, `correo`, `telefono_1`, `telefono_2`, `cargado_por`, `latitud`, `longitud`, `rango`, `direccion`) VALUES (NULL, '$usuario', '$nombre', '$contrasena', '1', NULL, '$nivel_usuario', '$email', '$telefono_1', NULL, '$cargado_por', '$latitud', '$longitud', '$rango', '$direccion');";
						}

						else {

							$consulta ="INSERT INTO  `usuario` (`id_usuario`, `usuario`, `usuario_nombre`, `contrasena`, `pais_Paisid`, `ciudad_id`, `tipousuario_tipousuarioid`, `correo`, `telefono_1`, `telefono_2`, `latitud`, `longitud`, `rango`, `direccion`) VALUES (NULL, '$usuario', '$nombre', '$contrasena', '1', NULL, '$nivel_usuario', '$email', '$telefono_1', NULL, '$latitud', '$longitud', '$rango', '$direccion');";

						}
 
				  
						
 

						$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 
 
						include ("sesion.php");

						$mensaje = "<b>Usuario creado correctamente</b>";

						header("Location: ../../tu_perfil.php?op=gestionar_usuarios&mensaje=$mensaje");

					}

					else

					{

						$mensaje = "<b>El nombre de usuario o correo electrónico ya existe, intente nuevamente</b>";

						header("Location: ../../tu_perfil.php?op=gestionar_usuarios&mensaje=$mensaje");

					}		

	}

		

?>