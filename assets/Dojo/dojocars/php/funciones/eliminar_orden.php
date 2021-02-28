<?php


 

include ("conexion.php");

$id_pedido = $_GET["id"];




$consulta = "DELETE  FROM pedido_cesta WHERE id_pedido='$id_pedido'";


$ejecutar_consulta = $conexion->query($consulta);



$consulta2 = "DELETE  FROM pedido WHERE id_pedido='$id_pedido'";


$ejecutar_consulta2 = $conexion->query($consulta2);


header("Location:../../tu_perfil.php?op=Reservas_realizadas");

?>