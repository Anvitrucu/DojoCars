<?php 

$id_dat = $_GET["id_dat"];

$monto_pag = $_GET["monto_pag"];

 
$calificacion = $_GET["calificacion"];

 
$review = utf8_encode(addslashes(nl2br($_GET["review"])));

include("conexion.php");

 

$insertar2 ="UPDATE `tatu_cita` SET `review` = '$review', `calificacion` = '$calificacion'  WHERE id_tatu_cita='$id_dat'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

$mensaje = "<b> Evento Agregado</b>";
 header("location: ../../tu_perfil.php?op=pago_final_2&id_dat=$id_dat&monto_pag=$monto_pag");



?>