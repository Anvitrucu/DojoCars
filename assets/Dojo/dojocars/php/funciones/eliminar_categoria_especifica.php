<?php


 

include ("conexion.php");

$id_categorias_especificas = $_GET["id"];

 
 $consulta = "DELETE  FROM productos WHERE id_categorias_especificas='$id_categorias_especificas'";

$ejecutar_consulta = $conexion->query($consulta);

 $consulta = "DELETE  FROM categorias_especificas WHERE id_categorias_especificas='$id_categorias_especificas'";

$ejecutar_consulta = $conexion->query($consulta);



 

  $mensaje = "<b> Articulo Eliminado Correctamente</b>";
 header("Location:../../tu_perfil.php?op=cargar_categoria_general&mensaje=$mensaje");

?>