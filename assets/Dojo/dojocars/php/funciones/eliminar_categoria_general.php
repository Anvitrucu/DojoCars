<?php


 

include ("conexion.php");

$id_categoria_producto = $_GET["id"];

 
 $consulta = "DELETE  FROM productos WHERE id_categoria_producto='$id_categoria_producto'";

$ejecutar_consulta = $conexion->query($consulta);

 $consulta = "DELETE  FROM categorias_especificas WHERE categorias_general_id_categoria_producto='$id_categoria_producto'";

$ejecutar_consulta = $conexion->query($consulta);



$consulta = "DELETE  FROM categorias_general WHERE id_categoria_producto='$id_categoria_producto'";

$ejecutar_consulta = $conexion->query($consulta);

  $mensaje = "<b> Articulo Eliminado Correctamente</b>";
 header("Location:../../tu_perfil.php?op=cargar_categoria_general&mensaje=$mensaje");

?>