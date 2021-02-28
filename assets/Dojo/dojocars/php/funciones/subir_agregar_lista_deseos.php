<?php 

$id_usuario = $_GET["id_usuario"];

$id_producto = $_GET["id_producto"];


include("cod_1.php");

include("conexion.php");



$busqueda="INSERT INTO  `lista_deseos` (`id_lista_deseos`, `id_producto`, `id_usuario`) VALUES (NULL, '$id_producto', '$id_usuario');";

$ejecutar_consulta = $conexion->query($busqueda);

$pago_total =  encoded($pago_total) ;


$id_producto = encoded($id_producto) ;

header("Location: ../../index.php?menu=servicios&id=$id_producto");




?>