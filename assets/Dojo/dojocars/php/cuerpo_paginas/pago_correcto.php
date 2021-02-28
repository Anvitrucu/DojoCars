<?php 

if (isset($_SESSION["id_pedido"]))

{
	$id_pedido = $_SESSION["id_pedido"] ;

	$insertar_2= "UPDATE   `pedido` SET  `status` =  'Pagado' WHERE  `id_pedido` =$id_pedido;";

	$ejecutar_consulta_2 = $conexion->query($insertar_2) or die ("no se subio");








	    $consulta2="SELECT * FROM pedido_cesta WHERE id_pedido= '$id_pedido'"; 
 
		$ejecutar_consulta = $conexion->query($consulta2) or die ("No se ejecuto querys");

		while( $registro_2 = $ejecutar_consulta->fetch_assoc())
		{

			$id_producto = $registro_2["id_producto"];

			$cantidad = $registro_2["cantidad"];



			 $consulta3="SELECT * FROM productos WHERE id_productos= '$id_producto'"; 
 
			 $ejecutar_consulta_3 = $conexion->query($consulta3) or die ("No se ejecuto querys 2");

			 $registro_3 = $ejecutar_consulta_3->fetch_assoc();


			$cantidad_disponible =  $registro_3["cantidad_disponible"];


			$cantidad_disponible = $cantidad_disponible - $cantidad ;





			$insertar_4= "UPDATE   `productos` SET  `cantidad_disponible` =  '$cantidad_disponible' WHERE  `id_productos` =$id_producto;";

			$ejecutar_consulta_4 = $conexion->query($insertar_4) or die ("no se subio");




		}


/*


			$destino = $correo_user;

		$asunto = "Payment successful";

		$comentario= "<html><center><img src='http://cabrerasbeautysupply.com/img/LOGO.jpg' style='width:15%;'></center> <center> CONGRATULATIONS!! <br><br>Your payment has been processed successfully. <BR><BR>We invite you to check your C-Panel to check the status of your shipment <br><br><center>www.cabrerasbeautysupply.com</center>";

		$emaildelusuarioqueloenvia = "Cabrerasbeautysupply.com";

		$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

		$header .= "Content-Type: text/html; charset=UTF-8\r\n";

		mail($destino,$asunto,$comentario,$header);




		$destino = "cabrerasbeautysupply@gmail.com";

		$asunto = "Nueva Compra";

		$comentario= "<html><center><img src='http://cabrerasbeautysupply.com/img/LOGO.jpg' style='width:15%;'></center> <center> Felicidades!! <br><br>. Ha realizado una nueva venta. <br><br> Lo invitamos a chequear su panel administrativo para procesar su pedido <br><br><center>www.cabrerasbeautysupply.com</center>";

		$emaildelusuarioqueloenvia = "Cabrerasbeautysupply.com";

		$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

		$header .= "Content-Type: text/html; charset=UTF-8\r\n";

		mail($destino,$asunto,$comentario,$header);








*/


	//unset($_SESSION["id_pedido"]);
}

?>



		<?php 

if ($idioma == "es") { ?> 



<p class="titulo" style="font-size:2rem;">Su pago ha sido procesado exitosamente</p><BR><br>


<p class="titulo" style="font-size:1.5rem;">Gracias por Preferirnos</p><BR><br><hr><hr>


<form action="tu_perfil.php?op=tus_pedidos"  method="post">
 

                 
               <center> <input type="submit" name="Submit" id="boton_generico" value="Verifica tus órdenes"></center> <?php  }




if ($idioma == "en") {

 ?> <center> 
<p class="titulo" style="font-size:2rem;">Your payment has been processed successfully</p><BR><br>


<p class="titulo" style="font-size:1.5rem;">Thank you for shopping at Cabreras Beauty Supply</p><BR><br><hr><hr>


<form action="tu_perfil.php?op=tus_pedidos"  method="post">
 

                 
               <center> <input type="submit" name="Submit" id="boton_generico" value="Check your orders"></center>


               <?php  }


?>




            
        </form>