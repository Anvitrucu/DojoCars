<?php


 

include ("conexion.php");

$id_productos = $_GET["id"];


 $consulta = "DELETE  FROM productos WHERE id_productos='$id_productos'";

$ejecutar_consulta = $conexion->query($consulta);


 $consulta = "DELETE  FROM producto_cita_cesta WHERE id_productos='$id_productos'";

$ejecutar_consulta = $conexion->query($consulta);


 $consulta = "DELETE  FROM preguntas WHERE id_producto='$id_productos'";

$ejecutar_consulta = $conexion->query($consulta);



 $consulta = "DELETE  FROM lista_deseos WHERE id_producto='$id_productos'";

$ejecutar_consulta = $conexion->query($consulta);




 header("Location:../../tu_perfil.php?op=servicios_cargados");

?>