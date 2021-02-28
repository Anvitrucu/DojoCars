<?php 

 
		include ("conexion.php");

		include ("funciones.php");


		$tipo_publicidad = $_POST["tipo_publicidad"];
		$url = $_POST["url"];
 

					$consulta_nivel_7= "SELECT * FROM promociones WHERE tipo_de_promo = '$tipo_publicidad'";

					$ejecutar_consulta_nivel_7= $conexion->query($consulta_nivel_7) or die ("No se ejecuto query");

					 $num_regs7 =  $ejecutar_consulta_nivel_7->num_rows;

					 if ( $num_regs7 != 0)

					 {
					 	$insertar2 ="UPDATE `promociones` SET `tipo_de_promo` = '$tipo_publicidad' , `url` = '$url' WHERE tipo_de_promo='$tipo_publicidad'";

						$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

						$registro_nivel_7 = $ejecutar_consulta_nivel_7->fetch_assoc();

						$id_publicidad = $registro_nivel_7["id_promociones"]; 
 						 
						 



					// Se ejecuta la funcion para subir la imagen
						
					$tipo = $_FILES["foto_promo"]["type"];
					$archivo = $_FILES["foto_promo"]["tmp_name"];
					$ruta = "../../img/promo/";
					$nombre_foto = $tipo_publicidad;
						

					// Hacen falta 3 variables para ejecutar la funcion Subir_imagen que acabamos de importar en funciones.php, el $tipo de archivo, el $archivo mismo, y la $ruta que le quiero dar.

						
					$se_subio_imagen = subir_imagen($tipo,$archivo,$nombre_foto,$ruta);
 

		
 




					//Hago una validacion, si la foto viene vacia uso la imagen generica, sino le asigno el se subio imagen

					$imagen = $se_subio_imagen;



					$insertar2 ="UPDATE `promociones` SET `img` = '$imagen' WHERE id_promociones='$id_publicidad'";

					$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

					 }

					 else

				 
				 	{
 

					$insertar_evento= "INSERT INTO `promociones` (`id_promociones`, `tipo_de_promo`, `img` , `url`) VALUES (NULL, '$tipo_publicidad' , NULL , '$url');";

					$ejecutar_consulta_evento = $conexion->query($insertar_evento) or die ("no se subio");

					$id_publicidad = $conexion->insert_id;



					// Se ejecuta la funcion para subir la imagen
						
					$tipo = $_FILES["foto_promo"]["type"];
					$archivo = $_FILES["foto_promo"]["tmp_name"];
					$ruta = "../../img/promo/";
					$nombre_foto = $tipo_publicidad;
						

					// Hacen falta 3 variables para ejecutar la funcion Subir_imagen que acabamos de importar en funciones.php, el $tipo de archivo, el $archivo mismo, y la $ruta que le quiero dar.

						
					$se_subio_imagen = subir_imagen($tipo,$archivo,$nombre_foto,$ruta);


					//Hago una validacion, si la foto viene vacia uso la imagen generica, sino le asigno el se subio imagen

					$imagen = $se_subio_imagen;



					$insertar2 ="UPDATE `promociones` SET `img` = '$imagen' WHERE id_promociones='$id_publicidad'";

					$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");


					}

					 


					header("location: ../../tu_perfil.php?op=cargar_promociones");
						



?>