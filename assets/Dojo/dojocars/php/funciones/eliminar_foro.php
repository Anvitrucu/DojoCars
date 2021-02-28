<?php  
include ("conexion.php");

$id_foro = utf8_encode($_GET["id_foro"]);



 $eliminar_foro = "DELETE  FROM hilos_conversacion WHERE id_foro='$id_foro'";

$ejecutar_eliminar_foro = $conexion->query($eliminar_foro);




 $eliminar_foro = "DELETE  FROM foro WHERE id_foro='$id_foro'";

$ejecutar_eliminar_foro = $conexion->query($eliminar_foro);


header("Location:../../tu_perfil.php?op=tabla_foros");


?>