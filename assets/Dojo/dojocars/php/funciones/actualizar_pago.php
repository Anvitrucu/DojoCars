<?php 

include ("conexion.php");

include ("funciones.php");


$id_pagos_enviados_cestas = $_GET["id_pagos_enviados_cestas"];

$tipo_busqueda = $_GET["tipo_busqueda"];

if ($tipo_busqueda=="Aprobado") {

	$insertar2 ="UPDATE `pagos_enviados_cestas` SET `status` = '$tipo_busqueda' WHERE id_pagos_enviados_cestas='$id_pagos_enviados_cestas'";

	$ejecutar_consulta = $conexion->query($insertar2);
}

else if ($tipo_busqueda=="Negado") {

	$negado_motivo = $_GET["negado_motivo"];

	$insertar2 ="UPDATE `pagos_enviados_cestas` SET `negado_motivo` = '$negado_motivo', `status` = '$tipo_busqueda' WHERE id_pagos_enviados_cestas='$id_pagos_enviados_cestas'";

	$ejecutar_consulta = $conexion->query($insertar2);
}

else if ($tipo_busqueda==3) {
	 $consulta = "DELETE  FROM pagos_enviados_cestas WHERE id_pagos_enviados_cestas='$id_pagos_enviados_cestas'";

	$ejecutar_consulta = $conexion->query($consulta);

}



 
   


 
$mensaje = "<b>Pago Actualizado</b>";

 header("location: ../../tu_perfil.php?op=analistas_pagos_solicitudes&mensaje=$mensaje");
				


?>