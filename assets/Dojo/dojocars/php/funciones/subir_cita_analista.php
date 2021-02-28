<?php 


 

include ("conexion.php");

 
 
$id_usuario = $_GET['id_usuario'];

$id_producto = $_GET['id_producto'];

$tiempo =addslashes(utf8_decode($_GET["tiempo"]));

$fecha =addslashes(utf8_decode($_GET["fecha_mostrar"]));

$hora =addslashes(utf8_decode($_GET["hora"]));

$dia_semana =addslashes(utf8_decode($_GET["dia_semana"]));

$telefono_cliente =addslashes(utf8_decode($_GET["telefono_cliente"]));

$representante_id =addslashes(utf8_decode($_GET["representante_id"]));




$busqueda_representante="SELECT * FROM usuario WHERE id_usuario='$id_usuario' ";

$ejecutar_consulta_representante = $conexion->query($busqueda_representante);

$arreglo_representante = $ejecutar_consulta_representante->fetch_assoc();

$usuario_nombre = $arreglo_representante['usuario_nombre'];




$busqueda_asociados="SELECT * FROM usuario_asociado WHERE id_representante='$representante_id' AND id_cliente='$id_usuario' ";

$ejecutar_busqueda_asociados = $conexion->query($busqueda_asociados);

$arreglo_asociados = $ejecutar_busqueda_asociados->num_rows;

if ($arreglo_asociados==0) {

	$consulta_23 = "INSERT INTO `usuario_asociado` (`id_usuario_asociado`, `id_representante`, `id_cliente`, `id_clase`, `nombre_cliente`, `ficha_telefono`) VALUES (NULL, '$representante_id', '$id_usuario', '$id_producto', '$usuario_nombre', '$telefono_cliente');";

	$ejecutar_consulta_23 = $conexion->query($consulta_23) or die ("no se realizo la consulta 1");  
}


 





$consulta_2 = "INSERT INTO  `tatu_cita` (`id_tatu_cita`, `id_usuario`, `id_analista`, `id_producto`, `tiempo`, `fecha`, `hora`, `dia_semana`, `usuario_nombre`, `telefono_cliente`) VALUES (NULL, '$id_usuario', '$representante_id', '$id_producto', '$tiempo', '$fecha', '$hora', '$dia_semana', '$usuario_nombre', '$telefono_cliente');";

$ejecutar_consulta_2 = $conexion->query($consulta_2) or die ("no se realizo la consulta 2");  

$id_tatu_cita = $conexion->insert_id;

       

if (isset($_GET["contador"])) {
	
	$contador = $_GET["contador"]+1;

	for ($i=0; $i < $contador; $i++) { 
		
		if (isset($_GET["prod_".$i])) {
			
			$id_servicio_especifico = $_GET["prod_".$i];

			$id_cita = $id_tatu_cita;

			$id_servicio = $id_producto;

			$consulta_4 = "INSERT INTO `tatu_cita_servicio_especifico` (`id_tatu_cita_servicio_especifico`, `id_cita`, `id_servicio`, `id_servicio_especifico`) VALUES (NULL, '$id_cita', '$id_servicio', '$id_servicio_especifico');";

			$ejecutar_consulta_4 = $conexion->query($consulta_4) or die ("no se realizo la consulta 3");  

		}
	}
}



$busqueda="SELECT * FROM usuario WHERE id_usuario='$id_usuario'";

$ejecutar_consulta = $conexion->query($busqueda);

$arreglo = $ejecutar_consulta->fetch_assoc(); 

$usuario_nombre = $arreglo["usuario_nombre"];

$correo = $arreglo["correo"];
 




$correo = $correo; 

$usuario_nombre = $usuario_nombre; 

$medida = $medida; 

$tiempo =addslashes(utf8_decode($_GET["tiempo"]));

$fecha = date("d-m-Y", strtotime($fecha));

$dia_semana =addslashes(utf8_decode($_GET["dia_semana"]));

$hora = $hora;








$asunto = "Solicitud de Cita ";

$comentario= "<html><center><img src='http://ophyra.com/img/logo1.png' style='width:15%;'></center>  <br><br>DATOS DE LA CITA<br><br>*** Cliente: ".$usuario_nombre."<br><br>***Correo: ".$correo."<br><br>***Concepto: ".$nombre_0."<br><br>***Duración de la Cita: ".$tiempo." Min<br><br>***Fecha de la Cita: ".$dia_semana.", ".$fecha."<br><br>*** Hora de la Cita: ".$hora." <br><br><center> WWW.OPHYRA.COM <br><br></center>";



 $emaildelusuarioqueloenvia = "YagofernandezTattoo.com";
 

 //   $destino = "yago_puentes_fernandez@hotmail.com";

$destino = "corporativo.ophyra@gmail.com";

$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

$header .= "Content-Type: text/html; charset=UTF-8\r\n";

 
 
mail($destino,$asunto,$comentario,$header);

 

 
header("Location:../../tu_perfil.php?op=crear_cita_3");



 


?>