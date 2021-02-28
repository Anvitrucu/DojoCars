
<h1><?php if ($idioma == "es") { ?>Listado de Citas Pendientes<?php } elseif ($idioma == "en") { ?>List of Appointments Pending<?php } ?></h1> 
<section id="Cuerpo_perfil">

	<form id="parrafo" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data"   >
<center>

<input type="hidden" name="op" value="admin_proximas_citas">


 <?php if ($idioma == "es") { ?>Filtrar por Rango de Fechas<?php } elseif ($idioma == "en") { ?>Filter by Date Range<?php } ?>   <br><br>

<?php if ($idioma == "es") { ?>Desde<?php } elseif ($idioma == "en") { ?>Since<?php } ?> &nbsp;&nbsp;&nbsp;&nbsp;<input  style="padding: 1%"   id="datepicker" required name="fecha_inicio">&nbsp;&nbsp;&nbsp;
<?php if ($idioma == "es") { ?>Hasta<?php } elseif ($idioma == "en") { ?>Until<?php } ?>  <input  style="padding: 1%"   id="datepicker2" required name="fecha_cierre"> <br><br><br>
<input type="submit" id='boton_generico' value="<?php if ($idioma == "es") { ?>Filtrar<?php } elseif ($idioma == "en") { ?>Filter<?php } ?>"></center> 

</form>
 <hr><hr><br>
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

			if (isset($_GET["fecha_inicio"])) {

				$fecha_inicio = $_GET["fecha_inicio"];

				$fecha_cierre = $_GET["fecha_cierre"];

				$fecha_inicio_proceso = date("Y-m-d", strtotime($fecha_inicio));

				$fecha_cierre_proceso = date("Y-m-d", strtotime($fecha_cierre));

				if ($fecha_inicio_proceso<$hoy) {
					$fecha_inicio_proceso = $hoy;
				}

				if ($fecha_cierre_proceso<$hoy) {
					$fecha_cierre_proceso = $hoy;
				}


			$consulta ="SELECT * FROM tatu_cita WHERE fecha>='$fecha_inicio_proceso' AND fecha<='$fecha_cierre_proceso'   ORDER BY fecha ASC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM tatu_cita WHERE fecha>='$fecha_inicio_proceso' AND fecha<='$fecha_cierre_proceso'    ORDER BY fecha ASC"; 
			}

			else
			{


			$consulta ="SELECT * FROM tatu_cita WHERE fecha>='$hoy'   ORDER BY fecha ASC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM tatu_cita WHERE fecha>='$hoy'   ORDER BY fecha ASC"; 

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
													 
							<th style="width: 40%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Accion<?php } elseif ($idioma == "en") { ?>Action<?php } ?> </th>


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

														 	** <b><?php if ($idioma == "es") { ?>Medida del Tatuaje:<?php } elseif ($idioma == "en") { ?>Measurement of Tattoo:<?php } ?></b> <?php echo $medida_mostrar  ?>.<br><br>

														 	** <b><?php if ($idioma == "es") { ?>Duración de la Cita:<?php } elseif ($idioma == "en") { ?>Duration of the Appointment:<?php } ?></b> <?php echo $tiempo  ?> <br><br><br>


														 	<?php 

														 	$consulta_user ="SELECT * FROM usuario WHERE id_usuario='$id_usuario' ";

														 	$ejecutar_consulta_user = $conexion->query($consulta_user) or die ("No se ejecuto query");

														 	$registro_user = $ejecutar_consulta_user->fetch_assoc();

 
														 	$nombre_cliente = $registro_user["usuario_nombre"]; 

														 	$correo_cliente = $registro_user["correo"];

														 	$Telefono_cliente = $registro["telefono_cliente"];


														 	?>

														 	** <b><?php if ($idioma == "es") { ?>CLiente: Nombre<?php } elseif ($idioma == "en") { ?>CLIENT: Name<?php } ?></b> <?php echo $nombre_cliente  ?> <br><br><br>

														 	** <b><?php if ($idioma == "es") { ?>CLiente: Correo<?php } elseif ($idioma == "en") { ?>Client: Mail<?php } ?></b> <?php echo $correo_cliente  ?> <br><br><br>

														 	** <b><?php if ($idioma == "es") { ?>CLiente: Telefono<?php } elseif ($idioma == "en") { ?>CLIENT: Phone<?php } ?></b> <?php echo $Telefono_cliente  ?> <br><br><br>

														 

														 
													</td>

														
 
														
									<td> 

									<center>

									 

									<a href="javascript:confirmation('php/funciones/eliminar_cita_admin.php?id=<?php echo $registro["id_tatu_cita"] ?>')"> <?php if ($idioma == "es") { ?>Cancelar Cita<?php } elseif ($idioma == "en") { ?>Cancel Appointment<?php } ?></a> &nbsp;&nbsp;&nbsp;&nbsp;


									 
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