<?php 

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
 

?>
<section id="Cuerpo_perfil">

	&nbsp;&nbsp;&nbsp;&nbsp;<a href="tu_perfil.php?op=administrador_productos"><input type="button" id="boton_formulario" value="< Return "></a>

<center>
	
	<?php if ($idioma == "es") { ?><h1>Pánel de Servicios Publicados</h1><?php } else if ($idioma == "en"){ ?><h1>Published Services Board</h1><?php } ?>

</center>
 

<?php 

if (isset($_GET["mensaje"])) {
	if ($idioma == "es") { ?><h1 style="font-size: 1.1rem">Actualización Exitosa</h1><?php } else if ($idioma == "en"){ ?><h1 style="font-size: 1.1rem">Successfully updated</h1><?php }
}

?>






  <form id="form_perfil" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data">

	 <p class='titulo' style="font-size:1.3rem">
	 

	<?php if ($idioma == "es") { ?>Buscar por Nombre<?php } else if ($idioma == "en"){ ?> Search by Name <?php } ?> &nbsp;&nbsp;&nbsp; 
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<input type="text" required placeholder="<?php if ($idioma == "es") { ?>Nombre Producto:<?php } else if ($idioma == "en"){ ?> Product Name: <?php } ?> &nbsp;&nbsp;&nbsp; " name="codigo_ped" style="width: 50%" ><br><br></p>

	<input type="hidden" name="op" value="servicios_cargados">

	<input type="hidden" name="buscador" value="SI">

														 


	<center><input style="font-size:1.1rem" type="submit" value="<?php if ($idioma == "es") { ?>Buscar<?php } else if ($idioma == "en"){ ?>Search<?php } ?>" id="boton_generico"></center><BR><BR>

 






		<?php 

		include ("php/funciones/comprobar_usuario.php");





 if (isset($_GET["buscador"]))
 {

 	$codigo_ped = $_GET["codigo_ped"];

 	if ($nivel_usuario=="4") {
 		$consulta="SELECT * FROM productos WHERE nombre_0 LIKE '%$codigo_ped%' AND id_usuario ='$id_usuario' ORDER BY id_productos DESC   LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM productos WHERE nombre_0 LIKE '%$codigo_ped%' AND id_usuario ='$id_usuario'  ORDER BY id_productos DESC  "; 
 	}

 	else {
 		$consulta="SELECT * FROM productos WHERE nombre_0 LIKE '%$codigo_ped%'  ORDER BY id_productos DESC   LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM productos WHERE nombre_0 LIKE '%$codigo_ped%'   ORDER BY id_productos DESC  "; 
 	}

 	

 }

 else

 {

 	if ($nivel_usuario=="4") {
 		
 		$consulta="SELECT * FROM productos  ORDER BY id_productos DESC LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM productos    ORDER BY id_productos DESC  "; 

 	}

 	else {

 		$consulta="SELECT * FROM productos WHERE id_usuario ='$id_usuario' ORDER BY id_productos DESC LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM productos WHERE id_usuario ='$id_usuario'  ORDER BY id_productos DESC  "; 
 	}

 

 }


	 
 


		

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto querys");

		$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto querys");

		$num_regs =  $ejecutar_consulta2->num_rows;


 
			if ($num_regs==0)

			{
				echo "<p class='subtitulo_central'>NO AVAILABLE RESULTS</p>";
			}


				else

					{


								?>


								<table>

										<thead>
												<tr>

													
													
													<th style="width:40%">

		<?php if ($idioma == "es") { ?> Servicio:<?php } else if ($idioma == "en"){ ?> Service <?php } ?>
													</th>
													 

													 
													<th style="width:20%">
		<?php if ($idioma == "es") { ?> Acción:<?php } else if ($idioma == "en"){ ?> Action <?php } ?>
											
													</th>
													 


												</tr>

										</thead>


										<tbody>


												<?php


												

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{

													$id_pr =  $registro["id_productos"] ;

													?>
														 

													<tr>
														<td>



<?php   if ($idioma == "es") {   echo  utf8_encode($registro["nombre_1"]) ."<br><br><center><a target='_blank' href='index.php?menu=servicios&id=".$id_pr."'>LINK DE PUBLICACIÓN</a></center>"; } ?>


<?php   if ($idioma == "en") { echo  utf8_encode($registro["nombre_0"])."<br><br><center><a target='_blank' href='index.php?menu=servicios&id=".$id_pr."'>View Product</a></center>"; } ?><br><hr><br>


					<?php if ($idioma == "es") { ?>Precio de Cita a domicilio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } else if ($idioma == "en"){ ?>Appointment price at home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
	  <?php echo utf8_encode($registro["precio_producto_domicilio"]) ?>&nbsp;USD<br><br>


	  <?php if ($idioma == "es") { ?>Precio de Cita en establecimiento&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } else if ($idioma == "en"){ ?>Appointment price in establishment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?><?php echo utf8_encode($registro["precio_producto"]) ?> &nbsp;USD<br><br>

									

														</td>

														 

														 

														<td><center><a href="javascript:confirmation('php/funciones/eliminar_producto.php?id=<?php echo $registro["id_productos"] ?>')">
								<?php if ($idioma == "es") { ?>Eliminar<?php } else if ($idioma == "en"){ ?> Delete<?php } ?>
								</a>  &nbsp;&nbsp;&nbsp;
														<a href="tu_perfil.php?op=modificar_servicio&id=<?php echo $registro["id_productos"] ?>"> <?php if ($idioma == "es") { ?>Modificar<?php } else if ($idioma == "en"){ ?> Modify<?php } ?></a></td>

														 


 
														 
														
													



													</tr>


													<?php

												}




												?>



										</tbody>



								</table>


						 <?php


$total_articulos = $num_regs;

	$paginacion -> records($total_articulos);

	$paginacion-> records_per_page($resultados);

	echo "<br><br>";

	$paginacion->render();

	echo "<br><br><br>";
				

							}

// Sigue funcion de paginacion que viene del archivo articulos.php

 
						?>

</section>