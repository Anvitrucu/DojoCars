<?php 

include("conexion.php");

$categoria_especifica =addslashes(utf8_decode($_POST["producto"]));

$categoria_especifica_ingles =addslashes(utf8_decode($_POST["categoria_especifica_ingles"]));


 $id_categorias_especificas =addslashes(utf8_decode($_POST["id_categorias_especificas"]));

 
 
$insertar2 ="UPDATE `categorias_especificas` SET `categoria_especifica` = '$categoria_especifica', `categoria_especifica_ingles` = '$categoria_especifica_ingles'  WHERE id_categorias_especificas='$id_categorias_especificas'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

$mensaje = "<b> Articulo Actializado</b>";


 header("location: ../../tu_perfil.php?op=cargar_categoria_especifica&mensaje=$mensaje");


?>