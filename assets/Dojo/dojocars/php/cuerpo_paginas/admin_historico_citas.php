
<h1><?php if ($idioma == "es") { ?>Historico de Citas Registradas<?php } elseif ($idioma == "en") { ?>History of Registered Quotations<?php } ?></h1> <br><br>
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


 

			$consulta ="SELECT * FROM tatu_cita WHERE fecha<'$hoy'   ORDER BY fecha DESC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM tatu_cita WHERE fecha<'$hoy'   ORDER BY fecha DESC"; 
	 

		

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

													
													
							<th style="width: 50%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Fecha de la Cita<?php } elseif ($idioma == "en") { ?>Date of Appointment<?php } ?> </th>
													 
							<th style="width: 40%" class="titulos_perfil"><?php if ($idioma == "es") { ?>Detalles<?php } elseif ($idioma == "en") { ?>Details<?php } ?>  </th>


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

													$hora_inicio=$registro["hora_inicio"];

													$hora_cierre=$registro["hora_cierre"];




													$medida = $tipo_tatu;

													if ($medida==1) {
														$medida_mostrar = "De 5 a 15 Centimetros";

														$tiempo = "30 Minutos";
													}

													if ($medida==2) {
														$medida_mostrar = "Mas de 15 y hasta 30 Centimetros";

														$tiempo = "1 Hora ";
													}

													if ($medida==3) {
														$medida_mostrar = "Mas de 13 centimetros";

														$tiempo = "1 Hora, 30 Minutos";
													}

 

												 

													$fecha_mostrar = date("d / m / Y", strtotime($fecha));

													?>

													<tr>
														<td>

															** <b><?php if ($idioma == "es") { ?>Fecha de la Cita:<?php } elseif ($idioma == "en") { ?>Date of the Appointment:<?php } ?></b> <?php echo $dia_semana.", ".$fecha_mostrar  ?>.<br><br>

														 	** <b><?php if ($idioma == "es") { ?>Hora de la Cita:<?php } elseif ($idioma == "en") { ?>Appointment Time:<?php } ?></b> <?php echo $hora_inicio  ?> Horas.<br><br>

														 	** <b><?php if ($idioma == "es") { ?>Hora de Cierre:<?php } elseif ($idioma == "en") { ?>Closing time:<?php } ?></b> <?php echo $hora_cierre  ?> Horas.<br><br>

														 	

														 

														 
													</td>

														
 
														
									<td> 

									<center>

									 

															** <b><?php if ($idioma == "es") { ?>Medida del Tatuaje:<?php } elseif ($idioma == "en") { ?>Measurement of Tattoo:<?php } ?></b> <?php echo $medida_mostrar  ?>.<br><br>

														 	** <b><?php if ($idioma == "es") { ?>Duración de la Cita:<?php } elseif ($idioma == "en") { ?>Duration of the Appointment:<?php } ?></b> <?php echo $tiempo  ?> <br><br><br>


									 
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