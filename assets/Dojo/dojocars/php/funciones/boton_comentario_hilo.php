<?php 

include 'conexion.php';

$hacer_comentario = 1;

$status = utf8_decode($_POST["status"]);

$id_foro = utf8_decode($_POST["id_foro"]);


header("Location: ../../tu_perfil.php?op=foro&hacer_comentario=$hacer_comentario&status=$status&id_foro=$id_foro");		

?>