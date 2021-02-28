<?php 

$tatu_galeria_categoria =addslashes(utf8_decode($_POST["tatu_galeria_categoria"]));

 

 
include ("conexion.php");


 

$consulta = "INSERT INTO `tatu_galeria_categoria` (`id_tatu_galeria_categoria`, `tatu_galeria_categoria` ) VALUES (NULL, '$tatu_galeria_categoria' );";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


$mensaje = "<b> Categoria Cargada Correctamente</b>";


header("location: ../../tu_perfil.php?op=admin_categoria_imagenes&mensaje=$mensaje");			






?>