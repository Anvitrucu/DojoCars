<?php 

$id_categorias_general = $_POST["id_categorias_general"];

 

$producto = utf8_decode($_POST["producto"]);

 $categoria_especifica_ingles = utf8_decode($_POST["categoria_especifica_ingles"]);

include ("conexion.php");


 
 
 
$consulta = "INSERT INTO `categorias_especificas` (`id_categorias_especificas`, `categorias_general_id_categoria_producto`, `categoria_especifica`, `categoria_especifica_ingles`) VALUES (NULL, '$id_categorias_general', '$producto', '$categoria_especifica_ingles');";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


header("Location: ../../tu_perfil.php?op=cargar_categoria_especifica");					
 




?>