<?php 


$user = $_GET["user"];

include("php/funciones/conexion.php");

	$consulta="SELECT * FROM usuario WHERE usuario ='$user'";

	$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");

	$arreglo = $ejecutar_consulta->fetch_assoc();



	$id_dueno_portafolio = $arreglo["id_usuario"];

	 

$cadena_buscada = "//";






echo "<div style='width:93%;margin-left:5%'>";
	?>
<br><br>

 


<div id ="portada_de_perfil"  style=" width:85%; margin-left:7.5%;

					<?php if ($arreglo['foto_portada']!=NULL)
					{
					 
						?>
						background:url('img/perfil/<?php echo md5($user).'/'.$arreglo['foto_portada'] ?> ') no-repeat; background-size: 100%;
						<?php 

				    }

				    else

				    {
				    	?>
				    	background-color:#5E5E5E;
				    	<?php
				    }

					?>  " >
					 

		 				<br>  
						
			<div class="circular_shadow_portafolio" style=" margin-left:45%; background: url(<?php echo 'img/perfil/'.md5($user).'/'.$arreglo['foto_perfil'] ?>); background-size: 100% 100%;  "> </div> <br> 
 
			<div class='precio_producto' width="100%" style="color:black; background-color:#403F3F; text-shadow:1px -1px 13px #ffffff;font-family:Raleway; text-align:center; color: white;  font-size:1.5rem;   text-align:center; padding:1%; opacity:.8  ">
			 Tienda Virtual de <?php echo utf8_encode($arreglo["usuario_nombre"]); ?>  
			 
 
		  <br></div></p>

			 

									

			</p>				


			</div>
 

	 
<br><br>
<div style="margin-top:2px;" id="datos_producto">

<img src='img/divisor.png' width='80%' style='margin-left:10%'>


<p class='titulo_central'>PAIS DE RESIDENCIA</p> 


<center><?php

			$pais_id = $arreglo["pais_Paisid"];

			$consulta = "SELECT * FROM pais WHERE Paisid='$pais_id'";

			$ejecutar = $conexion->query($consulta) or die ("no se ejecuto consulta");

			$arreglo1 = $ejecutar->fetch_assoc();

			echo utf8_encode($arreglo1 ['Pais_nombre']); 

	
		?><br></center><img src='img/divisor.png' width='80%' style='margin-left:10%'>	<br>


		<img src='img/divisor.png' width='80%' style='margin-left:10%'><p class='titulo_central'>TELEFONO</p>  



		<?php 

		if  ($arreglo['telefono']!=NULL || $arreglo['telefono']!=0)

		{

		?>
 
		<center><?php echo $arreglo["telefono"]; ?>  </center><img src='img/divisor.png' width='80%' style='margin-left:10%'>	<br> 

		<?php 

		}

		else

		{echo "<center>No hay resultados disponibles</center>";}?>


 
		 <img src='img/divisor.png' width='80%' style='margin-left:10%'>

		 <p class='titulo_central'>COMPATIR PORTAFOLIO</p>   
		
		 <center>

		<BR> <a href="whatsapp://send?text=<?php echo  "Conoce la tienda virtual de '".utf8_encode($arreglo["usuario_nombre"])."' >>> ".$url  ?>"  data-action="share/whatsapp/share"><img src="img/compartir_whatsapp.png" width="15%" margin-left="5%"> </a> 

		 </center>
<img src='img/divisor.png' width='80%' style='margin-left:10%'>
<br> 
		
</div> 


<div id="datos_producto" style="float:left; margin-top:2px;">

<center><img src='img/divisor.png' width='80%' style='margin-left:10%'><p class='titulo_central'>CORREO ELECTRONICO</p>   
		
		 <center><?php echo utf8_encode($arreglo["correo"]); ?></center><img src='img/divisor.png' width='80%' style='margin-left:10%'><br> 


		 <img src='img/divisor.png' width='80%' style='margin-left:10%'><p class='titulo_central'>PAGINA WEB</p>





		 <center><?php if  ($arreglo['pagina_web']!=NULL)
							 

							{
 
								$posicion_coincidencia = strpos($arreglo["pagina_web"], $cadena_buscada);
 
 
								if ($posicion_coincidencia === false) 
									{
										$pagina_web= $cadena_buscada.$arreglo['pagina_web'];
								    }

								else

									{
										
										$pagina_web = $arreglo['pagina_web'];
									}


								?>
 
							
							<?php 

							if  ($arreglo['pagina_web']!=NULL || $arreglo['pagina_web']!=0)

	 							{
	 								?>

	 								<a target="_blank" href="<?php echo utf8_encode($pagina_web); ?>"> <?php echo utf8_encode($arreglo["pagina_web"]); ?> </a> </center><img src='img/divisor.png' width='80%' style='margin-left:10%'><br> 


	 								<?php
	 							}

	 						



							}

							else if  ($arreglo['pagina_web']==NULL)

	 						{echo "<center>No hay resultados disponibles</center>";}?>




		
		  


		<img src='img/divisor.png' width='80%' style='margin-left:10%'><p class='titulo_central'>DIRECCIÓN</p><BR> 


		<?php echo  stripslashes(utf8_encode($arreglo["direccion"])); ?> </a>  <img src='img/divisor.png' width='80%' style='margin-left:10%'><br> 

		 <img src='img/divisor.png' width='80%' style='margin-left:10%'>
		 <p class='titulo_central'>CALIFICACION: <br></p><center>  <?php echo utf8_encode($arreglo["calificacion"]); ?> Puntos entre sus compras y ventas </center> <img src='img/divisor.png' width='80%' style='margin-left:10%'> <BR>
		
	<br>





</div>






<?php 

	$cadena_instagram = 'instagram.com';
	$cadena_facebook = 'facebook.com';
	$cadena_twitter = 'twitter.com';
	$cadena_pinterest = 'pinterest.com';
	$cadena_google = 'plus.google.com';
	$cadena_youtube = 'youtube.com';


	$cont = 0;


	$pais_Paisid = $arreglo["pais_Paisid"];
	$ciudad_id = $arreglo["ciudad_id"];
	$alcance = "";





		$consulta_alca1= "SELECT * FROM ciudad WHERE pais_Paisid='$pais_Paisid' ORDER BY ciudad_nombre ";

		$ejecutar_consulta_alca1= $conexion->query($consulta_alca1) or die ("No se ejecutó estados");

		 

		while ($registro_alca1 = $ejecutar_consulta_alca1->fetch_assoc())
		{			 

			$ciudad_id =  "*".$registro_alca1["ciudad_id"]."*";

			$posicion_coincidencia = strpos($arreglo["ciudad_id"], $ciudad_id);

			
 
 
								if ($posicion_coincidencia !== false) 
									{
										$alcance = $alcance.", ".utf8_encode($registro_alca1["ciudad_nombre"]);
								    }
  
		}

 
 
?>



<div id="monto_pago">

<br><br>

<img src='img/divisor.png' width='80%' style='margin-left:10%'><p class='titulo_central'> ALCANCE  </p><img src='img/divisor.png' width='80%' style='margin-left:10%'><BR><BR>   <br>
<p style="font-size:1.5rem; font-family:Raleway; margin-left:10%; margin-right:10%">
Puedes disfrutar de los servicios de <?php echo  utf8_encode($arreglo["usuario_nombre"])?> en <?php echo $alcance ?>
</p>
<BR><BR>
<img src='img/divisor.png' width='80%' style='margin-left:10%'><p class='titulo_central'> REDES SOCIALES  </p><img src='img/divisor.png' width='80%' style='margin-left:10%'><BR><BR> <center>

						<?php if  ($arreglo['red_facebook']!=NULL)
							 

							{
 
								$posicion_coincidencia = strpos($arreglo["red_facebook"], $cadena_buscada);

								$posicion_coincidencia_2 = strpos($arreglo["red_facebook"], $cadena_facebook);

								$cont = $cont+1;
 
 
								if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 !== false) )
									{
										$red_facebook= $cadena_buscada.$arreglo['red_facebook'];
								    }

								else if (($posicion_coincidencia !== false) && ($posicion_coincidencia_2 !== false) )

									{
										
										$red_facebook = $arreglo['red_facebook'];
									}

								else if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 === false) )

									{
										
										$red_facebook= $cadena_buscada.$cadena_facebook."/".$arreglo['red_facebook'];
									}



								?>


 
							<a target="_blank" href="<?php echo utf8_encode($red_facebook); ?>"><img width="13%" height="13%" style="margin-left:0px; overflow: visible;" src="img/perfil_facebook.jpg"></a>&nbsp;&nbsp;

							<?php 
							}?>










							<?php if  ($arreglo['red_google']!=NULL)
							 

							{
 
								$posicion_coincidencia = strpos($arreglo["red_google"], $cadena_buscada);

								$posicion_coincidencia_2 = strpos($arreglo["red_google"], $cadena_google);

								$cont = $cont+1;
 
 
								if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 !== false) )
									{
										$red_google= $cadena_buscada.$arreglo['red_google'];
								    }

								else if (($posicion_coincidencia !== false) && ($posicion_coincidencia_2 !== false) )

									{
										
										$red_google = $arreglo['red_google'];
									}

								else if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 === false) )

									{
										
										$red_google= $cadena_buscada.$cadena_google."/".$arreglo['red_google']."/posts";
									}


								?>
 
							<a target="_blank" href="<?php echo utf8_encode($red_google); ?>"><img width="13%" height="13%" style="margin-left:0px; overflow: visible;" src="img/perfil_google.jpg"></a>&nbsp;&nbsp;

							<?php 
							}?>










							<?php if  ($arreglo['red_instagram']!=NULL)
							 

							{
 
								$posicion_coincidencia = strpos($arreglo["red_instagram"], $cadena_buscada);

								$posicion_coincidencia_2 = strpos($arreglo["red_instagram"], $cadena_instagram);

								$cont = $cont+1;

								 
 
								if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 !== false) )
									{
										$red_instagram= $cadena_buscada.$arreglo['red_instagram'];
										 
								    }

								else if (($posicion_coincidencia !== false) && ($posicion_coincidencia_2 !== false) )

									{
										
										$red_instagram = $arreglo['red_instagram'];
										 
									}

								else if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 === false) )

									{
										
										$red_instagram = $cadena_buscada.$cadena_instagram."/".$arreglo['red_instagram'] ;
										 
									}

								 


								?>
 
							<a target="_blank" href="<?php echo utf8_encode($red_instagram); ?>"><img width="13%" height="13%" style="margin-left:0px; overflow: visible;" src="img/perfil_instagram.jpg"></a>&nbsp;&nbsp;

							<?php 
							}?>

		
		 
	
		


 


 							<?php if  ($arreglo['red_printeres']!=NULL)
							 

							{
 
								$posicion_coincidencia = strpos($arreglo["red_printeres"], $cadena_buscada);

								$posicion_coincidencia_2 = strpos($arreglo["red_printeres"], $cadena_pinterest);

								$cont = $cont+1;
 
 
								if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 !== false) )
									{
										$red_printeres= $cadena_buscada.$arreglo['red_printeres'];
								    }

								else if (($posicion_coincidencia !== false) && ($posicion_coincidencia_2 !== false) )

									{
										
										$red_printeres = $arreglo['red_printeres'];
									}


								else if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 === false) )

									{
										
										$red_printeres= $cadena_buscada.$cadena_pinterest."/".$arreglo['red_printeres'] ;
									}



								?>
 
							<a target="_blank" href="<?php echo utf8_encode($red_printeres); ?>"><img width="13%" height="13%" style="margin-left:0px; overflow: visible;" src="img/perfil_printeres.jpg"></a>&nbsp;&nbsp;

							<?php 
							}?>






 


							<?php if  ($arreglo['red_twitter']!=NULL)
							 

							{
								$posicion_coincidencia = strrpos ($arreglo["red_twitter"], $cadena_buscada);

								$posicion_coincidencia_2 = strrpos ($arreglo["red_twitter"], $cadena_twitter);

								$cont = $cont+1;
 
 
								if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 !== false) )
									{
										$red_twitter= "//".$arreglo['red_twitter'];

										 
								    }

								else if (($posicion_coincidencia !== false) && ($posicion_coincidencia_2 !== false) )


									{
										
										$red_twitter = $arreglo['red_twitter'];
										 
										 
									}


								else if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 === false) )

									{
										 
										$red_twitter= $cadena_buscada.$cadena_twitter."/".$arreglo['red_twitter'] ;
										 
									}


								?>
 
							<a target="_blank" href="<?php echo utf8_encode($red_twitter); ?>"><img width="13%" height="13%" style="margin-left:0px; overflow: visible;" src="img/perfil_twitter.jpg"></a>&nbsp;&nbsp;

							<?php 
							}?>




 






						 <?php if  ($arreglo['red_youtube']!=NULL)
							 

							{
 
								$posicion_coincidencia = strpos($arreglo["red_youtube"], $cadena_buscada);

								$posicion_coincidencia_2 = strpos($arreglo["red_youtube"], $cadena_youtube);

								$cont = $cont+1;
 
 
 
								if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 !== false) )
									{
										$red_youtube= $cadena_buscada.$arreglo['red_youtube'];
								    }

								else if (($posicion_coincidencia !== false) && ($posicion_coincidencia_2 !== false) )

									{
										
										$red_youtube = $arreglo['red_youtube'];
									}

								else if (($posicion_coincidencia === false) && ($posicion_coincidencia_2 === false) )

									{
										
										$red_youtube= $cadena_buscada.$cadena_youtube."/".$arreglo['red_youtube'] ;
									}



								?>
 
							<a target="_blank" href="<?php echo utf8_encode($red_youtube); ?>"><img width="13%" height="13%" style="margin-left:0px; overflow: visible;" src="img/perfil_youtube.jpg"></a>&nbsp;&nbsp;

							<?php 
							}?>



 
<?php 

		if ($cont  == 0 )

		{
			echo "<p class='subtitulo_central'>El artista aún no ha cargado redes al sistema</p>";
		}



?>

 

</center>
 
		
		 <br> <br><br>


<img src='img/divisor.png' width='80%' style='margin-left:10%'><p class='titulo_central'> BIOGRAFIA  </p><img src='img/divisor.png' width='80%' style='margin-left:10%'><BR><BR> 


	
	
	
<?php

 

$artista_bio = utf8_encode($arreglo["artista_bio"]);

$artista_bio =  stripslashes($artista_bio); 


$descripcion_imagen = utf8_encode($arreglo["descripcion_imagen"]);

$descripcion_imagen =  stripslashes($descripcion_imagen); 


?>		

		<?php 


		if ($artista_bio == NULL)

		{
			echo "<p class='subtitulo_central'>Aún no hay Biografia disponible</p>";
		}

		else

		{
			?>

			<p style="margin-left:10%; margin-right:10%">
<p style="font-size:1.5rem; font-family:Raleway; margin-left:10%; margin-right:10%">
			<?php

		echo nl2br($artista_bio)."<br><br>" ;

		}


		if ($arreglo["descripcion_imagen"]!= NULL)
		
		{

		echo "<img width='100%' src='".$descripcion_imagen."'><br><br>";
		
		} 
		
		
		 ?>

		</p> <br><br><br>


 



</div>








<img src='img/divisor.png' width='80%' style='margin-left:10%'><p class='titulo_central'> SERVICIOS DISPONIBLES </p><img src='img/divisor.png' width='80%' style='margin-left:10%'> <BR><BR> 


<?php


$consulta_buscador= "SELECT * FROM productos WHERE id_usuario='$id_dueno_portafolio' ";

		 

		$ejecutar_consulta_buscador = $conexion->query($consulta_buscador) or die ("No se ejecutó estados");

		$num_regs22 =  $ejecutar_consulta_buscador->num_rows;


		if ($num_regs22==0)

		{
			?>

			<p  class="titulo" style="font-size:1.2rem">No hay resultados para su búsqueda</p>

			<?php
		}



		while ($registro_buscador = $ejecutar_consulta_buscador->fetch_assoc())
		{

			?>

			<div id="articulos">

			<?php

				$id_productos = $registro_buscador["id_productos"];

				$id_usuario = $registro_buscador["id_usuario"];


				$busqueda_user="SELECT * FROM usuario WHERE  id_usuario='$id_dueno_portafolio'";

				$ejecutar_consulta_user = $conexion->query($busqueda_user);

				$arreglo_user = $ejecutar_consulta_user->fetch_assoc();
 
				$usuario_nombre = $arreglo_user['usuario_nombre'];

				$user = $arreglo_user['usuario'];





				echo "<div id='img_desc'><p class= 'nombre_autor' style='margin-top:30%;'><a href='index.php?menu=servicios&id=".$id_productos."'>".utf8_encode ($registro_buscador["nombre_producto"]) . "<br><br><b style='font-size:1.1rem'> Por: ".$usuario_nombre."<br></a>";
										 
										

										?></p>
					


										</div>
										<br><br>
										<img width="80%" src="img/




									<?php 

																								
										if ($registro_buscador["foto_1"] =="articulo.jpg")

										{echo "perfil/".$registro_buscador["foto_1"];} 

										else

										{echo "perfil/".md5($user)."/".$registro_buscador["foto_1"];}




									?>" 

			?>
			<br><br>

<?php echo "<b style='font-size:1.5rem'>".$registro_buscador["precio_producto"]; ?><br><br>

			</div>
<?php } ?>

</div>







		
		

			
 