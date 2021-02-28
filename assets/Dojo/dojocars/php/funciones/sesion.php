<?php

	$usuario = addslashes( utf8_decode($_POST["usuario"])); 

	$contrasena = addslashes(utf8_decode($_POST ["contrasena"])); 



	if (isset($usuario) && isset($contrasena))

	{

 

			include ("conexion.php");

			$busqueda = "SELECT * FROM usuario WHERE  correo='$usuario' AND contrasena='$contrasena' ";

			$ejecutar_consulta = $conexion->query($busqueda);

			$arreglo = $ejecutar_consulta->num_rows;

			

	 

			if ($arreglo > 0)

					{

						session_start();

						$regis = $ejecutar_consulta->fetch_assoc();

						$usuario_v = $regis['usuario'];

						$_SESSION["correo"] = $usuario;

						$_SESSION["usuario"] = $usuario_v;

						$_SESSION["contrasena"] = $contrasena;

						 

						 

						

					header("Location: ../../tu_perfil.php?op=inicio");


					}

			else 

			{

					

					$mensaje = "Usuario o contraseña incorrecta";

					

			 header("Location: ../../index.php?menu=inscribete_iniciar&mensaje=$mensaje");
			}

	}


?>