<?php 

$departamento_es =addslashes(utf8_decode($_POST["departamento_es"]));

$departamento_in =addslashes(utf8_decode($_POST["departamento_in"]));


 
include ("conexion.php");


 

$consulta = "INSERT INTO `departamento` (`id_departamento`, `departamento_es`, `departamento_in`) VALUES (NULL, '$departamento_es', '$departamento_in');";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 


$id_departamento = $conexion->insert_id;



header("location: ../../tu_perfil.php?op=departamentos_cargar_2&id_departamento=$id_departamento");			






?>