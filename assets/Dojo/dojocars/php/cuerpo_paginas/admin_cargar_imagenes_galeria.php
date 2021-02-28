<?php 

include("php/funciones/conexion.php");

?>
<center> <h1><?php if ($idioma == "es") { ?>Pánel de Carga de Imagenes en Galeria<?php } elseif ($idioma == "en") { ?>Image Loading Panel in Gallery<?php } ?> </h1> </center>








 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_foto_galeria.php" method="post" enctype="multipart/form-data">
 
 
 
	<?php if ($idioma == "es") { ?>Categoria del Producto:<?php } else if ($idioma == "en"){ ?> Product Category: <?php } ?> &nbsp;&nbsp;&nbsp;  


		<select style="background:#fff; font-size:1.2rem; font-family:Raleway"  id="id_tatu_galeria_categoria" class="cambio" name="id_tatu_galeria_categoria" required   >

				<option value="">
				<?php if ($idioma == "es") { ?>Elige entre las opciones de la lista<?php } else if ($idioma == "en"){ ?> Choose from the list options <?php } ?>

				</option>


				<?php 
				
				
$consulta_categoria_general = "SELECT * FROM tatu_galeria_categoria order by tatu_galeria_categoria";


$ejecutar_consulta_categoria_general = $conexion->query($consulta_categoria_general) or die ("No se ejecutó estados");

while ($registro_ciudad = $ejecutar_consulta_categoria_general->fetch_assoc())
		{

			
			echo "<option value='".$registro_ciudad["id_tatu_galeria_categoria"]."''>".utf8_encode($registro_ciudad["tatu_galeria_categoria"])."</option>";
		}
 
			 
 
				
				
				 ?>

		</select> <br><br><br>


 
 <?php if ($idioma == "es") { ?>Imagen a Cargar (Para Optimizar el sistema, se recomienda que la imagen no pese mas de 1.5 MB)<?php } elseif ($idioma == "en") { ?>Image to Load (To optimize the system, it is recommended that the image does not weigh more than 1.5 MB)<?php } ?><br><br><input type="file" name="galeria">


 
<br><br><br><br>

<center><input id="boton_formulario" type="submit" value=" <?php if ($idioma == "es") { ?>Cargar<?php } elseif ($idioma == "en") { ?>Load<?php } ?> "></center><br><br>
			<hr><hr>


</form>

<center>
	
	<a target="_blank" href="index.php?menu=galeria_1"><input type="button" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Galeria de Imagenes<?php } elseif ($idioma == "en") { ?>Image gallery<?php } ?>"></a>
</center><br><br>
			<hr><hr>




















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



 

			$consulta ="SELECT * FROM tatu_galeria ORDER BY id_tatu_galeria_categoria ASC  LIMIT ".$inicio.", ". $resultados ;

			$consulta2="SELECT * FROM tatu_galeria ORDER BY id_tatu_galeria_categoria ASC"; 
	 

		

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

													
													
							<th style="width: 30%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Categoria<?php } elseif ($idioma == "en") { ?>Category<?php } ?> </th>

							<th style="width: 30%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Imagen<?php } elseif ($idioma == "en") { ?>Image<?php } ?> </th>
													 
							<th style="width: 30%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Accion<?php } elseif ($idioma == "en") { ?>Action<?php } ?> </th>


												</tr>

										</thead>


										<tbody>


												<?php

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{

													?>

													<tr>
														<td><center> 

														<?php 

															$id_tatu_galeria_categoria = $registro["id_tatu_galeria_categoria"];


															$consulta_cat = "SELECT * FROM tatu_galeria_categoria WHERE id_tatu_galeria_categoria='$id_tatu_galeria_categoria'  ";


															$ejecutar_consulta_cat = $conexion->query($consulta_cat) or die ("No se ejecutó estados");


								 							$registro_cat= $ejecutar_consulta_cat->fetch_assoc();
 
														 	echo   utf8_encode($registro_cat["tatu_galeria_categoria"])."<br><br>"; 

														 ?>   
														 </center>
														</td>

														<td><center><a target="_blank"  href="img/galeria/<?php  echo $registro["foto"]  ?>"><?php if ($idioma == "es") { ?>VER IMAGEN<?php } elseif ($idioma == "en") { ?>VIEW IMAGE<?php } ?></a> </center>   </td>

														
 
														
									<td> 

									<center>

									 

									<a href="javascript:confirmation('php/funciones/eliminar_foto_galeria.php?id=<?php echo $registro["id_tatu_galeria"] ?>')"> <?php if ($idioma == "es") { ?>Eliminar<?php } elseif ($idioma == "en") { ?>Remove<?php } ?>  </a> &nbsp;&nbsp;&nbsp;&nbsp;
  

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