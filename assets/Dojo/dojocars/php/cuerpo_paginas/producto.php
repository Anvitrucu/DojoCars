<fieldset><?php

session_start();

include ("php/funciones/conexion.php");
 
$id_productos = $_GET['id'];
$foto = $_GET['foto'];

 
$consulta="SELECT * FROM productos WHERE id_productos = '$id_productos';";
 
$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");
 
$registro = $ejecutar_consulta ->fetch_assoc();

$pais_id = $registro["pais_id"];

$id_usuario = $registro["id_usuario"];

$descripcion_producto = utf8_encode($registro["descripcion_producto"]);
 
 

$consulta_user = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario';";
 
$ejecutar_consulta_user = $conexion->query($consulta_user) or die ("No se ejecuto query");
 
$registro_user = $ejecutar_consulta_user ->fetch_assoc();

$usuario = $registro_user["usuario"];

$nomnre_vendedor = $registro_user["usuario_nombre"];



		$usua = $_SESSION["usuario"];

		$contrasena = utf8_decode($_SESSION["contrasena"]);


		$busq ="SELECT * FROM usuario WHERE usuario='$usua' AND contrasena='$contrasena'";

		$ejecutar_busq = $conexion->query($busq);

		$arreglo_busq = $ejecutar_busq->fetch_assoc();

 

		$id_usuario_comprador = $arreglo_busq['id_usuario'];



 		








 
?>






























<form id="descripcion_articulo" name="descripcion_articulo" action="php/funciones/agregar_a_favoritos.php?id_producto=<?php echo $id_productos ?>&id_vendedor=<?php echo $id_usuario ?>&id_comprador=<?php echo $id_usuario_comprador ?>" method="post" enctype="multipart/form-data">




<div id="foto_producto" >

 
<?php 

if (($foto==2))

{

?>
 
<a href="index.php?menu=servicios&id=<?php echo $id_productos ?>&foto=1"><img id="foto_secundaria_producto" style="display:inline:block; overflow:hidden" width="20%" src="

<?php 

if ($registro["foto_1"] =="articulo.jpg")

										{echo "img/perfil/".$registro["foto_1"];} 

										else

										{

?>

img/perfil/<?php echo md5($usuario)."/".$registro["foto_1"]?>


<?php } ?>

"></a>&nbsp;&nbsp;&nbsp;

<?php 

}

else if (($foto==1) or ($foto==NULL) or (($foto==3) or ($foto==4)))
{

?>
 
<a href="index.php?menu=servicios&id=<?php echo $id_productos ?>&foto=2"><img id="foto_secundaria_producto" style="display:inline:block; overflow:hidden" width="20%" src="


<?php

if ($registro["foto_2"] =="articulo.jpg")

										{echo "img/perfil/".$registro["foto_2"];} 

										else

										{

?>


img/perfil/<?php echo md5($usuario)."/".$registro["foto_2"]?>

<?php 

}

?>

"></a>&nbsp;&nbsp;&nbsp;

<?php 

}

 if (($foto==3))
 
{

?>
 
<a href="index.php?menu=servicios&id=<?php echo $id_productos ?>&foto=1"><img id="foto_secundaria_producto" style="display:inline:block; overflow:hidden" width="20%" src="


<?php

if ($registro["foto_1"] =="articulo.jpg")

										{echo "img/perfil/".$registro["foto_1"];} 

										else

										{

?>

img/perfil/<?php echo md5($usuario)."/".$registro["foto_1"]?>


<?php } ?>"></a>&nbsp;&nbsp;&nbsp;

<?php 
}
else if (($foto==1) or ($foto==NULL) or (($foto==2) or ($foto==4)))
{

?>
 
<a href="index.php?menu=servicios&id=<?php echo $id_productos ?>&foto=3"><img id="foto_secundaria_producto" style="display:inline:block; overflow:hidden" width="20%" src="

<?php

if ($registro["foto_3"] =="articulo.jpg")

										{echo "img/perfil/".$registro["foto_3"];} 

										else

										{

?>


img/perfil/<?php echo md5($usuario)."/".$registro["foto_3"]?>

<?php } ?>

"></a>&nbsp;&nbsp;&nbsp;

<?php 

}

 if (($foto==4))

 {
?>

<a href="index.php?menu=servicios&id=<?php echo $id_productos ?>&foto=1"><img id="foto_secundaria_producto" style="display:inline:block; overflow:hidden" width="20%" src="


<?php

if ($registro["foto_1"] =="articulo.jpg")

										{echo "img/perfil/".$registro["foto_1"];} 

										else

										{

?>


img/perfil/<?php echo md5($usuario)."/".$registro["foto_1"]?>

<?php } ?>

"></a>&nbsp;&nbsp;&nbsp;

<?php 
}
else if (($foto==1) or ($foto==NULL) or (($foto==2) or ($foto==3)))
{

?>
<a href="index.php?menu=servicios&id=<?php echo $id_productos ?>&foto=4"><img id="foto_secundaria_producto" style="display:inline:block; overflow:hidden" width="20%" src="


<?php

if ($registro["foto_4"] =="articulo.jpg")

										{echo "img/perfil/".$registro["foto_4"];} 

										else

										{

?>


img/perfil/<?php echo md5($usuario)."/".$registro["foto_4"]?>

<?php } ?>

"></a>





<?php 

}

?>

			<br> <br><img style="float:left" class="imagen" width="100%" src="img/

			<?php 
																		
				 

				 if ($foto==NULL)

				{
 
					if ($registro['foto_1'] =='articulo.jpg')

					{echo 'perfil/'.$registro['foto_1'];} 

					else

					{echo "perfil/".md5($usuario)."/".$registro["foto_1"];}

				}

				else if ($foto==1)

				{
 
					if ($registro['foto_1'] =='articulo.jpg')

					{echo 'perfil/'.$registro['foto_1'];} 

					else

					{echo "perfil/".md5($usuario)."/".$registro["foto_1"];}

				}


				else if ($foto==2)


				{
 
					if ($registro['foto_2'] =='articulo.jpg')

					{echo 'perfil/'.$registro['foto_2'];} 

					else

					{echo "perfil/".md5($usuario)."/".$registro["foto_2"];}

				}



				else if ($foto==3)

				{
 
					if ($registro['foto_3'] =='articulo.jpg')

					{echo 'perfil/'.$registro['foto_3'];} 

					else

					{echo "perfil/".md5($usuario)."/".$registro["foto_3"];}

				}


				else if ($foto==4)

				{
 
					if ($registro['foto_4'] =='articulo.jpg')

					{echo 'perfil/'.$registro['foto_4'];} 

					else

					{echo "perfil/".md5($usuario)."/".$registro["foto_4"];}
				}

			?>" 

			/>


			<img style="float:right"  class="imagen_grande" width="80%" src="img/

			<?php 
																		
				 if (($foto==NULL) or ($foto==1))


				 {
 
					if ($registro['foto_1'] =='articulo.jpg')

					{echo 'perfil/'.$registro['foto_1'];} 

					else

					{echo "perfil/".md5($usuario)."/".$registro["foto_1"];}

				}
 
				else if ($foto==2)

				{
 
					if ($registro['foto_2'] =='articulo.jpg')

					{echo 'perfil/'.$registro['foto_2'];} 

					else

					{echo "perfil/".md5($usuario)."/".$registro["foto_2"];}

				}


				else if ($foto==3)

				{
 
					if ($registro['foto_3'] =='articulo.jpg')

					{echo 'perfil/'.$registro['foto_3'];} 

					else

					{echo "perfil/".md5($usuario)."/".$registro["foto_3"];}

				}


				else if ($foto==4)

				{
 
					if ($registro['foto_4'] =='articulo.jpg')

					{echo 'perfil/'.$registro['foto_4'];} 

					else

					{echo "perfil/".md5($usuario)."/".$registro["foto_4"];}

				}

			?>" 

			/>

</div>


















<?php


		$pais_Paisid = $registro["pais_id"];
		$ciudad_id = $registro["ciudad_id"];
		$alcance = "";

			$consulta11 = "SELECT * FROM pais WHERE Paisid='$pais_Paisid'";

			$ejecutar = $conexion->query($consulta11) or die ("no se ejecuto consulta");

			$arreglo1 = $ejecutar->fetch_assoc();

			


		$consulta_alca1= "SELECT * FROM ciudad WHERE pais_Paisid='$pais_Paisid' ORDER BY ciudad_nombre ";

		$ejecutar_consulta_alca1= $conexion->query($consulta_alca1) or die ("No se ejecutó estados");


		while ($registro_alca1 = $ejecutar_consulta_alca1->fetch_assoc())
		{			 

			$ciudad_id =  "*".$registro_alca1["ciudad_id"]."*";

			 

			$posicion_coincidencia = strpos($registro["ciudad_id"], $ciudad_id);

			
 
 
								if ($posicion_coincidencia !== false) 
									{
										$alcance = $alcance.", ".utf8_encode($registro_alca1["ciudad_nombre"]);
								    }
  
		}




 ?>



<div id="datos_producto" style="-moz-box-shadow: 10px 10px 32px #4d4d4d;
-webkit-box-shadow: 10px 10px 32px #4d4d4d;
box-shadow: 10px 10px 32px #4d4d4d; padding:2%">

		
 
		 <p class="titulo" ><?php echo utf8_encode ($registro['nombre_producto']) ?></p> <br><br>

		<input type="hidden" id="nombre_producto" name="nombre_producto"  value ="<?php echo utf8_encode ($registro['nombre_producto']) ?>" required/> 

		<input type="hidden" id="nombre_producto" name="vendedor"  value ="<?php echo utf8_encode ($registro['vendedor']) ?>" required/> 

 
		 

		<p style="font-size:1.5rem">Price: $ <?php echo $registro["precio_producto"]  ?></p><br>  <br>


		<?php 

		$descuento_producto = $registro["descuento_producto"]; 


		if ($descuento_producto!=0)

		{
			echo " <p style='color:#F95B00; font-size:1.5rem'>DISCOUNT: $ ".$registro["descuento_producto"]."</p><br><br>";
		}




		?>

		<center> 


		<a href="php/funciones/subir_carrito.php?id=<?php echo $id_productos ?>&menu=servicios"> <img width="35%" src='img/BOTON.JPG'></a>


		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




		<?php 


			$usuario_bus = $_SESSION["usuario"];

			$contrasena_bus = utf8_decode($_SESSION["contrasena"]);

			 

		 

			$busqueda_bus ="SELECT * FROM usuario WHERE usuario='$usuario_bus' AND contrasena='$contrasena_bus'";

			$ejecutar_consulta_bus = $conexion->query($busqueda_bus);

			$arreglo_bus = $ejecutar_consulta_bus->fetch_assoc();

		 

			$id_usuario_bus = $arreglo_bus['id_usuario'];	


			$id_productos = $id_productos;



			$busqueda_star ="SELECT * FROM lista_deseos WHERE id_producto='$id_productos' AND id_usuario='$id_usuario_bus'";

			$ejecutar_consulta_star = $conexion->query($busqueda_star);

			$arreglo_star = $ejecutar_consulta_star->num_rows;

				if ($arreglo_star==1) 

				{

					?>

					<a href="tu_perfil.php?op=favoritos"><img width="35%" src='img/wi.jpg'></a>

					<?php

				}

				else

				{







		?>


		


		<a href="


		<?php 


		if (!isset($_SESSION["usuario"]))

		{

			?>



		index.php?menu=inscribete_iniciar

			<?php


		}

		else

		{


			

			?>

			

		php/funciones/subir_agregar_lista_deseos.php?id_producto=<?php echo $id_productos ?>&id_usuario=<?php echo $id_usuario_bus ?>

			<?php

		}



		?>







		"> <img width="35%" src='img/wish.jpg'></a>



		<?php 

		}


		?>

		<br><br><br>


		<hr><hr><br><br>

		<?php 


		if ($_SESSION["contador_cesta_mostrar"]!=0)

		{

			?>

			<a id="boton_generico" style="margin-left:10%; font-size:1.2rem" href="tu_perfil.php?op=inicio">Proceed to checkout</a>

			<?php

		}


		?>


		



		</center>

		 
		  


</div>

<br><br><br>


















 
 








<div id="monto_pago">
 <br>

<br><img width="100%" src="img/barra.jpg"><br>
		<?php

		echo " <p class='titulo'> PRODUCT DESCRIPTION </p> <BR><BR> ";

		 

		if ($descripcion_producto == NULL)
		{
			echo "<p class='subtitulo_central'>NO DESCRIPTION AVAILABLE</p>";
		}

		if ($descripcion_producto!= NULL)

		{
			?>

				<div style="width:80%; margin-left:10%"><p style="font-size:1.5rem">

			<?php

		echo nl2br($descripcion_producto)."<br><br>";

			?></p>

				</div>

			<?php

		}

 








?>

</div>

<?php

 

if ($_SESSION["usuario"]==null) 

{

?> 

<p class='titulo_central'> <a href="index.php?menu=inscribete_iniciar">LOGIN </a>  to Ask </p> <BR>

<?php 
}

else

{

	?>
</form>
	<form id="descripcion_articulo" name="descripcion_articulo" action="php/funciones/subir_preguntas.php?id_articulo=<?php echo $id_productos ?>&id_vendedor=<?php echo $id_usuario ?>" method="post" enctype="multipart/form-data">

			
			<img width="100%" src="img/barra.jpg">

			<p class='titulo'> INSERT YOUR QUESTIONS <br> </p><p class='titulo_central' style="font-size:1.1rem">You will get your answer in your email<br> </p> <BR><BR> 
			<center><textarea  id="pregunta" name="pregunta" rows="5" cols="160" maxlength="160" required></textarea><br><br>

			<input type="submit" id="boton_formulario"  value="Ask"></center> 

	</form>

	<?php 

} 





?>
 
 <br><center><img width="90%" src="img/barra.jpg"></center><br>

<p class='titulo'>Your questions </p>  <br> 





<?php



$id_productos = $registro["id_productos"];

 
$busqueda_pregunta="SELECT * FROM preguntas WHERE id_producto='$id_productos'";

$ejecutar_consulta_pregunta = $conexion->query($busqueda_pregunta);



$num_regs22 =  $ejecutar_consulta_pregunta->num_rows;


		if ($num_regs22==0)

		{
			?>

			<p  class="titulo" style="font-size:1.2rem">Be the first to ask</p>

			<?php
		}


 
echo "<div id='preguntas_articulo'>";
while ($arreglo_pregunta = $ejecutar_consulta_pregunta->fetch_assoc())

{
	
	echo "<b>  ".utf8_encode($arreglo_pregunta["pregunta"])."</b><br><br></p>";
	echo "<b>Answer: </b> ".utf8_encode($arreglo_pregunta["respuesta"])."</b><br><br><hr><br>";

	
}

echo"</div><br><br>";




 ?>

 </fieldset>