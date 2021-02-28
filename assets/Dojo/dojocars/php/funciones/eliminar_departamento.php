<?php


 

include ("conexion.php");

$id_departamento = $_GET["id_departamento"];




$consulta = "DELETE  FROM departamento_categorias WHERE id_departamento='$id_departamento'";


$ejecutar_consulta = $conexion->query($consulta);



$consulta2 = "DELETE  FROM departamento WHERE id_departamento='$id_departamento'";


$ejecutar_consulta2 = $conexion->query($consulta2);


header("Location:../../tu_perfil.php?op=departamentos_cargados");

?>