<?php 


$id_tatu_eventos = $_GET["id_tatu_eventos"];

 
  

include ("conexion.php");

 




$consulta = "DELETE  FROM tatu_eventos WHERE id_tatu_eventos='$id_tatu_eventos'";


$ejecutar_consulta = $conexion->query($consulta);


 
header("Location: ../../tu_perfil.php?op=admin_cargar_eventos");

?>