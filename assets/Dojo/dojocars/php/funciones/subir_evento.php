<?php 

include ("conexion.php");

include ("funciones.php");


$id_tatu_eventos_categoria = $_POST["id_tatu_eventos_categoria"];

$hora = $_POST["hora"];

$descripcion = addslashes(utf8_decode($_POST["descripcion"]));

$titulo = addslashes(utf8_decode($_POST["titulo"]));

 


 

		$mes_calendario = $_POST["mes_calendario"];

		$dia_calendario = $_POST["dia_calendario"];

		$ano_calendario = $_POST["ano_calendario"];

		$fecha = date($ano_calendario."-".$mes_calendario."-".$dia_calendario);
 
 

 
 


		$insertar_evento= "INSERT INTO `tatu_eventos` (`id_tatu_eventos`, `id_tatu_eventos_categoria`, `fecha`, `hora`, `titulo`, `descripcion`, `flyer`) VALUES (NULL, '$id_tatu_eventos_categoria', '$fecha', '$hora', '$titulo', '$descripcion', '');";

		$ejecutar_consulta_evento = $conexion->query($insertar_evento) or die ("no se subio");

		$id_tatu_eventos = $conexion->insert_id;








						// Se ejecuta la funcion para subir la imagen
							
						$tipo = $_FILES["flyer"]["type"];
						$archivo = $_FILES["flyer"]["tmp_name"];
						$carpeta = "../../img/evento/";
							

				
						// Hacen falta 3 variables para ejecutar la funcion Subir_imagen que acabamos de importar en funciones.php, el $tipo de archivo, el $archivo mismo, y la $ruta que le quiero dar.

							
						$imagen = subir_imagen($tipo,$archivo,$id_tatu_eventos,$carpeta);


						 
 


$insertar2 ="UPDATE `tatu_eventos` SET `flyer` = '$imagen' WHERE id_tatu_eventos='$id_tatu_eventos'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

$mensaje = "<b> Evento Agregado</b>";

 header("location: ../../tu_perfil.php?op=admin_cargar_eventos");
				


?>