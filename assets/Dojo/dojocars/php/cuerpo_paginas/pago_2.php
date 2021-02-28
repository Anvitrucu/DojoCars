<?php 

$conta = $_POST["cont"];

 


?>

		<?php
		if ($idioma == "es")

		{

			?>

			<p class="titulo" style="font-size:2rem;">VERIFICA TU ORDEN</p><BR><br><hr><hr>

			<?php

		}


		else if ($idioma == "en")

		 {

			?>

			<p class="titulo" style="font-size:2rem;">CHECK YOUR ORDER</p><BR><br><hr><hr>

			<?php

		}

		?>


 
<form id="form_perfil" name="form_perfil" action="php/funciones/subir_pedido.php" method="GET" enctype="multipart/form-data">

<input type="hidden" name="op" value="pago_1">


<?php 

if (!isset($_SESSION["contador_cesta"]) || $_SESSION["contador_cesta_mostrar"]==0)
{

?>
 



<?php
		if ($idioma == "es")

		{

			?>

			<p class="titulo" style="font-size:1.6rem">Tu orden está Vacia</p>

			<?php

		}


		else if ($idioma == "en")

		 {

			?>

			<p class="titulo" style="font-size:1.6rem">Your order is empty</p>

			<?php

		}

		?>



<?php
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
 
													
													<th class="titulos_perfil" style="width:40%">Producto</th>

													<th class="titulos_perfil" style="width:10%">Cantidad</th>

													<th class="titulos_perfil" style="width:30%">Precio</th>
													 
													<th class="titulos_perfil" style="width:30%">Sub - Total</th>


												</tr>

										</thead>


										<tbody>
 

			<?php

		}


		else if ($idioma == "en")

		 {

			?>

				<table>

										<thead>
												<tr>
 
													
													<th class="titulos_perfil" style="width:40%">Products</th>

													<th class="titulos_perfil" style="width:10%">Quantity</th>

													<th class="titulos_perfil" style="width:30%">Price</th>
													 
													<th class="titulos_perfil" style="width:30%">Sub - Total</th>


												</tr>

										</thead>


										<tbody>
 

			<?php

		}

	 





	$conta = 0;

	$cont = $_SESSION["contador_cesta"]+1;



			$precio_total = 0;


			$impuesto_total = 0;


			$descuento_total = 0;




	for ($i=0; $i < $cont ; $i++) { 

		$id_producto = $_SESSION["id_producto_".$i];

		$busqueda="SELECT * FROM productos WHERE id_productos='$id_producto' ";

			$ejecutar_consulta = $conexion->query($busqueda);

			$registro = $ejecutar_consulta->fetch_assoc();

			$arreglo_tot = $ejecutar_consulta->num_rows;

				if ($arreglo_tot==0) 

					{continue;}


				$cantidad = $_SESSION["cantidad_".$i];


			?>

			<tr>

					<input type="hidden" name="id_producto_<?php echo $i ?>" value="<?php echo $id_producto ?>">

				 

					<td><?php 


					 
						 if ($idioma == "es") {    echo nl2br(utf8_encode($registro['nombre_1']))."<br><br>"; }


			  	 		if ($idioma == "en") {   echo nl2br(utf8_encode($registro['nombre_0']))."<br><br>"; }


					 ?></td>

					<td><center><?php echo $cantidad  ?></center></td>

					<td><center>$ <?php if ($cliente_COPS=="NO") {
						echo  $registro["precio_producto"] ;
						 
					}

					else {
						echo $registro["precio_cops"] ;
					}?></center></td>




					 

					 

					<td><center>$ 

					<?php 

					if ($cliente_COPS=="NO") {

						$sub = $registro["precio_producto"]*$cantidad;
						 
					}

					else if ($cliente_COPS=="SI") {

						$sub = $registro["precio_cops"]*$cantidad;
					}

					 

					$impuesto = $registro["impuesto_producto"]*$cantidad;

					$descuento = $registro["descuento_producto"]*$cantidad;


					echo $sub ?></center></td>



					
			</tr>


			<?php

			$precio_total = $precio_total + $sub ;

			$impuesto_total = $impuesto_total + $impuesto ;


			$descuento_total = $descuento_total + $descuento ;



			$conta = $conta +1;
	

	 
	}



?>


<input type="hidden" name="conta" value="<?php echo $i ?>">


<tr>

				 

					<td style="background:#F2F0F0">  </td>

					<td style="background:#F2F0F0">  </td>

					 <td style="background:#F2F0F0"> <center></center></td>

					 <td style="background:#F2F0F0">  </td>
 

					
			</tr>


			<tr>

				 

					<td>  </td>

					<td>  </td>

					 <td> <center>

					 <?php 


					 
						 if ($idioma == "es") {    echo  "IMPUESTOS"; }


			  	 		if ($idioma == "en") {   echo  "TAXES"; }


					 ?>


					 </center></td>

					 <td> <center><?php echo $impuesto_total ?> USD</center> </td>


					 <input type="hidden" name="pago_impuestos" value="<?php echo $impuesto_total ?>">
 

					
			</tr>



		





			<tr>

				 

					<td>  </td>

					<td>  </td>

					 <td> <center>SUB - TOTAL</center></td>

					 <td> <center><?php 


					 $precio_total = $precio_total + $impuesto_total;


					 echo $precio_total ?> USD</center> </td>


					
 

					
			</tr>





				<tr>

				 

					<td>  </td>

					<td>  </td>

					 <td>  <center>

					 <?php

					  if ($idioma == "es") {    echo  "DESCUENTO"; }


			  	 		if ($idioma == "en") {   echo  "DISCOUNT"; }
			  	 		 ?>

					 </p></td>

					 <td> <center><?php echo $descuento_total ?> USD</center> </td>


					 <input type="hidden" name="pago_descuento" value="<?php echo $descuento_total ?>">
 

					
			</tr>


<tr>

				 

					<td style="background:#F2F0F0">  </td>

					<td style="background:#F2F0F0">  </td>

					 <td style="background:#F2F0F0"> <center></center></td>

					 <td style="background:#F2F0F0">  </td>
 

					
			</tr>



			<tr>

				 

					<td>  </td>

					<td>  </td>

					 <td>  <p style="text-align:center; font-size:1.3rem">TOTAL

					 </p></td>

					 <td> <p style="text-align:center; font-size:1.3rem"><?php 


					 $precio_total = $precio_total - $descuento_total;


					 echo $precio_total ?> USD</p> </td>


					  <input type="hidden" name="pago_total" value="<?php echo $precio_total ?>">
 

					
			</tr>






 

</tbody></table>

<?php

}
?>


 
 <br>

<br><img width="100%" src="img/barra.jpg"><br>



<br><br>













<?php
		if ($idioma == "es")

		{

			?>

			<table>


			<tr>
 
					<td style="background:#F2F0F0"><b> Nombre Completo</b> </td>

					<td> <center><?php echo $_POST["envio_nombre"] ?></center> </td>

					<input type="hidden" name="envio_nombre" value="<?php echo $_POST["envio_nombre"] ?>">
 		
			</tr>



			<tr>
 
					<td style="background:#F2F0F0"><b>  Dirección - Linea 1  </b></td>

					<td> <center><?php echo $_POST["envio_direccion_1"] ?></center> </td>

					<input type="hidden" name="envio_direccion_1" value="<?php echo $_POST["envio_direccion_1"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"> <b> Dirección - Linea 2 </b> </td>

					<td> <center><?php echo $_POST["envio_direccion_2"] ?></center> </td>


					<input type="hidden" name="envio_direccion_2" value="<?php echo $_POST["envio_direccion_2"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"><b>  Ciudad </b> </td>

					<td> <center><?php echo $_POST["City"] ?></center> </td>

					<input type="hidden" name="City" value="<?php echo $_POST["City"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"><b>  Estado/Región/Provincia </b> </td>

					<td> <center><?php echo $_POST["envio_estado"] ?></center> </td>

					<input type="hidden" name="envio_estado" value="<?php echo $_POST["envio_estado"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"><b>  Código Postal </b> </td>

					<td> <center><?php echo $_POST["envio_zip"] ?></center> </td>

					<input type="hidden" name="envio_zip" value="<?php echo $_POST["envio_zip"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"><b> Pais </b> </td>

					<td> <center><?php echo $_POST["envio_pais"] ?></center> </td>

					<input type="hidden" name="envio_pais" value="<?php echo $_POST["envio_pais"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"> <b> Número Telefónico </b> </td>

					<td> <center><?php echo $_POST["envio_telefono"] ?></center> </td>

					<input type="hidden" name="envio_telefono" value="<?php echo $_POST["envio_telefono"] ?>">

					<input type="hidden" name="cont" value="<?php echo $_POST["cont"] ?>">

					<input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">


					
 		
			</tr>


			 


</table>

			<?php

		}


		else if ($idioma == "en")

		 {

			?>

			<table>


			<tr>
 
					<td style="background:#F2F0F0"><b> Full Name</b> </td>

					<td> <center><?php echo $_POST["envio_nombre"] ?></center> </td>

					<input type="hidden" name="envio_nombre" value="<?php echo $_POST["envio_nombre"] ?>">
 		
			</tr>



			<tr>
 
					<td style="background:#F2F0F0"><b>  Address line 1  </b></td>

					<td> <center><?php echo $_POST["envio_direccion_1"] ?></center> </td>

					<input type="hidden" name="envio_direccion_1" value="<?php echo $_POST["envio_direccion_1"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"> <b> Address line 2 </b> </td>

					<td> <center><?php echo $_POST["envio_direccion_2"] ?></center> </td>


					<input type="hidden" name="envio_direccion_2" value="<?php echo $_POST["envio_direccion_2"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"><b>  City </b> </td>

					<td> <center><?php echo $_POST["City"] ?></center> </td>

					<input type="hidden" name="City" value="<?php echo $_POST["City"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"><b>  State/Province/Region </b> </td>

					<td> <center><?php echo $_POST["envio_estado"] ?></center> </td>

					<input type="hidden" name="envio_estado" value="<?php echo $_POST["envio_estado"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"><b>  ZIP </b> </td>

					<td> <center><?php echo $_POST["envio_zip"] ?></center> </td>

					<input type="hidden" name="envio_zip" value="<?php echo $_POST["envio_zip"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"><b> Country </b> </td>

					<td> <center><?php echo $_POST["envio_pais"] ?></center> </td>

					<input type="hidden" name="envio_pais" value="<?php echo $_POST["envio_pais"] ?>">
 		
			</tr>


			<tr>
 
					<td style="background:#F2F0F0"> <b> Phone number </b> </td>

					<td> <center><?php echo $_POST["envio_telefono"] ?></center> </td>

					<input type="hidden" name="envio_telefono" value="<?php echo $_POST["envio_telefono"] ?>">

					<input type="hidden" name="cont" value="<?php echo $_POST["cont"] ?>">

					<input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">


					
 		
			</tr>


			 


</table>

			<?php

		}

		?>



<br><br>

<?php
		if ($idioma == "es")

		{

			?>

			<center><input id="boton_formulario" type="submit" value="Verificar"></center><br><br>

			<?php

		}


		else if ($idioma == "en")

		 {

			?>

			<center><input id="boton_formulario" type="submit" value="Continue"></center><br><br>

			<?php

		}

		?>
	

		 


</form>
 