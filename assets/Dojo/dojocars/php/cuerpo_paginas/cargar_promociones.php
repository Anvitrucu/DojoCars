
	 
<center>
	<?php if ($idioma == "es") { ?><h1>Modulo de Carga de Promociones</h1><?php } else if ($idioma == "en"){ ?><h1>Promotions Load Module</h1><?php } ?>


<?php 

include("php/funciones/mensaje.php");

?>
</center>
 
		<?php 

		 


	$busqueda_1="SELECT * FROM promociones WHERE id_promociones='1'";

	$ejecutar_consulta_1 = $conexion->query($busqueda_1);
 	$registro_1 = $ejecutar_consulta_1->fetch_assoc();  



	$busqueda_2="SELECT * FROM promociones WHERE id_promociones='2'";

	$ejecutar_consulta_2 = $conexion->query($busqueda_2);

	$registro_2 = $ejecutar_consulta_2->fetch_assoc();



	$busqueda_3="SELECT * FROM promociones WHERE id_promociones='3'";

	$ejecutar_consulta_3 = $conexion->query($busqueda_3);

	$registro_3 = $ejecutar_consulta_3->fetch_assoc();



	$busqueda_4="SELECT * FROM promociones WHERE id_promociones='4'";

	$ejecutar_consulta_4 = $conexion->query($busqueda_4);

	$registro_4 = $ejecutar_consulta_4->fetch_assoc();







	$busqueda_5="SELECT * FROM promociones WHERE id_promociones='5'";

	$ejecutar_consulta_5 = $conexion->query($busqueda_5);

	$registro_5 = $ejecutar_consulta_5->fetch_assoc();



	$busqueda_6="SELECT * FROM promociones WHERE id_promociones='6'";

	$ejecutar_consulta_6 = $conexion->query($busqueda_6);

	$registro_6 = $ejecutar_consulta_6->fetch_assoc();



	$busqueda_7="SELECT * FROM promociones WHERE id_promociones='7'";

	$ejecutar_busqueda_7 = $conexion->query($busqueda_7);

	$registro_7 = $ejecutar_busqueda_7->fetch_assoc();



	$busqueda_8="SELECT * FROM promociones WHERE id_promociones='8'";

	$ejecutar_consulta_8 = $conexion->query($busqueda_8);

	$registro_8= $ejecutar_consulta_8->fetch_assoc();


 
	 ?>



		
	<br><hr><hr><hr><br><br>

 
 
 


	<table style="width: 100%">

										<thead>
												<tr>

													
													
													<th class="titulos_perfil"><?php if ($idioma == "es") { ?>NOMBRE<?php } elseif ($idioma == "en") { ?>NAME<?php } ?></th>
													 
													<th class="titulos_perfil"><?php if ($idioma == "es") { ?>ARCHIVO<?php } elseif ($idioma == "en") { ?>ARCHIVE<?php } ?></th>

													<th class="titulos_perfil"><?php if ($idioma == "es") { ?>MODIFICAR<?php } elseif ($idioma == "en") { ?>MODIFY<?php } ?></th>


												</tr>

										</thead>


										<tbody>


											 

													<tr>
														<td style="width:30%"> 

															<center>SLIDER 1 (ES)</center>

														</td>
 
														
														<td style="width:30%"> 


															<center><a target="_blank" href="img/promo/<?php echo $registro_1["img"] ?>"><?php if ($idioma == "es") { ?>ENLACE DEL ARCHIVO<?php } elseif ($idioma == "en") { ?>FILE LINK<?php } ?></a></center>
															
															

														</td>


														<td style="width:30%"> 

																<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_slider.php" method="POST" enctype="multipart/form-data" style="font-family: 'Raleway'; font-size: 1.2rem;">
 
																 <input type="file" name="imagen" required><br><br> 


																<input type="hidden" name="id" value="1">
 

																<center><input type="submit" id="boton_generico" value="<?php if ($idioma == "es") { ?>Cargar<?php } elseif ($idioma == "en") { ?>Load<?php } ?>"><br>  </center> 

															</form>

														</td>

													</tr>





													<tr>
														<td style="width:30%"> 

															<center>SLIDER 2 (ES)</center>

														</td>
 
														
														<td style="width:30%"> 
															
															<center><a target="_blank" href="img/promo/<?php echo $registro_2["img"] ?>"><?php if ($idioma == "es") { ?>ENLACE DEL ARCHIVO<?php } elseif ($idioma == "en") { ?>FILE LINK<?php } ?></a></center>
															

														</td>


														<td style="width:30%"> 

																<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_slider.php" method="POST" enctype="multipart/form-data" style="font-family: 'Raleway'; font-size: 1.2rem;">
 
																<br><input type="file" name="imagen" required><br><br> 

																<input type="hidden" name="id" value="2">
 

																<center><input type="submit" id="boton_generico" value="<?php if ($idioma == "es") { ?>Cargar<?php } elseif ($idioma == "en") { ?>Load<?php } ?>"><br>  </center> 

															</form>

														</td>

													</tr>



													<tr>
														<td style="width:30%"> 

															<center>SLIDER 3 (ES)</center>

														</td>
 
														
														<td style="width:30%"> 
															
															<center><a target="_blank" href="img/promo/<?php echo $registro_3["img"] ?>"><?php if ($idioma == "es") { ?>ENLACE DEL ARCHIVO<?php } elseif ($idioma == "en") { ?>FILE LINK<?php } ?></a></center>

														</td>


														<td style="width:30%"> 

																<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_slider.php" method="POST" enctype="multipart/form-data" style="font-family: 'Raleway'; font-size: 1.2rem;">
 
																<br><input type="file" name="imagen" required><br><br> 

																<input type="hidden" name="id" value="3">
 

																<center><input type="submit" id="boton_generico" value="<?php if ($idioma == "es") { ?>Cargar<?php } elseif ($idioma == "en") { ?>Load<?php } ?>"><br>  </center> 

															</form>

														</td>

													</tr>



													<tr>
														<td style="width:30%"> 

															<center>SLIDER 4 (ES)</center>

														</td>
 
														
														<td style="width:30%"> 
															
															<center><a target="_blank" href="img/promo/<?php echo $registro_4["img"] ?>"><?php if ($idioma == "es") { ?>ENLACE DEL ARCHIVO<?php } elseif ($idioma == "en") { ?>FILE LINK<?php } ?></a></center>

														</td>


														<td style="width:30%"> 

																<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_slider.php" method="POST" enctype="multipart/form-data" style="font-family: 'Raleway'; font-size: 1.2rem;">
 
																<br><input type="file" name="imagen" required><br><br> 

																<input type="hidden" name="id" value="4">
 

																<center><input type="submit" id="boton_generico" value="<?php if ($idioma == "es") { ?>Cargar<?php } elseif ($idioma == "en") { ?>Load<?php } ?>"><br> </center> 

															</form>

														</td>

													</tr>





													<tr>
														<td style="width:30%; background: #000">  </td>
 
														<td style="width:30%; background: #000"> </td>


														<td style="width:30%; background: #000"> </td>

													</tr>




 

 
 


									   </tbody>

	</table>

 <br><br>
 