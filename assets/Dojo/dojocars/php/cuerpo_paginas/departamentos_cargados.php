<center>
	<?php if ($idioma == "es") { ?><h1>Departamentos Cargados en el Sistema</h1><?php } else if ($idioma == "en"){ ?><h1>Departments Loaded in the System</h1><?php } ?><br>


<section id="Cuerpo_perfil">

 
		<?php 

		 

		// Empieza funcion de paginacion 

			include ("php/Zebra_Pagination.php");

			 $resultados=8; // Cuantos se mostraran por pagina

			

			$paginacion = new Zebra_Pagination();

			// Bucle para determinar donde va a iniciar la busqueda

			if ( isset($_GET["page"]))

			{
				
				$inicio=($_GET["page"]-1)*$resultados;
			}

			else{
				$inicio=0;
			}



 

			$consulta ="SELECT * FROM departamento        LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM departamento_categorias    "; 
	 

		

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
							<?php if ($idioma == "es") { ?>Departamento<?php } else if ($idioma == "en"){ ?>Deparment <?php } ?>
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

													 Departamento: 

														<?php 

														$id_departamento = $registro["id_departamento"];



														 if ($idioma == "es") {echo   utf8_encode($registro["departamento_es"])."<br><br>";} else if ($idioma == "en"){echo   utf8_encode($registro["departamento_in"])."<br><br>";} 

														 echo "Categorias<br><br>" ;


														$consulta_es ="SELECT * FROM departamento_categorias WHERE id_departamento='$id_departamento'"  ;
 
														$ejecutar_consulta_es = $conexion->query($consulta_es) or die ("No se ejecuto query1");

														while ($registro_es = $ejecutar_consulta_es->fetch_assoc())  

														{

															$id_categorias_general = $registro_es["id_categorias_general"];

															$consulta_d ="SELECT * FROM categorias_general WHERE id_categoria_producto='$id_categorias_general'"  ;
 
															$ejecutar_consulta_d = $conexion->query($consulta_d) or die ("No se ejecuto query1");

															$registro_d = $ejecutar_consulta_d->fetch_assoc();

															if ($idioma == "es") {echo "* ".utf8_encode($registro_d["categoria_producto"])."<br><br>";} else if ($idioma == "en"){echo   "* ".utf8_encode($registro_d["categoria_ingles"])."<br><br>";} 

														 
												 

														}

 


														 ?>  

														 

													</td>

												 			
									<td> 

									<center>

									<a id="boton_formulario" href="php/funciones/eliminar_departamento.php?id_departamento=<?php echo $registro["id_departamento"] ?>">

									<?php if ($idioma == "es") { ?>Eliminar<?php } else if ($idioma == "en"){ ?>Delete<?php } ?> </a>

									 &nbsp;&nbsp;&nbsp;&nbsp;


									 <a id="boton_formulario" href="tu_perfil.php?op=departamentos_cargar_1&id_departamento=<?php echo $registro["id_departamento"] ?>">

									<?php if ($idioma == "es") { ?>Modificar<?php } else if ($idioma == "en"){ ?>Update<?php } ?> </a>



									 

									</center>
														</td>
													



													</tr>


													<?php

												}




												?>



										</tbody>



								</table>

<br><br><br>
 
								<?php



				

							}

								// Sigue funcion de paginacion que viene del archivo articulos.php



	$total_articulos = $num_regs;

	$paginacion -> records($total_articulos);

	$paginacion-> records_per_page($resultados);

	echo "<br><br>";

	$paginacion->render();

	echo "<br><br> ";

		
								?>

</section>


