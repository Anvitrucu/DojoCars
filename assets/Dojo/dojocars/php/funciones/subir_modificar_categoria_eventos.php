<?php 

include("conexion.php");

$categorias =addslashes(utf8_decode($_POST["categorias"]));

 

 $id_tatu_eventos_categorias =addslashes(utf8_decode($_POST["id_tatu_eventos_categorias"]));

 
 
$insertar2 ="UPDATE `tatu_eventos_categorias` SET `categorias` = '$categorias'  WHERE id_tatu_eventos_categorias='$id_tatu_eventos_categorias'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

$mensaje = "<b> Categoria Actualizada</b>";


header("location: ../../tu_perfil.php?op=admin_categoria_eventos&mensaje=$mensaje");


?>