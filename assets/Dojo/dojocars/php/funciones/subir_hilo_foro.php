<?php 

include ("conexion.php");

$titulo_hilo = addslashes(utf8_decode($_POST["titulo_hilo"])) ;

$descripcion_hilo = addslashes(utf8_decode($_POST["descripcion_hilo"])) ; 

$id_foro = $_POST["foro"];

$id_usuario = $_POST["id_usuario"];

$status = $_POST["status"];



 
if ($status == 1) {

	$insertar_foro= "INSERT INTO `hilos_conversacion` (`id_hilos`, `id_foro`, `id_usuario`, `titulo_hilo`, `descripcion_hilo`, `status`) VALUES (NULL, '$id_foro', '$id_usuario', '$titulo_hilo', '$descripcion_hilo', '$status')";

    $ejecutar_consulta_foro = $conexion->query($insertar_foro) or die ("No se subio");
}

else{

$insertar_foro= "INSERT INTO `hilos_conversacion` (`id_hilos`, `id_foro`, `id_usuario`, `titulo_hilo`, `descripcion_hilo`, `status`) VALUES (NULL, '$id_foro', '$id_usuario', '$titulo_hilo', '$descripcion_hilo', '')";

$ejecutar_consulta_foro = $conexion->query($insertar_foro) or die ("No se subio");
}

header("Location: ../../tu_perfil.php?op=foro&id_foro=$id_foro&status=$status");


 ?>












 