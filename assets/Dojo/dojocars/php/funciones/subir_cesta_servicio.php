<?php 

$id_producto =addslashes(utf8_decode($_POST["id_producto"]));

$producto_cesta =addslashes(utf8_decode($_POST["producto_cesta"]));


 
include ("conexion.php");


 

$consulta = "INSERT INTO `productos_cesta_especificos` (`id_productos_cesta_especificos`, `id_producto`, `producto_cesta`) VALUES (NULL, '$id_producto', '$producto_cesta');";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


$mensaje = "<b> Articulo Cargado Correctamente</b>";


header("location: ../../tu_perfil.php?op=producto_servicios_especificos&id=$id_producto");			






?>