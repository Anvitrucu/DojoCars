<?php 

include ("php/Zebra_Pagination.php");

			 $resultados=5; // Cuantos se mostraran por pagina

			

			$paginacion = new Zebra_Pagination();

			// Bucle para determinar donde va a iniciar la busqueda

			if ( isset($_GET["page"]))

			{
				
				$inicio=($_GET["page"]-1)*$resultados;
			}

			else{
				$inicio=0;
			}
 

?>
<section id="Cuerpo_perfil">

<?php if ($idioma == "es") { ?><h1>Tus ordenes</h1><?php } else if ($idioma == "en"){ ?><h1>Your order</h1><?php } ?> 


<?php 

		include ("php/funciones/comprobar_usuario.php");

	 
 


		$consulta="SELECT * FROM pedido WHERE id_cliente= '$id_usuario' ORDER BY id_pedido DESC LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM pedido WHERE id_cliente= '$id_usuario' ORDER BY id_pedido "; 

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto querys");

		$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto querys");


		$num_regs =  $ejecutar_consulta2->num_rows;


 
			if ($num_regs==0)

			{
				 

				if ($idioma == "es") { echo "Usted aun no tiene ventas realizadas"; } else if ($idioma == "en"){ echo "You do not have sales yet";} 
		
				 
			}


				else

					{


								?>

								 <?php
        if ($idioma == "es")

        {

            ?>

           <table>

										<thead>
												<tr>

													
													
													<th width="40%">Info</th>

													<th width="40%">Tus Órdenes</th>

													<th width="20%">Status</th>
													 


												</tr>

										</thead>


            <?php

        }


        else if ($idioma == "en")

         {

            ?>

             <table>

										<thead>
												<tr>

													
													
													<th width="40%">Info</th>

													<th width="40%">Your Order</th>

													<th width="20%">Status</th>
													 


												</tr>

										</thead>


            <?php

        }

        ?>


								


										<tbody>


												<?php


												

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{


													$id_productos = $registro["id_productos"];

													$id_vendedor = $registro["id_vendedor"];


													$con ="SELECT * FROM productos WHERE id_productos = '$id_productos';";
 
													$ejecutar_con = $conexion->query($con) or die ("No se ejecuto query");
													 
													$dato = $ejecutar_con ->fetch_assoc();

													 
 

													$fecha_pedido =  $registro["fecha_pedido"];
 
													$direccion =  $registro["direccion"];




													$fecha_pedido = date("d/m/Y", strtotime($fecha_pedido));
													 

 
													?>
														 

													<tr>
														<td> 


														<?php 

														if ($idioma == "es") {   ?>

														Orden N°:   <b><?php echo "0000".$registro["id_pedido"] ?></b><br><br>
														Order Date: <b><?php echo $fecha_pedido ?></b><br><br>

														Dirección: <b><?php echo $registro["envio_direccion_1"].". ".$registro["envio_direccion_2"] ?></b><br><br>

														Ciudad: <b><?php echo $registro["City"]  ?></b><br><br>

														Estado: <b><?php echo $registro["envio_estado"]  ?></b><br><br>

														Pais: <b><?php echo $registro["envio_pais"]  ?></b><br><br>

														Código Postal: <b><?php echo $registro["envio_zip"]  ?></b><br> <?php

															}

														if ($idioma == "en") {   ?>

														Order N°:   <b><?php echo "0000".$registro["id_pedido"] ?></b><br><br>
														Order Date: <b><?php echo $fecha_pedido ?></b><br><br>

														Address: <b><?php echo $registro["envio_direccion_1"].". ".$registro["envio_direccion_2"] ?></b><br><br>

														City: <b><?php echo $registro["City"]  ?></b><br><br>

														State: <b><?php echo $registro["envio_estado"]  ?></b><br><br>

														Country: <b><?php echo $registro["envio_pais"]  ?></b><br><br>

														Zip: <b><?php echo $registro["envio_zip"]  ?></b><br> <?php

															  }



														?>
														
														 

														

														 

													 
														 </td>

														<td>
														
														<?php

														$id_pedido  = $registro["id_pedido"] ;

														 $consulta3="SELECT * FROM pedido_cesta WHERE id_pedido= '$id_pedido'"; 

														 $ejecutar3 = $conexion->query($consulta3) or die ("No se ejecuto query");
													 
														while ($dato3 = $ejecutar3 ->fetch_assoc())
														{

 
	 												 
														 if ($idioma == "es") {


														 	echo substr(utf8_encode($dato3["nombre_producto"]), 0, 25)." (...) ......................".$dato3["precio_producto"]."USD<br><br>";
															echo  "Cantidad:   ".$dato3["cantidad"]."<br><br><hr><br><br>";


														      }


											  	 		if ($idioma == "en") {   

											  	 		echo substr(utf8_encode($dato3["nombre_producto_ingles"]), 0, 25)." (...) ......................".$dato3["precio_producto"]."USD<br><br>";
															echo  "Quantity:   ".$dato3["cantidad"]."<br><br><hr><br><br>";

															 }


				 
															 

															
														 
														}



														?>

														TOTAL: <b><?php echo $registro["pago_total"]  ?> USD.</b><br>
														
														
														  </td>

														<td>

														<center>
															
															<?php 

															$satus = $registro["status"];


															  if ($idioma == "es") {  

															  if ($satus=="Pendiente")
															{
																$pago_total =  encoded($registro["pago_total"]) ;

																$id_pedido = encoded($registro["id_pedido"]) ;
 

																echo "Pago Pendiente<br><br>";

																echo "<a href='tu_perfil.php?op=pago_3&id_pedido=".$id_pedido."&pago_total=".$pago_total."'>Procesa tu Pago</a><br><br><hr><hr><br><br>";

																?>

																<a href="javascript:confirmation('php/funciones/eliminar_orden.php?id=<?php echo $registro["id_pedido"] ?>')">Borrar Orden</a> 

																<?php
															}



															if ($satus=="Pagado")
															{
																echo "Pago Aprobado <br><br>";

																echo "Envalando <br><br><hr><hr><br><br>";

																?>

																<a href="javascript:confirmation('php/funciones/eliminar_orden.php?id=<?php echo $registro["id_pedido"] ?>')">Borrar Orden</a> 

																<?php
															}


															if ($satus=="Enviando")
															{

																$fecha_envio = $registro["fecha_envio"];

																$fecha_envio = date("d/m/Y", strtotime($fecha_envio));


																echo "<b>Enviando</b><br><br>";

																echo "Fecha de Envio: ".$fecha_envio."<br><br>";

																echo "Rastreador: ".$registro["enviando_tracking"]."<br><br>";

																echo  "Compañia de Envio: ".$registro["enviando_compania"]."<br><br>"."<hr><hr><br><br>";

																?>

																<a href="javascript:confirmation('php/funciones/eliminar_orden.php?id=<?php echo $registro["id_pedido"] ?>')">Borrar Orden</a> 

																<?php
															}




}










											  	 			  if ($idioma == "en") {    

											  	 			  if ($satus=="Pendiente")
															{
																echo "Pending payment<br><br>";

																echo "<a href='tu_perfil.php?op=pago_3&id_pedido=".$registro["id_pedido"]."&pago_total=".$registro["pago_total"]."'>Proceed to Checkout</a><br><br><hr><hr><br><br>";

																echo "<a href='php/funciones/eliminar_orden.php?id=".$registro["id_pedido"]."'>Delete Order</a>";
															}



															if ($satus=="Pagado")
															{
																echo "Payment Approved<br><br>";

																echo "Packing <br><br><hr><hr><br><br>";

																?>

																<a href="javascript:confirmation('php/funciones/eliminar_orden.php?id=<?php echo $registro["id_pedido"] ?>')">Delete Order</a> 

																<?php
															}


															if ($satus=="Enviando")
															{

																$fecha_envio = $registro["fecha_envio"];

																$fecha_envio = date("d/m/Y", strtotime($fecha_envio));


																echo "<b>Sending</b><br><br>";

																echo "Shipping date: ".$fecha_envio."<br><br>";

																echo "Traking number: ".$registro["enviando_tracking"]."<br><br>";

																echo  "Shipping company: ".$registro["enviando_compania"]."<br><br>"."<hr><hr><br><br>";

																?>

																<a href="javascript:confirmation('php/funciones/eliminar_orden.php?id=<?php echo $registro["id_pedido"] ?>')">Delete Order</a> 

																<?php
															}




}
 
															
															?>
														</center> </td>

														 


 
														 
														
													



													</tr>


													<?php

												}




												?>



										</tbody>



								</table>


						 <?php



				$total_articulos = $num_regs;

	$paginacion -> records($total_articulos);

	$paginacion-> records_per_page($resultados);

	echo "<br><br>";

	$paginacion->render();

	echo "<br><br><br>";

							}

// Sigue funcion de paginacion que viene del archivo articulos.php



 

		
						?>

</section>