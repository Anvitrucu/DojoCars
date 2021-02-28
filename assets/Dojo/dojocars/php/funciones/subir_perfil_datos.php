<?php


		include ("conexion.php");

		session_start();

		
		
		$nombre_nuevo = utf8_decode($_POST ["usuario_nombre"]);
		
		$email_nuevo = $_POST["email"];
		$contrasena_nuevo = $_POST ["contrasena"];
		$contrasena2_nuevo = $_POST ["r_contrasena"];
		

		$usuario = $_SESSION["usuario"];
 
		 


			

		if ((strstr($contrasena_nuevo,"ñ"))  || (strstr($contrasena_nuevo,"á"))|| (strstr($contrasena_nuevo,"á"))|| (strstr($contrasena_nuevo,"é"))|| (strstr($contrasena_nuevo,"í"))|| (strstr($contrasena_nuevo,"ó"))|| (strstr($contrasena_nuevo,"ú")))

			{
				$mensaje = "<b> El usuario o la contraseña no pueden contener caracteres especiales</b>";

				

				header("location: ../../tu_perfil.php?op=perfil_datos&mensaje=$mensaje");
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

								


								header("location: ../../tu_perfil.php?op=datos_basicos&mensaje=$mensaje");

								}

		
		
		else if ($numero_de_correos==0 || $correo_actual==$email_nuevo )

								{

								


										
										$consulta ="UPDATE usuario SET usuario_nombre='$nombre_nuevo', contrasena='$contrasena_nuevo',correo = '$email_nuevo' WHERE usuario='$usuario'";

										$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 

										$conexion->close();

										

										 include ("cerrar_sesion.php");

										 header("Location: ../../index.php?menu=inscribete_iniciar");


										

										

										


								}


		}

      	   else

      	{

      	   	$mensaje="Las Contraseñas no coinciden";
      	   	header("location: ../../tu_perfil.php?op=datos_basicos&mensaje=$mensaje");

      	}


 

?>