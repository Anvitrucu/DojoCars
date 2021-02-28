<?php 


$id_departamento_categorias = $_GET["id"];

 $id_departamento = $_GET["id_departamento"];
  

include ("conexion.php");

 




$consulta = "DELETE  FROM departamento_categorias WHERE id_departamento_categorias='$id_departamento_categorias'";


$ejecutar_consulta = $conexion->query($consulta);


 
header("Location: ../../tu_perfil.php?op=departamentos_cargar_2&id_departamento=1");

?>