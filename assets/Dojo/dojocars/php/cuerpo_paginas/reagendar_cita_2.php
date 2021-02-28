<?php 

include("php/funciones/comprobar_usuario.php");


$id_producto = $_GET["id_producto"];

$tiempo = $_GET["tiempo"];

$fecha = $_GET["fecha"];

$hora = $_GET["hora_disponible"];

$dia_semana = $_GET["dia_semana"];

$fecha_mostrar = date("d / m / Y", strtotime($fecha));

$fecha_probar = date("Y-m-d", strtotime($fecha));



		$busqueda_producto="SELECT * FROM productos WHERE id_productos='$id_producto'";

		$ejecutar_busqueda_producto = $conexion->query($busqueda_producto);

		$arreglo_producto = $ejecutar_busqueda_producto->fetch_assoc();

		$nombre_0 = $arreglo_producto['nombre_0'];

		$cita_representante = $arreglo_producto['cita_representante'];	

		$cita_duracion = $arreglo_producto['cita_duracion'];

		$cita_simultaneas = $arreglo_producto['cita_simultaneas'];


		$precio_producto = $arreglo_producto['precio_producto'];






	 	$consulta_cit = "SELECT * FROM tatu_cita WHERE id_producto='$id_producto' AND  fecha='$fecha_probar' AND  hora='$hora' AND  dia_semana='$dia_semana'  ";

		$ejecutar_consulta_cit = $conexion->query($consulta_cit) or die ("No se ejecutó estados");

		$total_cit = $ejecutar_consulta_cit->num_rows;

		 

		if ($total_cit==$cita_simultaneas ) {
			

			?>
			<h2>El horario seleccionado se encuentra ocupado</h2><br><br>

			<center><a id="boton_generico" href="tu_perfil.php?op=reagendar_cita&id=<?php echo $_GET["id_cita"] ?>&id_producto=<?php echo $_GET["id_producto"] ?>">Intentar de Nuevo</a></center>

			<?php
		}

		else {


		


 



		$busqueda_representante="SELECT * FROM usuario WHERE id_usuario='$cita_representante' ";

		$ejecutar_consulta_representante = $conexion->query($busqueda_representante);

		$arreglo_representante = $ejecutar_consulta_representante->fetch_assoc();

		$usuario_nombre = $arreglo_representante['usuario_nombre'];

		$representante_id = $cita_representante;

		



?>
	<h2><?php if ($idioma == "es")  { echo "Paso 3: VERIFICA TU INFORMACIóN Y REGISTRA TU CITA EN EL SISTEMA."; } else if ($idioma == "en")  { echo "Step 3: VERIFY YOUR INFORMATION AND REGISTER YOUR APPOINTMENT IN THE SYSTEM."; } else if ($idioma == "fr")   { echo "Étape 3: VÉRIFIEZ VOS INFORMATIONS ET ENREGISTREZ VOTRE RENDEZ-VOUS DANS LE SYSTÈME."; }  else if ($idioma == "pt")  { echo "Etapa 3: VERIFIQUE SUAS INFORMAÇÕES E REGISTRE SEU NOMEAÇÃO NO SISTEMA."; } ?>.</h2>

	<h3><?php if ($idioma == "es")  { echo "De acuerdo a sus especificaciones, su cita quedará registrada con los siguientes datos"; } else if ($idioma == "en")  { echo "According to your specifications, your appointment will be registered with the following data"; } else if ($idioma == "fr")   { echo "Selon vos spécifications, votre rendez-vous sera enregistré avec les données suivantes"; }  else if ($idioma == "pt")  { echo "De acordo com suas especificações, sua consulta será registrada com os seguintes dados"; } ?>.</h3>  


 


	 

	
	 <form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_cita.php" method="GET" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">

	 	<center> <fieldset style="width: 80%;">

 

	 	

	 	<input type="hidden" name="id_cita" value="<?php echo $_GET["id_cita"] ?>">
	  

<?php 

	if ($idioma == "es")  

	{ 

		if ($cita_duracion==0) {
			
			$tiempo = "1 Hora Maximo";
		}

		else if ($cita_duracion==0) {
			
			$tiempo = "30 Min Maximo";
		}

		?> 

		** Concepto: <?php echo $nombre_0  ?> .<br><br> 

	 	** Representante: <?php echo $usuario_nombre  ?> .<br><br> 

	 	 

	 	  <input type="text" style="padding: 1%; width: 60%" name="telefono_cliente" required placeholder="Telefono del Cliente"><br><br> 

	 	 <input type="text" style="padding: 1%; width: 60%" name="direccion_cliente" required placeholder="Direccion (Incluir ciudad, calle, casa, departamento y punto de referencia)"><br><br><br><br>




	 	<?php 

	 	$consulta_espe = "SELECT * FROM productos_cesta_especificos WHERE id_producto='$id_producto'  ";

		$ejecutar_consulta_espe = $conexion->query($consulta_espe) or die ("No se ejecutó estados");

		$total = $ejecutar_consulta_espe->num_rows;



		if ($total!=0) {

			echo "<center><h3>Seleccione el servicio o la especialidad especifica a antender</h3>";

			?>

			<input type="hidden" value="<?php echo $total ?>" name="contador" >

			<?php

			$cont = 0;
			
			while ($registro_cat= $ejecutar_consulta_pais->fetch_assoc())
			{

			 


			 echo "<div style='width:20%; display:inline-block;   margin-bottom:2%;'> 

			 <input type='checkbox' value=".$registro_cat["id_productos_cesta_especificos"]." name='prod_".$cont."'> 

			 &nbsp;&nbsp;&nbsp;".utf8_encode($registro_cat["producto_cesta"])."</div>";

			 $cont = $cont+1;
	 
			}

			echo "<br><br><br>";


		}



		

	 	?>



	 	<center><input type="submit" id="boton_generico" value="ACTUALIZAR CITA >" width="7%"><br><br>

		<?php }

	else if ($idioma == "en")  

	{ 

		if ($cita_duracion==0) {
			
			$tiempo = "1 Hour ";
		}

		else if ($cita_duracion==0) {
			
			$tiempo = "30 Min ";
		}


		?> 



		** Concept: <?php echo $nombre_0  ?> .<br><br> 

	 	** Representative: <?php echo $usuario_nombre  ?> .<br><br> 

	 	** Date of Appointment: <?php echo $dia_semana.", ".$fecha_mostrar  ?>.<br><br>

	 	** Appointment Time: <?php echo $hora  ?> Horas.<br><br>  <hr><hr><br>

 


	 	<?php 

	 	 
	 	$consulta_espe = "SELECT * FROM productos_cesta_especificos WHERE id_producto='$id_producto'  ";

		$ejecutar_consulta_espe = $conexion->query($consulta_espe) or die ("No se ejecutó estados");

		$total = $ejecutar_consulta_espe->num_rows;

		 

		if ($total!=0) {

			echo "<center><h3>Select the service or the specific specialty to attend</h3>";

			?>

			<input type="hidden" value="<?php echo $total ?>" name="contador" >

			<?php

			$cont = 0;
			
			while ($registro_cat= $ejecutar_consulta_espe->fetch_assoc())
			{

			 


			 echo "<div style='width:20%; display:inline-block;   margin-bottom:2%;'> 

			 <input type='checkbox' value=".$registro_cat["id_productos_cesta_especificos"]." name='prod_".$cont."'> 

			 &nbsp;&nbsp;&nbsp;".utf8_encode($registro_cat["producto_cesta"])."</div>";

			 $cont = $cont+1;
	 
			}

			echo "<br><br><br>";


		}



		

	 	?>



	 	<center><input type="submit" id="boton_generico" value="UPDATE APPOINTMENT >" width="7%"><br><br><?php } 



?>.  
	  	
	 	
 
<?php 

$fecha_mostrar = date("Y-m-d", strtotime($fecha));

 

?>

 
		<input type="hidden" name="id_producto" value="<?php echo $id_producto ?>">

 		<input type="hidden" name="tiempo" value="<?php echo $tiempo ?>">

	 	<input type="hidden" name="fecha" value="<?php echo $fecha ?>">

	 	<input type="hidden" name="hora" value="<?php echo $hora ?>">

	 	<input type="hidden" name="dia_semana" value="<?php echo $dia_semana ?>"> 

	 	<input type="hidden" name="fecha_mostrar" value="<?php echo $fecha_mostrar ?>">
  
	 	<input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">

	 	<input type="hidden" name="representante_id" value="<?php echo $representante_id ?>">

	 	<input type="hidden" name="precio_producto" value="<?php echo $precio_producto ?>">


 
           </fieldset>  </center>
  
	 </form>  
		
		
</h3> 


<?php 


}


?>