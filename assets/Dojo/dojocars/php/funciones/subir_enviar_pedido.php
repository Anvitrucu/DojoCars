<?php 

$envio_compania = $_POST["envio_compania"];

$envio_traking = $_POST["envio_traking"];

$fecha_envio = $_POST["fecha_envio"];

$op = $_POST["op"];

$id_pedido = $_POST["id_pedido"];


include ("conexion.php");


$consulta ="UPDATE   `pedido` SET  `fecha_envio` =  '$fecha_envio', `status` =  'Enviando', `enviando_tracking` =  '$envio_traking', `enviando_compania` =  '$envio_compania' WHERE   `id_pedido` =$id_pedido;";


$ejecutar_consulta = $conexion->query($consulta) or die ("no se realizo la consulta"); 




		$busqueda="SELECT * FROM pedido WHERE id_pedido='$id_pedido'";

		$ejecutar_consulta = $conexion->query($busqueda);

		$arreglo = $ejecutar_consulta->fetch_assoc();

		$id_cliente = $arreglo['id_cliente'];




		$busqueda_us="SELECT * FROM usuario WHERE id_usuario='$id_cliente'";

		$ejecutar_consulta_us = $conexion->query($busqueda_us);

		$arreglo_us = $ejecutar_consulta_us->fetch_assoc();

		$usuario_nombre = $arreglo_us['usuario_nombre'];

		$correo = $arreglo_us['correo'];



		 




		$destino = $correo;

		$asunto = "Your order has been sent";

		$comentario= "<html><center><img src='http://cabrerasbeautysupply.com/img/LOGO.jpg' style='width:15%;'></center>".$usuario_nombre." <br><br> Your order No. 0000".$id_pedido." has been sent <br><br><b>Shipping Company: </b> ".$envio_compania."<br>  <b>Traking Number: </b>".$envio_traking."<br><b>Shipping Date:</b> ".$fecha_envio."<br><center>www.cabrerasbeautysupply.com</center>";

		$emaildelusuarioqueloenvia = "Cabrerasbeautysupply.com";

		$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

		$header .= "Content-Type: text/html; charset=UTF-8\r\n";

		mail($destino,$asunto,$comentario,$header);




$mensaje = "<center><br><p  font-size:1.3rem; font-family:Raleway; color: green>Pedido Actualizado con éxito</p></center>";

header("Location: ../../tu_perfil.php?op=$op&mensaje=$mensaje");

?>