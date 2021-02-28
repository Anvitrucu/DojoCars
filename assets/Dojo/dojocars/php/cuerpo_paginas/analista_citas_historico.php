<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>

<?php 


$id = $_GET["id"];

?>

<a href="tu_perfil.php?op=analista_citas" id="boton_generico" style="font-size: 1rem">< Return</a>


<h1><?php if ($idioma == "es") { ?>Listado de Citas Pendientes<?php } elseif ($idioma == "en") { ?>List of Appointments Pending<?php } ?></h1>  <center>

<form action="tu_perfil.php" method="GET">

	 <input id="datepicker" name="fecha" style="padding: 1%; " placeholder="Date" autocomplete="off"><br><br>

	 <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">


	<input type="hidden" name="op" value="analista_citas_detalles">

	<input type="submit" value="<?php if ($idioma == "es") { ?>Buscar por Fecha<?php } elseif ($idioma == "en") { ?>Search by Date<?php } ?>" id="boton_generico">
	
</form>


<section id="Cuerpo_perfil">

 
		<?php 

		 

		// Empieza funcion de paginacion 

			include ("php/Zebra_Pagination.php");

			 $resultados=4; // Cuantos se mostraran por pagina

			

			$paginacion = new Zebra_Pagination();

			// Bucle para determinar donde va a iniciar la busqueda

			if ( isset($_GET["page"]))

			{
				
				$inicio=($_GET["page"]-1)*$resultados;
			}

			else{
				$inicio=0;
			}


			$hoy = date("Y-m-d");

			if (isset($_GET["fecha"])) {


				$fecha = $_GET["fecha"];

				$fecha = date("Y-m-d", strtotime($fecha));

				$id = $_GET["id"];

				$consulta ="SELECT * FROM tatu_cita WHERE id_producto='$id' AND status='finalizado' AND fecha='$fecha' ORDER BY hora ASC  LIMIT ".$inicio.", ". $resultados ;

				$consulta2="SELECT * FROM tatu_cita WHERE id_producto='$id' AND status='finalizado' AND fecha='$fecha'   ORDER BY hora ASC"; 
	 
			}

			else
			{
				$consulta ="SELECT * FROM tatu_cita WHERE id_producto='$id' AND status='finalizado' ORDER BY fecha ASC  LIMIT ".$inicio.", ". $resultados ;

				$consulta2="SELECT * FROM tatu_cita WHERE id_producto='$id'  AND status='finalizado'  ORDER BY fecha ASC"; 
			}


  
		
  
		$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto query1");

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");

		$num_regs =  $ejecutar_consulta2->num_rows;




			if ($num_regs==0)

			{
				?>
				<p class='subtitulo_central'><?php if ($idioma == "es") { ?>Usted no tiene citas pendientes<?php } elseif ($idioma == "en") { ?>You do not have pending appointments<?php } ?></p>
				<?php
			}


				else

					{


								?>


								<table style="width: 100%">

										<thead>
												<tr>

													
													
							<th style="width: 50%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Detalles<?php } elseif ($idioma == "en") { ?>Details<?php } ?> </th>
													 
							<th style="width: 40%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Detalles<?php } elseif ($idioma == "en") { ?>Details<?php } ?> </th>


												</tr>

										</thead>


										<tbody>


												<?php

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{

													$id_usuario=$registro["id_usuario"];

													$tipo_tatu=$registro["tipo_tatu"];

													$fecha=$registro["fecha"];

													$dia_semana=$registro["dia_semana"];

													$hora_inicio=$registro["hora"];

													$tiempo=$registro["tiempo"];

													$id_usuario=$registro["id_usuario"];

													$telefono_cliente=$registro["telefono_cliente"];

													$direccion_cliente=$registro["direccion_cliente"];

													$usuario_nombre=$registro["usuario_nombre"];

													$dia_semana=$registro["dia_semana"];


 

												 

													$medida = $tipo_tatu;

												 
												 

													$fecha_mostrar = date("d / m / Y", strtotime($fecha));

													?>

													<tr>
														<td>
															** <b><?php if ($idioma == "es") { ?>Servicio<?php } elseif ($idioma == "en") { ?>Service<?php } ?>:</b> <?php

															$consulta_producto="SELECT * FROM   productos WHERE id_productos ='$id'" ;

															$ejecutar_consulta_producto = $conexion->query($consulta_producto) or die ("No se ejecuto querys");

															$registro_produ = $ejecutar_consulta_producto->fetch_assoc();

 



															 echo utf8_encode($registro_produ["nombre_0"])  ?>.<br><br>

															** <b><?php if ($idioma == "es") { ?>Fecha de la Cita<?php } elseif ($idioma == "en") { ?>Date of Appointment<?php } ?>:</b> <?php echo $dia_semana.", ".$fecha_mostrar  ?>.<br><br>

														 	** <b><?php if ($idioma == "es") { ?>Hora de la Cita<?php } elseif ($idioma == "en") { ?>Appointment Time<?php } ?>:</b> <?php echo $hora_inicio  ?> Horas.<br><br>

														 	 

														 	** <b><?php if ($idioma == "es") { ?>Cliente<?php } elseif ($idioma == "en") { ?>Client<?php } ?>:</b> <?php echo utf8_encode($usuario_nombre)  ?>  <br><br>

														 	** <b><?php if ($idioma == "es") { ?>Telefono Cliente<?php } elseif ($idioma == "en") { ?>Customer Phone<?php } ?>:</b> <?php echo $telefono_cliente  ?>  <br><br>


														 	** <b><?php if ($idioma == "es") { ?>Direccion Cliente<?php } elseif ($idioma == "en") { ?>Customer Adress<?php } ?>:</b> <?php echo $direccion_cliente  ?>  <br><br>
 

														 	 

														 

														 
													</td>

														
 
														
									<td> 

									<center>

									 

									El cliente asistio a su cita? <?php  echo $dia_semana=$registro["el_cliente_asistio"]; ?><br><br>


									<?php 

									if ($registro["el_cliente_asistio"]=="SI"){

										echo "Precio Final: ".$registro["precio_final"]." USD.<br><br><hr><br>";

										$descripcion_final_pedido = utf8_encode(addslashes(nl2br($registro["descripcion_final_pedido"]))) ; 

										echo $descripcion_final_pedido;
									}

									?>
									 
									</center>
														</td>
													



													</tr>


													<?php

												}




												?>



										</tbody>



								</table>


								<?php



				

							}

								// Sigue funcion de paginacion que viene del archivo articulos.php



	$total_articulos = $num_regs;

	$paginacion -> records($total_articulos);

	$paginacion-> records_per_page($resultados);

	echo "<br><br>";

	$paginacion->render();

	echo "<br><br><br>";

		
								?>

</section>