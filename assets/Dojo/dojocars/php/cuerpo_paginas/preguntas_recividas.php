
<section id="Cuerpo_perfil">
<center>
	<?php if ($idioma == "es") { ?><h1>Tus Preguntas</h1><?php } else if ($idioma == "en"){ ?><h1>Your Questions</h1><?php } ?>
</center><br><br>

<?php

 
if ($nivel_usuario==3)
{

	 

$busqueda_pregunta="SELECT * FROM preguntas WHERE id_comprador='$id_usuario'";

}

else if ($nivel_usuario==4)
{



$busqueda_pregunta="SELECT * FROM preguntas WHERE respuesta IS NULL AND  id_vendedor='$id_usuario' ";

}


$ejecutar_consulta_pregunta = $conexion->query($busqueda_pregunta);

$num_regs =  $ejecutar_consulta_pregunta->num_rows;




 



	if ($num_regs==0)

			{
				
				?> 
			<center>- 
				<?php if ($idioma == "es") { ?><p class='subtitulo_central' style="font-size:1.5rem"> No posee preguntas pendientes <br><br> </p> <?php } else if ($idioma == "en"){ ?><p class='subtitulo_central' style="font-size:1.5rem"> No Questions Pending</p> <?php } ?>
			- </center><br><br>
			<?php
			}

	else {


 
				echo "<div id='preguntas_articulo_perfil'>";
				while ($arreglo_pregunta = $ejecutar_consulta_pregunta->fetch_assoc())

				{


					 


					$id_articulo = $arreglo_pregunta["id_producto"];

					$busqueda_pre ="SELECT * FROM productos WHERE id_productos='$id_articulo'";

					$ejecutar_consulta_pre  = $conexion->query($busqueda_pre);

					$registro_pre = $ejecutar_consulta_pre->fetch_assoc();

					 

					$nombre_0 = utf8_encode($registro_pre["nombre_0"]);

					

					


					?>

					<form id="descripcion_articulo" name="descripcion_articulo" action="php/funciones/subir_respuesta.php?id_preguntas=<?php echo $arreglo_pregunta["id_preguntas"]?>" method="post" enctype="multipart/form-data">

					
 
					

					<?php

					$id_comprador = $arreglo_pregunta["id_comprador"];



					$busqueda_pr ="SELECT * FROM usuario WHERE id_usuario='$id_comprador'";

					$ejecutar_consulta_pr  = $conexion->query($busqueda_pr);

					$registro_pr = $ejecutar_consulta_pr->fetch_assoc();



					if ($nivel_usuario==3)
					{


						if ($idioma == "es") 

						{  

			  	 			echo "Artículo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a href='index.php?menu=servicios&id=".$id_articulo."'>".utf8_encode($registro_pre["nombre_1"])." </a> <br><br> </b>

						
							  Tu Pregunta: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>".utf8_encode($arreglo_pregunta["pregunta"])."<br><br></b>";


						 	 echo "Respuesta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".utf8_encode($arreglo_pregunta["respuesta"])."</b><br><br><hr><hr><br>";

						}


			  	 		if ($idioma == "en") 

			  	 		{  

			  	 			echo "Article:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a href='index.php?menu=servicios&id=".$id_articulo."'>".utf8_encode($registro_pre["nombre_0"])." </a> <br><br> </b>

						
							  Your Question&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>".utf8_encode($arreglo_pregunta["pregunta"])."<br><br></b>";


						 	 echo "Answer:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".utf8_encode($arreglo_pregunta["respuesta"])."</b><br><br><hr><hr><br>";

						}


						
				 

					 

					}

					else if ($nivel_usuario==4)
					{
						if ($idioma == "es") {

						 	echo "<b>El usuario ".$registro_pr["usuario_nombre"]." pregunta sobre el articulo <a href='index.php?menu=servicios&id=".$id_articulo."'>".$registro_pre["nombre_1"]." </a>: <br><br> </b>".utf8_encode($arreglo_pregunta["pregunta"])."<br><br></p>";

							echo " <textarea required id='respuesta' name='respuesta' rows='5' style='width:90%' maxlength'120'></textarea> <br><br><input id='boton_formulario' type='submit' id='enviar-alta'  ><br><br><br><br><hr><br></form>"; }


			  	 		if ($idioma == "en") {

						 	echo "<b>Client: ".$registro_pr["usuario_nombre"]."<br><br> Article: <a href='index.php?menu=servicios&id=".$id_articulo."'>".$registro_pre["nombre_1"]." </a> <br><br>Question: </b>".utf8_encode($arreglo_pregunta["pregunta"])."<br><br></p>";

							echo " <textarea required id='respuesta' name='respuesta' rows='5' style='width:90%' maxlength'120'></textarea> <br><br><input id='boton_formulario' type='submit' id='enviar-alta' value='Post Reply'  ><br><br><br><br><hr><br></form>"; }
						

						

					 

					}





					

					
				}

				echo"</div><br><br>";


	}

		
?>

</section>
