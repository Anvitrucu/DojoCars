<?php 

include ("conexion.php");

$id_seguidor = $_GET["id_usuario"];

$id_tecnico = $_GET["id_tecnico"];

			$busqueda = "DELETE FROM `seguir_usuario` WHERE `id_seguidor` = $id_seguidor AND `id_tecnico` = $id_tecnico";

			$ejecutar_consulta = $conexion->query($busqueda);

header("Location:../../index.php?menu=profile&id=$id_tecnico");



?>