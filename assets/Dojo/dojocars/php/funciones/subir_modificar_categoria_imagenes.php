<?php 

include("conexion.php");

$tatu_galeria_categoria =addslashes(utf8_decode($_POST["tatu_galeria_categoria"]));

 

 $id_tatu_galeria_categoria =addslashes(utf8_decode($_POST["id_tatu_galeria_categoria"]));

 
 
$insertar2 ="UPDATE `tatu_galeria_categoria` SET `tatu_galeria_categoria` = '$tatu_galeria_categoria'  WHERE id_tatu_galeria_categoria='$id_tatu_galeria_categoria'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

$mensaje = "<b> Categoria Actualizada</b>";


header("location: ../../tu_perfil.php?op=admin_categoria_imagenes&mensaje=$mensaje");


?>