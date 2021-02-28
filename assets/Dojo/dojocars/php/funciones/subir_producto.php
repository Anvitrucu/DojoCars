precio_producto_domicilio<?php

session_start();

include ("conexion.php");

 $usuario = $_SESSION["usuario"];

		$contrasena = utf8_decode($_SESSION["contrasena"]);

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



$nombre_producto = utf8_decode(addslashes($_POST["nombre_producto"]));

$descripcion = utf8_decode(addslashes(nl2br($_POST["descripcion"])));

$descripcion_producto_ingles = utf8_decode(addslashes(nl2br($_POST["descripcion_producto_ingles"])));

$id_categoria_producto = utf8_decode($_POST["id_categoria_producto"]);


$id_categorias_especificas = $_POST["id_categorias_especificas"];



$id_usuario = $arreglo['id_usuario'];

$pais_Paisid = $arreglo["pais_Paisid"];

 

 $tipo_producto = $_POST["tipo_producto"];

 
$precio_producto = $_POST["precio_producto"];

$impuesto_producto = $_POST["impuesto_producto"];

$descuento_producto = $_POST["descuento_producto"];

$cantidad_disponible = $_POST["cantidad_disponible"];

$precio_producto_domicilio = $_POST["precio_producto_domicilio"];



 

$nombre_ingles = utf8_decode(addslashes($_POST["nombre_ingles"]));


 
 $precio_cops =  $_POST["precio_cops"] ;




$Lunes =  $_POST["Lunes"] ;

$Martes =  $_POST["Martes"] ;

$Miercoles =  $_POST["Miercoles"] ;

$Jueves =  $_POST["Jueves"] ;

$Viernes =  $_POST["Viernes"] ;

$Sabado =  $_POST["Sabado"] ;

$Domingo =  $_POST["Domingo"] ;



$Domingo =  $_POST["Domingo"] ;


$cita_simultaneas = $_POST["cantidad_disponible"];

 

		$insertar1= "INSERT INTO `productos` (`id_productos`, `id_profit`, `nombre_0`, `nombre_1`, `precio_producto`, `precio_cops`, `impuesto_producto`, `descuento_producto`, `descripcion_producto_0`, `descripcion_producto_1`, `id_usuario`, `pais_id`, `ciudad_id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `condiciones_contratacion`, `id_categoria_producto`, `id_categorias_especificas`, `imagen_descripcion_producto`, `tipo_producto`, `cantidad_disponible`, `activo`, `date_now`, `cita_duracion`, `cita_representante`, `cita_fecha_inicio`, `cita_fecha_cierre`, `cita_simultaneas`, `Lunes`, `Martes`, `Miercoles`, `Jueves`, `Viernes`, `Sabado`, `Domingo`, `latitud`, `longitud`, `rango`,`precio_producto_domicilio`) 


		VALUES (NULL, '0', '$nombre_producto', '$nombre_producto', '$precio_producto', '', '$impuesto_producto', NULL, '$descripcion', '$descripcion', '$id_representante', '57', NULL, NULL, NULL, NULL, NULL, NULL, '$id_categoria_producto', '$id_categorias_especificas', NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP, '', '$id_representante', NULL, NULL, '$cita_simultaneas', '$Lunes', '$Martes', '$Miercoles', '$Jueves', '$Viernes', '$Sabado', '$Domingo', '$latitud', '$longitud', '$rango', '$precio_producto_domicilio');";


 
 
  
		$ejecutar_consulta1 = $conexion->query($insertar1) or die ("no se subio");


		$id_productos = $conexion->insert_id;

 

 
 header("location: ../../tu_perfil.php?op=cargar_servicios_fotos&id=$id_productos&vendedor=$usuario");
		

?>