<?php 

	$_SESSION["id_representante"] = $id_usuario;

?>




<h1>Listado de Suscriptores registrados</h1> 
<section id="Cuerpo_perfil">

	<form id="parrafo" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data"   >
<center>

<input type="hidden" name="op" value="analista_suscritores_suscriptores">


  <input  style="padding: 1%"  name="nombre" type="text" required  placeholder="Nombre del Suscriptor"> <br><br><br>
<input type="submit" id='boton_generico' value="Filtrar"></center> 

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

			if (isset($_GET["nombre"])) {

				$nombre_cliente = $_GET["nombre"];

			 
 
			$consulta ="SELECT * FROM usuario_asociado WHERE nombre_cliente LIKE '%$nombre_cliente%' AND id_representante='$id_usuario'  ORDER BY nombre_cliente ASC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM usuario_asociado WHERE nombre_cliente LIKE '%$nombre_cliente%' AND id_representante='$id_usuario'  ORDER BY nombre_cliente ASC"; 
			}

			else
			{


			$consulta ="SELECT * FROM usuario_asociado WHERE id_representante='$id_usuario'   ORDER BY nombre_cliente ASC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM usuario_asociado WHERE id_representante='$id_usuario'    ORDER BY nombre_cliente ASC"; 

			}


 

	 

		

		$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto query1");

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");

		$num_regs =  $ejecutar_consulta2->num_rows;




			if ($num_regs==0)

			{
				echo "<p class='subtitulo_central'>Usted no tiene citas pendientes</p>";
			}


				else

					{


								?>


								<table style="width: 100%">

										<thead>
												<tr>

													
													
							<th style="width: 50%" class="titulos_perfil"> Detalles </th>
													 
							<th style="width: 40%" class="titulos_perfil"> Accion </th>


												</tr>

										</thead>


										<tbody>


												<?php

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{

													$nombre_cliente= utf8_encode($registro["nombre_cliente"]);

													$id_cliente=$registro["id_cliente"];

													$ficha_telefono=$registro["ficha_telefono"];

													 
													?>

													<tr>
														<td>

															** <b>Nombre del Suscriptor:</b> <?php echo $nombre_cliente  ?>.<br><br>
  
														 
													</td>

														
 
														
									<td> 

									<center>

									 

									<a href="javascript:confirmation('php/funciones/eliminar_suscriptor.php?id=<?php echo $registro["id_usuario_asociado"] ?>')">Eliminar Suscriptor</a> &nbsp;&nbsp;&nbsp;&nbsp;


									<a href="tu_perfil.php?op=analista_suscritores_suscriptores_2&id=<?php echo $registro["id_usuario_asociado"] ?>">Ficha del Usuario</a><br><br><hr>

									<h3 style="font-size: 1.4rem">Crear Cita para el usuario</h3>


										<form id="form_perfil" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data">

														<input type="hidden" name="ficha_telefono" value="<?php echo $ficha_telefono ?>">

																	<input type="hidden" name="op" value="crear_cita_1">

																	<input type="hidden" name="id_cliente" value="<?php echo $id_cliente ?>">

																	<input type="hidden" name="id_analista" value="<?php echo $id_usuario ?>">

																	<input type="hidden" name="nombre_usuario" value="<?php echo $usuario_nombre ?>">

																	<select name="id_productos" required="">

																		<option value="">Seleccione el servicio a asociar</option>

																	<?php 

																	$consulta3 ="SELECT * FROM productos WHERE cita_representante='$id_usuario'";
 
																	$ejecutar_consulta3 = $conexion->query($consulta3) or die ("No se ejecuto query1");

																	while ($registro3 = $ejecutar_consulta3->fetch_assoc())

																	{

																		?>


																		<option value="<?php echo utf8_encode( $registro3["id_productos"]) ?>"><?php echo utf8_encode( $registro3["nombre_0"]) ?></option>


																		<?php
																	}



																	?>

																	</select><br><br>

																	<input type="submit" id="boton_formulario" value="Crear Cita">

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