<?php 


include ("conexion.php");

/*$fecha_foro = $_POST["fecha_foro"];*/

$fecha_foro = date("Y/m/d");

$nombre_foro = $_POST["nombre_foro"];

$descripcion_foro = $_POST["descripcion_foro"];


#echo $fecha_foro."<br>".$nombre_foro."<br>".$descripcion_foro;




$insertar_foro= "INSERT INTO `foro` (`id_foro`, `nombre_foro`, `descripcion_foro`, `fecha_foro`) VALUES (NULL, '$nombre_foro', '$descripcion_foro', '$fecha_foro');";

$ejecutar_consulta_foro = $conexion->query($insertar_foro) or die ("No se subio");



header("Location: ../../tu_perfil.php?op=tabla_foros");


 ?>