<?php 

include ("conexion.php");

include ("funciones.php");


$concepto = utf8_decode($_POST["concepto"]);

$monto = $_POST["monto"];

$monto = str_replace ( ".", "", $monto );

$tipo_mensaje = $_POST["tipo_mensaje"];

$fecha_envio = date("Y-m-d");

$id_analista = $_POST["id_analista"];

if (isset($_POST["id_productos"])) {

	 $id_curso = $_POST["id_productos"];

}

else {
	$id_curso = 0;
}


 

$insertar_evento= "INSERT INTO `pagos_enviados` (`id_pagos_enviados`, `tipo_mensaje`, `fecha_envio`, `concepto`, `monto`, `id_analista`, `id_curso`) VALUES (NULL, '$tipo_mensaje', '$fecha_envio', '$concepto', '$monto', '$id_analista', '$id_curso');";

$ejecutar_consulta_evento = $conexion->query($insertar_evento) or die ("no se subio");

$id_pagos_enviados = $conexion->insert_id;



 


if ($tipo_mensaje ==1) {
	
	$contador = $_POST["contador"]+1;

	for ($i=0; $i < $contador ; $i++) { 

		if (isset($_POST[$i]) ) {

			$id_cliente = $_POST[$i];

			$id_pagos_enviados = $id_pagos_enviados;

			$insertar3 ="INSERT INTO `pagos_enviados_cestas` (`id_pagos_enviados_cestas`, `id_pagos_enviados`, `id_cliente`, `status`, `fecha_pago`, `pago_adjunto`, `negado_motivo`, `id_analista`) VALUES (NULL, '$id_pagos_enviados', '$id_cliente', 'Pendiente', '', '', '', '$id_analista');";

			$ejecutar_insertar3 = $conexion->query($insertar3) or die ("No se cargo la imagen");

			$id_pagos_enviados_cestas = $conexion->insert_id;



			$codigo = date("ymd")."000".$id_pagos_enviados_cestas;



			$insertar4 ="UPDATE `pagos_enviados_cestas` SET `codigo` = '$codigo' WHERE `pagos_enviados_cestas`.`id_pagos_enviados_cestas` = $id_pagos_enviados_cestas;";

			$ejecutar_insertar4 = $conexion->query($insertar4) or die ("No se cargo la imagen");
		}
		 
	}
}

else if ($tipo_mensaje ==2) {

	$consulta4 ="SELECT * FROM usuario_asociado WHERE id_representante='$id_analista'";

	$ejecutar_consulta4 = $conexion->query($consulta4) or die ("No se ejecuto query");

	while ($registro4 = $ejecutar_consulta4->fetch_assoc()) { 
		
		$id_cliente = $registro4["id_cliente"];

		$id_pagos_enviados = $id_pagos_enviados;

		$insertar3 ="INSERT INTO `pagos_enviados_cestas` (`id_pagos_enviados_cestas`, `id_pagos_enviados`, `id_cliente`, `status`, `fecha_pago`, `pago_adjunto`, `negado_motivo`, `id_analista`) VALUES (NULL, '$id_pagos_enviados', '$id_cliente', 'Pendiente', '', '', '', '$id_analista');";

			$ejecutar_insertar3 = $conexion->query($insertar3) or die ("No se cargo la imagen");

			$id_pagos_enviados_cestas = $conexion->insert_id;

			$codigo = date("ymd")."000".$id_pagos_enviados_cestas;

			$insertar4 ="UPDATE `pagos_enviados_cestas` SET `codigo` = '$codigo' WHERE `pagos_enviados_cestas`.`id_pagos_enviados_cestas` = $id_pagos_enviados_cestas;";

			$ejecutar_insertar4 = $conexion->query($insertar4) or die ("No se cargo la imagen");

	}
}


else if ($tipo_mensaje ==3) {

	
	
	$id_clase = $_POST["id_productos"];


	

	$consulta4 ="SELECT * FROM usuario_asociado WHERE id_clase='$id_clase'";

	$ejecutar_consulta4 = $conexion->query($consulta4) or die ("No se ejecuto query");

	while ($registro4 = $ejecutar_consulta4->fetch_assoc()) { 
		
		$id_cliente = $registro4["id_cliente"];


		$id_pagos_enviados = $id_pagos_enviados;

		$insertar3 ="INSERT INTO `pagos_enviados_cestas` (`id_pagos_enviados_cestas`, `id_pagos_enviados`, `id_cliente`, `status`, `fecha_pago`, `pago_adjunto`, `negado_motivo`, `id_analista`) VALUES (NULL, '$id_pagos_enviados', '$id_cliente', 'Pendiente', '', '', '', '$id_analista');";

			$ejecutar_insertar3 = $conexion->query($insertar3) or die ("No se cargo la imagen");

			$id_pagos_enviados_cestas = $conexion->insert_id;

			$codigo = date("ymd")."000".$id_pagos_enviados_cestas;

			$insertar4 ="UPDATE `pagos_enviados_cestas` SET `codigo` = '$codigo' WHERE `pagos_enviados_cestas`.`id_pagos_enviados_cestas` = $id_pagos_enviados_cestas;";

			$ejecutar_insertar4 = $conexion->query($insertar4) or die ("No se cargo la imagen");

	}

}

 header("location: ../../tu_perfil.php?op=analistas_pagos_2");
				


?>