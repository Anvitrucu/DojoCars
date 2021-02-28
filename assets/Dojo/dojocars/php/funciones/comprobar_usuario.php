<?php
 
		

		$correo = $_SESSION["correo"];

		$contrasena = utf8_decode($_SESSION["contrasena"]);

		 
		 

		include ("php/funciones/conexion.php");

		$busqueda="SELECT * FROM usuario WHERE correo='$correo' AND contrasena='$contrasena'";

		$ejecutar_consulta = $conexion->query($busqueda);

		$arreglo = $ejecutar_consulta->fetch_assoc();

		$nivel_usuario = $arreglo['tipousuario_tipousuarioid'];

		$id_usuario = $arreglo['id_usuario'];	

		$id_de_usuario = $arreglo['id_usuario'];	

		$nombre = $arreglo["usuario_nombre"];

		$fecha_vencimiento = $arreglo["fecha_vencimiento"];

		$pais_Paisid = $arreglo["pais_Paisid"];

		$calificacion = $arreglo["calificacion"];

		$ciudad_id = $arreglo["ciudad_id"];


		$correo_user = $arreglo["correo"];

		$cliente_COPS = $arreglo["cliente_COPS"];

		$foto_perfil_general = $arreglo["foto_perfil"];

		$biografia_general = $arreglo["biografia"];



		$hora_entrada_general = $arreglo["hora_entrada"];

		$hora_salida_general = $arreglo["hora_salida"];

		$hora_entrada_general = date('H', strtotime($hora_entrada_general));

		$hora_salida_general = date('H', strtotime($hora_salida_general));



		$establecimiento_activo_general = $arreglo["establecimiento_activo"];

		$establecimiento_direccion_general = utf8_encode($arreglo["establecimiento_direccion"]);





?>

