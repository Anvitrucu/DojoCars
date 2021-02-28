<?php 

$id = $_GET["id"];

?>


<script type="text/javascript">
  	
function carga_categoria_cita(str)
{
var xmlhttp;

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("div_carga_categoria_cita").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/funciones/carga_categoria_cita.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("mes="+str);
}  
</script>

<center>
<?php if ($idioma == "es") { ?><h1>Detalles del Servicio a Agendar</h1><?php } else if ($idioma == "en"){ ?><h1>Details of the Service to Schedule</h1> <?php } ?>
</center>
 





<?php 

if (isset($_GET["duracion_cita"])) {

			$id_productos = $_GET["id"];

			$consulta="SELECT * FROM productos WHERE id_productos = '$id_productos';";
 
			$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");
			 
			$registro = $ejecutar_consulta ->fetch_assoc();

			$cita_simultaneas = $registro["cita_simultaneas"];

			$Lunes =  $registro["Lunes"] ;

			$Martes =  $registro["Martes"] ;

			$Miercoles =  $registro["Miercoles"] ;

			$Jueves =  $registro["Jueves"] ;

			$Viernes =  $registro["Viernes"] ;

			$Sabado =  $registro["Sabado"] ;

			$Domingo =  $registro["Domingo"] ;





			 
 

			$apertura = $arreglo["hora_entrada"];

		$cierre = $arreglo["hora_salida"];



	
	?>


	<form id="form_perfil" name="form_perfil" action="php/funciones/subir_horarios.php" method="GET" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">
 

			<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
 
 			<input type="hidden" name="cita_simultaneas" value="<?php echo $_GET["cita_simultaneas"] ?>">

			<input type="hidden" name="cita_duracion" value="<?php echo $_GET["duracion_cita"] ?>">

				 
			 

			


			<table style="width: 100%">

										<thead>
												<tr>

													
													
													<th   style="width: 12%"> Hour  </th>

													<?php 

													if ($Lunes==1) {
														?>

														<th   style="width: 12%; font-size: 0.9rem"> Monday </th>

														<?php
													}

													if ($Martes==1) {
														?>

														<th   style="width: 12%; font-size: 0.9rem"> Tuesday </th>

														<?php
													}


													if ($Miercoles==1) {
														?>

														<th   style="width: 12%; font-size: 0.9rem"> Wednesday </th>

														<?php
													}


													if ($Jueves==1) {
														?>

														<th   style="width: 12%; font-size: 0.9rem"> Thursday </th>

														<?php
													}


													if ($Viernes==1) {
														?>

														<th   style="width: 12%; font-size: 0.9rem"> Friday </th>

														<?php
													}


													if ($Sabado==1) {
														?>

														<th   style="width: 12%; font-size: 0.9rem"> Saturday </th>

														<?php
													}


													if ($Sabado==1) {
														?>

														<th   style="width: 12%; font-size: 0.9rem"> Sunday </th>

														<?php
													}

													?>
													 
													 
												</tr>

										</thead>


										<tbody>

											 

											<?php 

 

											$hora_inicial = date('H:s', strtotime($apertura));

										 


												if ($_GET["duracion_cita"]==1) {
													 
													 for ($i=1; $i <100 ; $i++) { 
													 	
													 	?>

													 	<tr>

													 		<td style="width: 12%"> <?php echo $hora_inicial ?> </td>

													 		<?php  

													 		for ($j=1; $j < 8; $j++) { 

													 			if ($j==1 && $Lunes==0) { continue; }

													 			if ($j==2 && $Martes==0) { continue; }

													 			if ($j==3 && $Miercoles==0) { continue; }

													 			if ($j==4 && $Jueves==0) { continue; }

													 			if ($j==5 && $Viernes==0) { continue; }

													 			if ($j==6 && $Sabado==0) { continue; }

													 			if ($j==7 && $Domingo==0) { continue; }


													 			$hora_mostrar = date('H_s', strtotime($hora_inicial) + 0);
													 			
													 			?>

													 			<td style="width: 12%"><center> <input checked type="checkbox" name="<?php echo $j."-".$hora_mostrar ?>"> </center> </td>

													 			<?php
													 		}

													 		?>

													 	</tr>
 
													 	<?php

													 	$minutoAnadir=30;
 

													 	$segundos_horaInicial=strtotime($hora_inicial);
 
														$segundos_minutoAnadir=$minutoAnadir*60;
														 
														$hora_inicial=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);

														if (strtotime($hora_inicial)==strtotime($cierre)) { break; }
													 }
												}




												else if ($_GET["duracion_cita"]==2) {
													 
													 for ($i=1; $i <100 ; $i++) { 


													 	
													 	?>



													 	<tr>

													 		<td style="width: 12%"> <?php echo  $hora_inicial ?> </td>

													 		<?php  

													 		for ($j=1; $j < 8; $j++) { 

													 			if ($j==1 && $Lunes==0) { continue; }

													 			if ($j==2 && $Martes==0) { continue; }

													 			if ($j==3 && $Miercoles==0) { continue; }

													 			if ($j==4 && $Jueves==0) { continue; }

													 			if ($j==5 && $Viernes==0) { continue; }

													 			if ($j==6 && $Sabado==0) { continue; }

													 			if ($j==7 && $Domingo==0) { continue; }
													 			
													 			$hora_mostrar = date('H_s', strtotime($hora_inicial) + 0);
													 			
													 			?>

													 			<td style="width: 12%"><center> <input checked type="checkbox" name="<?php echo $j."-".$hora_mostrar ?>"> </center> </td>

													 			<?php
													 		}

													 		?>

													 	</tr>
 
													 	<?php

													 	$hora_inicial = date('H:s', strtotime($hora_inicial) + 3600);

													 	if (strtotime($hora_inicial)==strtotime($cierre)) { break; }
													 }
												}


												?>
  

											 
 
										</tbody>



								</table>


			<br><br><input type="submit" id="boton_formulario" style="display: inline-block;  " value="<?php if ($idioma == "es") { ?>Continuar<?php } else if ($idioma == "en"){ ?>Continue<?php } ?>"><br> <br><br> <br>
			</center>

	</form> 

	</form> 

	

	<?php
}






























else

{
	?>

	<form id="form_perfil" name="form_perfil" action="tu_perfil.php" method="GET" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">

			<input type="hidden" name="op" value="cargar_servicios_2">

			<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">




			<?php 

			$id_productos = $_GET["id"];

			$consulta="SELECT * FROM productos WHERE id_productos = '$id_productos';";
 
			$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");
			 
			$registro = $ejecutar_consulta ->fetch_assoc();

			$cita_simultaneas = $registro["cita_simultaneas"];

		 

			?>

			 
			 <input type="hidden" name="cita_simultaneas" value="<?php echo $cita_simultaneas ?>">  


<?php if ($idioma == "es") { ?> Duracion Máxima de la Cita (Minutos) <?php } else if ($idioma == "en"){ ?> Maximum Appointment Time (Minutes) <?php } ?>


	<br><br>

			<select style="background:#fff; font-size:1.2rem; font-family:Raleway"  id="duracion_cita" class="cambio" name="duracion_cita" required onchange="carga_categoria_cita(this.value)" >

				<option value="" ><?php if ($idioma == "es") { ?>Seleccione la duración de la cita<?php } else if ($idioma == "en"){ ?> Select the duration of the appointment <?php } ?></option>

				<!--<option value="1"><?php if ($idioma == "es") { ?> Hasta 30 Minutos <?php } else if ($idioma == "en"){ ?> Up to 30 minutes <?php } ?> </option>-->
				<option value="2"><?php if ($idioma == "es") { ?> Hasta 60 Minutos <?php } else if ($idioma == "en"){ ?> Up to 60 minutes <?php } ?>  </option>

			</select>

			  <br><br>



			<center>

			
 
			<input type='hidden' value="<?php echo $id ?>" name='id'>

			<input type="submit" id="boton_formulario" style="display: inline-block;  " value="<?php if ($idioma == "es") { ?>Cargar Horarios<?php } else if ($idioma == "en"){ ?>Load Schedules<?php } ?>"><br> <br><br> <br>
			</center>

	</form> 



	<?php
}

?>



