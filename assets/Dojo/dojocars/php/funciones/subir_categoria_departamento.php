<?php 

$id_departamento =addslashes(utf8_decode($_POST["id_departamento"]));

$id_categorias_general =addslashes(utf8_decode($_POST["id_categorias_general"]));


 
include ("conexion.php");


 

$consulta = "INSERT INTO `departamento_categorias` (`id_departamento_categorias`, `id_departamento`, `id_categorias_general`) VALUES (NULL, '$id_departamento', '$id_categorias_general');";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


 



header("location: ../../tu_perfil.php?op=departamentos_cargar_2&id_departamento=$id_departamento");			






?>