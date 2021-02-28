<?php 


$busqueda_1="SELECT * FROM precios WHERE id_precios='1'";

$ejecutar_consulta_1 = $conexion->query($busqueda_1);

$registro_1 = $ejecutar_consulta_1->fetch_assoc();  


?>


<div id="footer_grande">



				 

								<footer style="width: 100%; width:100%;  clear:both;   margin-top:5%;  background-image:url('img/contactos.png');background-size: 2000px" >
								<br> 

								<center>

									<!--
 			 <img src="img/DOJO_CARS_LOGO.png" width="15%"><br>
               
			<p style="font-family:'Raleway'; color:#444444; font-size: 1.5rem; text-align: justify;">

				<?php if (!isset($_GET["op"])) {
					
					?>


					 



						<form id="form_perfil" name="form_perfil" action="php/funciones/enviar_correo_portada.php" method="GET" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">


						<input type="text" style="padding:1%; width: 50%" id="buscador"   maxlength="45" name="nombre" placeholder="<?php  if ($idioma=="es") { ?> Tu Nombre <?php } else if ($idioma=="en") { ?> Your Name <?php } ?>" ><br><br>


						<input type="text" id="password" style="padding:1%; width: 50%"   name="correo" maxlength="45" placeholder= "E-Mail"><br><br>


						<input type="text" id="password" style="padding:1%; width: 50%"  name="pais" maxlength="45" placeholder= "<?php  if ($idioma=="es") { ?> Telefono<?php } else if ($idioma=="en") { ?> Phone<?php } ?>"><br><br>


						<textarea rows="6"   name="mensaje" style="color:#FFF; width: 50% "></textarea><br>

						<?php  if ($idioma=="es") { ?> <center><input style="font-size: 1rem" type="submit" id="boton_generico" value="Enviar >" ><br><br> <?php } else if ($idioma=="en") { ?> <center><input style="font-size: 1rem" type="submit" id="boton_generico" value="Send >" ><br><br> <?php } ?>
						
						</center>

						<?php include("php/funciones/mensaje.php") ?>

						</center>
						</form> 

					<?php
				} ?>

               
				
-->
				<div style="width: 100%; background-color: rgba(0, 0, 0, 0.5);">			 
								 

								<div style="width:18%; margin-left:4%;font-family:'Raleway';color:#e5e5e5; float:left; display:inline-block "> 

								<a href="#" style="color:#E4E4E4; font-size:1.2rem; text-decoration:none"> <center>

								<br><br><p style=" font-size:1.5rem; font-family:'Oswald'"><?php  if ($idioma == "es") { ?> Sobre Nosotros <?php } else if ($idioma == "en") { ?> About Us <?php } else if ($idioma == "pt") { ?> Sobre nós <?php } else if ($idioma == "fr") { ?> À propos de nous <?php }  ?></p></center></a> <br><hr>
								<center>
								<br>
								 
								<p style="text-align: justify; font-size: 0.9rem; line-height: 2rem"><?php  if ($idioma == "es") { ?> Nuestra mision, es convertirnos en la solucion automotriz que necesitas, acercandote a los mejores proveedores del mercado. Somos un equipo multidiciplinario que trabaja dia y noche para ti.  <?php } 
         						 else if ($idioma == "en") { ?>Our mission is to become the automotive solution you need, approaching the best suppliers in the market. We are a multidisciplinary team that works day and night for you.<?php }  ?></p>
								<br>
								</div>

								 



								<div style="width:18%; margin-left:4%;font-family:'Raleway';color:#e5e5e5; display:inline-block "> 

								<a href="#" style="color:#E4E4E4; font-size:1.2rem; text-decoration:none"> <center><br><br><p style=" font-size:1.5rem; font-family:'Oswald'"><?php  if ($idioma == "es") { ?> Multimedia <?php } else if ($idioma == "en") { ?> Multimedia <?php } else if ($idioma == "pt") { ?> Multimedia<?php } else if ($idioma == "fr") { ?> Multimedia <?php }  ?></p></center></a> <br><hr><br><br>

								<p style="text-align:justify">

								<center><iframe width="100%" frameborder="0" style="border:0" src="https://www.youtube.com/embed/gBUFCiWRGT0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

														 
 
								</center>

								</div>




								 
								<div style="width:18%; margin-left:4%;font-family:'Raleway';color:#e5e5e5; float:left; display:inline-block "> 

										<a href="#" style="color:#E4E4E4; font-size:1.2rem; text-decoration:none"> <center><br><br><p style=" font-size:1.5rem; font-family:'Oswald'"><?php  if ($idioma == "es") { ?> Redes Sociales <?php } else if ($idioma == "en") { ?> Social Media <?php } else if ($idioma == "fr") { ?>Redes sociais <?php } else if ($idioma == "pt") { ?> Redes sociais <?php } ?> </center></a> <br><hr><br>  

														<center>
							 					 
							 					</p>
							​
												 
													</center>

										<p style="text-align:justify">

										<center>

						<a target="_blank" href="https://www.facebook.com/pg/Dojocars-729742820697115/posts/"><img src="img/face.png"></a>
						&nbsp;&nbsp;&nbsp;
                        <a target="_blank" href="https://www.instagram.com/dojocars/?hl=es"><img src="img/insta.png"></a>
                         

									
										 
										</p>
 
								</div>




								<div style="width:18%; margin-left:4%;font-family:'Raleway';color:#e5e5e5;float:left; display:inline-block "> 


								<a href="#" style="color:#E4E4E4; font-size:1.2rem; text-decoration:none">  <center><br><br><p style=" font-size:1.5rem; font-family:'Oswald'"><?php  if ($idioma == "es") { ?> Promociones <?php } else if ($idioma == "en") { ?> Promotions <?php } else if ($idioma == "pt") { ?> Promoções<?php } else if ($idioma == "fr") { ?> Promotions <?php }  ?></center></a> <br><hr><br>

								<a style="color: #fff" href="http://ophyra.com/index.php?menu=paquetes_Promocionales"><p style="text-align: justify; font-size: 0.9rem; line-height: 2rem"><?php  if ($idioma == "es") { ?> Conoce aquí las promociones que Ophyra Marketing Group tiene para usted.<?php } 
								else if ($idioma == "en") { ?>Know here the promotions that Ophyra Marketing Group has for you. <?php }  else if ($idioma == "fr") { ?> Connaissez ici les promotions qu'Ophyra Marketing Group a pour vous. <?php }   else if ($idioma == "pt") { ?>Saiba aqui as promoções que Ophyra Marketing Group tem para você.<?php } ?></p></a>

								</div>
								 

								  
								 <br><br> <br><br> <br> 


								<p>
								 <br> 

</div>	

								</footer>

								<div style="background:#000; width:100%"><br><br>

								<p style="color:white; font-size:0.9rem; font-family:Raleway; text-align:center"> DISEÑADO POR &nbsp;&nbsp;&nbsp;<a href="http://www.ophyra.com/" style="color:#E2E2E2"><img src="img/LOGO_blango_ophyra.png" style="width: 7%"></a> &nbsp;&nbsp;&nbsp;- &nbsp;&nbsp;&nbsp;TODOS LOS DERECHOS RESERVADOS 2018</center>


							 
							 


						
					<br><br>

					</div>
	

</div>


















































<div id="footer_pequeno" style="width: 100%; width:100%;  clear:both;   margin-top:5%; " >

 
			<footer style="width: 100%; width:100%;  clear:both;   margin-top:5%;background-image: url('img/contactos.png'); background-size: 2000px" >
								<br> 

								<center>
 		<!--	  
               
			<p style="font-family:'Raleway'; color:#444444; font-size: 1.5rem; text-align: justify;">

				<?php if (!isset($_GET["op"]) AND $_GET["menu"]!="solicitar_ingreso") {
					
					?>

						<form id="form_perfil" name="form_perfil" action="php/funciones/enviar_correo_portada.php" method="GET" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">


						<input type="text" style="padding:1%; width: 50%" id="buscador"   maxlength="45" name="nombre" placeholder="<?php  if ($idioma=="es") { ?> Tu Nombre <?php } else if ($idioma=="en") { ?> Your Name <?php } ?>" ><br><br>


						<input type="text" id="password" style="padding:1%; width: 50%"   name="correo" maxlength="45" placeholder= "E-Mail"><br><br>


						<input type="text" id="password" style="padding:1%; width: 50%"  name="pais" maxlength="45" placeholder= "<?php  if ($idioma=="es") { ?> Telefono<?php } else if ($idioma=="en") { ?> Phone<?php } ?>"><br><br>


						<textarea rows="6"   name="mensaje" style="color:#FFF; width: 50% " placeholder="Escriba su comentario"></textarea><br>

						<?php  if ($idioma=="es") { ?> <center><input style="font-size: 1rem" type="submit" id="boton_generico" value="Enviar >" ><br><br> <?php } else if ($idioma=="en") { ?> <center><input style="font-size: 1rem" type="submit" id="boton_generico" value="Send >" ><br><br> <?php } ?>
						
						</center>

						<?php include("php/funciones/mensaje.php") ?>

						</center>
						</form> 

					<?php
				} ?>

               
			-->	

				<div style="width:90%; margin-left: 5%; margin-right: 5%;   background-color: rgba(0, 0, 0, 0.5);">			 
								 

								<div style="width:100%;  font-family:'Raleway';color:#e5e5e5; float:left;   "> 

								<a href="#" style="color:#E4E4E4; font-size:1.2rem; text-decoration:none"> <center>

								<br><br><p style=" font-size:1.5rem; font-family:'Oswald'"><?php  if ($idioma == "es") { ?> Sobre Nosotros <?php } else if ($idioma == "en") { ?> About Us <?php } else if ($idioma == "pt") { ?> Sobre nós <?php } else if ($idioma == "fr") { ?> À propos de nous <?php }  ?></p></center></a> <br><hr>
								<center>
								<br>
								 
								<p style="text-align: justify; font-size: 0.9rem; line-height: 2rem"><?php  if ($idioma == "es") { ?> Nuestra mision, es convertirnos en la solucion automotriz que necesitas, acercandote a los mejores proveedores del mercado. Somos un equipo multidiciplinario que trabaja dia y noche para ti.  <?php } 
         						 else if ($idioma == "en") { ?>Our mission is to become the automotive solution you need, approaching the best suppliers in the market. We are a multidisciplinary team that works day and night for you.<?php }  ?></p>
								<br>
								</div>

								 
 

								 



								 
								<div style="width:90%; margin-left: 5%; margin-right: 5%;  f font-family:'Raleway';color:#e5e5e5; float:left;   "> 

										<a href="#" style="color:#E4E4E4; font-size:1.2rem; text-decoration:none"> <center><br><br><p style=" font-size:1.5rem; font-family:'Oswald'"><?php  if ($idioma == "es") { ?> Contacto <?php } else if ($idioma == "en") { ?> Contact Us <?php } else if ($idioma == "pt") { ?> Contact Us <?php } else if ($idioma == "fr") { ?> Contact Us <?php }  ?></center></a> <br><hr><br>  

														<center>
							 					 
							​
												<br><br>
													</center>

										<p style="text-align:justify">

										<center>


											<a target="_blank" href="https://www.facebook.com/pg/Dojocars-729742820697115/posts/"><img src="img/face.png"></a>
						&nbsp;&nbsp;&nbsp;
                        <a target="_blank" href="https://www.instagram.com/dojocars/?hl=es"><img src="img/insta.png"></a> 
 

										 
 
								</div>

 

								<div style="width:90%; margin-left: 5%; margin-right: 5%;  font-family:'Raleway';color:#e5e5e5; float:left;"> 

								<a href="#" style="color:#E4E4E4; font-size:1.2rem; text-decoration:none"> <center><br><br><p style=" font-size:1.5rem; font-family:'Oswald'"><?php  if ($idioma == "es") { ?> Multimedia <?php } else if ($idioma == "en") { ?> Multimedia <?php } else if ($idioma == "pt") { ?> Multimedia<?php } else if ($idioma == "fr") { ?> Multimedia <?php }  ?></p></center></a> <br><hr><br><br>

								<p style="text-align:justify">

								<center><iframe width="100%" frameborder="0" style="border:0" src="https://www.youtube.com/embed/gBUFCiWRGT0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

								</div>
								 

								  
								 <br><br> <br><br> <br><br>  <br><br> 


								<p>
								 <br> 

</div>	

								</footer>

								<div style="background:#000; width:100%"><br><br>

								<p style="color:white; font-size:1rem; font-family:Raleway; text-align:center"> DISEÑADO POR &nbsp;&nbsp;&nbsp;<a href="http://www.ophyra.com/" style="color:#E2E2E2"><img src="img/LOGO_blango_ophyra.png" style="width: 17%"></a> &nbsp;&nbsp;&nbsp;- &nbsp;&nbsp;&nbsp;TODOS LOS DERECHOS RESERVADOS 2018</center>


							 
							 


						
					<br><br>

					</div>
	
</div

 

	
 