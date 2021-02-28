<?php 

include ("conexion.php");

$id_foro = utf8_encode($_GET["id_foro"]);


 $eliminar_solicitud = "DELETE FROM `usuarios_inscritos_foro` WHERE id_foro='$id_foro'";

$ejecutar_eliminar_solicitud = $conexion->query($eliminar_solicitud);


header("Location:../../tu_perfil.php?op=solicitar_foro");

 ?>