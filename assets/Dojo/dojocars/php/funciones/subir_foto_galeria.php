<?php 

include ("conexion.php");

include ("funciones.php");


$id_tatu_galeria_categoria = $_POST["id_tatu_galeria_categoria"];

 
 

		$insertar_evento= "INSERT INTO `tatu_galeria` (`id_tatu_galeria`, `id_tatu_galeria_categoria`, `foto`) VALUES (NULL, '$id_tatu_galeria_categoria', '');";

		$ejecutar_consulta_evento = $conexion->query($insertar_evento) or die ("no se subio");

		$id_tatu_galeria = $conexion->insert_id;








						// Se ejecuta la funcion para subir la imagen
							
						 

						$tipo = $_FILES["galeria"]["type"];
						$archivo = $_FILES["galeria"]["tmp_name"];
						$ruta = "../../img/galeria/";
						$nombre_foto = $id_tatu_galeria;

						$imagen = subir_imagen($tipo,$archivo,$nombre_foto,$ruta);
							

				
						  


$insertar2 ="UPDATE `tatu_galeria` SET `foto` = '$imagen' WHERE id_tatu_galeria='$id_tatu_galeria'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

$mensaje = "<b> Foto Agregada</b>";

 header("location: ../../tu_perfil.php?op=admin_cargar_imagenes_galeria&mensaje=$mensaje");
				


?>