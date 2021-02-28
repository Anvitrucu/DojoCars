<?php
 
include ("conexion.php");

$id_tatu_cita = $_GET["id"];

$id_producto = $_GET["id_producto"];

$status = $_GET["status"];

$monto_adelanto = $_GET["monto_adelanto"];

$id_usuario = $_GET["id_usuario"];


 
 $consulta = "DELETE  FROM tatu_cita_cesta WHERE id_tatu_cita='$id_tatu_cita'";

$ejecutar_consulta = $conexion->query($consulta);



 $consulta = "DELETE  FROM tatu_cita WHERE id_tatu_cita='$id_tatu_cita'";

$ejecutar_consulta = $conexion->query($consulta);



 if ($status=="Pagado") {
 	
 	 $consulta3 = "INSERT INTO `reembolso` (`id_reembolso`, `id_usuario`, `monto`, `status`) VALUES (NULL, '$id_usuario', '$monto_adelanto', 'Pending');";

	$ejecutar_consulta3 = $conexion->query($consulta3);

	header("Location:../../tu_perfil.php?op=reembolso_actio&");

 }

 else {
$mensaje = "<b> Cita Eliminada Correctamente</b>";
header("Location:../../tu_perfil.php?op=analista_citas_detalles&mensaje=$mensaje&id=$id_producto");
 	
 }

  

?>