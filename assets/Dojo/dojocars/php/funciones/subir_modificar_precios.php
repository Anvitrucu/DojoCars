<?php 


		include ("conexion.php");

		include ("funciones.php");


	 


					// Se ejecuta la funcion para subir la imagen
						
					$tipo = $_FILES["archivo"]["type"];
					$archivo = $_FILES["archivo"]["tmp_name"];
					$ruta = "../../img/precios/";
					$nombre_foto = "1";
						

					// Hacen falta 3 variables para ejecutar la funcion Subir_imagen que acabamos de importar en funciones.php, el $tipo de archivo, el $archivo mismo, y la $ruta que le quiero dar.

						
					$imagen   = subir_imagen($tipo,$archivo,$nombre_foto,$ruta);
 



					$insertar2 ="UPDATE `precios` SET `archivo` = '$imagen' WHERE id_precios='1'";

					$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

					$mensaje = "<center>Actualizado Correctamente</center>";

					 
					 header("location: ../../tu_perfil.php?op=admin_precios&mensaje=$mensaje");
						



?>