<a href="tu_perfil.php?op=analista_citas" id="boton_generico" style="font-size: 1rem">< Return</a>


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

<center>
	
	<?php if ($idioma == "es") { ?><h1>Pánel Productos Publicados</h1><?php } else if ($idioma == "en"){ ?><h1>Published Products Board</h1><?php } ?>

</center>
<BR>




<?php 

if (isset($_GET["mensaje"])) {
	if ($idioma == "es") { ?><h1 style="font-size: 1.1rem">Actualización Exitosa</h1><?php } else if ($idioma == "en"){ ?><h1 style="font-size: 1.1rem">Successfully updated</h1><?php }
}

?>




  <form id="form_perfil" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data">

	 <p class='titulo' style="font-size:1.3rem">
	 

	<?php if ($idioma == "es") { ?>Buscar por Nombre<?php } else if ($idioma == "en"){ ?> Search by Name <?php } ?> &nbsp;&nbsp;&nbsp; 
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<input type="text" required placeholder="<?php if ($idioma == "es") { ?>Nombre Producto:<?php } else if ($idioma == "en"){ ?> Product Name: <?php } ?> &nbsp;&nbsp;&nbsp; " name="codigo_ped" size="50%"><br><br></p>

	<input type="hidden" name="op" value="servicios_cargados">

	<input type="hidden" name="buscador" value="SI">

														 


	<center><input style="font-size:1.1rem" type="submit" value="<?php if ($idioma == "es") { ?>Buscar<?php } else if ($idioma == "en"){ ?>Search<?php } ?>" id="boton_generico"></center><BR><BR>

 






		<?php 

		include ("php/funciones/comprobar_usuario.php");





 if (isset($_GET["buscador"]))
 {

 	$codigo_ped = $_GET["codigo_ped"];

 	$consulta="SELECT * FROM productos WHERE nombre_0 LIKE '%$codigo_ped%' AND cita_representante='$id_usuario'  ORDER BY id_productos DESC   LIMIT ".$inicio.", ". $resultados ;

	$consulta2="SELECT * FROM productos WHERE nombre_0 LIKE '%$codigo_ped%' AND cita_representante='$id_usuario'   ORDER BY id_productos DESC  "; 

 }

 else

 {

$consulta="SELECT * FROM productos WHERE cita_representante='$id_usuario' ORDER BY id_productos DESC LIMIT ".$inicio.", ". $resultados ;

		$consulta2="SELECT * FROM productos   WHERE cita_representante='$id_usuario'  ORDER BY id_productos DESC  ";  

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

		<?php if ($idioma == "es") { ?> Producto:<?php } else if ($idioma == "en"){ ?> Product <?php } ?>
													</th>
													 
													<th style="width:25%">
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



<?php   if ($idioma == "es") {   echo "PRODUCTO:  ".  $registro["nombre_1"] ."<br><br> <center><a target='_blank' href='index.php?menu=servicios&id=".$id_pr."'>LINK DE PUBLICACIÓN</a></center>"; } ?>


<?php   if ($idioma == "en") { echo "PRODUCT:  ". utf8_encode($registro["nombre_0"])."<br><br> <center><a target='_blank' href='index.php?menu=servicios&id=".$id_pr."'>View Product</a></center>"; } ?>


														

														</td>

														 
														 

														<td><center> 
														<a href="tu_perfil.php?op=analista_citas_detalles&id=<?php echo $registro["id_productos"] ?>"> <?php if ($idioma == "es") { ?>Proximas Citas<?php } else if ($idioma == "en"){ ?> Upcoming Appointments <?php } ?></a><br><br><hr><br>


														<a href="tu_perfil.php?op=analista_citas_historico&id=<?php echo $registro["id_productos"] ?>"> <?php if ($idioma == "es") { ?>Historico de Citas<?php } else if ($idioma == "en"){ ?> Dating History <?php } ?></a>


													</td>

														 


 
														 
														
													



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