<center>
	
	<?php if ($idioma == "es") { ?><h1>Escribe el correo electronico del usuario a adjuntar</h1><?php } else if ($idioma == "en"){ ?><h1>Write the user's email to attach</h1><?php } ?>
 

<form id="form_perfil" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data">


<?php include("php/funciones/mensaje.php") ?>




	<input type="hidden" name="op" value="analista_cargar_suscriptores">

	<input   type="email" name="correo" style="width: 60%" placeholder="E-Mail"><br><br><br>

	<input type="submit" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Buscar<?php } elseif ($idioma == "en") { ?>Search<?php } ?>">

</form>

<?php 

if (isset($_GET["correo"])) {
	
	$correo =$_GET["correo"];

	$consulta2 ="SELECT * FROM usuario WHERE correo='$correo'";
 
	$ejecutar_consulta2 = $conexion->query($consulta2) or die ("No se ejecuto query1");

	$num_regs =  $ejecutar_consulta2->num_rows;

	if ($num_regs==0) {

		?>
		
		<h2>- <?php if ($idioma == "es") { ?>El usuario no esta cargado en el sistema<?php } elseif ($idioma == "en") { ?><?php } ?>-</h2><br><br>

		<h3><?php if ($idioma == "es") { ?>CARGAR USUARIO<?php } elseif ($idioma == "en") { ?><?php } ?></h3><br><br>

		<?php
	}

	else {

		?>
		<table style="width: 100%">

										<thead>
												<tr>

													
													
							<th style="width: 50%" class="titulos_perfil">
								<?php if ($idioma == "es") { ?>Informacion del Usuario<?php } else if ($idioma == "en"){ ?> User information<?php } ?>

							</th>
													 
							<th style="width: 50%" class="titulos_perfil">
							<?php if ($idioma == "es") { ?>Acción:<?php } else if ($idioma == "en"){ ?> Action:<?php } ?>
													
							</th>


												</tr>

										</thead>


										<tbody>


												<?php

												while ($registro = $ejecutar_consulta2->fetch_assoc())

												{

													?>

													<tr>
														 <td>

																<?php
 
																$usuario_nombre = $registro["usuario_nombre"];

																$correo = $registro["correo"];

																$id_cliente = $registro["id_usuario"];
																?>

			 													<?php if ($idioma == "es") { ?>Nombre del Usuario:<?php } elseif ($idioma == "en") { ?>User name:<?php } ?><?php echo utf8_encode($usuario_nombre); ?> <br><br>";

			 													<?php if ($idioma == "es") { ?>Email:<?php } elseif ($idioma == "en") { ?>Email:<?php } ?> <?php echo($correo) ?>;


																
 
														 </td>

 
														<td> 

															<center>

																<form id="form_perfil" name="form_perfil" action="php/funciones/anexar_cliente.php" method="GET" enctype="multipart/form-data">

																	<input type="hidden" name="id_cliente" value="<?php echo $id_cliente ?>">

																	<input type="hidden" name="id_analista" value="<?php echo $id_usuario ?>">

																	<input type="hidden" name="nombre_usuario" value="<?php echo $usuario_nombre ?>">

																	<select name="id_productos" required="">

																		<option value=""><?php if ($idioma == "es") { ?>Seleccione el servicio a asociar<?php } elseif ($idioma == "en") { ?><?php } ?>Select the service to be associated</option>

																	<?php 

																	$consulta3 ="SELECT * FROM productos WHERE cita_representante='$id_usuario'";
 
																	$ejecutar_consulta3 = $conexion->query($consulta3) or die ("No se ejecuto query1");

																	while ($registro3 = $ejecutar_consulta3->fetch_assoc())

																	{

																		?>


																		<option value="<?php echo utf8_encode( $registro3["id_productos"]) ?>"><?php echo utf8_encode( $registro3["nombre_0"]) ?></option>


																		<?php
																	}



																	?>

																	</select><br><br>

																	<input type="submit" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Agregar Usuario<?php } elseif ($idioma == "en") { ?>Add User<?php } ?>">

																</form>
 
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
	 
}


?>