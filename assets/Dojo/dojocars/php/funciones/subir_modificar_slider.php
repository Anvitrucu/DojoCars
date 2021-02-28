<?php

session_start();

include ("conexion.php");

include ("funciones.php");

 
 $id_slider = $_POST["id"];

 

						// Se ejecuta la funcion para subir la imagen
							
						$tipo = $_FILES["imagen"]["type"];
						$archivo = $_FILES["imagen"]["tmp_name"];
						$ruta = "../../img/promo/";
							

				
						// Hacen falta 3 variables para ejecutar la funcion Subir_imagen que acabamos de importar en funciones.php, el $tipo de archivo, el $archivo mismo, y la $ruta que le quiero dar.

						 
						 	$se_subio_imagen = subir_imagen($tipo,$archivo,$id_slider,$ruta);

						 	$imagen = $se_subio_imagen;

						 	 

						 	$insertar3 ="UPDATE promociones SET img='$imagen' WHERE id_promociones='$id_slider' ";

							$ejecutar_consulta3 = $conexion->query($insertar3) or die ("no se pudoo =( ");
 
	

 $mensaje = "<center><p style='color:green; font-family:Raleway'>IMAGEN CARGADA EXITOSAMENTE</p><center>";

 header("location: ../../tu_perfil.php?op=cargar_promociones&mensaje=$mensaje");
		

?>