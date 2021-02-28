<?php 

include("php/funciones/conexion.php");

?>
<center>
	
	<?php if ($idioma == "es") { ?><h1>Pánel de Carga de Productos</h1><?php } else if ($idioma == "en"){ ?><h1>
Product Loading Panels</h1><?php } ?>

</center>








<?php 

		if (isset($_GET["id"]))

		{
			$id_categorias_especificas = $_GET["id"];

			$consulta_gen ="SELECT * FROM categorias_especificas WHERE id_categorias_especificas='$id_categorias_especificas' ";

			$ejecutar_consulta_gen = $conexion->query($consulta_gen) or die ("No se ejecuto query");

			$areglo_mod = $ejecutar_consulta_gen->fetch_assoc();

			$categoria_especifica = $areglo_mod['categoria_especifica'];

			$categoria_especifica_ingles = $areglo_mod['categoria_especifica_ingles'];

			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_categoria_especifica.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_categorias_especificas" value="<?php echo $id_categorias_especificas ?>">
 
			<?php
 
		}

		else

		{

			?>
 
			<form id="form_perfil" name="form_perfil" action="php/funciones/subir_categoria_especifica.php" method="post" enctype="multipart/form-data">
 
			<?php
 


		}


?>







	<?php if ($idioma == "es") { ?>Categoria del Producto:<?php } else if ($idioma == "en"){ ?> Product Category: <?php } ?> &nbsp;&nbsp;&nbsp;  


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


 


 


				<?php if ($idioma == "es") { ?> Categoria Específica (ES):<?php } else if ($idioma == "en"){ ?> Specific Category (ES): <?php } ?>

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input value="<?php echo $categoria_especifica ?>" type="text" name="producto" style="width: 60%"><br><br><br>


			<?php if ($idioma == "es") { ?> Categoria Específica (EN):<?php } else if ($idioma == "en"){ ?> Specific Category (EN): <?php } ?>

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input  value="<?php echo $categoria_especifica_ingles ?>" type="text" name="categoria_especifica_ingles" style="width: 60%"><br><br><br>

		 


 
<br><br><br><br>

<center><input id="boton_formulario" type="submit" value="<?php if ($idioma == "es") { ?>Cargar<?php } else if ($idioma == "en"){ ?> Send <?php } ?>

"></center><br><br>
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



		

		$consulta ="SELECT * FROM categorias_especificas ORDER BY categoria_especifica ASC  LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM categorias_especificas ORDER BY categoria_especifica ASC"; 

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
								<?php if ($idioma == "es") { ?>Datos del Producto:<?php } else if ($idioma == "en"){ ?> Product dates:<?php } ?>

							</th>
													 
							<th style="width: 50%" class="titulos_perfil">
							<?php if ($idioma == "es") { ?>Acción:<?php } else if ($idioma == "en"){ ?> Action:<?php } ?>
													
							</th>


												</tr>

										</thead>


										<tbody>


												<?php

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{


													$id_categorias_general = $registro["categorias_general_id_categoria_producto"];

													 



													$consulta_cat ="SELECT * FROM categorias_general WHERE id_categoria_producto ='$id_categorias_general'" ;

													$ejecutar_cat = $conexion->query($consulta_cat) or die ("No se ejecuto query1");

													$registro_cat = $ejecutar_cat->fetch_assoc();



													/*$consulta_col ="SELECT * FROM color WHERE id_color ='$id_color'" ;

													$ejecutar_col = $conexion->query($consulta_col) or die ("No se ejecuto query1");

													$registro_col = $ejecutar_col->fetch_assoc(); */



													?>

													<tr>
														<td><?php 




														if ($idioma == "es") 

{

	echo "<b>Categoria Específica (ES): </b>".utf8_encode($registro["categoria_especifica"])."<br><br>";

	echo "<b>Categoria Específica (EN): </b>".utf8_encode($registro["categoria_especifica_ingles"])."<br><br>";

	echo "<b>Categoria General: </b>".utf8_encode($registro_cat["categoria_producto"])."<br><br>";

} 


else if ($idioma == "en")
{
	echo "<b>Specific Category (ES): </b>".utf8_encode($registro["categoria_especifica"])."<br><br>";

	echo "<b>Categoria Específica (EN): </b>".utf8_encode($registro["categoria_especifica_ingles"])."<br><br>";

	echo "<b>General Category: </b>".utf8_encode($registro_cat["categoria_ingles"])."<br><br>";
}



																  
																  																   ?> </td>

														
 
														
								<td> 

								<center>

								 

								<a href="javascript:confirmation('php/funciones/eliminar_categoria_especifica.php?id=<?php echo $registro["id_categorias_especificas"] ?>')">
								<?php if ($idioma == "es") { ?>Eliminar<?php } else if ($idioma == "en"){ ?> Delete<?php } ?></a>  

								&nbsp;&nbsp;&nbsp;&nbsp;

								<a href="tu_perfil.php?op=cargar_categoria_especifica&id=<?php echo $registro["id_categorias_especificas"] ?>">
								<?php if ($idioma == "es") { ?>Modificar<?php } else if ($idioma == "en"){ ?> Update<?php } ?></a>  


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
