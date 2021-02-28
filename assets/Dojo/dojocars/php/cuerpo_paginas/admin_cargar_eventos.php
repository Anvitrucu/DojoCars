<?php 

include("php/funciones/conexion.php");

?>
<center> <h1><?php if ($idioma == "es") { ?>Pánel de Carga de Eventos<?php } elseif ($idioma == "en") { ?>Events Loading Panel<?php } ?> </h1> </center>

  
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_evento.php" method="post" enctype="multipart/form-data">
 
 
 
	<?php if ($idioma == "es") { ?>Categoria del Producto:<?php } else if ($idioma == "en"){ ?> Product Category: <?php } ?> &nbsp;&nbsp;&nbsp;  


		<select style="background:#fff; font-size:1.2rem; font-family:Raleway"  id="id_tatu_eventos_categoria" class="cambio" name="id_tatu_eventos_categoria" required   >

				<option value=""> <?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?>Elige entre las opciones de la lista </option>


				<?php 
				
				
$consulta_categoria_general = "SELECT * FROM tatu_eventos_categorias order by categorias";


$ejecutar_consulta_categoria_general = $conexion->query($consulta_categoria_general) or die ("No se ejecutó estados");

while ($registro_ciudad = $ejecutar_consulta_categoria_general->fetch_assoc())
		{

			
			echo "<option value='".$registro_ciudad["id_tatu_eventos_categorias"]."''>".utf8_encode($registro_ciudad["categorias"])."</option>";
		}
 
			 
 
				
				
				 ?>

		</select> <br><br><br>


	 <?php if ($idioma == "es") { ?>Fecha del Evento<?php } elseif ($idioma == "en") { ?>Date of the Event<?php } ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

 
<select name="mes_calendario" style="font-size: .8em;
				padding: .3em;"  onchange="cargar_dia(this.value)" required>

					<option value="" > <?php if ($idioma == "es") { ?>Mes<?php } elseif ($idioma == "en") { ?>Month<?php } ?></option>
					<option value="1"> <?php if ($idioma == "es") { ?>Enero<?php } elseif ($idioma == "en") { ?>January<?php } ?></option>
					<option value="2"> <?php if ($idioma == "es") { ?>Febrero<?php } elseif ($idioma == "en") { ?>February<?php } ?></option>
					<option value="3"> <?php if ($idioma == "es") { ?>Marzo<?php } elseif ($idioma == "en") { ?>March<?php } ?></option>
					<option value="4"> <?php if ($idioma == "es") { ?>Abril<?php } elseif ($idioma == "en") { ?>April<?php } ?></option>
					<option value="5"> <?php if ($idioma == "es") { ?>Mayo<?php } elseif ($idioma == "en") { ?>May<?php } ?></option>
					<option value="6"> <?php if ($idioma == "es") { ?>Junio<?php } elseif ($idioma == "en") { ?>June<?php } ?></option>
					<option value="7"> <?php if ($idioma == "es") { ?>Julio<?php } elseif ($idioma == "en") { ?>July<?php } ?></option>
					<option value="8"> <?php if ($idioma == "es") { ?>Agosto<?php } elseif ($idioma == "en") { ?>August<?php } ?></option>
					<option value="9"> <?php if ($idioma == "es") { ?>Septiembre<?php } elseif ($idioma == "en") { ?>September<?php } ?></option>
					<option value="10"><?php if ($idioma == "es") { ?>Octubre<?php } elseif ($idioma == "en") { ?>October<?php } ?></option>
					<option value="11"><?php if ($idioma == "es") { ?>Noviembre<?php } elseif ($idioma == "en") { ?>November<?php } ?></option>
					<option value="12"><?php if ($idioma == "es") { ?>Diciembre<?php } elseif ($idioma == "en") { ?>December<?php } ?></option>

					 
				</select>  

				<div id="div_cargar_dia" style="display: inline-block;" ></div>

		<br><br> <br> 

 

<?php if ($idioma == "es") { ?>Hora del Evento<?php } elseif ($idioma == "en") { ?>Event time
<?php } ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="padding: 1%" type="text" name="hora"><br><br><br>

<?php if ($idioma == "es") { ?>Nombre del Evento<?php } elseif ($idioma == "en") { ?>Name of the event
<?php } ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="padding: 1%"  name="titulo"><br><br><br>

 
<?php if ($idioma == "es") { ?>Flyer (Para Optimizar el sistema, se recomienda que la imagen no pese mas de 1.5 MB)<?php } elseif ($idioma == "en") { ?>Flyer (To optimize the system, it is recommended that the image does not weigh more than 1.5 MB)<?php } ?><br><br><input type="file" name="flyer"><br><br><br><br>

<textarea name="descripcion" style="width: 50%" rows="4"><?php if ($idioma == "es") { ?>Detalles del Evento<?php } elseif ($idioma == "en") { ?>Event details<?php } ?></textarea><br><br>
 
<br><br> 

<center><input id="boton_formulario" type="submit" value=" <?php if ($idioma == "es") { ?>Cargar<?php } elseif ($idioma == "en") { ?>Load<?php } ?> "></center><br><br>
			<hr><hr>


</form>

<center>
	
 
 

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

 
		$consulta ="SELECT * FROM tatu_eventos ORDER BY id_tatu_eventos ASC  LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM tatu_eventos ORDER BY id_tatu_eventos ASC"; 
	 

		

		$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto query1");

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");

		$num_regs =  $ejecutar_consulta2->num_rows;




			if ($num_regs==0)

			{
				?>
				<p class='subtitulo_central'><?php if ($idioma == "es") { ?>Usted no tiene registros insertados<?php } elseif ($idioma == "en") { ?>You do not have inserted records<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "en") { ?><?php } ?><?php } ?></p>
				<?php
			}


				else

					{


								?>


								<table style="width: 100%">

										<thead>
												<tr>

													
													
							<th style="width: 30%" class="titulos_perfil"><?php if ($idioma == "es") { ?>Detalles del Evento<?php } elseif ($idioma == "en") { ?>Event details<?php } ?>  </th>

							<th style="width: 30%" class="titulos_perfil"> <?php if ($idioma == "es") { ?>Enlace<?php } elseif ($idioma == "en") { ?>Link<?php } ?> </th>
													 
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

															$id_tatu_eventos_categoria = $registro["id_tatu_eventos_categoria"];


															$consulta_cat = "SELECT * FROM tatu_eventos_categorias WHERE id_tatu_eventos_categorias='$id_tatu_eventos_categoria'  ";


															$ejecutar_consulta_cat = $conexion->query($consulta_cat) or die ("No se ejecutó estados");


								 							$registro_cat= $ejecutar_consulta_cat->fetch_assoc();
								 							?>
 
														 	<b><?php if ($idioma == "es") { ?>Categoria<?php } elseif ($idioma == "en") { ?>Category<?php } ?></b> <?php echo utf8_encode($registro_cat["categorias"])."<br><br>"; ?> 

														 	<b><?php if ($idioma == "es") { ?>Nombre del Evento<?php } elseif ($idioma == "en") { ?>Name of the event<?php } ?></b> <?php echo utf8_encode($registro["titulo"])."<br><br>"; ?>

														 	<b><?php if ($idioma == "es") { ?>Fecha<?php } elseif ($idioma == "en") { ?>Date<?php } ?></b> <?php echo utf8_encode($registro["fecha"])."<br><br>"; ?> 

														 	<b><?php if ($idioma == "es") { ?>Hora<?php } elseif ($idioma == "en") { ?>Hour<?php } ?></b> <?php echo utf8_encode($registro["hora"])."<br><br>"; ?>  

														    
														 </center>
														</td>

														<td><center><a target="_blank"  href="index.php?menu=event_descript&id_tatu_eventos=<?php echo $registro["id_tatu_eventos"]  ?>"><?php if ($idioma == "es") { ?>IR AL EVENTO<?php } elseif ($idioma == "en") { ?>GO TO EVENT<?php } ?></a> </center>   </td>

														
 
														
									<td> 

									<center>

									 

									<a href="javascript:confirmation('php/funciones/eliminar_evento.php?id_tatu_eventos=<?php echo $registro["id_tatu_eventos"] ?>')"> <?php if ($idioma == "es") { ?>Eliminar<?php } elseif ($idioma == "en") { ?>Remove<?php } ?>  </a> &nbsp;&nbsp;&nbsp;&nbsp;
  

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