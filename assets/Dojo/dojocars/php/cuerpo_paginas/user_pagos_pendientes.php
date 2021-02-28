<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>
<h1><?php if ($idioma == "es") { ?>Listado de Pagos Pendientes<?php } elseif ($idioma == "en") { ?>List of  Pending Payments<?php } ?></h1> <br><br>
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


 

			$consulta ="SELECT * FROM tatu_cita WHERE   id_usuario='$id_usuario' AND status='finalizado' AND el_cliente_asistio='SI' AND pago_final_realizado='NO' ORDER BY fecha ASC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM tatu_cita WHERE id_usuario='$id_usuario' AND status='finalizado' AND el_cliente_asistio='SI' AND pago_final_realizado='NO' ORDER BY fecha ASC"; 
	 

		

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

													$id_analista=$registro["id_analista"];

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

													$descripcion_final_pedido=utf8_encode($registro["descripcion_final_pedido"]);


 

												 

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

															$Specialist=utf8_encode($registro_tecnico["usuario_nombre"]);


															$telefono_1=utf8_encode($registro_tecnico["telefono_1"]);

 



															 echo utf8_encode($registro_produ["nombre_0"])  ?>.<br><br>

															** <b><?php if ($idioma == "es") { ?>Fecha de la Cita:<?php } elseif ($idioma == "en") { ?>Date of the Appointment:<?php } ?></b> <?php echo $dia_semana.", ".$fecha_mostrar  ?>.<br><br>

														 	** <b><?php if ($idioma == "es") { ?>Hora de la Cita:<?php } elseif ($idioma == "en") { ?>Appointment Time:<?php } ?></b> <?php echo $hora_inicio  ?> Horas.<br>  <br> 

														 	** <b><?php if ($idioma == "es") { ?>Especialista:<?php } elseif ($idioma == "en") { ?>Specialist:<?php } ?></b> <?php echo utf8_encode($Specialist)  ?>  <br><br>

														 	** <b><?php if ($idioma == "es") { ?>Telefono del especialista:<?php } elseif ($idioma == "en") { ?>Telefono del especialista:<?php } ?></b> <?php echo $telefono_1  ?>  <br><br>


														 	** <b><?php if ($idioma == "es") { ?>Trabajo a Realizar:<?php } elseif ($idioma == "en") { ?>Trabajo a Realizar:<?php } ?></b> <?php echo $descripcion_final_pedido  ?>  <br><br>
 

														 	 

														 

														 
													</td>

														
 
														
									<td> 

									<center>


										<?php 

										$el_cliente_asistio=$registro["el_cliente_asistio"];

										if ($el_cliente_asistio=="SI") {
											
											$total_final = $registro["precio_final"]-$registro["precio_adelanto"];
										}




										?>

										El precio por su servicio es de <?php echo $registro["precio_final"] ?> USD <br><br>

										Usted ya adelanto un total de <?php echo $registro["precio_adelanto"] ?> USD <br><br>

										Usted debe pagar <?php echo $total_final ?> USD.<br><br>

									 

									<a id="boton_generico" href="tu_perfil.php?op=pago_final_1&id_dat=<?php echo $registro["id_tatu_cita"] ?>&monto_pag=<?php echo $total_final ?>"> <?php if ($idioma == "es") { ?>Pagar<?php } elseif ($idioma == "en") { ?>Pay<?php } ?></a> &nbsp;&nbsp;&nbsp;&nbsp;


									 
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