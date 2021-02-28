<?php 

include ("conexion.php");

include ("funciones.php");


$mensaje_adjunto = $_POST["mensaje_adjunto"];

$tipo_mensaje = $_POST["tipo_mensaje"];

$fecha_envio = date("Y-m-d");

$id_analista = $_POST["id_analista"];

if (isset($_POST["id_productos"])) {

	 $id_curso = $_POST["id_productos"];

}

else {
	$id_curso = 0;
}


 

$insertar_evento= "INSERT INTO `documentos_enviados` (`id_documentos_enviados`, `tipo_mensaje`, `fecha_envio`, `mensaje_adjunto`, `documento`, `id_analista`, `id_curso`) VALUES (NULL, '$tipo_mensaje', '$fecha_envio', '$mensaje_adjunto', '', '$id_analista', '$id_curso');";

$ejecutar_consulta_evento = $conexion->query($insertar_evento) or die ("no se subio");

$id_documentos_enviados = $conexion->insert_id;







// Se ejecuta la funcion para subir la imagen

$tipo = $_FILES["documento"]["type"];

$archivo = $_FILES["documento"]["tmp_name"];

$ruta = "../../img/documento/"; 

$imagen = subir_imagen($tipo,$archivo,$id_documentos_enviados,$ruta);
							

				
						  


$insertar2 ="UPDATE `documentos_enviados` SET `documento` = '$imagen' WHERE id_documentos_enviados='$id_documentos_enviados'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");




if ($tipo_mensaje ==1) {
	
	$contador = $_POST["contador"]+1;

	for ($i=0; $i < $contador ; $i++) { 

		if (isset($_POST[$i]) ) {

			$id_cliente = $_POST[$i];

			$id_documentos_enviados = $id_documentos_enviados;

			$insertar3 ="INSERT INTO `documentos_enviados_cesta` (`id_documentos_enviados_cesta`, `id_documentos_enviados`, `id_cliente`, `id_analista`) VALUES (NULL, '$id_documentos_enviados', '$id_cliente', '$id_analista');";

			$ejecutar_insertar3 = $conexion->query($insertar3) or die ("No se cargo la imagen");
		}
		 
	}
}

else if ($tipo_mensaje ==2) {

	$consulta4 ="SELECT * FROM usuario_asociado WHERE id_representante='$id_analista'";

	$ejecutar_consulta4 = $conexion->query($consulta4) or die ("No se ejecuto query");

	while ($registro4 = $ejecutar_consulta4->fetch_assoc()) { 
		
		$id_cliente = $registro4["id_cliente"];

		$id_documentos_enviados = $id_documentos_enviados;

		$insertar3 ="INSERT INTO `documentos_enviados_cesta` (`id_documentos_enviados_cesta`, `id_documentos_enviados`, `id_cliente`, `id_analista`) VALUES (NULL, '$id_documentos_enviados', '$id_cliente', '$id_analista');";

		$ejecutar_insertar3 = $conexion->query($insertar3) or die ("No se cargo la imagen");

	}
}


else if ($tipo_mensaje ==3) {

	
	
	$id_clase = $_POST["id_productos"];


	

	$consulta4 ="SELECT * FROM usuario_asociado WHERE id_clase='$id_clase'";

	$ejecutar_consulta4 = $conexion->query($consulta4) or die ("No se ejecuto query");

	while ($registro4 = $ejecutar_consulta4->fetch_assoc()) { 
		
		$id_cliente = $registro4["id_cliente"];


		$id_documentos_enviados = $id_documentos_enviados;

		$insertar3 ="INSERT INTO `documentos_enviados_cesta` (`id_documentos_enviados_cesta`, `id_documentos_enviados`, `id_cliente`, `id_analista`) VALUES (NULL, '$id_documentos_enviados', '$id_cliente', '$id_analista');";

		$ejecutar_insertar3 = $conexion->query($insertar3) or die ("No se cargo la imagen");

	}

}


header("location: ../../tu_perfil.php?op=documentos_enviar_2");
				


?>