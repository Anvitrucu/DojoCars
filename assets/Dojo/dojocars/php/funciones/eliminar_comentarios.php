<?php 

include 'conexion.php';

$id_comentario_hilo = $_GET["id_comentario_hilo"];

$id_foro = $_GET["id_foro"];

$id_hilo =$_GET["id_hilo"];


$eliminar_comentarios = "DELETE FROM `comentario_hilo` WHERE id_comentario_hilo = '$id_comentario_hilo'";

$ejecutar_eliminar_comentario = $conexion->query($eliminar_comentarios);


header("Location: ../../tu_perfil.php?op=comentarios_hilos&id_foro=$id_foro&id_hilo=$id_hilo&status=1");
 ?>



         

          