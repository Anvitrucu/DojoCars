<!-- Funcion para activar AJAX -->

<script type="text/javascript">

function select_colores_material(variable) // Aqui va el nombre de la funcion
{
var xmlhttp;
if (window.XMLHttpRequest)
{ 
xmlhttp=new XMLHttpRequest();
}
else
{ 
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("div_colores_material").innerHTML=xmlhttp.responseText;  // Aqui va el nombre del DIV a modificar
}
}
xmlhttp.open("POST","php/funciones/select_colores_material.php",true); // Aqui va el archivo que se activa al cambiar
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("var1="+variable); // Aqui va el nombre de la variable a asignar
}


</script>


 



<fieldset><?php

session_start();

include ("php/funciones/conexion.php");
 
$id_productos = $_GET['id'];

 
$consulta="SELECT * FROM productos WHERE id_productos = '$id_productos';";
 
$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");
 
$registro = $ejecutar_consulta ->fetch_assoc();

 

$id_productos = utf8_encode($registro["id_producto"]);

$nombre_producto = utf8_encode($registro["nombre_0"]);

 
$precio_producto = utf8_encode($registro["precio_producto"]);

$impuesto_producto = utf8_encode($registro["impuesto_producto"]);
 

$descripcion_producto = utf8_encode($registro["descripcion_producto_0"]);

if (is_null($registro["foto_1"])) { $foto_1 = "articulo.jpg"; } else {$foto_1 = utf8_encode($registro["foto_1"]); }

if (is_null($registro["foto_2"])) { $foto_2 = "articulo.jpg"; } else {$foto_2 = utf8_encode($registro["foto_2"]); }

if (is_null($registro["foto_3"])) { $foto_3 = "articulo.jpg"; } else {$foto_3 = utf8_encode($registro["foto_3"]); }

if (is_null($registro["foto_4"])) { $foto_4 = "articulo.jpg"; } else {$foto_4 = utf8_encode($registro["foto_4"]); }







if (!isset($_GET["img"])) {
	$foto_gen ="$foto_1";
}

else {
	$foto_gen =$_GET["img"];
}


$id_categoria_producto = utf8_encode($registro["id_categoria_producto"]);

$id_categorias_especificas = utf8_encode($registro["id_categorias_especificas"]);

$tipo_producto = utf8_encode($registro["tipo_producto"]);

$cantidad_disponible = utf8_encode($registro["cantidad_disponible"]);

 


 
 





 

 
?>





















 

 


<!-- FOTO DEL PRODUCTO-->

 

<link rel="stylesheet" href="css/easyzoom.css" />
 


<div   id="foto_producto" > 

	<div   style="width: 70%; float: left;"> 

			 <a href="index.php?menu=servicios&id=<?php echo  $_GET["id"] ?>&img=<?php echo  $foto_1  ?>"><img   id="foto_secundaria_producto" style="display:inline:block; overflow:hidden" width="20%" src="img/foto_producto/<?php echo $foto_1  ?>"  ></a> 

			<a href="index.php?menu=servicios&id=<?php echo  $_GET["id"] ?>&img=<?php echo  $foto_2  ?>"> <img  id="foto_secundaria_producto" style="display:inline:block; overflow:hidden" width="20%" src="img/foto_producto/<?php echo $foto_2  ?>" alt=""></a>

			 <a href="index.php?menu=servicios&id=<?php echo  $_GET["id"] ?>&img=<?php echo  $foto_3  ?>"><img   id="foto_secundaria_producto" style="display:inline:block; overflow:hidden" width="20%" src="img/foto_producto/<?php echo $foto_3  ?>" alt=""></a>

			
			 <a href="index.php?menu=servicios&id=<?php echo  $_GET["id"] ?>&img=<?php echo  $foto_4  ?>"><img  id="foto_secundaria_producto" style="display:inline:block; overflow:hidden" width="20%" src="img/foto_producto/<?php echo $foto_4  ?>" alt=""></a>

	</div>

	<div id='foto_main' class='easyzoom easyzoom--overlay'>
			<a href='img/foto_producto/<?php echo $foto_gen  ?>'>
				<img src='img/foto_producto/<?php echo $foto_gen  ?>' alt='' width='100%'   />
			</a>
	</div>


	

</div>









 
 
			
			
 




 





















<div id="datos_producto" class="form-style-10" style="margin-left: 2%">

		<p class="titulo" >
<CENTER>
<h3>
 <?php if ($idioma == "es")  { echo $nombre_producto ; } else if ($idioma == "en")  { echo $nombre_producto ; } else if ($idioma == "fr")   { echo $nombre_producto ; }  else if ($idioma == "pt")  { echo $nombre_producto ; } ?>
</h3></CENTER><h5>

<h5><CENTER>
<br>

<form id="descripcion_articulo" name="descripcion_articulo" action="index.php" method="GET" enctype="multipart/form-data">
 
<input type="hidden" name="menu" value="pide_cita_2">

<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">


  </h5>  


	<?php 


	 

	$cita_duracion = utf8_encode($registro["cita_duracion"]);

	if ($cita_duracion==2) {
		$cita_duracion = "Up to 1 hour";
	}

	else if ($cita_duracion==1) {
		$cita_duracion = "Up to 30 Min.";
	}

	 

	$cita_representante = utf8_encode($registro["cita_representante"]);

 

	$abierto = "";

	if (!is_null($registro["cita_fecha_inicio"]) AND ($registro["cita_fecha_inicio"]!="0000-00-00")) {
        	
        	$cita_fecha_inicio = $registro_buscador["cita_fecha_inicio"];

        	$cita_fecha_cierre = $registro_buscador["cita_fecha_cierre"];

        	$nombre_producto = $nombre_producto."Desde el ".$cita_fecha_inicio." Hasta el ".$cita_fecha_cierre;
        }

        else {

        	 if ($registro["Lunes"]=="1") {
        		$abierto = $abierto." Monday -";
        	}

        	 if ($registro["Martes"]=="1") {
        		$abierto = $abierto." Tuesday -";
        	}

        	 if ($registro["Miercoles"]=="1") {
        		$abierto = $abierto." Wednesday -";
        	}


        	 if ($registro["Jueves"]=="1") {
        		$abierto = $abierto." Thursday -";
        	}

        	if ( $registro["Viernes"]=="1") {
        		$abierto = $abierto." Friday -";
        	}

        	if ( $registro["Sabado"]=="1") {
        		$abierto = $abierto." Saturday -";
        	}

        	if ( $registro["Domingo"]=="1") {
        		$abierto = $abierto." Sunday ";
        	}

        	$cita_representante = $registro["cita_representante"];

	        $consulta_us ="SELECT * FROM usuario WHERE id_usuario = '$cita_representante' ";

	        $ejecutar_consulta_us = $conexion->query($consulta_us) or die ("No se ejecuto query ");

	        $registro_us = $ejecutar_consulta_us->fetch_assoc();

	        echo "<p style=''font-size:0.8rem>";

        	echo "* Agent: <a href='index.php?menu=profile&id=".utf8_encode($registro_us["id_usuario"])."'> ".utf8_encode($registro_us["usuario_nombre"])."</a><br><br>";

        
        	echo "* Approximate duration: ".$cita_duracion."<br><br>";

        	echo "<center> Work days<br><br><b> ".$abierto."</b><br><br>";

        	echo "</p><hr><br><br>";

        	 ?>

        	 
        	 <?php 

        	 if ($registro_us["establecimiento_activo"]=="SI") {
        	 	?>

        	 	<h3><?php if ($idioma == "es") { ?>Precio de la Cita en nuestro establecimiento: <?php echo $registro["precio_producto"] ?> USD <?php } else if ($idioma == "en") { ?>Appointment price in our establishment: <?php echo $registro["precio_producto"] ?> USD <?php } ?></h3><br>
				<br>

        	 	<?PHP

        	 }

        	 ?>


        	 <h3><?php if ($idioma == "es") { ?>Precio de la Cita  a domicilio: <?php echo $registro["precio_producto_domicilio"] ?> USD <?php } else if ($idioma == "en") { ?>Price of Appointment at home: <?php echo $registro["precio_producto_domicilio"] ?> USD <?php } ?></h3><br>

        	  <p class='subtitulo_central'><?php if ($idioma == "es") { ?> Usted puede cancelar hasta 8 horas antes de la cita y se le reintegrara su dinero.<br><br> El pago realizado por la consulta puede ser usado como parte de pago de la reparacion <?php } else if ($idioma == "en") { ?>  You can cancel up to 8 hours before the appointment and your money will be refunded.<br><br> The payment made for the consultation can be used as part of payment of the repair<?php } ?></p><?php



        }



	?>	
 

			<input type="hidden" name="id_producto" value="<?php echo $_GET["id"] ?>">

			 
 
		
			 

 
			 



<br>
<center>
			<input type="hidden" id="BottonProductos" name="nombre_producto"  value ="<?php echo utf8_encode ($codigo_producto) ?>" required/> 


			 <?php

		    if ($idioma == "es")

		    { echo "<input type='submit' id='boton_generico'   value='Hacer Reservacion'>"; }


		    else if ($idioma == "en")

		    { echo "<input type='submit' id='boton_generico'   value='Make a reservation'>"; }


		    else if ($idioma == "fr")

		    { echo "<input type='submit' id='boton_generico'   value='Faire une réservation'>"; }


			else if ($idioma == "pt")

		    { echo "<input type='submit' id='boton_generico'   value='Fazer reserva'>"; }
		    ?>

</center>

 
</form>
 
 
 

			

	</form>
 



 

</div>














 



<div style="width: 100%; clear: both; color: #fff">.</div>



<div id="monto_pago">
 <br>

 



<?php

		if ($idioma == "en")

		{ 
				echo "<center><h1>    DESCRIPTION</h1></center>  ";

				if ($descripcion_producto == NULL)
				{
					echo "<p class='subtitulo_central'>NO DESCRIPTION AVAILABLE</p>";
				}

		}


		else if ($idioma == "es")

		{

			echo "<center><h1> DESCRIPCIÓN   </h1></center>    ";

			if ($descripcion_producto == NULL)
			{
				echo "<p class='subtitulo_central'>NO HAY DESCRIPCIÓN DISPONIBLE</p>";
			}

		}


		

		if ($descripcion_producto!= NULL)

		{
			?> 

				 <div style="width:80%; margin-left:10%"><p style="font-size:1.2rem; line-height: 2rem;">

			<?php



			       echo nl2br(utf8_encode($descripcion_producto))."<br><br> <hr>"; 


			  
		

			?></p>

				</div>

			<?php

		}

 








?>






 






 


<div style="width: 100%; height: 5px">&nbsp;</div>

   <div style="clear:both;">   </div>

 
<?php

 

if ($_SESSION["usuario"]==null) 

{

		if ($idioma == "en")

		{ 
				?>

				<p class='titulo_central'> <a href="index.php?menu=inscribete_iniciar">LOGIN </a>  to Ask </p> <BR>

				<?php

		}


		else if ($idioma == "es")

		{

			?>

				<p class='titulo_central'>Debe  <a href="index.php?menu=inscribete_iniciar"> INICIAR SESIÓN</a>  para preguntar </p> <BR>

				<?php

		}



		else if ($idioma == "fr")

		{

			?>

				<p class='titulo_central'>Vous devez vous  <a href="index.php?menu=inscribete_iniciar"> connecter</a>  para preguntar </p> <BR>

				<?php

		}

  
  
		else if ($idioma == "pt")

		{

			?>

				<p class='titulo_central'>Você deve fazer o  <a href="index.php?menu=inscribete_iniciar"> login</a>  para perguntar </p> <BR>

				<?php

		}


 
}

else

{

	$id_articulo = $_GET["id"];

	?>
</form>
	<form id="descripcion_articulo" name="descripcion_articulo" action="php/funciones/subir_preguntas.php?id_articulo=<?php echo $id_articulo ?>&id_vendedor=<?php echo $id_usuario ?>" method="post" enctype="multipart/form-data">


		<input type="hidden" name="id_producto" value="<?php echo $_GET["id"] ?>">

		<input type="hidden" name="nombre_producto" value="<?php echo $registro_us["nombre_producto"] ?>">

		<input type="hidden" name="correo_representante" value="<?php echo $registro_us["correo"] ?>">

		<input type="hidden" name="id_de_comprador" value="<?php echo $id_de_usuario ?>">

		<input type="hidden" name="id_de_vendedor" value="<?php echo $cita_representante?>">
 
		 	
		   <div style="clear:both;"> <hr> </div>

<?php
			if ($idioma == "en")

		{ 
				?>

				<h1> INSERT YOUR QUESTIONS <br> </h1><p class='titulo_central' style="font-size:1.1rem">You will get your answer in your email<br> </p> <BR><BR> 

				<center><textarea  id="pregunta" name="pregunta" rows="5" style="width: 90%" maxlength="160" required></textarea><br><br>

				<input type="submit" id="boton_generico"  value="Ask"></center> 

   <div style="clear:both;"><br> <hr> </div>
				<p class='titulo'>Your questions </p>  <br> 





				<?php

				$id_producto_elemento_linea = $_GET['id'];
 

				 
				$busqueda_pregunta="SELECT * FROM preguntas WHERE id_producto='$id_producto_elemento_linea'";

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


				<?php

		}


		else if ($idioma == "es")

		{

			?>

					<h1> INSERTE SU PREGUNTA<br> </h1><p class='titulo_central' style="font-size:1.1rem">Usted recibirá una respuesta por correo a la brevedad<br> </p> <BR><BR> 

					<center><textarea  id="pregunta" name="pregunta" rows="5" style="width: 90%"  maxlength="160" required></textarea><br><br>

								<input type="submit" id="boton_generico"  value="Preguntar"></center> 


								   <div style="clear:both;"><br> <hr> </div>

					<p class='titulo'>Tus Preguntas </p>  <br> 





					<?php


 

					 
					$id_producto_elemento_linea = $_GET['id'];
 

				 
				$busqueda_pregunta="SELECT * FROM preguntas WHERE id_producto='$id_producto_elemento_linea'";


					$ejecutar_consulta_pregunta = $conexion->query($busqueda_pregunta);



					$num_regs22 =  $ejecutar_consulta_pregunta->num_rows;


							if ($num_regs22==0)

							{
								?>

								<p  class="titulo" style="font-size:1.2rem">Se el Primero en Preguntar</p>

								<?php
							}


					 
					echo "<div id='preguntas_articulo'>";
					while ($arreglo_pregunta = $ejecutar_consulta_pregunta->fetch_assoc())

					{
						
						echo "<b>  ".utf8_encode($arreglo_pregunta["pregunta"])."</b><br><br></p>";
						echo "<b>Respuesta: </b> ".utf8_encode($arreglo_pregunta["respuesta"])."</b><br><br><hr><br>";

						
					}

					echo"</div><br><br>";




					 ?>


				<?php

		}






		else if ($idioma == "fr")

		{

			?>

					<p class='titulo'> INSÉRER VOTRE QUESTION<br> </p><p class='titulo_central' style="font-size:1.1rem">Vous recevrez une réponse par mail dès que possible<br> </p> <BR><BR> 

					<center><textarea  id="pregunta" name="pregunta" rows="5" style="width: 90%"  maxlength="160" required></textarea><br><br>

								<input type="submit" id="BottonProductos"  value="Demander"></center> 


								   <div style="clear:both;"> <hr> </div>

					<p class='titulo'>Vos questions </p>  <br> 





					<?php


 

					 
					$id_producto_elemento_linea = $_GET['id'];
 

				 
				$busqueda_pregunta="SELECT * FROM preguntas WHERE id_producto='$id_producto_elemento_linea'";


					$ejecutar_consulta_pregunta = $conexion->query($busqueda_pregunta);



					$num_regs22 =  $ejecutar_consulta_pregunta->num_rows;


							if ($num_regs22==0)

							{
								?>

								<p  class="titulo" style="font-size:1.2rem">Soyez le premier à demander</p>

								<?php
							}


					 
					echo "<div id='preguntas_articulo'>";
					while ($arreglo_pregunta = $ejecutar_consulta_pregunta->fetch_assoc())

					{
						
						echo "<b>  ".utf8_encode($arreglo_pregunta["pregunta"])."</b><br><br></p>";
						echo "<b>Réponse: </b> ".utf8_encode($arreglo_pregunta["respuesta"])."</b><br><br><hr><br>";

						
					}

					echo"</div><br><br>";




					 ?>


				<?php

		}








		else if ($idioma == "pt")

		{




			?>

					<p class='titulo'> INSERIR SUA PERGUNTA<br> </p><p class='titulo_central' style="font-size:1.1rem">Você receberá uma resposta por correio o mais rápido possível<br> </p> <BR><BR> 

					<center><textarea  id="pregunta" name="pregunta" rows="5" style="width: 90%"  maxlength="160" required></textarea><br><br>

								<input type="submit" id="BottonProductos"  value="Preguntar"></center> 


								   <div style="clear:both;"> <hr> </div>

					<p class='titulo'>Suas perguntas</p>  <br> 





					<?php


 

					 
					$id_producto_elemento_linea = $_GET['id'];
 

				 
				$busqueda_pregunta="SELECT * FROM preguntas WHERE id_producto='$id_producto_elemento_linea'";


					$ejecutar_consulta_pregunta = $conexion->query($busqueda_pregunta);



					$num_regs22 =  $ejecutar_consulta_pregunta->num_rows;


							if ($num_regs22==0)

							{
								?>

								<p  class="titulo" style="font-size:1.2rem">Seja o primeiro a perguntar</p>

								<?php
							}


					 
					echo "<div id='preguntas_articulo'>";
					while ($arreglo_pregunta = $ejecutar_consulta_pregunta->fetch_assoc())

					{
						
						echo "<b>  ".utf8_encode($arreglo_pregunta["pregunta"])."</b><br><br></p>";
						echo "<b>Resposta: </b> ".utf8_encode($arreglo_pregunta["respuesta"])."</b><br><br><hr><br>";

						
					}

					echo"</div><br><br>";




					 ?>


				<?php

		}






		?>



			
			
	</form>

	<?php 

} 





?>
 
 

 </fieldset>
   <div style="clear:both;"> <hr> </div>





 