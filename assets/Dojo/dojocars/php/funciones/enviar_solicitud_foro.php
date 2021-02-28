<?php 

include 'conexion.php';

$id_foro = $_POST["foro"];

$id_usuario = $_POST["usuario"];

$insertar_solicitud = "INSERT INTO `usuarios_inscritos_foro` (`id_usuarios_inscritos_foro`, `id_foro`, `id_usuario`, `status`) VALUES (NULL, '$id_foro', '$id_usuario', '')	";

$ejecutar_consulta_foro = $conexion->query($insertar_solicitud) or die ("no se realizo la consulta"); 


header("Location: ../../tu_perfil.php?op=mensaje_recibido");


?>


