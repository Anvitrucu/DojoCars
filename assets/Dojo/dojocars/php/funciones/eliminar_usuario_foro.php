<?php 

include 'conexion.php';

$id_foro = $_GET["id_foro"];

$id_usuario = $_GET["id_usuario"];

$status = $_GET["status"];



$eliminar_usuario = "DELETE FROM `usuarios_inscritos_foro` WHERE id_foro = '$id_foro' AND id_usuario = '$id_usuario'";

$ejecutar_eliminar_usuario = $conexion->query($eliminar_usuario);

header("Location: ../../tu_perfil.php?op=usuarios_foro&id_usuario=$id_usuario&id_foro=$id_foro&status=$status");		
 ?>