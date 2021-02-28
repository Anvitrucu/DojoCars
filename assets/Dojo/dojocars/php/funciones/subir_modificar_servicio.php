<?php

session_start();

include ("conexion.php");

$id_producto = $_POST["id_producto"];


$nombre_producto = utf8_decode(addslashes($_POST["nombre_producto"]));

$id_representante = $_POST["id_representante"];


		$busqueda="SELECT * FROM usuario WHERE id_usuario='$id_representante'";

		$ejecutar_consulta = $conexion->query($busqueda);

		$arreglo = $ejecutar_consulta->fetch_assoc();

		$nivel_usuario = $arreglo['tipousuario_tipousuarioid'];

		$id_usuario = $arreglo['id_usuario'];
		
		$vendedor = $arreglo['usuario'];	

		$nombre = $arreglo["usuario_nombre"];

		$fecha_vencimiento = $arreglo["fecha_vencimiento"];

		$pais_Paisid = $arreglo["pais_Paisid"];



		$latitud = $arreglo["latitud"];

		$longitud = $arreglo["longitud"];

		$rango = $arreglo["rango"];



$Lunes =  $_POST["Lunes"] ;

$Martes =  $_POST["Martes"] ;

$Miercoles =  $_POST["Miercoles"] ;

$Jueves =  $_POST["Jueves"] ;

$Viernes =  $_POST["Viernes"] ;

$Sabado =  $_POST["Sabado"] ;

$Domingo =  $_POST["Domingo"] ;


$cantidad_disponible = $_POST["cantidad_disponible"];

$descripcion = utf8_decode(addslashes(nl2br($_POST["descripcion"])));

 
$id_categoria_producto = utf8_decode($_POST["id_categoria_producto"]);

$id_categorias_especificas = $_POST["id_categorias_especificas"];

$cita_simultaneas = $_POST["cantidad_disponible"];


$precio_producto = $_POST["precio_producto"];

$precio_producto_domicilio = $_POST["precio_producto_domicilio"];






$insertar1= "UPDATE `productos` SET `nombre_0` = '$nombre_producto', `nombre_1` = '$nombre_producto', `descripcion_producto_0` = '$descripcion', `descripcion_producto_1` = '$descripcion', `id_categoria_producto` = '$id_categoria_producto',  `cita_simultaneas` = '$cantidad_disponible', `Lunes` = '$Lunes', `Martes` = '$Martes', `Miercoles` = '$Miercoles', `Jueves` = '$Jueves', `Viernes` = '$Viernes', `Sabado` = '$Sabado', `Domingo` = '$Domingo', `latitud` = '$latitud', `longitud` = '$longitud', `precio_producto` = '$precio_producto', `precio_producto_domicilio` = '$precio_producto_domicilio', `rango` = '$rango', `cita_simultaneas` = '$cita_simultaneas' WHERE  `id_productos` = $id_producto  ";

$ejecutar_consulta1 = $conexion->query($insertar1) or die ("no se subio");

 

 header("location: ../../tu_perfil.php?op=cargar_servicios_fotos&id=$id_producto");
		



?>