<?php

	include ("conexion.php");

	$nombre = utf8_decode($_POST["nombre"]);

	$usuario = $_POST["usuario"];

	$contrasena = $_POST ["contrasena"];

	$contrasena2 = $_POST ["contrasena2"];

	$nivel_usuario = $_POST ["nivel_usuario"];

	$email = utf8_decode($_POST["email"]);




	if ((strstr($usuario,"ñ")) || (strstr($contrasena,"ñ")) || (strstr($contrasena,"á"))|| (strstr($usuario,"á"))|| (strstr($usuario,"é"))|| (strstr($usuario,"é"))|| (strstr($usuario,"í"))|| (strstr($usuario,"í"))|| (strstr($usuario,"ó"))|| (strstr($usuario,"ó"))|| (strstr($usuario,"ú"))|| (strstr($usuario,"ú")))

	{
		$mensaje = "<b> El usuario o la contraseña no pueden contener caracteres especiales</b>";

		

		header("Location: ../../tu_perfil.php?op=admin_usuario&mensaje=$mensaje");
	}


	else if ($contrasena!=$contrasena2 )

	{
		$mensaje = "<b>Las contraseñas no coinciden, intente de nuevo </b>";

		header("Location: ../../tu_perfil.php?op=admin_usuario&mensaje=$mensaje");
	}


	

	else if ($contrasena==$contrasena2 )
	{



		$busqueda="SELECT * FROM usuario WHERE usuario='$usuario' OR correo='$email'";

		$ejecutar_consulta = $conexion->query($busqueda);

		$arreglo = $ejecutar_consulta->num_rows;

				if ($arreglo<1) 

				{


				$carpeta = '../../img/perfil/'.$usuario;
				if (!file_exists($carpeta)) {
				    mkdir($carpeta, 0777, true);
				}


					$consulta ="INSERT INTO `usuario` (`id_usuario`, `nivel_usuario`, `nombre`, `contrasena`, `usuario`, `correo`, `cita_programada`, `pais`, `ciudad`, `red_facebook`, `red_twitter`, `red_instagram`, `red_youtube`, `red_soundcloud`, `red_mixcloud`, `red_beatport`, `red_pinterest`, `red_ledculture`, `red_iserns`, `red_june`, `red_disong`, `red_itunes`, `red_spotify`) VALUES (NULL, '$nivel_usuario', '$nombre', '$contrasena', '$usuario', '$email', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";


						$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


						

						header("Location: ../../tu_perfil.php?op=admin_usuario");
					
				}

				else

				{

						$mensaje = "El nombre de usuario ya existe, intente nuevamente";

						header("Location: ../../tu_perfil.php?op=admin_usuario&mensaje=$mensaje");

				}		

	
		
	}

	

	

?>


