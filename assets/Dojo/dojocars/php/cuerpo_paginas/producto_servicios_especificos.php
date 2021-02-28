
<center>
	
	<?php if ($idioma == "es") { ?><h2>Opcional: Carga los servicios o especialidades especificas que pudieran existir dentro de tu servicio y que dieran ser seleccionadas por tu cliente<br><br> </h2><h3>(Ejemplo: Tecnico Automotriz > Aire acondicionado, motor o amortiguadores )</h3><?php } else if ($idioma == "en"){ ?><h2>Optional: Load the services or specific specialties that may exist within your service and that could be selected by your client <br><br></h2><h3>(Example: Automotive Technician> Air conditioning, engine or shock absorbers)</h3><?php } ?>

<?php include("php/funciones/mensaje.php"); ?>

</center>


<?php 

		if (isset($_GET["id_productos_cesta_especificos"]))

		{
			$id_productos_cesta_especificos = $_GET["id_productos_cesta_especificos"];

			$consulta_gen ="SELECT * FROM productos_cesta_especificos WHERE id_productos_cesta_especificos='$id_productos_cesta_especificos' ";

			$ejecutar_consulta_gen = $conexion->query($consulta_gen) or die ("No se ejecuto query");

			$areglo_mod = $ejecutar_consulta_gen->fetch_assoc();

			$producto_cesta = utf8_encode( $areglo_mod['producto_cesta']);

	

			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_cesta_servicio.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_productos_cesta_especificos" value="<?php echo $id_productos_cesta_especificos ?>">
 
			<?php
 
		}

		else

		{

			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_cesta_servicio.php" method="post" enctype="multipart/form-data">
 
			<?php
 


		}


?>


			<input type="hidden" name="id_producto" value="<?php echo $_GET["id"] ?>">

 <center>
		 
			<input required placeholder="<?php if ($idioma == "es") { ?>Servicio Específico<?php } elseif ($idioma == "en") { ?>Specific Service<?php } ?>" value="<?php echo $producto_cesta  ?>" type="text" name="producto_cesta" style="width: 80%"><br><br>


			<center><input id="boton_formulario" type="submit" value="<?php if ($idioma == "es") { ?>Cargar<?php } else if ($idioma == "en"){ ?> Load <?php } ?>"></center><br><br>

			<hr><hr>


</form>



<section id="Cuerpo_perfil">

 
		<?php 

		 

		// Empieza funcion de paginacion 

			include ("php/Zebra_Pagination.php");

			 $resultados=954; // Cuantos se mostraran por pagina

			

			$paginacion = new Zebra_Pagination();

			// Bucle para determinar donde va a iniciar la busqueda

			if ( isset($_GET["page"]))

			{
				
				$inicio=($_GET["page"]-1)*$resultados;
			}

			else{
				$inicio=0;
			}


			$id = $_GET["id"];
 

			$consulta ="SELECT * FROM productos_cesta_especificos WHERE id_producto='$id' ORDER BY producto_cesta ASC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM productos_cesta_especificos WHERE id_producto='$id' ORDER BY producto_cesta ASC"; 
	 

		

		$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto query1");

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");

		$num_regs =  $ejecutar_consulta2->num_rows;




			if ($num_regs==0)

			{
				?>
				<br><br><p class='subtitulo_central'><?php if ($idioma == "es") { ?>Usted no tiene registros insertados<?php } elseif ($idioma == "en") { ?>You do not have inserted records<?php } ?></p>
				<?php
			}


				else

					{


								?>


								<table style="width: 100%">

										<thead>
												<tr>

													
													
							<th style="width: 50%" class="titulos_perfil">
							<?php if ($idioma == "es") { ?>Categoria<?php } else if ($idioma == "en"){ ?>Category <?php } ?>
							</th>
													 
							<th style="width: 40%" class="titulos_perfil">
							<?php if ($idioma == "es") { ?>Acción<?php } else if ($idioma == "en"){ ?>Action<?php } ?>
							</th>


												</tr>

										</thead>


										<tbody>


												<?php

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{

													?>

													<tr>
														<td>

														 

														<?php echo  utf8_encode($registro["producto_cesta"])."<br><br>"; ?>  


													</td>

														
 
														
									<td> 

									<center>

									 

									<a href="javascript:confirmation('php/funciones/eliminar_producto_cesta_especifico.php?id_productos_cesta_especificos=<?php echo $registro["id_productos_cesta_especificos"] ?>&id=<?php echo $_GET["id"] ?>')"> 

									<?php if ($idioma == "es") { ?>Eliminar<?php } else if ($idioma == "en"){ ?>Delete<?php } ?>

									</a> &nbsp;&nbsp;&nbsp;&nbsp;


									<a href="tu_perfil.php?op=producto_servicios_especificos&id_productos_cesta_especificos=<?php echo $registro["id_productos_cesta_especificos"] ?>&id=<?php echo $_GET["id"] ?>">

									<?php if ($idioma == "es") { ?>Modificar<?php } else if ($idioma == "en"){ ?>Update<?php } ?>

									</a> 

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

	echo "<br><br>";

		
								?>
<a href="tu_perfil.php?op=producto_cargado&id=<?php echo $_GET["id"] ?>" id="boton_formulario"><?php if ($idioma == "es") { ?>Continuar<?php } elseif ($idioma == "en") { ?>Continue<?php } ?> &nbsp;&nbsp;> </a>
</section>

