
<center>
	<?php if ($idioma == "es") { ?><h1>Seleccione la Categoria a Incluir</h1><?php } else if ($idioma == "en"){ ?><h1>Select the Category to Include</h1><?php } ?>



<?php 

		 
			$id_departamento = $_GET["id_departamento"];

		 
			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_categoria_departamento.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_departamento" value="<?php echo $id_departamento ?>">
 
  
 


 <select style="background:#fff; font-size:1.2rem; font-family:Raleway"  id="id_categorias_general" class="cambio" name="id_categorias_general" required   >

				<option value="">
				<?php if ($idioma == "es") { ?>Elige entre las opciones de la lista<?php } else if ($idioma == "en"){ ?> Choose from the list options <?php } ?>

				</option>


				<?php 
				
				
							$consulta_categoria_general = "SELECT * FROM categorias_general order by categoria_producto";


							$ejecutar_consulta_categoria_general = $conexion->query($consulta_categoria_general) or die ("No se ejecutó estados");


							if ($idioma == "es") 

							{
								while ($registro_categoria_general = $ejecutar_consulta_categoria_general->fetch_assoc())
								{

								echo "<option value='".$registro_categoria_general["id_categoria_producto"]."''>".utf8_encode($registro_categoria_general["categoria_producto"])."</option>";
								}

							}


							else if ($idioma == "en")
							{

									while ($registro_categoria_general = $ejecutar_consulta_categoria_general->fetch_assoc())
									{

									echo "<option value='".$registro_categoria_general["id_categoria_producto"]."''>".utf8_encode($registro_categoria_general["categoria_ingles"])."</option>";
									}
							}


 
							?>

		</select> <br><br><br>
			<center><input id="boton_formulario" type="submit" value="<?php if ($idioma == "es") { ?>Cargar<?php } else if ($idioma == "en"){ ?> Load <?php } ?>"></center><br><br>

			<hr><hr>


</form>























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



 

			$consulta ="SELECT * FROM departamento_categorias   WHERE id_departamento='$id_departamento'    LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM departamento_categorias   WHERE id_departamento='$id_departamento'  "; 
	 

		

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

														<?php 

														$id_categorias_general = $registro["id_categorias_general"];


														$consulta_es ="SELECT * FROM categorias_general   WHERE id_categoria_producto='$id_categorias_general'"  ;
 
														$ejecutar_consulta_es = $conexion->query($consulta_es) or die ("No se ejecuto query1");

														$registro_es = $ejecutar_consulta_es->fetch_assoc();


														 if ($idioma == "es") {echo   utf8_encode($registro_es["categoria_producto"])."<br><br>";} else if ($idioma == "en"){echo   utf8_encode($registro_es["categoria_ingles"])."<br><br>";}  
 


														 ?>  

														 

													</td>

												 			
									<td> 

									<center>

									<a href="php/funciones/eliminar_categoria_departmento.php?id=<?php echo $registro["id_departamento_categorias"] ?>&id_departamento=<?php echo $_GET["id_departamento"] ?>">

									<?php if ($idioma == "es") { ?>Eliminar<?php } else if ($idioma == "en"){ ?>Delete<?php } ?>

									</a> &nbsp;&nbsp;&nbsp;&nbsp;


									 

									</center>
														</td>
													



													</tr>


													<?php

												}




												?>



										</tbody>



								</table>

<br><br><br>
<a href="tu_perfil.php?op=departamentos_cargar_3" id="boton_formulario">Continuar</a><br><br><br>

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


