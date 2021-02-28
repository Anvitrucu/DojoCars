
<center>
	
	<?php if ($idioma == "es") { ?><h1>Gestor de Categoria de Productos</h1><?php } else if ($idioma == "en"){ ?><h1>Product Category Manager</h1><?php } ?>

<?php include("php/funciones/mensaje.php"); ?>

</center>


<?php 

		if (isset($_GET["id"]))

		{
			$id_categoria_producto = $_GET["id"];

			$consulta_gen ="SELECT * FROM categorias_general WHERE id_categoria_producto='$id_categoria_producto' ";

			$ejecutar_consulta_gen = $conexion->query($consulta_gen) or die ("No se ejecuto query");

			$areglo_mod = $ejecutar_consulta_gen->fetch_assoc();

			$categoria_producto = $areglo_mod['categoria_producto'];

			$categoria_ingles = $areglo_mod['categoria_ingles'];

			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_categoria_general.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_categoria_producto" value="<?php echo $id_categoria_producto ?>">
 
			<?php
 
		}

		else

		{

			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_categoria_general.php" method="post" enctype="multipart/form-data">
 
			<?php
 


		}


?>




			<?php if ($idioma == "es") { ?>Categoria en Castellano:<?php } else if ($idioma == "en"){ ?> Category Name (Spanish): <?php } ?>

			<br><br>
			<input value="<?php echo $categoria_producto  ?>" type="text" name="categoria_producto" style="width: 80%"><br><br>

			<?php if ($idioma == "es") { ?>Categoria en Inglés:<?php } else if ($idioma == "en"){ ?> Category Name (English): <?php } ?>

			<br><br>
			<input value="<?php echo $categoria_ingles  ?>" type="text" name="categoria_ingles" style="width: 80%"><br><br>


			<center><input id="boton_formulario" type="submit" value="<?php if ($idioma == "es") { ?>Cargar<?php } else if ($idioma == "en"){ ?> Load <?php } ?>"></center><br><br>

			<hr><hr>


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



 

			$consulta ="SELECT * FROM categorias_general ORDER BY categoria_producto ASC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM categorias_general ORDER BY categoria_producto ASC"; 
	 

		

		$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto query1");

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");

		$num_regs =  $ejecutar_consulta2->num_rows;




			if ($num_regs==0)

			{
				echo "<p class='subtitulo_central'>Usted no tiene registros insertados</p>";
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

														<?php echo "ES: ". utf8_encode($registro["categoria_producto"])."<br><br>"; ?> <br> 

														<?php echo "EN: ". utf8_encode($registro["categoria_ingles"])."<br><br>"; ?>  


													</td>

														
 
														
									<td> 

									<center>

									 

									<a href="javascript:confirmation('php/funciones/eliminar_categoria_general.php?id=<?php echo $registro["id_categoria_producto"] ?>')"> 

									<?php if ($idioma == "es") { ?>Eliminar<?php } else if ($idioma == "en"){ ?>Delete<?php } ?>

									</a> &nbsp;&nbsp;&nbsp;&nbsp;


									<a href="tu_perfil.php?op=cargar_categoria_general&id=<?php echo $registro["id_categoria_producto"] ?>">

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

	echo "<br><br><br>";

		
								?>

</section>