<?php 


session_start();

include("conexion.php");

include("cod_1.php");

$envio_nombre = $_GET["envio_nombre"];

$envio_direccion_1 = $_GET["envio_direccion_1"];

$envio_direccion_2 = $_GET["envio_direccion_2"];

$City = $_GET["City"];

$envio_estado = $_GET["envio_estado"];

$envio_zip = $_GET["envio_zip"];

$envio_pais = $_GET["envio_pais"];

$envio_telefono = $_GET["envio_telefono"];

$fecha_facturacion = date("Y-m-d");




$cont = $_GET["cont"];





$id_usuario = $_GET["id_usuario"];




$pago_total = $_GET["pago_total"];

$pago_descuento = $_GET["pago_descuento"];

$pago_impuestos = $_GET["pago_impuestos"];








$insertar1= "INSERT INTO  `pedido` (`id_pedido`, `id_cliente`, `fecha_pedido`, `envio_nombre`, `envio_direccion_1`, `envio_direccion_2`, `City`, `envio_estado`, `envio_zip`, `envio_pais`, `envio_telefono`, `fecha_envio`, `pago_impuestos`, `pago_descuento`, `pago_total`, `comentarios`, `status`) VALUES (NULL, '$id_usuario ', '$fecha_facturacion', '$envio_nombre', '$envio_direccion_1', '$envio_direccion_2', '$City', '$envio_estado', '$envio_zip', '$envio_pais', '$envio_telefono', NULL, '$pago_impuestos', '$pago_descuento', '$pago_total', NULL, 'Pendiente');";



$ejecutar_consulta1 = $conexion->query($insertar1) or die ("no se subio");


$id_pedido = $conexion->insert_id;

 
 



 //$cont = $_GET["cont"];









 

	$cont = $_SESSION["contador_cesta"]+1;


 



	for ($i=0; $i < $cont ; $i++) { 

		$id_producto = $_SESSION["id_producto_".$i];

		$busqueda="SELECT * FROM productos WHERE id_productos='$id_producto' ";

			$ejecutar_consulta = $conexion->query($busqueda);

			$registro = $ejecutar_consulta->fetch_assoc();

			$arreglo_tot = $ejecutar_consulta->num_rows;

				if ($arreglo_tot==0) 

					{continue;}


				




				$id_pedido = $id_pedido;

				$id_producto = $id_producto;

				$nombre_producto = addslashes($registro["nombre_1"]);

				$nombre_producto_ingles = addslashes($registro["nombre_0"]);

				$precio_producto = $registro["precio_producto"];

				$cantidad = $_SESSION["cantidad_".$i];





				$insertar_2= "INSERT INTO  `pedido_cesta` (`id_pedido_cesta`, `id_pedido`, `id_producto`, `nombre_producto`, `nombre_producto_ingles`, `precio_producto`, `cantidad`) VALUES (NULL, '$id_pedido', '$id_producto', '$nombre_producto', '$nombre_producto_ingles', '$precio_producto', '$cantidad');";



				$ejecutar_consulta_2 = $conexion->query($insertar_2) or die ("no se subio");


				


 

	 
	}



 
 
 
 /*

 



$id_pedido = $conexion->insert_id;


 


		$busqueda_comprador ="SELECT * FROM usuario WHERE id_usuario='$id_comprador'";

		$ejecutar_consulta_comprador = $conexion->query($busqueda_comprador);

		$arreglo_comprador = $ejecutar_consulta_comprador->fetch_assoc();

		$correo_comprador = $arreglo_comprador['correo'];	



		$busqueda_vendedor ="SELECT * FROM usuario WHERE id_usuario='$id_vendedor'";

		$ejecutar_consulta_vendedor = $conexion->query($busqueda_vendedor);

		$arreglo_vendedor= $ejecutar_consulta_vendedor->fetch_assoc();

		$vendedor = $arreglo_vendedor['usuario_nombre'];	

		$usuario_vendedor = $arreglo_vendedor['usuario'];	

		$correo_vendedor = $arreglo_vendedor['correo'];	


	 

	 	

	 	


	  
		$destino = $correo_comprador;

		$asunto = "Su orden ha sido procesada con éxito";

		$comentario= "<html><center><img src='http://ledmove.com/img/LOGO.png' style='width:15%;'></center> <center>Su pedido - ".$nombre_producto." - fué procesado con éxito</center><br><br>Lo invitamos a ponerse en contacto con su proveedor en su tienda virtual - <a  target='_blank' href='http://ledmove.com/index.php?menu=portafolio&user=".$usuario_vendedor."'>".$vendedor."</a> - Para concretar los detalles de su evento<br><br></center> **** <a target='_blank' href='http://ledmove.com/php/funciones/imprimir_comprobante.php?id_pedido=".$id_pedido."'>IMPRIMIR GUIA</a><br><br><center>WWW.LEDMOVE.COM</center>"; 

		$emaildelusuarioqueloenvia = "Ledmove.com";


		$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

		$header .= "Content-Type: text/html; charset=UTF-8\r\n";

		mail($destino,$asunto,$comentario,$header);











		$destino = $correo_vendedor;

		$asunto = "Usted ha recibido un nuevo pedido";

		$comentario= "<html><center><img src='http://ledmove.com/img/LOGO.png' style='width:15%;'></center> <center>Usted ha recibido una nueva contratación de su servicio- ".$nombre_producto." - </center><br><br>Lo invitamos a ponerse en contacto con su cliente y chequear los detalles en su panel administrativo  <br><br></center> **** <a target='_blank' href='http://ledmove.com/php/funciones/imprimir_comprobante.php?id_pedido=".$id_pedido."'>IMPRIMIR PEDIDO</a><br><br><center>WWW.LEDMOVE.COM</center>";

		$emaildelusuarioqueloenvia = "Ledmove.com";


		$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

		$header .= "Content-Type: text/html; charset=UTF-8\r\n";

		mail($destino,$asunto,$comentario,$header);


 
	 
 


*/

		$pago_total =  encoded($pago_total) ;


		$id_pedido = encoded($id_pedido) ;
 



 header("location: ../../tu_perfil.php?op=pago_3&id_pedido=$id_pedido&pago_total=$pago_total");
		 
 

?>