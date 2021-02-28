<?php
 
include ("conexion.php");

$id_tatu_cita = $_GET["id"];

 
 $consulta = "DELETE  FROM tatu_cita_cesta WHERE id_tatu_cita='$id_tatu_cita'";

$ejecutar_consulta = $conexion->query($consulta);



 $consulta = "DELETE  FROM tatu_cita WHERE id_tatu_cita='$id_tatu_cita'";

$ejecutar_consulta = $conexion->query($consulta);



 

  $mensaje = "<b> Cita Eliminada Correctamente</b>";
header("Location:../../tu_perfil.php?op=user_proximas_citas&mensaje=$mensaje");

?>