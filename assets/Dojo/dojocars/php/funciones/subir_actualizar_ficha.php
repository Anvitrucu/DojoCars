<?php


		include ("conexion.php");



		$nombre_cliente = utf8_decode($_GET ["nombre_cliente"]);

		$id_usuario_asociado = utf8_decode($_GET ["id_usuario_asociado"]);


		
		$nombre_cliente = addslashes(utf8_decode($_GET ["nombre_cliente"]));
		
		$ficha_referencia = addslashes(utf8_decode($_GET ["ficha_referencia"]));
		
		$ficha_cedula = utf8_decode($_GET["ficha_cedula"]);
		
		$ficha_pais = addslashes(utf8_decode($_GET ["ficha_pais"]));
		
		$ficha_ciudad = addslashes(utf8_decode($_GET ["ficha_ciudad"]));

		$ficha_direccion = addslashes(utf8_decode($_GET ["ficha_direccion"]));

		$ficha_descripcion = nl2br(addslashes(utf8_decode($_GET ["ficha_descripcion"])));

		$ficha_fecha_de_nacimiento = date("Y-m-d",strtotime($_GET["ficha_fecha_de_nacimiento"])) ;

		$ficha_telefono = nl2br(addslashes(utf8_decode($_GET ["ficha_telefono"])));


	 
		$consulta ="UPDATE `usuario_asociado` SET `ficha_nombre` = '$nombre_cliente', `ficha_referencia` = '$ficha_referencia', `ficha_cedula` = '$ficha_cedula', `ficha_pais` = '$ficha_pais', `ficha_ciudad` = '$ficha_ciudad', `ficha_direccion` = '$ficha_direccion', `ficha_descripcion` = '$ficha_descripcion', `ficha_fecha_de_nacimiento` = '$ficha_fecha_de_nacimiento', `ficha_telefono` = '$ficha_telefono' WHERE `id_usuario_asociado` = $id_usuario_asociado;";

		$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 

										

										

		header("location: ../../tu_perfil.php?op=analista_suscritores_suscriptores_2&id=$id_usuario_asociado");

      	 






?>