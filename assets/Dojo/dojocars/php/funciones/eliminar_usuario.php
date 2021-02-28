<?php


 

include ("conexion.php");

$id_usuario = $_GET["id"];

 

$consulta = "DELETE  FROM usuario WHERE id_usuario='$id_usuario'";


$ejecutar_consulta = $conexion->query($consulta);




$consulta2 = "DELETE  FROM productos WHERE id_usuario='$id_usuario'";


$ejecutar_consulta2 = $conexion->query($consulta2);




$mensaje ="<center>Usuario eliminado con éxito</center>";



 




 header("Location:../../tu_perfil.php?op=ver_usuarios_cargados");

?>