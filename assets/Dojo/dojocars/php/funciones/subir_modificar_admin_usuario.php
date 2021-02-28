<?php


		include ("conexion.php");


 

 		$id_usuario = $_POST["id_usuario"];



		$nombre = utf8_decode($_POST["nombre"]);

		$usuario = $_POST["email"];

		$contrasena_nuevo = $_POST ["contrasena"];

		$contrasena2_nuevo = $_POST ["contrasena2"];

		$email_nuevo = utf8_decode($_POST["email"]);

		$tipo = utf8_decode($_POST["tipo"]);

		$pais_Paisid = $_POST["pais_Paisid"];

		$nivel_usuario = $_POST["nivel_usuario"];



		$latitud = utf8_decode($_POST["latitud"]);

		$longitud = $_POST["longitud"];

		$rango = $_POST["rango"];

		$telefono_1 = $_POST["telefono_1"];

		$direccion = $_POST["direccion"];


 
		if ((strstr($contrasena_nuevo,"ñ"))  || (strstr($contrasena_nuevo,"á"))|| (strstr($contrasena_nuevo,"á"))|| (strstr($contrasena_nuevo,"é"))|| (strstr($contrasena_nuevo,"í"))|| (strstr($contrasena_nuevo,"ó"))|| (strstr($contrasena_nuevo,"ú")))

			{
				$mensaje = "<b> El usuario o la contraseña no pueden contener caracteres especiales</b>";

				

				header("location: ../../tu_perfil.php?op=gestionar_usuarios&mensaje=$mensaje");
			}



         else if ($contrasena_nuevo==$contrasena2_nuevo)


         {

   
        	$busqueda="SELECT * FROM usuario WHERE correo='$email_nuevo'";

			$ejecutar_consulta = $conexion->query($busqueda) or die ("No se ejecuto busqueda 1");

			$numero_de_correos = $ejecutar_consulta->num_rows;



			$busqueda_correo_actual="SELECT * FROM usuario WHERE usuario='$usuario'";

			$ejecutar_busqueda_correo_actual = $conexion->query($busqueda_correo_actual)or die ("No se ejecuto busqueda 2");

			$arreglo = $ejecutar_busqueda_correo_actual->fetch_assoc();

			$correo_actual = $arreglo["correo"];

	
				
					


		if ($numero_de_correos==1 && $correo_actual !== $email_nuevo )



								{

									
								$mensaje="El Correo electronico ya existe";

								


								header("location: ../../tu_perfil.php?op=gestionar_usuarios&mensaje=$mensaje");

								}

		
		
		else if ($numero_de_correos==0 || $correo_actual==$email_nuevo )

								{

								


										
										$consulta ="UPDATE `usuario` SET `usuario` = '$usuario', `usuario_nombre` = '$nombre', `contrasena` = '$contrasena_nuevo', `pais_Paisid` = '57', `tipousuario_tipousuarioid` = '$nivel_usuario', `correo` = '$email_nuevo', `telefono_1` = '$telefono_1', `latitud` = '$latitud', `longitud` = '$longitud', `rango` = '$rango', `direccion` = '$direccion' WHERE `usuario`.`id_usuario` = $id_usuario  ";

										$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 

										

										

										$mensaje="Usuario Actualizado Correctamente";

								


								header("location: ../../tu_perfil.php?op=gestionar_usuarios&mensaje=$mensaje");

										


								}


		}

      	   else

      	{

      	   	$mensaje="Las Contraseñas no coinciden";
      	   	header("location: ../../tu_perfil.php?op=gestionar_usuarios&mensaje=$mensaje");

      	}






?>