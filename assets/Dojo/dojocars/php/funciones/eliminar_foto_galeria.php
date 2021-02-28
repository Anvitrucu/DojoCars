<?php


 

include ("conexion.php");

$id_tatu_galeria = $_GET["id"];

 
 $consulta = "DELETE  FROM tatu_galeria WHERE id_tatu_galeria='$id_tatu_galeria'";

$ejecutar_consulta = $conexion->query($consulta);
 


 

  $mensaje = "<b> Categoria Eliminada Correctamente</b>";
 header("Location:../../tu_perfil.php?op=admin_cargar_imagenes_galeria&mensaje=$mensaje");

?>