<?php 

include 'conexion.php';

if ($_POST["mencion_activa"] == "no") {

$id_hilo = utf8_decode($_POST["id_hilo"]);

$id_foro = utf8_decode($_POST["id_foro"]);

$id_usuario = utf8_decode($_POST["id_usuario"]);

$comentario = nl2br( addslashes( utf8_decode($_POST["comentario"])));

$status = utf8_decode($_POST["status"]);

$mencion_activa = "no";


$insertar_comentario = "INSERT INTO `comentario_hilo` (`id_comentario_hilo`, `id_hilo`, `id_usuario`, `comentario`, `mencion`, `mencion_activa`) VALUES (NULL, '$id_hilo', '$id_usuario', '$comentario', NULL, 'no');";

$ejecutar_consulta_comentario = $conexion->query($insertar_comentario);


 header("Location: ../../tu_perfil.php?op=comentarios_hilos&id_foro=$id_foro&id_hilo=$id_hilo&status=1");

} else {

$id_hilo = utf8_decode($_POST["id_hilo"]);

$id_foro = utf8_decode($_POST["id_foro"]);

$id_usuario = utf8_decode($_POST["id_usuario"]);

$comentario = nl2br( addslashes( utf8_decode($_POST["comentario"])));

$mencion = nl2br( addslashes( utf8_decode($_POST["mencion"])));

$mencion_activa = utf8_decode($_POST["mencion_activa"]);

$status = utf8_decode($_POST["status"]);

$id_comentario_mencionado = $_POST["id_comentario_mencionado"];


$insertar_comentario = "INSERT INTO `comentario_hilo` (`id_comentario_hilo`, `id_hilo`, `id_usuario`, `comentario`, `mencion`, `mencion_activa` , `id_comentario_mencionado`) VALUES (NULL, '$id_hilo', '$id_usuario', '$comentario', '$mencion', 'si' ,'$id_comentario_mencionado');";

$ejecutar_consulta_comentario = $conexion->query($insertar_comentario);


 header("Location: ../../tu_perfil.php?op=comentarios_hilos&id_foro=$id_foro&id_hilo=$id_hilo&status=1");



}




?>