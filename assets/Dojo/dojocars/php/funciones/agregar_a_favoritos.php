<?php 

include ("conexion.php");


 


 

$id_producto = $_GET["id_producto"];

$id_vendedor = $_GET["id_vendedor"];

$comprador = $_GET['id_comprador'];	

$insertar1= "INSERT INTO `favoritos` (`id_favorito`, `id_producto`, `id_vendedor`, `id_comprador`) VALUES (NULL, '$id_producto', '$id_vendedor', '$comprador');";



$ejecutar_consulta1 = $conexion->query($insertar1) or die ("no se subio");


$id_pedido = $conexion->insert_id;

header("location: ../../index.php?menu=servicios&id=$id_producto");



?>