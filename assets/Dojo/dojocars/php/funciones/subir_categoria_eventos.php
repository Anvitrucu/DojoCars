<?php 

$categorias =addslashes(utf8_decode($_POST["categorias"]));

 

 
include ("conexion.php");


 

$consulta = "INSERT INTO `tatu_eventos_categorias` (`id_tatu_eventos_categorias`, `categorias` ) VALUES (NULL, '$categorias' );";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


$mensaje = "<b> Categoria Cargada Correctamente</b>";


header("location: ../../tu_perfil.php?op=admin_categoria_eventos&mensaje=$mensaje");			






?>