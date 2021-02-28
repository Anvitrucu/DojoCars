
<center>
	
	 <h1><?php if ($idioma == "es") { ?>Gestor de Categoria de Productos<?php } elseif ($idioma == "en") { ?>Product Category Manager<?php } ?></h1> 

<?php include("php/funciones/mensaje.php"); ?>

</center>


<?php 

		if (isset($_GET["id"]))

		{
			$id_tatu_galeria_categoria = $_GET["id"];

			$consulta_gen ="SELECT * FROM tatu_galeria_categoria WHERE id_tatu_galeria_categoria='$id_tatu_galeria_categoria' ";

			$ejecutar_consulta_gen = $conexion->query($consulta_gen) or die ("No se ejecuto query");

			$areglo_mod = $ejecutar_consulta_gen->fetch_assoc();

			$tatu_galeria_categoria = $areglo_mod['tatu_galeria_categoria'];

			 

			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_categoria_imagenes.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_tatu_galeria_categoria" value="<?php echo $id_tatu_galeria_categoria ?>">
 
			<?php
 
		}

		else

		{

			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_categoria_imagenes.php" method="post" enctype="multipart/form-data">
 
			<?php
 


		}


?>




		 
		 
			<input placeholder="<?php if ($idioma == "es") { ?>Categoria de Galeria<?php } elseif ($idioma == "en") { ?>Category of Gallery<?php } ?>" value="<?php echo $tatu_galeria_categoria  ?>" type="text" name="tatu_galeria_categoria" style="width: 80%"><br><br>

			 

			<center><input id="boton_formulario" type="submit" value=" <?php if ($idioma == "es") { ?>Cargar<?php } elseif ($idioma == "en") { ?>Load<?php } ?> "></center><br><br>

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



 

			$consulta ="SELECT * FROM tatu_galeria_categoria ORDER BY tatu_galeria_categoria ASC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM tatu_galeria_categoria ORDER BY tatu_galeria_categoria ASC"; 
	 

		

		$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto query1");

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");

		$num_regs =  $ejecutar_consulta2->num_rows;




			if ($num_regs==0)

			{
				?>
				<p class='subtitulo_central'><?php if ($idioma == "es") { ?>Usted no tiene registros insertados<?php } elseif ($idioma == "en") { ?>You do not have inserted records<?php } ?></p>
				<?php
			}


				else

					{


								?>


								<table style="width: 100%">

										<thead>
												<tr>

													
													
							<th style="width: 50%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Categoria<?php } elseif ($idioma == "en") { ?>Category<?php } ?> </th>
													 
							<th style="width: 40%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Accion<?php } elseif ($idioma == "en") { ?>Action<?php } ?> </th>


												</tr>

										</thead>


										<tbody>


												<?php

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{

													?>

													<tr>
														<td>

														<?php echo   utf8_encode($registro["tatu_galeria_categoria"])."<br><br>"; ?> <br> 

														 
													</td>

														
 
														
									<td> 

									<center>

									 

									<a href="javascript:confirmation('php/funciones/eliminar_categoria_galeria.php?id=<?php echo $registro["id_tatu_galeria_categoria"] ?>')"><?php if ($idioma == "es") { ?>Eliminar<?php } elseif ($idioma == "en") { ?>Remove<?php } ?>   </a> &nbsp;&nbsp;&nbsp;&nbsp;


									<a href="tu_perfil.php?op=admin_categoria_imagenes&id=<?php echo $registro["id_tatu_galeria_categoria"] ?>">

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