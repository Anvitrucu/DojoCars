<?php 

$departamento_es =addslashes(utf8_decode($_POST["departamento_es"]));

$departamento_in =addslashes(utf8_decode($_POST["departamento_in"]));

$id_departamento =addslashes(utf8_decode($_POST["id_departamento"]));
 
include ("conexion.php");


 

$consulta = "UPDATE `departamento` SET `departamento_es` = '$departamento_es', `departamento_in` = '$departamento_in' WHERE `departamento`.`id_departamento` = $id_departamento;";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 

 



header("location: ../../tu_perfil.php?op=departamentos_cargar_2&id_departamento=$id_departamento");			






?>