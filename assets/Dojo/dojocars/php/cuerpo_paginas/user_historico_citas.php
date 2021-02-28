<a href="tu_perfil.php?op=user_citas" id="boton_generico"> < Volver</a>


<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>
<h1><?php if ($idioma == "es") { ?>Historico de Citas Procesadas<?php } elseif ($idioma == "en") { ?>History of Processed Appointments<?php } ?></h1> <br><br>
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


 

			$consulta ="SELECT * FROM tatu_cita WHERE  status='Pagado_final' ORDER BY fecha ASC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM tatu_cita WHERE  status='Pagado_final' ORDER BY fecha ASC"; 
	 

		

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

													
													
							<th style="width: 50%" class="titulos_perfil"><?php if ($idioma == "es") { ?>Detalles<?php } elseif ($idioma == "en") { ?>Details<?php } ?>  </th>
													 
							<th style="width: 40%" class="titulos_perfil"><?php if ($idioma == "es") { ?>Accion<?php } elseif ($idioma == "en") { ?>Action<?php } ?>  </th>


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

													$usuario_nombre=$registro["usuario_nombre"];

													$dia_semana=$registro["dia_semana"];

													$id=$registro["id_producto"];


													$status=$registro["status"];

													$precio_adelanto=$registro["precio_adelanto"];

													$id_tatu_cita=$registro["id_tatu_cita"];

													$direccion_cliente= utf8_encode( $registro["direccion_cliente"]);

													$id_analista=$registro["id_analista"];
 
 

												 

													$medida = $tipo_tatu;

												 
												 

													$fecha_mostrar = date("d / m / Y", strtotime($fecha));

													?>

													<tr>
														<td>
															** <b><?php if ($idioma == "es") { ?>Servicio:<?php } elseif ($idioma == "en") { ?>Service:<?php } ?></b> <?php

															$consulta_producto="SELECT * FROM   productos WHERE id_productos ='$id'" ;

															$ejecutar_consulta_producto = $conexion->query($consulta_producto) or die ("No se ejecuto querys");

															$registro_produ = $ejecutar_consulta_producto->fetch_assoc();



															$consulta_tecnico="SELECT * FROM   usuario WHERE id_usuario ='$id_analista'" ;

															$ejecutar_consulta_tecnico = $conexion->query($consulta_tecnico) or die ("No se ejecuto querys");

															$registro_tecnico = $ejecutar_consulta_tecnico->fetch_assoc();

															$establecimiento_direccion = utf8_encode( $registro_tecnico["establecimiento_direccion"]);

															$telefono_tecnico = utf8_encode( $registro_tecnico["telefono_1"]);

 


															 echo utf8_encode($registro_produ["nombre_0"])  ?>.<br><br>

															** <b><?php if ($idioma == "es") { ?>Fecha de la Cita:<?php } elseif ($idioma == "en") { ?>Date of the Appointment:<?php } ?></b> <?php echo $dia_semana.", ".$fecha_mostrar  ?>.<br><br>

														 	** <b><?php if ($idioma == "es") { ?>Hora de la Cita:<?php } elseif ($idioma == "en") { ?>Appointment Time:<?php } ?></b> <?php echo $hora_inicio  ?> Horas.<br><br>
 

														 	 

														 	** <b><?php if ($idioma == "es") { ?>Cliente:<?php } elseif ($idioma == "en") { ?>Client:<?php } ?></b> <?php echo utf8_encode($usuario_nombre)  ?>  <br><br>

														 	** <b><?php if ($idioma == "es") { ?>Telefono del tecnico:<?php } elseif ($idioma == "en") { ?>Technician's phone:<?php } ?></b> <?php echo $telefono_tecnico  ?>  <br><br>
 

														 	 <?php 

														 	 $locacion_cita= utf8_encode($registro["locacion_cita"]);

														 	 if ($locacion_cita==1) {
														 	 	?>

														 	 	<b>La cita se realizó en la direccion:</b> <?php echo $direccion_cliente ?>

														 	 	<?php
														 	 }

														 	 else {

														 	 	?>

														 	 	<b>La cita se realizó en la direccion:</b> <?php echo $establecimiento_direccion ?>

														 	 	<?php
														 	 }

														 	 

														 	 ?>

														 

														 
													</td>

														
 
														
									<td> 

									<center>

									 

									<a id="boton_generico" href="javascript:confirmation('php/funciones/imprimir_factura.php?id=<?php echo $registro["id_tatu_cita"] ?>&id_producto=<?php echo $id ?>&status=<?php echo $status ?>&monto_adelanto=<?php echo $monto_adelanto ?>&id_usuario=<?php echo $id_usuario ?>')"> <?php if ($idioma == "es") { ?>Imprimir Factura<?php } elseif ($idioma == "en") { ?>Print invoice<?php } ?></a> &nbsp;&nbsp;&nbsp;&nbsp;


									 
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