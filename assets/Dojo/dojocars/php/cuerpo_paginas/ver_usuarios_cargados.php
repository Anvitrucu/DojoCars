<center>
	
	<?php if ($idioma == "es") { ?><h1>Usuarios Cargados Al Sistema</h1><?php } else if ($idioma == "en"){ ?><h1>Users Uploaded to System</h1><?php } ?>
</center>

<center>
	 

		<form id="form_perfil" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data">


		<input type="hidden" name="op" value="ver_usuarios_cargados">



		<div>
				<center> 

				<?php if ($idioma == "es") { ?>Buscar Usuario Por Nivel<?php } else if ($idioma == "en"){ ?>Search User by Level:<?php } ?><br><br>

				 
				<select name="nivel_usuario" required>

					<option value="">

					<?php if ($idioma == "es") { ?><p>Seleccione su Nivel</p><?php } else if ($idioma == "en"){ ?><p>Select Your Level</p><?php } ?>

					</option>

					<?php 

					if ($nivel_usuario==2) {
						
						?>

						<option value="2">

						<?php if ($idioma == "es") { ?><p>Manager</p><?php } else if ($idioma == "en"){ ?><p>Manager</p><?php } ?>

						</option>
					


					<option value="4">
						<?php if ($idioma == "es") { ?><p>Representante</p><?php } else if ($idioma == "en"){ ?><p>Representative</p><?php } ?>
					</option>

						<?php
					}

					?>
					 
					

					<option value="3">

					<?php if ($idioma == "es") { ?><p>Cliente</p><?php } else if ($idioma == "en"){ ?><p>Customer</p><?php } ?>

					</option>
					

				</select>
		</div>


 <br><br>

			<center>	<input type="submit" id='boton_formulario' value="

			<?php if ($idioma == "es") { ?>Buscar<?php } else if ($idioma == "en"){ ?>Search<?php } ?>

			"></center>


 
		</form>
<br><hr><hr><br>























		<?php 

		if (isset($_GET["nivel_usuario"]))

		{
			

			if ($nivel_usuario==4) {
				
				$nivel_usuario_comparar = $_GET["nivel_usuario"];



				$busqueda="SELECT * FROM usuario WHERE tipousuario_tipousuarioid='$nivel_usuario_comparar' AND  cargado_por='$id_usuario' ";
			}

			else {

				$nivel_usuario_comparar = $_GET["nivel_usuario"];

				$busqueda="SELECT * FROM usuario WHERE tipousuario_tipousuarioid='$nivel_usuario_comparar' ";

			}

			

			$ejecutar_consulta = $conexion->query($busqueda);
			

		?>

				<form id="form_perfil"   name="form_perfil" action="php/funciones/subir_modificar_firma.php" method="POST" enctype="multipart/form-data">

		<?php 

		}

		else

		{

			

			$nivel_manager ="2";

			$nivel_comprador ="3";

			$busqueda="SELECT * FROM usuario ORDER BY usuario_nombre WHERE tipousuario_tipousuarioid='$nivel_manager' OR tipousuario_tipousuarioid='$nivel_comprador'";

			$ejecutar_consulta = $conexion->query($busqueda);

		

		?>

				<form id="form_perfil"   name="form_perfil" action="php/funciones/subir_firma.php" method="POST" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">

		<?php 

		}










				$arreglo = $ejecutar_consulta->num_rows;

				if ($arreglo==0)

				{
					

					if ($idioma == "es") { echo "<p class='subtitulo_central'>No hay resultados disponibles</p>"; } else if ($idioma == "en"){echo "<p class='subtitulo_central'>No results available</p>";} 
				}




				else

					{


								?>


								<table style="width: 100%">

										<thead>
												<tr style="width: 50%">

													
													
													<th class="titulos_perfil">

								<?php if ($idioma == "es") { ?><p>Usuario:</p><?php } else if ($idioma == "en"){ ?><p>User:</p><?php } ?>

													</th>
													 
													<th class="titulos_perfil" style="width: 50%">
													
								<?php if ($idioma == "es") { ?><p>Accion:</p><?php } else if ($idioma == "en"){ ?><p>Action:</p><?php } ?>

													
													</th>


												</tr>

										</thead>


										<tbody>


												<?php

												while ($registro = $ejecutar_consulta->fetch_assoc())

												{

													?>

													<tr>
														<td style="width: 50%">

														<?php echo "Nombre: ".utf8_encode($registro["usuario_nombre"])."<br><br>";   ?> 

														<?php echo "Usuario: ".utf8_encode($registro["usuario"])."<br><br>";   ?> 

														<?php echo "Contraseña: ".utf8_encode($registro["contrasena"])."<br><br>";   ?> 


														<?php echo "Nivel: ";


														if ($registro["tipousuario_tipousuarioid"]==1)
														{
															echo "Administrador";
														}


														if ($registro["tipousuario_tipousuarioid"]==2)
														{
															echo "Editor";
														}


														if ($registro["tipousuario_tipousuarioid"]==3)
														{
															echo "Cliente";
														}


														if ($registro["tipousuario_tipousuarioid"]==4)
														{
															echo "Tecnico";
														}






														   ?> 

														</td>

														
 
														
														<td style="width: 50%"> 


															<?php 

															if ($nivel_usuario==4) {
																echo "<center>-Contacte a la administracion para gestionar los datos del usuario-</center>";
															}

															else {

																?>

																<center>

																	<a href="javascript:confirmation('php/funciones/eliminar_usuario.php?id=<?php echo $registro["id_usuario"] ?>')">

																	<?php if ($idioma == "es") { ?>Eliminar<?php } else if ($idioma == "en"){ ?>Delete<?php } ?></a>  &nbsp;&nbsp;&nbsp;



																	<a href="tu_perfil.php?op=gestionar_usuarios&id=<?php echo $registro["id_usuario"] ?>">

																	<?php if ($idioma == "es") { ?>Modificar<?php } else if ($idioma == "en"){ ?>Update<?php } ?></a>


																</center>

																<?php
															}

															?>

															
														</td>
													



													</tr>


													<?php

												}




												?>



										</tbody>



								</table>


								<?php



				

							}


		?>



