<?php 

$id_producto =addslashes(utf8_decode($_GET["id"]));

 
$id_productos_cesta_especificos =addslashes(utf8_decode($_GET["id_productos_cesta_especificos"]));

include ("conexion.php");


 

$consulta = "DELETE FROM `productos_cesta_especificos` WHERE `productos_cesta_especificos`.`id_productos_cesta_especificos` = $id_productos_cesta_especificos";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


$mensaje = "<b> Articulo Cargado Correctamente</b>";


header("location: ../../tu_perfil.php?op=producto_servicios_especificos&id=$id_producto");			






?>