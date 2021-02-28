<?php 

$id_producto =addslashes(utf8_decode($_POST["id_producto"]));

$producto_cesta =addslashes(utf8_decode($_POST["producto_cesta"]));

$id_productos_cesta_especificos =addslashes(utf8_decode($_POST["id_productos_cesta_especificos"]));

include ("conexion.php");


 

$consulta = "UPDATE `productos_cesta_especificos` SET `producto_cesta` = '$producto_cesta' WHERE  `id_productos_cesta_especificos` = $id_productos_cesta_especificos;";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


$mensaje = "<b> Articulo Cargado Correctamente</b>";


header("location: ../../tu_perfil.php?op=producto_servicios_especificos&id=$id_producto");			






?>