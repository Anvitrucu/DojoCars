<br><br><br>


<!-- SIDEBAR TAMAÑO NORMAL  -->


<?php 

echo $nivel_usuario;

 if ($nivel_usuario==2)

		{

		?>


		<div id="sidebar_perfil">

		<div id='cssmenu'>

					<ul>
					 <p class="titulo"><?php  if ($idioma == "es") { echo "Bienvenido: "; } else if ($idioma == "en") { echo "Welcome: "; } ?><?php echo $nombre ?></p><br><br>
						
						<li><a href="tu_perfil.php?op=inicio" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "¿Que Hay de Nuevo?"; } else if ($idioma == "en") { echo "What's New?"; } ?> </span></a></li>


						<?php if ($idioma == "es") { ?><?php } elseif ($idioma == "es") { ?><?php } ?>


						<li><a href="tu_perfil.php?op=administrador_productos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_vender.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Cargar Servicios"; } else if ($idioma == "en") { echo "Upload Services"; } ?> </span></a></li>


						<li><a href="tu_perfil.php?op=admin_citas" style="padding:7%; font-family: Arial"><span><img src="img/inicio_vender.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Citas"; } else if ($idioma == "en") { echo "Dates"; } ?> </span></a></li>


						 <li><a href="tu_perfil.php?op=admin_galeria" style="padding:7%; font-family: Arial"><span><img src="img/inicio_tienda.png" width="10%" style="margin-right:5%; float:left"><?php if ($idioma == "es") { ?>Galeria<?php } elseif ($idioma == "en") { ?>Gallery<?php } ?></span></a></li>


						 <li><a href="tu_perfil.php?op=admin_precios" style="padding:7%; font-family: Arial"><span><img src="img/inicio_datos.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Lista de Precios"; } else if ($idioma == "en") { echo "Price list"; } ?></span></a></li>

						<li><a href="tu_perfil.php?op=admin_eventos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_paquete.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Cargar Eventos"; } else if ($idioma == "en") { echo "Upload Events"; } ?></span></a></li>





						<li><a href="tu_perfil.php?op=cargar_promociones" style="padding:7%; font-family: Arial"><span><img src="img/inicio_check.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Cargar Slider"; } else if ($idioma == "en") { echo "Load Slider"; } ?> </span></a></li>

						<li><a href="tu_perfil.php?op=menu_superior_foro" style="padding:7%; font-family: Arial"><span><img src="img/inicio_check.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Foro"; } else if ($idioma == "en") { echo "Fourom"; } ?> </span></a></li>


						  <li><a href="tu_perfil.php?op=gestionar_usuarios" style="padding:7%; font-family: Arial"><span><img src="img/inicio_datos.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Gestionar Usuarios"; } else if ($idioma == "en") { echo "Manage Users"; } ?></span></a></li>  




 

	
 
						 
						
						<li><a href="php/funciones/cerrar_sesion.php" style="padding:7%; font-family: Arial"><span><img src="img/inicio_salir.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Salir"; } else if ($idioma == "en") { echo "Exit"; } ?></span></a></li>

					</ul>

		</div>
		</div>


		<?php }
		
		
		else if ($nivel_usuario==3)
		
		{ 
		
		 ?>

		 <div id="sidebar_perfil">
		 <div id='cssmenu'>


		 			<ul>
					 <p class="titulo"><?php  if ($idioma == "es") { echo "Bienvenido"; } else if ($idioma == "en") { echo "Welcome"; } ?>: <?php echo $nombre ?></p><br><br>


						<li><a href="tu_perfil.php?op=user_citas" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Tus Citas"; } else if ($idioma == "en") { echo "Your Appointments"; } ?></span></a></li>


						<li><a href="tu_perfil.php?op=guia_contactos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Guia de Contactos"; } else if ($idioma == "en") { echo "Contacts Guide"; } ?></span></a></li>


						<li><a href="tu_perfil.php?op=preguntas_recividas" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Preguntas Procesadas"; } else if ($idioma == "en") { echo "Questions Processed"; } ?></span></a></li>


						<li><a href="tu_perfil.php?op=user_reembolsos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Reembolsos Pendientes"; } else if ($idioma == "en") { echo "Pending Reimbursements"; } ?></span></a></li>


						<li><a href="tu_perfil.php?op=user_pagos_pendientes" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Pagos Pendientes"; } else if ($idioma == "en") { echo "Pending payments"; } ?></span></a></li>


						<li><a href="tu_perfil.php?op=menu_superior_foro" style="padding:7%; font-family: Arial"><span><img src="img/inicio_check.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Foro"; } else if ($idioma == "en") { echo "Fourom"; } ?> </span></a></li>

 
						<li><a href="tu_perfil.php?op=datos_basicos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_datos.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Configuración"; } else if ($idioma == "en") { echo "Settings"; } ?></span></a></li>

				 
						
						
						<li><a href="php/funciones/cerrar_sesion.php" style="padding:7%; font-family: Arial"><span><img src="img/inicio_salir.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Salir"; } else if ($idioma == "en") { echo "Exit"; } ?></span></a></li>

					</ul>	
		</div>
		</div>
		<?php }







		else if ($nivel_usuario==4)
		
		{ 
		
		 ?>

		 <div id="sidebar_perfil">
		 <div id='cssmenu'>


		 			<ul>
					 <p class="titulo"><?php  if ($idioma == "es") { echo "Bienvenido"; } else if ($idioma == "en") { echo "Welcome"; } ?>: <?php echo $nombre ?></p><br><br>

					 <li><a href="tu_perfil.php?op=administrador_productos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_vender.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Cargar Servicios"; } else if ($idioma == "en") { echo "Upload Services"; } ?> </span></a></li>


						<li><a href="tu_perfil.php?op=analista_citas" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Tus Citas"; } else if ($idioma == "en") { echo "Your Appointments"; } ?></span></a></li>


						<li><a href="tu_perfil.php?op=guia_contactos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Guia de Contactos"; } else if ($idioma == "en") { echo "Contacts Guide"; } ?></span></a></li>


						<li><a href="tu_perfil.php?op=preguntas_recividas" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Preguntas Recibidas"; } else if ($idioma == "en") { echo "Questions Received"; } ?></span></a></li>


						<!--	<li><a href="tu_perfil.php?op=analista_suscriptores" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Suscriptores"; } else if ($idioma == "en") { echo "Subscribers"; } ?></span></a></li>-->

					<!--	<li><a href="tu_perfil.php?op=gestionar_usuarios" style="padding:7%; font-family: Arial"><span><img src="img/inicio_datos.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Gestionar Usuarios"; } else if ($idioma == "en") { echo "Manage Users"; } ?></span></a></li> -->

						 


				      	<!--	<li><a href="tu_perfil.php?op=analistas_pagos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_datos.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Solicitar Pagos"; } else if ($idioma == "en") { echo "Request Payments"; } ?></span></a></li> -->

				      		<li><a href="tu_perfil.php?op=menu_superior_foro" style="padding:7%; font-family: Arial"><span><img src="img/inicio_check.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Foro"; } else if ($idioma == "en") { echo "Fourom"; } ?> </span></a></li>


 
						<li><a href="tu_perfil.php?op=datos_basicos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_datos.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Configuración"; } else if ($idioma == "en") { echo "Settings"; } ?></span></a></li>

				 
						
						
						<li><a href="php/funciones/cerrar_sesion.php" style="padding:7%; font-family: Arial"><span><img src="img/inicio_salir.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Salir"; } else if ($idioma == "en") { echo "Exit"; } ?></span></a></li>

					</ul>	
		</div>
		</div>
		<?php }
		
		
		?>









































<!-- SIDEBAR TAMAÑO PEQUEÑO  -->
<?php 
	  if ($nivel_usuario==2)

		{

		?>


		<div id="sidebar_pequeno">

		<div id='cssmenu'>

					<ul>
					 <p class="titulo"><?php  if ($idioma == "es") { echo "Bienvenido"; } else if ($idioma == "en") { echo "Welcome"; } ?><?php echo $nombre ?></p><br><br>


					  <li class='active has-sub'><a href='#' style=" font-family: Arial"><span><img src="img/menu_icono.png"  width="10%" style="margin-right:10%">MENU</span></a>
					      <ul>
 
					          <li><a href="tu_perfil.php?op=inicio" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "¿Que Hay de Nuevo?"; } else if ($idioma == "en") { echo "What's New?"; } ?> </span></a></li>


						<li><a href="tu_perfil.php?op=admin_citas" style="padding:7%; font-family: Arial"><span><img src="img/inicio_vender.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Citas"; } else if ($idioma == "en") { echo "Dates"; } ?> </span></a></li>

						<li><a href="tu_perfil.php?op=admin_galeria" style="padding:7%; font-family: Arial"><span><img src="img/inicio_vender.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Galeria"; } else if ($idioma == "en") { echo "Galeria"; } ?> </span></a></li>
 

 
						 <li><a href="tu_perfil.php?op=gestionar_usuarios" style="padding:7%; font-family: Arial"><span><img src="img/inicio_datos.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Gestionar Usuarios"; } else if ($idioma == "en") { echo "Manage Users"; } ?></span></a></li>

						 <li><a href="tu_perfil.php?op=menu_superior_foro" style="padding:7%; font-family: Arial"><span><img src="img/inicio_check.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Foro"; } else if ($idioma == "en") { echo "Fourom"; } ?> </span></a></li>


 
  
						 
						
						<li><a href="php/funciones/cerrar_sesion.php" style="padding:7%; font-family: Arial"><span><img src="img/inicio_salir.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Salir"; } else if ($idioma == "en") { echo "Exit"; } ?></span></a></li>
					          
					      </ul>
					   </li>


					   
						
						

					</ul>

		</div>
		</div>


		<?php }
		
		
		else if ($nivel_usuario==3)
		
		{ 
		
		 ?>

		 <div id="sidebar_pequeno">
		 <div id='cssmenu'>


		 			<ul>
					 <p class="titulo"><?php  if ($idioma == "es") { echo "Bienvenido"; } else if ($idioma == "en") { echo "Welcome"; } ?>: <?php echo $nombre ?></p><br><br>

   
					<li class='active has-sub'><a href='#' style=" font-family: Arial"><span><img src="img/menu_icono.png"  width="10%" style="margin-right:10%">MENU</span></a>
					      <ul>

					      	<li><a href="tu_perfil.php?op=user_citas" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Tus Citas"; } else if ($idioma == "en") { echo "Tus Citas"; } ?></span></a></li>


					      	<li><a href="tu_perfil.php?op=guia_contactos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Guia de Contactos"; } else if ($idioma == "en") { echo "Contacts Guide"; } ?></span></a></li>

					      	<li><a href="tu_perfil.php?op=preguntas_recividas" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Preguntas Procesadas"; } else if ($idioma == "en") { echo "Questions Processed"; } ?></span></a></li>


						<li><a href="tu_perfil.php?op=user_reembolsos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Reembolsos Pendientes"; } else if ($idioma == "en") { echo "Pending Reimbursements"; } ?></span></a></li>


						<li><a href="tu_perfil.php?op=user_pagos_pendientes" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Pagos Pendientes"; } else if ($idioma == "en") { echo "Pending payments"; } ?></span></a></li>

					      	<li><a href="tu_perfil.php?op=menu_superior_foro" style="padding:7%; font-family: Arial"><span><img src="img/inicio_check.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Foro"; } else if ($idioma == "en") { echo "Fourom"; } ?> </span></a></li>

 
 
					         <li><a href="tu_perfil.php?op=datos_basicos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_datos.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Configuración"; } else if ($idioma == "en") { echo "Settings"; } ?></span></a></li>

					         <li><a href="php/funciones/cerrar_sesion.php" style="padding:7%; font-family: Arial"><span><img src="img/inicio_salir.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Salir"; } else if ($idioma == "en") { echo "Exit"; } ?></span></a></li>
					          
					      </ul>
					   </li>
		</div>
		</div>
		<?php }




		else if ($nivel_usuario==4)
		
		{ 
		
		 ?>

		 <div id="sidebar_pequeno">
		 <div id='cssmenu'>


		 			<ul>
					 <p class="titulo"><?php  if ($idioma == "es") { echo "Bienvenido"; } else if ($idioma == "en") { echo "Welcome"; } ?>: <?php echo $nombre ?></p><br><br>

   
					<li class='active has-sub'><a href='#' style=" font-family: Arial"><span><img src="img/menu_icono.png"  width="10%" style="margin-right:10%">MENU</span></a>
					      <ul>

					      	<li><a href="tu_perfil.php?op=administrador_productos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_vender.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Cargar Servicios"; } else if ($idioma == "en") { echo "Upload Services"; } ?> </span></a></li>

					      	<li><a href="tu_perfil.php?op=analista_citas" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Tus Citas"; } else if ($idioma == "en") { echo "Tus Citas"; } ?></span></a></li>


					      	<li><a href="tu_perfil.php?op=guia_contactos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Guia de Contactos"; } else if ($idioma == "en") { echo "Contacts Guide"; } ?></span></a></li>
					      	 

				      		<li><a href="tu_perfil.php?op=preguntas_recividas" style="padding:7%; font-family: Arial"><span><img src="img/inicio_hombe.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Preguntas Recibidas"; } else if ($idioma == "en") { echo "Questions Received"; } ?></span></a></li>
				      		

				      		<li><a href="tu_perfil.php?op=menu_superior_foro" style="padding:7%; font-family: Arial"><span><img src="img/inicio_check.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Foro"; } else if ($idioma == "en") { echo "Fourom"; } ?> </span></a></li>


				      		 


 
 
					         <li><a href="tu_perfil.php?op=datos_basicos" style="padding:7%; font-family: Arial"><span><img src="img/inicio_datos.png" width="10%" style="margin-right:5%; float:left"><?php  if ($idioma == "es") { echo "Configuración"; } else if ($idioma == "en") { echo "Settings"; } ?></span></a></li>

					         
					          
					      </ul>
					   </li>
		</div>
		</div>
		<?php }
		
		
		?> 


						