<?php 
session_start();

include ("conexion.php");

		$id_categoria_producto = $_POST["id_categoria_producto"];

		$usuario = $_SESSION["usuario"];

		$contrasena = utf8_decode($_SESSION["contrasena"]);

		 

		include ("php/funciones/conexion.php");

		$busqueda="SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena'";

		$ejecutar_consulta = $conexion->query($busqueda);

		$arreglo = $ejecutar_consulta->fetch_assoc();
 
		$id_usuario = $arreglo['id_usuario'];	


$consulta ="UPDATE `usuario` SET `categoria` = '$id_categoria_producto' WHERE `id_usuario` = $id_usuario ";

$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 

header("Location: ../../index.php?menu=intro_ciudad");
?>