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


<?php if ($idioma == "es") { ?><h1>LISTADO DE PEDIDO NO PAGADOS <br><br> Verificar Solo en Caso de Error en Pago</h1><?php } else if ($idioma == "en"){ ?><h1>LISTADO DE PEDIDO NO PAGADOS <br><br> Verificar Solo en Caso de Error en Pago<</h1><?php } ?>
 



 <form id="form_perfil" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data">

	 <p class='titulo' style="font-size:1.3rem">
	 Buscar por Código	 <?php if ($idioma == "es") { ?>Buscar por Código<?php } else if ($idioma == "en"){ ?>Search Order Code<?php } ?> 

	<br><br> 0000

	<input type="text" required placeholder="
	<?php if ($idioma == "es") { ?>Código de Pedido<?php } else if ($idioma == "en"){ ?>Order Code<?php } ?>
	" name="codigo_ped" style="width: 60%"><br><br></p>

	<input type="hidden" name="op" value="Pedidos_no_pagados">

	<input type="hidden" name="buscador" value="SI">

														 


	<center><input style="font-size:1.1rem" type="submit" value="
	<?php if ($idioma == "es") { ?>Buscar<?php } else if ($idioma == "en"){ ?>Search<?php } ?> 
	" id="boton_generico"></center>

 
</form>

 


 <?php include("php/funciones/mensaje.php") ?>


<?php 

		include ("php/funciones/comprobar_usuario.php");

	 
 
 if (isset($_GET["buscador"]))
 {

 	$codigo_ped = $_GET["codigo_ped"];

 	$consulta="SELECT * FROM pedido WHERE status= 'Pendiente' AND  id_pedido= '$codigo_ped' ORDER BY id_pedido DESC LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM pedido WHERE status= 'Pendiente' AND  id_pedido= '$codigo_ped' ORDER BY id_pedido DESC"; 

 }

 else

 {

 	$consulta="SELECT * FROM pedido WHERE status= 'Pendiente' ORDER BY id_pedido DESC LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM pedido WHERE status= 'Pendiente' ORDER BY id_pedido DESC"; 

 }

		

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto querys");

		$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto querys");


		$num_regs =  $ejecutar_consulta2->num_rows;


 
			if ($num_regs==0)

			{
				  if ($idioma == "es") { echo "No hay resultados Disponibles"; } else if ($idioma == "en"){ echo "No results available";  } ;
			}


				else

					{


								?>


								<table style="width: 100%">

										<thead>
												<tr>

													
													
										<th style="width: 40%">
										<?php if ($idioma == "es") { ?>Dátos Básicos<?php } else if ($idioma == "en"){ ?>Basic data<?php } ?>
										</th>

										<th style="width: 30%">
									<?php if ($idioma == "es") { ?>Detalles del Pedido<?php } else if ($idioma == "en"){ ?>Order details<?php } ?>
										</th>

										<th style="width: 30%">
										<?php if ($idioma == "es") { ?>Actualizar<?php } else if ($idioma == "en"){ ?>Update<?php } ?> 
										</th>
													 


												</tr>

										</thead>


										<tbody>


												<?php


												

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{


													$id_productos = $registro["id_productos"];

													$id_vendedor = $registro["id_vendedor"];

													$id_cliente = $registro["id_cliente"];


													$con ="SELECT * FROM productos WHERE id_productos = '$id_productos';";
 
													$ejecutar_con = $conexion->query($con) or die ("No se ejecuto query");
													 
													$dato = $ejecutar_con ->fetch_assoc();

													 
 

													$fecha_pedido =  $registro["fecha_pedido"];
 
													$direccion =  $registro["direccion"];



													$busqueda_usu ="SELECT * FROM usuario WHERE id_usuario='$id_cliente'";

													$ejecutar_consulta_usu = $conexion->query($busqueda_usu);

													$arreglo_usu = $ejecutar_consulta_usu->fetch_assoc();

													$usuario_nombre = $arreglo_usu['usuario_nombre'];

													$correo_usu = $arreglo_usu['correo'];
 




													$fecha_pedido = date("d/m/Y", strtotime($fecha_pedido));
													 

 
													?>
														 

													<tr>
														<td> 
														
														 

											<?php if ($idioma == "es") { ?>N° Orden::<?php } else if ($idioma == "en"){ ?>N° Order::<?php } ?>

														  <b><?php echo "0000".$registro["id_pedido"] ?></b><br><br>

											<?php if ($idioma == "es") { ?>Nombre del Cliente:<?php } else if ($idioma == "en"){ ?>Customer Name:<?php } ?>

														 <b><?php echo $usuario_nombre ?></b><br><br>


											<?php if ($idioma == "es") { ?>Correo del Cliente:<?php } else if ($idioma == "en"){ ?>Customer Mail:<?php } ?>

														 <b><?php echo $correo_usu ?></b><br><br>
		
											<?php if ($idioma == "es") { ?>Fecha de Orden:<?php } else if ($idioma == "en"){ ?>Order Date:<?php } ?> 

														<b><?php echo $fecha_pedido ?></b><br><br>

											<?php if ($idioma == "es") { ?>Dirección:<?php } else if ($idioma == "en"){ ?>Address:<?php } ?> 

														 <b><?php echo $registro["envio_direccion_1"].". ".$registro["envio_direccion_2"] ?></b><br><br>

									<?php if ($idioma == "es") { ?>Ciudad:<?php } else if ($idioma == "en"){ ?>City:<?php } ?> 

														<b><?php echo $registro["City"]  ?></b><br><br>

								<?php if ($idioma == "es") { ?>Estado:<?php } else if ($idioma == "en"){ ?>State:<?php } ?> 

														 <b><?php echo $registro["envio_estado"]  ?></b><br><br>

							<?php if ($idioma == "es") { ?>Pais:<?php } else if ($idioma == "en"){ ?>Country:<?php } ?> 

														<b><?php echo $registro["envio_pais"]  ?></b><br><br>

								<?php if ($idioma == "es") { ?>Código de área:<?php } else if ($idioma == "en"){ ?>Zip Code: <?php } ?> 

														 <b><?php echo $registro["envio_zip"]  ?></b><br>


														 

													 
														 </td>

														<td>
														
														<?php

														$id_pedido  = $registro["id_pedido"] ;

														 $consulta3="SELECT * FROM pedido_cesta WHERE id_pedido= '$id_pedido'"; 

														 $ejecutar3 = $conexion->query($consulta3) or die ("No se ejecuto query");
													 
														while ($dato3 = $ejecutar3 ->fetch_assoc())
														{
															 

															echo substr(utf8_encode($dato3["nombre_producto"]), 0, 20)."......................".$dato3["precio_producto"]."USD<br><br>";
															echo  "Cantidad:   ".$dato3["cantidad"]."<br><br><hr><br><br>";
														 
														}



														?>

														TOTAL: <b><?php echo $registro["pago_total"]  ?> USD.</b><br>
														
														
														  </td>

														<td> <center>
														<form id="form_perfil" name="form_perfil" action="php/funciones/subir_enviar_pedido.php" method="post" enctype="multipart/form-data">

								<?php if ($idioma == "es") { ?>Compañia de Envio<?php } else if ($idioma == "en"){ ?> Shipping Company <?php } ?> 

														<br><br>

														<input type="text" required placeholder="Compañia de Envio" name="envio_compania" style="width: 60%" ><br><br><br>

											Tracking<br><br>

														<input type="text" required placeholder="Traking" name="envio_traking" style="width: 60%"><br><br><br>

									<?php if ($idioma == "es") { ?>Fecha de Envio<?php } else if ($idioma == "en"){ ?> Orders Ship Date<?php } ?>

														<br><br>

														<input type="date" required  name="fecha_envio" style="width: 60%"><br><br><br>


														<input type="hidden"  name="op" value="Pedidos_no_pagados">

														<input type="hidden"  name="id_pedido" value="<?php echo $id_pedido ?>">

														<input style="font-size:1.1rem" type="submit" value="   <?php if ($idioma == "es") { ?>Actualizar<?php } else if ($idioma == "en"){ ?>Update<?php } ?>   " id="boton_generico">



														
 
														</form>



</center>

														</td>

														 


 
														 
														
													



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