<?php 

include ("conexion.php");

include ("funciones.php");


$id_pagos_enviados_cestas = $_POST["id_pagos_enviados_cestas"];

 
  

						// Se ejecuta la funcion para subir la imagen
							 
						$tipo = $_FILES["pago_adjunto"]["type"];
						$archivo = $_FILES["pago_adjunto"]["tmp_name"];
						$ruta = "../../img/pago_adjunto/";
						$nombre_foto = $id_pagos_enviados_cestas;

						$imagen = subir_imagen($tipo,$archivo,$nombre_foto,$ruta);
							

				
						  


$insertar2 ="UPDATE `pagos_enviados_cestas` SET `pago_adjunto` = '$imagen', `status` = 'Verificando_pago' WHERE id_pagos_enviados_cestas='$id_pagos_enviados_cestas'";

$ejecutar_consulta2 = $conexion->query($insertar2) or die ("No se cargo la imagen");

$mensaje = "<b>Pago Actualizado</b>";

 header("location: ../../tu_perfil.php?op=user_pagos_pendientes&mensaje=$mensaje");
				


?>