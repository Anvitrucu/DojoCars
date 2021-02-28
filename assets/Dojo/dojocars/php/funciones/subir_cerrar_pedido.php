<?php 

$tipo = $_GET["tipo"];

$precio_final = $_GET["precio_final"];

$informe_cierre = addslashes(nl2br(utf8_decode($_GET["informe_cierre"])));

$id_cita = $_GET["id_cita"];

include("conexion.php");



$busqueda = "SELECT * FROM tatu_cita WHERE  id_tatu_cita='$id_cita' ";

$ejecutar_consulta = $conexion->query($busqueda);

$registro = $ejecutar_consulta->fetch_assoc();

$id_producto=$registro["id_producto"];

$id_usuario=$registro["id_usuario"];




$busqueda22 = "SELECT * FROM usuario WHERE  id_usuario='$id_usuario'  ";

$ejecutar_busqueda22= $conexion->query($busqueda22);

$registro_22 = $ejecutar_busqueda22->fetch_assoc();

$representante_correo= utf8_encode($registro_22["correo"]);




$direccion_facturacion=$_GET["direccion_facturacion"];
$ciudad_facturacion=$_GET["ciudad_facturacion"];
$estado_facturacion=$_GET["estado_facturacion"];
$pais_facturacion=$_GET["pais_facturacion"];
$zip_facturacion=$_GET["zip_facturacion"];

 


$insertar5 ="UPDATE `usuario` SET `direccion_facturacion` = '$direccion_facturacion', `ciudad_facturacion` = '$ciudad_facturacion', `estado_facturacion` = '$estado_facturacion', `pais_facturacion` = '$pais_facturacion', `zip_facturacion` = '$zip_facturacion'   WHERE id_usuario='$id_usuario'";

$ejecutar_insertar5 = $conexion->query($insertar5) or die ("No se cargo la imagen");

 





$busqueda_a = "SELECT * FROM productos WHERE  id_productos='$id_producto' ";

$ejecutar_busqueda_a = $conexion->query($busqueda_a);

$registro_a = $ejecutar_busqueda_a->fetch_assoc();

$producto= utf8_encode($registro_a["nombre_0"]);

 


if ($tipo=="NO") {
	$precio_final = 0;
}

else {

	$precio_final = $precio_final;
}

$insertar2 ="UPDATE `tatu_cita` SET `precio_final` = '$precio_final', `descripcion_final_pedido` = '$informe_cierre', `status` = 'finalizado', `el_cliente_asistio` = '$tipo', `pago_final_realizado`='NO', producto_en_factura = '$producto'  WHERE id_tatu_cita='$id_cita'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");






$asunto = "Cobro Final";

$comentario= "<html><center><img src='https://dojocars.com/img/DOJO_CARS_LOGO.png' style='width:15%;'></center>  <br><br>DATOS DE CIERRE<br><br>Su tecnico ha procesado el cobro final acordado en nuestros sistemas<br><br> Servicio: (".$producto.")<br> Para procesar su pago, acceda a su panel de Pagos Pendientes <a href='https://dojocars.com/tu_perfil.php?op=user_pagos_pendientes'> AQUI</a> para verificar sus proximas citas<br><br> WWW.DOJOCARS.COM <br><br></center>";

$emaildelusuarioqueloenvia = "Dojocars.com";
 
//   $destino = "yago_puentes_fernandez@hotmail.com";

$destino = $representante_correo;

$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

$header .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($destino,$asunto,$comentario,$header);


header("location: ../../tu_perfil.php?op=cerrar_cita_2");



?>