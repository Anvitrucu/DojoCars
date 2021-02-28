<?php 

include("conexion.php");

$id_productos =addslashes(utf8_decode($_GET["id"]));

$activo =addslashes(utf8_decode($_GET["activo"]));
 
 
 
$insertar2 ="UPDATE `productos` SET `activo` = '$activo'  WHERE id_productos='$id_productos'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

$mensaje = "<b>Articulo Actualizado</b>";
$mensaje2 = "<b>Article updated</b>";

 
  if (isset($_GET["page"])) 

  { 
  	$page = $_GET["page"];
  	header("location: ../../tu_perfil.php?op=servicios_cargados&mensaje=$mensaje&mensaje2=$mensaje2&page=$page");  
  } 

  else if (!isset($_GET["page"])) 


  { 
  	header("location: ../../tu_perfil.php?op=servicios_cargados&mensaje=$mensaje&mensaje2=$mensaje2");
  }
 
 

 
?>