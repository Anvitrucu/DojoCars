&nbsp;&nbsp;&nbsp;&nbsp;<a href="tu_perfil.php?op=administrador_productos"><img src="img/volver.png" width="4%"></a>

<center>
<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>
<h1><?php if ($idioma == "es") { ?>GESTOR DE CATEGORIAS DE PRODUCTOS<?php } elseif ($idioma == "en") { ?>MANAGER OF PRODUCT CATEGORIES<?php } ?></h1>

<form id="form_perfil" name="form_perfil" action="php/funciones/subir_categoria_general.php" method="post" enctype="multipart/form-data">

			<?php if ($idioma == "es") { ?>Insertar el Nombre de la Categoria:<?php } elseif ($idioma == "en") { ?>Insert the Name of the Category:<?php } ?><br><br>
			<input required type="text" placeholder="<?php if ($idioma == "es") { ?>Categoria en Castellano<?php } elseif ($idioma == "en") { ?>Category in Spanish<?php } ?>" name="categoria_producto" size="80%"><br><br>

			<input required type="text" placeholder="<?php if ($idioma == "es") { ?>Categoria en Inglés<?php } elseif ($idioma == "en") { ?>Category in English<?php } ?>" name="categoria_in" size="80%"><br><br>


			 

			<center><input id="boton_generico" type="submit" value="<?php if ($idioma == "es") { ?>Cargar<?php } elseif ($idioma == "en") { ?>Load<?php } ?>"></center><br><br>

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

			{ ?>
				<p class='titulo'><?php if ($idioma == "es") { ?>Usted no tiene registros insertados<?php } elseif ($idioma == "en") { ?>You do not have inserted records<?php } ?></p>";
		<?php 	}


				else

					{


								?>


								<table>

										<thead>
												<tr>

													
													
													<th class="titulos_perfil"><?php if ($idioma == "es") { ?>CATEGORIA<?php } elseif ($idioma == "en") { ?>CATEGORY<?php } ?></th>
													 
													<th class="titulos_perfil"><?php if ($idioma == "es") { ?>ACCIÓN<?php } elseif ($idioma == "en") { ?>ACTION<?php } ?></th>


												</tr>

										</thead>


										<tbody>


												<?php

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{

													?>

													<tr>
														<td><?php echo "ES: ".utf8_encode($registro["categoria_producto"])."<br><br>";
																   ?>

															<?php echo "IN: ".utf8_encode($registro["categoria_ingles"])."<br><br>";
																   ?> 


																   </td>

														
 
														
														<td> <center><a href="php/funciones/eliminar_categoria_general.php?id=<?php echo $registro["id_categoria_producto"] ?>"><?php if ($idioma == "es") { ?>ELIMINAR<?php } elseif ($idioma == "en") { ?>REMOVE<?php } ?></a> </center> 
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