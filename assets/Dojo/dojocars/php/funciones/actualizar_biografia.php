<?php

session_start();

include ("conexion.php");

include ("funciones.php");

 
$id_usuario = $_POST["id_usuario"];

$biografia = nl2br(utf8_decode(addslashes($_POST["biografia"])));


$establecimiento_activo = $_POST["establecimiento_activo"];

$establecimiento_direccion = utf8_decode(addslashes($_POST["establecimiento"])) ;

$hora_entrada = $_POST["hora_entrada"];

$hora_salida = $_POST["hora_salida"];

 

if ($hora_entrada>$hora_salida) {


	$insertar7 ="UPDATE usuario SET hora_entrada='$hora_entrada', hora_salida='$hora_salida'  WHERE id_usuario='$id_usuario' ";

	$ejecutar_insertar7 = $conexion->query($insertar7) or die ("no se pudoo =( ");
	 


if ($establecimiento_activo=="SI") {
	$insertar3 ="UPDATE usuario SET biografia='$biografia', establecimiento_activo='$establecimiento_activo', establecimiento_direccion='$establecimiento_direccion', hora_entrada='$hora_entrada', hora_salida='$hora_salida' WHERE id_usuario='$id_usuario' ";

	$ejecutar_consulta3 = $conexion->query($insertar3) or die ("no se pudoo =( ");
}

else if ($establecimiento_activo=="NO"){ 

$insertar3 ="UPDATE usuario SET biografia='$biografia', establecimiento_activo='$establecimiento_activo', hora_entrada='$hora_entrada', hora_salida='$hora_salida' WHERE id_usuario='$id_usuario' ";

$ejecutar_consulta3 = $conexion->query($insertar3) or die ("no se pudoo =( ");
}







 

// Se ejecuta la funcion para subir la imagen
	
$tipo = $_FILES["foto_perfil"]["type"];
$archivo = $_FILES["foto_perfil"]["tmp_name"];
$ruta = "../../img/perfil/";
	


// Hacen falta 3 variables para ejecutar la funcion Subir_imagen que acabamos de importar en funciones.php, el $tipo de archivo, el $archivo mismo, y la $ruta que le quiero dar.




if (!empty($archivo)) 

{
	$se_subio_imagen = subir_imagen($tipo,$archivo,$id_usuario,$ruta);

	$imagen = $se_subio_imagen;



	$insertar3 ="UPDATE usuario SET foto_perfil='$imagen' WHERE id_usuario='$id_usuario' ";

	$ejecutar_consulta3 = $conexion->query($insertar3) or die ("no se pudoo =( ");
}					 
						 	
 
	

 $mensaje = "<center><p style='color:green; font-family:Raleway'>SUCCESSFUL UPDATE - ACTUALIZACION EXITOSA</p><center>";


}

else

{
	$mensaje = "<center><p style='color:green; font-family:Raleway'>LA HORA DE ENTRADA DEBE SER MENOR QUE LA DE SALIDA</p><center>";

}
		
 header("location: ../../tu_perfil.php?op=datos_basicos&mensaje=$mensaje");
?>