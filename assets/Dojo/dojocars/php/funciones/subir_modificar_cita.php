<?php 


 

include ("conexion.php");

 
 
$id_usuario = $_GET['id_usuario'];

$id_producto = $_GET['id_producto'];

$tiempo =addslashes(utf8_decode($_GET["tiempo"]));

$fecha =addslashes(utf8_decode($_GET["fecha_mostrar"]));

$hora =addslashes(utf8_decode($_GET["hora"]));

$dia_semana =addslashes(utf8_decode($_GET["dia_semana"]));

$telefono_cliente =addslashes(utf8_decode($_GET["telefono_cliente"]));

$direccion_cliente =addslashes(utf8_decode($_GET["direccion_cliente"]));

$representante_id =addslashes(utf8_decode($_GET["representante_id"]));

$precio_producto =addslashes(utf8_decode($_GET["precio_producto"]));





$id_cita = $_GET['id_cita'];
 

 

 


$consulta_2 = "UPDATE `tatu_cita` SET `fecha` = '$fecha', `hora` = '$hora', `dia_semana` = '$dia_semana' WHERE `id_tatu_cita` = $id_cita;";

$ejecutar_consulta_2 = $conexion->query($consulta_2) or die ("no se realizo la consulta 2");  

$id_tatu_cita = $conexion->insert_id;

 

 
header("Location:../../tu_perfil.php?op=analista_citas_detalles&id=$id_producto");



 




 


?>