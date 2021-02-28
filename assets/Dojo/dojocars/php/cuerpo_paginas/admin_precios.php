
	 
<center>
	 <h1><?php if ($idioma == "es") { ?>Modulo de Actualizacion de Precios en el Sistema<br> <b>(SE RECOMIENDA LA CARGA DE ARCHIVO PDF CON PRECIOS Y CONDICIONES Y SERÀN VISIBLES EN EL<BR> PIE DE PÀGINA Y AL INICIO DE LA "RESERVA DE CITA", UNA VEZ EL USUARIO ESTE INSCRITO)<?php } elseif ($idioma == "en") { ?>Module of Updating Prices in the System <br> <b> (THE CHARGE OF PDF FILE IS RECOMMENDED WITH PRICES AND CONDITIONS AND WILL BE VISIBLE ON THE <BR> FOOT OF PAGE AND AT THE START OF THE "RESERVATION OF APPOINTMENT", ONCE THE USER IS REGISTERED<?php } ?></b></h1> 


<?php 

include("php/funciones/mensaje.php");

?>
</center>
 
		<?php 

		 


	$busqueda_1="SELECT * FROM precios WHERE id_precios='1'";

	$ejecutar_consulta_1 = $conexion->query($busqueda_1);
 	$registro_1 = $ejecutar_consulta_1->fetch_assoc();  


 
 
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

															<center><?php if ($idioma == "es") { ?>Archivo con Listado de Precios Actualizados<?php } elseif ($idioma == "en") { ?>File with Updated Price List<?php } ?></center>

														</td>
 
														
														<td style="width:30%"> 


															<center><a target="_blank" href="img/precios/<?php echo $registro_1["archivo"] ?>"><?php if ($idioma == "es") { ?>ENLACE DEL ARCHIVO<?php } elseif ($idioma == "en") { ?>FILE LINK<?php } ?></a></center>
															
															

														</td>


														<td style="width:30%"> 

																<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_precios.php" method="POST" enctype="multipart/form-data" style="font-family: 'Raleway'; font-size: 1.2rem;">
 
																 <input type="file" name="archivo" required><br><br> 


																<input type="hidden" name="id" value="1">
 

																<center><input type="submit" id="boton_generico" value="<?php if ($idioma == "es") { ?>Cargar<?php } elseif ($idioma == "en") { ?>Load<?php } ?>"><br>  </center> 

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
 