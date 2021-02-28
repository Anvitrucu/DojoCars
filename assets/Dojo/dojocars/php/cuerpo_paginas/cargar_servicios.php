<!-- Funcion para activar AJAX -->

<script type="text/javascript">

function tipo_busqueda(variable) // Aqui va el nombre de la funcion
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
document.getElementById("div_tipo_busqueda").innerHTML=xmlhttp.responseText;  // Aqui va el nombre del DIV a modificar
}
}
xmlhttp.open("POST","php/funciones/select_tipo_busqueda.php",true); // Aqui va el archivo que se activa al cambiar
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("var_tipo="+variable); // Aqui va el nombre de la variable a asignar
}






function tipo_busqueda2(str)
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
document.getElementById("div_tipo_busqueda2").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/funciones/select_tipo_busqueda2.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("var_tipo2="+str);
}


</script>












&nbsp;&nbsp;&nbsp;&nbsp;<a href="tu_perfil.php?op=administrador_productos"><input type="button" id="boton_formulario" value="< Return "></a>



<section id="Cuerpo_perfil">
<form id="form_perfil" name="form_perfil" action="php/funciones/subir_producto.php" method="POST" enctype="multipart/form-data">

<center>
	
	<?php if ($idioma == "es") { ?><h1>Pánel de Publicación de Servicios</h1><?php } else if ($idioma == "en"){ ?><h1>Services Publishing Board</h1><?php } ?>

</center>


<?php


$_SESSION["idioma"] = $idioma;

include ("php/funciones/comprobar_usuario.php");

		$consulta ="SELECT * FROM productos ";

		$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");

		$Top = $ejecutar_consulta->num_rows;

		?>

		<div id="texto_perfil">

		
			<?php if ($idioma == "es") {   echo "<h3 style='font-size:1rem'>Usted ha publicado ". $Top. " servicios.</h3>  <BR>";    } 

 


			else if ($idioma == "en"){   echo "<h3 style='font-size:1rem'>You have published ". $Top. " services.</h3>  <BR> "; } ?>

		
		 

		<div>
			<p class='titulo' style="font-size:1.7rem">
			<?php if ($idioma == "es") { ?>Titulo del Servicios:<?php } else if ($idioma == "en"){ ?>Service Title:<?php } ?>  &nbsp;&nbsp;&nbsp; 
				  </p><br>
				<center><input type="text" id="nombre_producto" class="cambio" style="width: 80%" name="nombre_producto" placeholder="Requerido // Required " title="Requerido // Required " maxlength="120" required/><br><br>
		</div>



<?php 

if ($nivel_usuario=="4") {
	?>

	<input type="hidden" name="id_representante" value="<?php echo $id_usuario ?>">

	<?php
}

else {

	?>

		<p class='titulo' style="font-size:1.7rem"> 
		<?php if ($idioma == "es") { ?>Representante:<?php } else if ($idioma == "en"){ ?> Representative: <?php } ?> 
		&nbsp;&nbsp;&nbsp; </label><br> 
		<center><select style="background:#fff; font-size:1.2rem; font-family:Raleway"  id="id_representante" class="cambio" name="id_representante" required  >

			<option value="" >
			<?php if ($idioma == "es") { ?>Elige entre las opciones de la lista<?php } else if ($idioma == "en"){ ?> Choose from the list options <?php } ?>
			</option>

			<?php include("php/funciones/select_representante.php"); ?>

		</select>

		<br><br>

	<?php
}

?>

		 
<p class='titulo' style="font-size:1.7rem"> 
<?php if ($idioma == "es") { ?>Dias de Trabajo:<?php } else if ($idioma == "en"){ ?> Workdays: <?php } ?> 
		  &nbsp;&nbsp;&nbsp; </label></p> 
 
	
								<table style="width: 100%">

										<thead>
												<tr>

													
													
													<th style="width:12%; font-size: 0.8rem">

		<?php if ($idioma == "es") { ?> Lunes<?php } else if ($idioma == "en"){ ?> Monday <?php } ?>
													</th>
													<th style="width:12%; font-size: 0.8rem">
		<?php if ($idioma == "es") { ?> Martes<?php } else if ($idioma == "en"){ ?> Tuesday <?php } ?>
												
													</th>

													<th style="width:12%; font-size: 0.8rem">
		<?php if ($idioma == "es") { ?> Miercoles:<?php } else if ($idioma == "en"){ ?> Wednesday <?php } ?>
												
													</th>
													<th style="width:12%; font-size: 0.8rem">
		<?php if ($idioma == "es") { ?> Jueves:<?php } else if ($idioma == "en"){ ?> Thursday <?php } ?>
											
													</th>

													<th style="width:12%; font-size: 0.8rem">
		<?php if ($idioma == "es") { ?> Viernes:<?php } else if ($idioma == "en"){ ?> Friday <?php } ?>
											
													</th>

													<th style="width:12%; font-size: 0.8rem">
		<?php if ($idioma == "es") { ?> Sabado:<?php } else if ($idioma == "en"){ ?> Saturday <?php } ?>
											
													</th>

													<th style="width:12%; font-size: 0.8rem">
		<?php if ($idioma == "es") { ?> Domingo:<?php } else if ($idioma == "en"){ ?> Sunday <?php } ?>
											
													</th>
													 


												</tr>

										</thead>


										<tbody>
 
											<tr>
												<td style="width:12%"><center><input value="1" type="checkbox" name="Lunes"></td>
												<td style="width:12%"><center><input value="1" type="checkbox" name="Martes"></td>
												<td style="width:12%"><center><input value="1" type="checkbox" name="Miercoles"></td>
												<td style="width:12%"><center><input value="1" type="checkbox" name="Jueves"></td>
												<td style="width:12%"><center><input value="1" type="checkbox" name="Viernes"></td>
												<td style="width:12%"><center><input value="1" type="checkbox" name="Sabado"></td>
												<td style="width:12%"><center><input value="1" type="checkbox" name="Domingo"></td>

											</tr>
 
										</tbody>
 
								</table>	 
 























  

		<br><br><br>


		<p class='titulo' style="font-size:1.7rem"> <?php if ($idioma == "es") { ?>Cupos Disponibles por sesión ;<?php } else if ($idioma == "en"){ ?>Available Quotas per session <?php } ?></p>
	<center>  <input type="number" id="cantidad_disponible" class="cambio" size="50%" name="cantidad_disponible" step="any" value="0"  style="padding:1%" maxlength="60" required/><br><br> 
			




		 <p class='titulo' style="font-size:1.7rem"> 
		<?php if ($idioma == "es") { ?>Categoria del Servicio:<?php } else if ($idioma == "en"){ ?> Service Category: <?php } ?> 
		  &nbsp;&nbsp;&nbsp; </label><br> 
		<center><select style="background:#fff; font-size:1.2rem; font-family:Raleway"  id="id_categoria_producto" class="cambio" name="id_categoria_producto" required onchange="tipo_busqueda2(this.value)" >

								<option value="" >
								<?php if ($idioma == "es") { ?>Elige entre las opciones de la lista<?php } else if ($idioma == "en"){ ?> Choose from the list options <?php } ?>
								</option>

								<?php include("php/funciones/select_categoria_global.php"); ?>

		</select>

<div id="div_tipo_busqueda2" style="display: inline-block; " ></div>





		 
		</center>
 <br><br>
 <img width="100%" src="img/barra.jpg"><br><br>


			<div>
				</b> <p class='titulo' style="font-size:1.7rem">
				<?php if ($idioma == "es") { ?>Descripción del Servicio  :<?php } else if ($idioma == "en"){ ?>Service Description  :<?php } ?>
				 </p>  
				<center><textarea style='width: 50%' rows="10"  id="descripcion" class="cambio" name="descripcion" maxlength="2400" /></textarea>

				</textarea></center> 

				 
			</div><br><br>


 
			  
			 
 </b> <p class='titulo' style="font-size:1.7rem">
	<?php if ($idioma == "es") { ?>Precio de reserva <br>(El precio final puede variar despues de asistir a la cita)<?php } else if ($idioma == "en"){ ?>Reservation price <br> (The final price may vary after attending the appointment)<?php } ?>
  &nbsp;&nbsp;&nbsp;&nbsp; </p> 





	<?php if ($idioma == "es") { ?>Precio de Cita a domicilio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } else if ($idioma == "en"){ ?>Appointment price at home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
	  <input type="number" id="precio_producto" class="cambio" style="width: 30%" name="precio_producto_domicilio" step="any" value="0"  style="padding:2%" maxlength="60" required/>&nbsp;USD<br><br>




<?php 

		if ($establecimiento_activo_general=="SI") 

		{
			?>

			<?php if ($idioma == "es") { ?>Precio de Cita en establecimiento&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } else if ($idioma == "en"){ ?>Appointment price in establishment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
	 		 <input type="number" id="precio_producto" class="cambio" style="width: 30%" name="precio_producto" step="any" value="0"  style="padding:2%" maxlength="60" required/>&nbsp;USD<br><br>

			<?php 

		}

		else {

			?>

			<h3>Si desea activar un establecimiento o area de trabajo propio, haga <a href="tu_perfil.php?op=datos_basicos">Click Aqui</a></h3>


			<?php
		}

			?>

	  



	  
 

 	

		<CENTER>	<input type="submit" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Siguiente<?php } else if ($idioma == "en"){ ?>Next<?php } ?>"><br><br></CENTER>

			<?php include ("php/funciones/mensaje.php"); ?>


		</form>
		</div>

 










 
