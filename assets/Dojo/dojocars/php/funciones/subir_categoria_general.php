<?php 

$categoria_producto =addslashes(utf8_decode($_POST["categoria_producto"]));

$categoria_ingles =addslashes(utf8_decode($_POST["categoria_ingles"]));


 
include ("conexion.php");


 

$consulta = "INSERT INTO `categorias_general` (`id_categoria_producto`, `categoria_producto`, `categoria_ingles`) VALUES (NULL, '$categoria_producto', '$categoria_ingles');";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


$mensaje = "<b> Articulo Cargado Correctamente</b>";


header("location: ../../tu_perfil.php?op=cargar_categoria_general&mensaje=$mensaje");			






?>