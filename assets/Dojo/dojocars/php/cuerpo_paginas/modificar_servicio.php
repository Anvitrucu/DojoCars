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


<section id="Cuerpo_perfil">

	&nbsp;&nbsp;&nbsp;&nbsp;<a href="tu_perfil.php?op=servicios_cargados"><input type="button" id="boton_formulario" value="< Return "></a>

<center>
	
	<?php if ($idioma == "es") { ?><h1>Modificar Servicios</h1><?php } else if ($idioma == "en"){ ?><h1>Modify Services</h1><?php } ?>

</center>


<?php
 

$id_producto = $_GET["id"];


$consulta_pro="SELECT * FROM productos WHERE id_productos = '$id_producto';";

$ejecutar_consulta_pro = $conexion->query($consulta_pro) or die ("No se ejecuto query");

$registro_pro = $ejecutar_consulta_pro ->fetch_assoc();
 
 ?>

 
 <section id="Cuerpo_perfil">
<form id="form_perfil" name="form_perfil" action="php/funciones/subir_modificar_servicio.php" method="POST" enctype="multipart/form-data">
 

 <input type="hidden" name="id_producto" value="<?php echo $id_producto ?>">

<?php

include ("php/funciones/comprobar_usuario.php");

	 



		$consulta_servicio ="SELECT * FROM categorias_general WHERE id_categoria_producto='$id_categoria_producto' ";

		$ejecutar_consulta_servicio = $conexion->query($consulta_servicio) or die ("No se ejecuto query"); 

		$registro_sercios = $ejecutar_consulta_servicio->fetch_assoc();

		$categoria_producto = utf8_encode($registro_sercios["categoria_producto"]);

		$categoria_ingles = utf8_encode($registro_sercios["categoria_ingles"]);



		?>

		 
			<p class='titulo' style="font-size:1.7rem">
			<?php if ($idioma == "es") { ?>Titulo del Servicio :<?php } else if ($idioma == "en"){ ?>Service Title:<?php } ?>  &nbsp;&nbsp;&nbsp; 
				  </p><br>
				<center><input value="<?php echo utf8_encode($registro_pro["nombre_0"]) ?>" type="text" id="nombre_producto" class="cambio" size="80%" name="nombre_producto" placeholder="Requerido // Required " title="Requerido // Required " maxlength="120" required/><br><br>
	 



		 
<br><br>
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
												<td style="width:12%"><center><input <?php if ($registro_pro["Lunes"]==1) {echo "checked"; } ?> value="1" type="checkbox" name="Lunes"></td>
												<td style="width:12%"><center><input <?php if ($registro_pro["Martes"]==1) {echo "checked"; } ?> value="1" type="checkbox" name="Martes"></td>
												<td style="width:12%"><center><input <?php if ($registro_pro["Miercoles"]==1) {echo "checked"; } ?> value="1" type="checkbox" name="Miercoles"></td>
												<td style="width:12%"><center><input <?php if ($registro_pro["Jueves"]==1) {echo "checked"; } ?> value="1" type="checkbox" name="Jueves"></td>
												<td style="width:12%"><center><input <?php if ($registro_pro["Viernes"]==1) {echo "checked"; } ?> value="1" type="checkbox" name="Viernes"></td>
												<td style="width:12%"><center><input <?php if ($registro_pro["Sabado"]==1) {echo "checked"; } ?> value="1" type="checkbox" name="Sabado"></td>
												<td style="width:12%"><center><input <?php if ($registro_pro["Domingo"]==1) {echo "checked"; } ?> value="1" type="checkbox" name="Domingo"></td>

											</tr>
 
										</tbody>
 
								</table>	 
 























  

		<br><br><br>


		<p class='titulo' style="font-size:1.7rem"> <?php if ($idioma == "es") { ?>Cupos Disponibles por sesión ;<?php } else if ($idioma == "en"){ ?>Available Quotas per session <?php } ?></p>
	  <input type="number" value="<?php echo utf8_encode($registro_pro["cita_simultaneas"]) ?>" id="cantidad_disponible" class="cambio" size="50%" name="cantidad_disponible" step="any" value="0"  style="padding:1%" maxlength="60" required/><br><br> 
			








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
				<center><textarea style='width: 90%' rows="10"  id="descripcion" class="cambio" name="descripcion" maxlength="2400" /><?php echo addslashes(utf8_encode($registro_pro["descripcion_producto_0"])) ?></textarea>

				</textarea></center> 

				 
			</div><br><br>

 
			  
			 
 </b> <p class='titulo' style="font-size:1.7rem">
		<?php if ($idioma == "es") { ?>Precio de reserva <br>(El precio final puede variar despues de asistir a la cita)<?php } else if ($idioma == "en"){ ?>Reservation price <br> (The final price may vary after attending the appointment)<?php } ?>
  &nbsp;&nbsp;&nbsp;&nbsp; </p> 





	<?php if ($idioma == "es") { ?>Precio de Cita a domicilio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } else if ($idioma == "en"){ ?>Appointment price at home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
	  <input type="number" id="precio_producto" class="cambio" style="width: 30%" name="precio_producto_domicilio" step="any"  value="<?php echo utf8_encode($registro_pro["precio_producto_domicilio"]) ?>"  style="padding:2%" maxlength="60" required/>&nbsp;USD<br><br>


	  <?php if ($idioma == "es") { ?>Precio de Cita en establecimiento&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } else if ($idioma == "en"){ ?>Appointment price in establishment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
	  <input type="number" id="precio_producto" class="cambio" style="width: 30%" name="precio_producto" step="any"  value="<?php echo utf8_encode($registro_pro["precio_producto"]) ?>"  style="padding:2%" maxlength="60" required/>&nbsp;USD<br><br>



	  
 
 

 	

		<CENTER>	<input type="submit" id="boton_formulario" value="<?php if ($idioma == "es") { ?>Siguiente<?php } else if ($idioma == "en"){ ?>Next<?php } ?>"><br><br></CENTER>

			<?php include ("php/funciones/mensaje.php"); ?>


		</form>
		</div>

 










 



 
