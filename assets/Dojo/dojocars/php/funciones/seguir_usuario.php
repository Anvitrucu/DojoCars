<?php 

include ("conexion.php");

$id_usuario = $_GET["id_usuario"];

$id_tecnico = $_GET["id_tecnico"];

			$busqueda = "INSERT INTO `seguir_usuario` (`id_seguir_usuario`, `id_tecnico`, `id_seguidor`) VALUES (NULL, '$id_tecnico', '$id_usuario');";

			$ejecutar_consulta = $conexion->query($busqueda);

header("Location:../../index.php?menu=profile&id=$id_tecnico");



?>