<?php


 

include ("conexion.php");

$id_tatu_galeria_categoria = $_GET["id"];

 
 $consulta = "DELETE  FROM tatu_galeria WHERE id_tatu_galeria_categoria='$id_tatu_galeria_categoria'";

$ejecutar_consulta = $conexion->query($consulta);

 $consulta = "DELETE  FROM tatu_galeria_categoria WHERE id_tatu_galeria_categoria='$id_tatu_galeria_categoria'";

$ejecutar_consulta = $conexion->query($consulta);



 

  $mensaje = "<b> Categoria Eliminada Correctamente</b>";
 header("Location:../../tu_perfil.php?op=admin_categoria_imagenes&mensaje=$mensaje");

?>