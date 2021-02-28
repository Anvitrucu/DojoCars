<center>
	<?php if ($idioma == "es") { ?><h1>Lista de Deseos</h1><?php } else if ($idioma == "en"){ ?><h1>YOUR WISHLIST</h1><?php } ?>
</center>

<?php 

$consulta="SELECT * FROM lista_deseos WHERE id_usuario= '$id_usuario'"; 

$ejecutar_consulta_fav = $conexion->query($consulta) or die ("No se ejecuto querys");

$num_regs =  $ejecutar_consulta_fav->num_rows;

if ($num_regs==0)

			{ ?>

				<?php if ($idioma == "es") { ?>
				<br><br><center><h3><b>Su Lista de Deseos Esta Vacia</b></h3></center> 
				<?php } else if ($idioma == "en"){ ?>
				<br> <center><h3><b>Your Wish List is Empty</b></h3> </center>
				<?php } ?>
 
			<?php }


else

			{


				 while ($registro_GLOBAL = $ejecutar_consulta_fav->fetch_assoc())


					{

						$id_producto = $registro_GLOBAL["id_producto"];

						$id_lista_deseos = $registro_GLOBAL["id_lista_deseos"];

						$consulta_2="SELECT * FROM productos WHERE  id_productos='$id_producto'  "; 


						$ejecutar_consulta_2 = $conexion->query($consulta_2) or die ("No se ejecuto querys");


						$registro_buscador = $ejecutar_consulta_2->fetch_assoc();

			?>

			<div id="articulos">

				<?php

				$id_productos = $registro_buscador["id_productos"];

				$id_usuario = $registro_buscador["id_usuario"];

				$pais_id = $registro_buscador["pais_id"];


				$busqueda_user="SELECT * FROM usuario WHERE  id_usuario='$id_usuario'";

				$ejecutar_consulta_user = $conexion->query($busqueda_user);

				$arreglo_user = $ejecutar_consulta_user->fetch_assoc();
 
				$usuario_nombre = $arreglo_user['usuario_nombre'];

				$user = $arreglo_user['usuario'];



				$consulta_pa = "SELECT * FROM pais WHERE Paisid='$pais_id'";

				$ejecutar_pa = $conexion->query($consulta_pa) or die ("no se ejecuto consulta");

				$arreglo_pa = $ejecutar_pa->fetch_assoc();

				$Pais_nombre = $arreglo_pa["Pais_nombre"];

				$id_pr = encoded($id_productos) ;



				if ($idioma == "es") { 



					echo "<div id='img_desc'>

				<center><a href='php/funciones/subir_eliminar_lista_deseos.php?id=".$id_lista_deseos."'style='color:#FCBBBB'> Borrar - Delete </a></center>  

				<p class= 'nombre_autor' style='margin-top:20%;'><a href='index.php?menu=servicios&id=".$id_pr."'>".substr((utf8_encode($registro_buscador['nombre_1'])),0,32). "...<br><br>  </a>"; }


			  	if ($idioma == "en") { echo "<div id='img_desc'>

				<center><a href='php/funciones/subir_eliminar_lista_deseos.php?id=".$id_lista_deseos."'style='color:#FCBBBB'>- DELETE -</a></center> <br> 

				<p class= 'nombre_autor' style='margin-top:20%;'><a href='index.php?menu=servicios&id=".$id_pr."'>".substr((utf8_encode($registro_buscador['nombre_0'])),0,32). "...<br><br>  </a>"; }


				
										 
										

										?></p>
					


										</div>
										<br><br>
										<img width="80%" src="<?php 

																								
										if ($registro_buscador["foto_1"] =="articulo.jpg")

										{echo "img/perfil/".$registro_buscador["foto_1"];} 

										else

										{echo  $registro_buscador["foto_1"];}




									?>" 

				?>


				<br><br>

				<?php echo "<b style='font-size:1.5rem'>$ ".$registro_buscador["precio_producto"]; ?><br><br>



			</div> 



			 


			<?php

		 }

	 



			}






?> 