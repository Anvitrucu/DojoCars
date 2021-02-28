<?php 

include("conexion.php");

$nombre_foro = $_POST["nombre_foro"];

$descripcion_foro = $_POST["descripcion_foro"];

$id_foro = $_POST["id_foro"];

/*echo $nombre_foro."<br>";

echo $descripcion_foro."<br>";

echo $id_foro."<br>";*/

$modificar_foro = "UPDATE `foro` SET `nombre_foro`='$nombre_foro',`descripcion_foro`='$descripcion_foro',`fecha_foro`='' WHERE id_foro='$id_foro'";

$ejecutar_consulta_foro = $conexion->query($modificar_foro);


header("Location: ../../tu_perfil.php?op=tabla_foros");



 ?>