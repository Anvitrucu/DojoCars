<?php

include("conexion.php");




if (isset($_GET["name"])) {
	

	$name = $_GET["name"];

	$email = $_GET["email"];

	$id_facebook = $_GET["id"];


	$busqueda="SELECT * FROM usuario WHERE usuario='$email' OR correo='$email'";

	$ejecutar_consulta = $conexion->query($busqueda);

	$regis = $ejecutar_consulta->fetch_assoc();

	$arreglo = $ejecutar_consulta->num_rows;

		if ($arreglo<1) 

		{


	 

			$consulta ="INSERT INTO `usuario` (`id_usuario`, `id_facebook`,  `usuario`, `usuario_nombre`, `contrasena`, `pais_Paisid`, `ciudad_id`, `tipousuario_tipousuarioid`, `correo`, `telefono_1`, `telefono_2`) VALUES (NULL, '$id_facebook', '$email', '$name', '$id_facebook', '52', NULL, '3', '$email', NULL, NULL);";


			$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


				session_start();

				$_SESSION["correo"] = $email;

          		$_SESSION["usuario"] = $email;

          		$_SESSION["contrasena"] = $id_facebook;

                header("Location: ../../tu_perfil.php?op=inicio");
				
			 
		}

		else

		{
				session_start();

				$_SESSION["correo"] = $email;

          		$_SESSION["usuario"] = $email;

          		$_SESSION["contrasena"] = $regis["contrasena"];

                header("Location: ../../tu_perfil.php?op=inicio");

		}		




}

































else {

	include ("conexion.php");

	$nombre = addslashes(utf8_decode($_POST["nombre"]));

	$usuario = addslashes(utf8_decode($_POST["email"]));

	$contrasena = addslashes($_POST ["contrasena"]);

	$contrasena2 = addslashes($_POST ["contrasena2"]);

	$email = addslashes(utf8_decode($_POST["email"]));

	$tipo = "3";

	$pais_Paisid = "1";





	if ((strstr($usuario,"ñ")) || (strstr($contrasena,"ñ")) || (strstr($contrasena,"á"))|| (strstr($usuario,"á"))|| (strstr($usuario,"é"))|| (strstr($usuario,"é"))|| (strstr($usuario,"í"))|| (strstr($usuario,"í"))|| (strstr($usuario,"ó"))|| (strstr($usuario,"ó"))|| (strstr($usuario,"ú"))|| (strstr($usuario,"ú")))

	{
		$mensaje = "<b> El usuario no puede contener caracteres especiales</b>";

		

		header("Location: ../../index.php?menu=suscribirse&mensaje=$mensaje&tipo=$tipo");
	}


	else if ($contrasena!=$contrasena2 )

	{
		$mensaje = "<b>Las contraseñas no coinciden</b>";

		header("Location: ../../index.php?menu=suscribirse&mensaje=$mensaje&tipo=$tipo");
	}


	

	else if ($contrasena==$contrasena2 )
	{



		$busqueda="SELECT * FROM usuario WHERE usuario='$usuario' OR correo='$email'";

		$ejecutar_consulta = $conexion->query($busqueda);

		$arreglo = $ejecutar_consulta->num_rows;

				if ($arreglo<1) 

				{


			 

					$consulta ="INSERT INTO `usuario` (`id_usuario`, `usuario`, `usuario_nombre`, `contrasena`, `pais_Paisid`, `ciudad_id`, `tipousuario_tipousuarioid`, `correo`, `telefono_1`, `telefono_2`) VALUES (NULL, '$usuario', '$nombre', '$contrasena', '52', NULL, '3', '$email', NULL, NULL);";


						$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 

 
  

						$asunto = "Registro Exitoso - Dojocars.com";

						$comentario= "<html><center><img src='https://dojocars.com/img/DOJO_CARS_LOGO.png' style='width:15%;'></center>  <br><br>BIENVENIDOS A NUESTRO SISTEMA AUTOMATIZADO DE REGISTRO DE CITAS<br><br>*** Cliente: ".$nombre."<br><br>***Correo de Acceso: ".$email."<br><br>***Password: ".$contrasena."<br><br> <center> WWW.DOJOCARS.COM <br><br></center>";



						$emaildelusuarioqueloenvia = "Dojocars.com";
						 
						// $destino = "yago_puentes_fernandez@hotmail.com";

						$destino = $email;

						$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

						$header .= "Content-Type: text/html; charset=UTF-8\r\n";

						 
						 
						mail($destino,$asunto,$comentario,$header);


						$mensaje = "Valide sus datos para acceder al sistema";

						header("Location: ../../index.php?menu=inscribete_iniciar&mensaje=$mensaje");
					 
				}

				else

				{

						$mensaje = "The user or email, are already in our system";

						header("Location: ../../index.php?menu=suscribirse&mensaje=$mensaje&tipo=$tipo");

				}		

	
		
	}
}

 

	

?>