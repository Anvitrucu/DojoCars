<?php 

include 'conexion.php';

	
$id_foro = utf8_decode($_GET["id_foro"]);

$id_usuario = utf8_decode($_GET["id_usuario"]);

$status = utf8_decode($_GET["status"]);

echo $id_foro."<br>";

echo $id_usuario."<br>";

echo $status."<br>";

$insertar_status= "UPDATE `usuarios_inscritos_foro` SET `status`='$status' WHERE `id_foro`= '$id_foro'";

$ejecutar_insertar_status = $conexion->query($insertar_status) or die ("no se realizo");


$insertar_status_hilos = "UPDATE `hilos_conversacion` SET `status`='$status' WHERE `id_foro`= '$id_foro'";

$ejecutar_insertar_status_hilos = $conexion->query($insertar_status_hilos) or die ("no se realizo");


header("Location: ../../tu_perfil.php?op=solicitar_foro&status=$status");



 ?>