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

				$consulta ="SELECT * FROM tatu_cita WHERE id_analista='$id_de_usuario' AND status='Pagado' AND fecha='$fecha' ORDER BY hora ASC  LIMIT ".$inicio.", ". $resultados ;

				$consulta2="SELECT * FROM tatu_cita WHERE id_analista='$id_de_usuario' AND status='Pagado' AND fecha='$fecha'   ORDER BY hora ASC"; 
	 
			}

			else
			{
				$consulta ="SELECT * FROM tatu_cita WHERE id_analista='$id_de_usuario' AND status='Pagado' ORDER BY fecha ASC  LIMIT ".$inicio.", ". $resultados ;

				$consulta2="SELECT * FROM tatu_cita WHERE id_analista='$id_de_usuario'  AND status='Pagado'  ORDER BY fecha ASC"; 
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

													$hora_inicio=$registro["hora"];

													$tiempo=$registro["tiempo"];

													$id_usuario=$registro["id_usuario"];

													$telefono_cliente=$registro["telefono_cliente"];

													$direccion_cliente=$registro["direccion_cliente"];

													$usuario_nombre=$registro["usuario_nombre"];

													$dia_semana=$registro["dia_semana"];

													$id=$registro["id_producto"];


 

												 

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


														 	<?php 

														 	 $locacion_cita= utf8_encode($registro["locacion_cita"]);

														 	 if ($locacion_cita==1) {
														 	 	?>

														 	 	<b>La cita se realizara en la direccion:</b> <?php echo $direccion_cliente ?>

														 	 	<?php
														 	 }

														 	 else {

														 	 	?>

														 	 	<b>La cita se realizara en la direccion suministrada por técnico al sistema. 

														 	 	<?php
														 	 }

														 	 

														 	 ?>
 

														 	 

														 

														 
													</td>

														
 
														
									<td> 

									<center>

									 

									<a href="javascript:confirmation('php/funciones/eliminar_cita_representante.php?id=<?php echo $registro["id_tatu_cita"] ?>&id_producto=<?php echo $id ?>')"> <?php if ($idioma == "es") { ?>Cancelar Cita<?php } elseif ($idioma == "en") { ?>Cancel Appointment<?php } ?></a><br><br>



									<a href="javascript:confirmation('tu_perfil.php?op=reagendar_cita&id=<?php echo $registro["id_tatu_cita"] ?>&id_producto=<?php echo $id ?>')"> <?php if ($idioma == "es") { ?>Reagendar<?php } elseif ($idioma == "en") { ?>Change date<?php } ?></a> <br><br>


									<a href="javascript:confirmation('tu_perfil.php?op=cerrar_cita&id=<?php echo $registro["id_tatu_cita"] ?>&id_producto=<?php echo $id ?>')"> <?php if ($idioma == "es") { ?>Cerrar Solicitud // Pago Final <?php } elseif ($idioma == "en") { ?>Close Request // Final Payment<?php } ?></a> <br><br>

									 
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