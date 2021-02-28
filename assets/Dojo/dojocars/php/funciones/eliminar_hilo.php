<?php 

include 'conexion.php';

$id_hilo = $_GET["id_hilo"];

$id_foro = $_GET["id_foro"];

$status = $_GET["status"];

#echo $id_foro."<br>".$id_hilo."<br>".$status;



$eliminar_hilo = "DELETE FROM `hilos_conversacion` WHERE id_hilo = '$id_hilo' AND id_foro = '$id_foro'";

$ejecutar_eliminar_hilo = $conexion->query($eliminar_hilo);


header("Location:../../tu_perfil.php?op=foro&id_foro=$id_foro&status=$status");


 ?>