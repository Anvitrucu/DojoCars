<section id="Cuerpo_perfil"><br><br><center>

<a style="font-size:1.5rem" id="boton_generico" href="index.php?menu=portafolio&user=<?php echo $usuario ?>">VISTA PREVIA</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<a style="font-size:1.5rem" id="boton_generico" href="tu_perfil.php?op=modificar_alcance">MODIFICAR ALCANCE</a>


<br><br><br><hr><br><br>

 <p class='titulo'> DISEÑA TU PORTAFOLIO ARTISTICO<br><br></p><p class='subtitulo_central'>Recuerda que entre más datos incluyas, mas confianza generarás en tus clientes </p>  <BR><BR>

 
	 	



<div id ="portada_de_perfil"  style=" 

					<?php if ($arreglo['foto_portada']!=NULL)
					{
					 
						?>
						background:url('img/perfil/<?php echo md5($usuario).'/'.$arreglo['foto_portada'] ?> ')  no-repeat; background-size: 100%
						<?php 

				    }

				    else

				    {
				    	?>
				    	background-color:#5E5E5E;
				    	<?php
				    }

					?>  " >
					 

		 				<br>  <br> 

		 		 
						
			<div class="circular_shadow_portafolio" style=" float:left; background: url(<?php echo 'img/perfil/'.md5($usuario).'/'.$arreglo['foto_perfil'] ?>); background-size: 100% 100%;  "> </div>  <br> 

			 

									

			</p>				


			</div>










		 <br><br>

		<form id="form_perfil" name="form_perfil" action="php/funciones/subir_foto_portada.php?usuario=<?php echo $usuario ?>" method="POST" enctype="multipart/form-data">

		 <p class='titulo_central'> FOTO DE PORTADA (Dimensiones de 850px x 250px)<BR><br>
		<p class='subtitulo_central'>Para cargar tu foto de perfil has clic <a href="http://www.iserns.com/tu_perfil.php?op=perfil_datos">AQUI</a> </p>  <BR><br><br>

		<input  type="file" id="foto_portada" size="80%"   name="foto_portada"   />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


		<input  type="submit" id='boton_formulario' value="cargar foto de portada"  /><br><br> <br> <HR><HR> 

		

		</form>



		<form id="form_perfil" name="form_perfil" action="php/funciones/subir_perfil_artistico.php" method="POST" enctype="multipart/form-data">

		<input  type="hidden" id="foto_oculta"  name="foto_oculta" value= "<?php echo $foto_portada  ; ?>"   />

		

			 

			<div id="texto_perfil">

		 

		
	






		<p class='subtitulo_central'>TELEFONO: </p> <br>
		<input  type="text" id="telefono" class="cambio" maxlength="45" size="80%" name="telefono" value= "<?php echo $arreglo["telefono"]; ?>"   /><br><br>

		 


		<p class='subtitulo_central'>SITIO WEB O BLOG </p> <BR>
		<input  type="text" id="pagina_web" size="80%" class="cambio" maxlength="60" name="pagina_web" value= "<?php echo utf8_encode($arreglo["pagina_web"]); ?>"   /><br><br>




		<p class='subtitulo_central'>DIRECCIÓN </p> <BR>
		<input  type="text" id="direccion" size="80%" class="cambio" maxlength="120" name="direccion" value= "<?php echo utf8_encode($arreglo["direccion"]); ?>"   /><br><br>


 
		<hr><hr><br><br><br>

		<p class='subtitulo_central'>REDES SOCIALES </p> <BR><br>
		

		<label for "red_twitter">Cuenta Twitter: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input  type="text" id="red_twitter" class="cambio" name="red_twitter" maxlength="60" value= "<?php echo utf8_encode($arreglo["red_twitter"]); ?>"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


		<label for "red_facebook">Cuenta Facebook: &nbsp;&nbsp;</label>
		<input  type="text" id="red_facebook" class="cambio" name="red_facebook" maxlength="60" value= "<?php echo utf8_encode($arreglo["red_facebook"]); ?>"/><br><br>


		<label for "red_instagram">Cuenta Instagram: &nbsp;&nbsp;</label>
		<input  type="text" id="red_instagram" class="cambio" name="red_instagram" maxlength="60" value= "<?php echo utf8_encode($arreglo["red_instagram"]); ?>"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<label for "red_youtube">Cuenta Youtube: &nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input  type="text" id="red_youtube" class="cambio" name="red_youtube" maxlength="60" value= "<?php echo utf8_encode($arreglo["red_youtube"]); ?>"/><br><br>


		<label for "red_printeres">Cuenta Pinterest:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input  type="text" id="red_printeres" class="cambio" name="red_printeres" maxlength="60" value= "<?php echo utf8_encode( $arreglo["red_printeres"]); ?>"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<label for "red_google">Cuenta Google +: &nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input  type="text" id="red_google" class="cambio" name="red_google" maxlength="60" value= "<?php echo utf8_encode($arreglo["red_google"]); ?>"/><br><br>

	 <br><br>

		 <p class='titulo'> DETALLES DE BIOGRAFIA </p><br> 


		 
		<CENTER><textarea cols="80" rows="10"  id="biografia" class="cambio" name="biografia" maxlength="800" /> <?php echo utf8_encode($arreglo["artista_bio"]); ?>  </textarea> </center><br><br>


		<div>
				<hr><hr><p class='titulo_central'><br> Agregar URL de imagen a tu descripción <b>(Ejemplo: http://iserns.com/img/LOGO.png)</b> : &nbsp;&nbsp;&nbsp;  <br><br></p> 
				<input type="text" id="descripcion_imagen" class="cambio" maxlength="120" size="100%" name="descripcion_imagen" placeholder="Dirección URL completa de tu imagen" value= "<?php echo utf8_encode(stripslashes($arreglo['descripcion_imagen']));?>" title="Tu nombre (Campo Requerido)" /><br><br><hr><br><br>
			</div>

		 

		

		
		

		</textarea><p class='titulo_central'><input type="submit" id='boton_formulario' value="Actualizar"><br> </p><br><br>

		</form>

		</div>
 

</section>