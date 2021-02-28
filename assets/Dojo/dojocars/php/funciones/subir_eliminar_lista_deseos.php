<?php 

$id_lista_deseos = $_GET["id"];


include ("conexion.php");

 




$consulta = "DELETE  FROM lista_deseos WHERE id_lista_deseos='$id_lista_deseos'";


$ejecutar_consulta = $conexion->query($consulta);



header("Location:../../tu_perfil.php?op=favoritos");



?>