<?php
 
include ("conexion.php");

$id_tatu_eventos_categorias = $_GET["id"];

 
 $consulta = "DELETE  FROM tatu_eventos WHERE id_tatu_eventos_categoria='$id_tatu_eventos_categorias'";

$ejecutar_consulta = $conexion->query($consulta);

 $consulta = "DELETE  FROM tatu_eventos_categorias WHERE id_tatu_eventos_categorias='$id_tatu_eventos_categorias'";

$ejecutar_consulta = $conexion->query($consulta);



 

  $mensaje = "<b> Categoria Eliminada Correctamente</b>";
 header("Location:../../tu_perfil.php?op=admin_categoria_eventos&mensaje=$mensaje");

?>