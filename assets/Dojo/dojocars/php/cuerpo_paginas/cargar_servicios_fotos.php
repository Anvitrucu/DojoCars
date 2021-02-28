<?php 

	$id_producto = $_GET["id"];

	$vendedor = $_GET["vendedor"];

	 

		$busqueda_pro="SELECT * FROM productos WHERE id_productos='$id_producto' ";

		$ejecutar_consulta_pro = $conexion->query($busqueda_pro);

		$arreglo_pro = $ejecutar_consulta_pro->fetch_assoc();

		$foto_1 = $arreglo_pro['foto_1'];
		$foto_2 = $arreglo_pro['foto_2'];
		$foto_3 = $arreglo_pro['foto_3'];
		$foto_4 = $arreglo_pro['foto_4'];


		 

?>


<section id="Cuerpo_perfil">

<center>
	
	<?php if ($idioma == "es") { ?><h1>Panel de Carga de Imagenes de Producto</h1><?php } else if ($idioma == "en"){ ?><h1>Product Image Upload Panel</h1><?php } ?>

</center>

		 

<div id="texto_perfil">	

		  
		  
 
					<div style="display:inline-block; width:40%;  float:left; margin-left:10%">
	
						<form id="form_perfil" name="form_perfil" action="php/funciones/subir_cargar_servicio_fotos.php" method="POST" enctype="multipart/form-data">
 
										<br><br><label for="foto_producto">

										<?php if ($idioma == "es") { ?> Imagen Principal del Producto:<?php } else if ($idioma == "en"){ ?>Main Product Image: <?php } ?>

										</label><br><br>
										<input type="file"     name="foto_producto" title="Sube tu foto"/> <br><br><br><br>
										<input type="hidden" id="n_foto" name="n_foto" value="1"/> 


										<input type="hidden" id="id_producto" name="id_producto" value="<?php echo $id_producto ?>"/> 
										<input type="hidden" id="vendedor" name="vendedor" value="<?php echo $vendedor ?>"/> 
										<input type="submit"  id="boton_formulario" value="<?php if ($idioma == "es") { ?> Cargar<?php } else if ($idioma == "en"){ ?>Load<?php } ?>"/> 
 
						</form>

					</div>



					<div style="display:inline-block; width:40%;   float:left">
						<img src="


						<?php

						 


						if (is_null($foto_1))

							{echo "img/foto_producto/articulo.jpg";} 

							else

							{  echo "img/foto_producto/".$foto_1 ; } ?>

						" width="70%" style="margin-left:5%">

					</div>
		<div style="  width: 100%; clear:both">
		</div>

		 

		<br><hr><br> 







					<div style="display:inline-block; width:40%;  float:left; margin-left:10%">



							<form id="form_perfil" name="form_perfil" action="php/funciones/subir_cargar_servicio_fotos.php" method="POST" enctype="multipart/form-data">


									<div>
											<label for="foto_producto_2">

											<?php if ($idioma == "es") { ?> Imagen 2:<?php } else if ($idioma == "en"){ ?> Image 2: <?php } ?> 

											</label><br><br>
											<input type="file"   name="foto_producto" title="Sube tu foto"/> <br><br><br><br>
											<input type="hidden" id="n_foto" name="n_foto" value="2"/> 
											<input type="hidden" id="id_producto" name="id_producto" value="<?php echo $id_producto ?>"/> 
											<input type="hidden" id="vendedor" name="vendedor" value="<?php echo $vendedor ?>"/> 
											<input type="submit"  id="boton_formulario" value="<?php if ($idioma == "es") { ?> Cargar<?php } else if ($idioma == "en"){ ?>Load<?php } ?>"/> 
											
									</div>


							</form>

					</div>


					<div style="display:inline-block; width:40%;   float:left">

						<img src="

						<?php


						if (is_null($foto_2))

							{echo "img/foto_producto/articulo.jpg";} 

							else

							{  echo "img/foto_producto/".$foto_2 ; } ?>

						" width="70%" style="margin-left:5%">

					</div>
						<div style="  width: 100%; clear:both">
					</div>


<br><hr><br> 






		<div style="display:inline-block; width:40%;  float:left; margin-left:10%">


					<form id="form_perfil" name="form_perfil" action="php/funciones/subir_cargar_servicio_fotos.php" method="POST" enctype="multipart/form-data">


							<div>
									<label for="foto_producto_3">
									<?php if ($idioma == "es") { ?> Imagen 3:<?php } else if ($idioma == "en"){ ?> Image 3: <?php } ?> 
									</label><br><br>
									<input type="file"  name="foto_producto" title="Sube tu foto"/> <br><br><br>
									<input type="hidden" id="id_producto" name="id_producto" value="<?php echo $id_producto ?>"/> 
									<input type="hidden" id="vendedor" name="vendedor" value="<?php echo $vendedor ?>"/> 
									<input type="hidden" id="n_foto" name="n_foto" value="3"/> <br>
									<input type="submit"  id="boton_formulario" value="<?php if ($idioma == "es") { ?> Cargar<?php } else if ($idioma == "en"){ ?>Load<?php } ?>"/> 
									
							</div>

					</form>

		 </div>



		 <div style="display:inline-block; width:40%;   float:left">

									<img src="<?php


									if (is_null($foto_3))

										{echo "img/foto_producto/articulo.jpg";} 

										else

										{  echo "img/foto_producto/".$foto_3 ; } ?>

									" width="70%" style="margin-left:5%">

								</div>
									<div style="  width: 100%; clear:both">
		 </div>


			<br><hr><br> 





		<div style="display:inline-block; width:40%;  float:left; margin-left:10%">


					<form id="form_perfil" name="form_perfil" action="php/funciones/subir_cargar_servicio_fotos.php" method="POST" enctype="multipart/form-data">

							<div>
									<label for="foto_producto_4">
									<?php if ($idioma == "es") { ?> Imagen 4:<?php } else if ($idioma == "en"){ ?> Image 4: <?php } ?> 
									</label><br><br>
									<input type="file"  name="foto_producto" title="Sube tu foto"/> <br><br><br>
									<input type="hidden" id="id_producto" name="id_producto" value="<?php echo $id_producto ?>"/> 
									<input type="hidden" id="vendedor" name="vendedor" value="<?php echo $vendedor ?>"/> 
									<input type="hidden" id="n_foto" name="n_foto" value="4"/> 
									<input type="submit"  id="boton_formulario" value="<?php if ($idioma == "es") { ?> Cargar<?php } else if ($idioma == "en"){ ?>Load<?php } ?>"/> 
									
							</div>

					</form>

		</div>


		 <div style="display:inline-block; width:40%;   float:left">

									<img src="



									<?php


									if (is_null($foto_4))

										{echo "img/foto_producto/articulo.jpg";} 

										else

										{  echo "img/foto_producto/".$foto_4 ; } ?>


									" width="70%" style="margin-left:5%">

		</div>


		<div style="  width: 100%; clear:both"></div>


			<br><hr><br>

</div>  
 

<form id="form_perfil" name="form_perfil" action="tu_perfil.php?op=cargar_servicios_2&id=<?php echo $id_producto ?>" method="POST" enctype="multipart/form-data">


				<div>
				
						 <input type="hidden" id="id" name="id" value="<?php echo $id_producto ?>"/> 
						<p style="text-align:center"><input type="submit"  id="boton_formulario" value="<?php if ($idioma == "es") { ?> Continuar<?php } else if ($idioma == "en"){ ?> Next <?php } ?>"/> </p>

					
				
				</div>

		</form>

</section>