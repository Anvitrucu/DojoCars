<?php 


$id = $_GET["id"];

 

session_start(); 

unset($_SESSION["id_producto_".$id]);


$_SESSION["contador_cesta_mostrar"]= $_SESSION["contador_cesta_mostrar"] - 1;


header("Location: ../../tu_perfil.php?op=inicio");

?>