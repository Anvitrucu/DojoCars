<?php 

include("conexion.php");

$categoria_producto =addslashes(utf8_decode($_POST["categoria_producto"]));

$categoria_ingles =addslashes(utf8_decode($_POST["categoria_ingles"]));


 $id_categoria_producto =addslashes(utf8_decode($_POST["id_categoria_producto"]));

 
 
$insertar2 ="UPDATE `categorias_general` SET `categoria_producto` = '$categoria_producto', `categoria_ingles` = '$categoria_ingles'  WHERE id_categoria_producto='$id_categoria_producto'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

$mensaje = "<b> Articulo Actializado</b>";


header("location: ../../tu_perfil.php?op=cargar_categoria_general&mensaje=$mensaje");


?>