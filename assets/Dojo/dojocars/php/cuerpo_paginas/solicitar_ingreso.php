<script type="text/javascript">
	
	function cambiar_formulario_es(varo)
	{

		

		if (varo=='Taller') {

			document.getElementById("formulario_especifico").innerHTML =
			"<br><br><input type='text' style='width:60%;' name='nombre_agencia' placeholder='Nombre de su Agencia o Taller' ><br><br>"+
			"<input type='text' style='width:60%;' name='nombre_representante' placeholder='Su Nombre' ><br><br>"+
			"<input type='text' style='width:60%;' name='direccion' placeholder='Direccion' ><br><br>"+
			"<input type='text' style='width:60%;' name='years' placeholder='Años en el Mercado' ><br><br>"+
			"<input type='text' style='width:60%;' name='zip' placeholder='Codigo Postal' ><br><br>"+
			"<input type='text' style='width:60%;' name='Servicios' placeholder='Servicios que ofrece' ><br><br>"+
			"<input type='text' style='width:60%;' name='telefono' placeholder='Telefonos de Contacto' ><br><br>"+
			"<input type='email' style='width:60%;' name='email' placeholder='Correo' ><br><br>"+
			"<textarea style='width:60%' rows='6' name='mensaje_adicional' placeholder='Mensaje Adicional'></textarea><br><br>"+
			"<input type='hidden'   name='tipo'value='Taller' ><br><br>"+
			"<input type='submit'  value='Enviar Solicitud'  id='boton_generico'><br><br>";

		}

		else if (varo=='Agente_Independiente') {

			document.getElementById("formulario_especifico").innerHTML =
			
			"<br><br><input type='text' style='width:60%;' name='nombre_representante' placeholder='Su Nombre' ><br><br>"+
			"<input type='text' style='width:60%;' name='direccion' placeholder='Direccion' ><br><br>"+
			"<input type='text' style='width:60%;' name='years' placeholder='Años en el Mercado' ><br><br>"+
			"<input type='text' style='width:60%;' name='zip' placeholder='Codigo Postal' ><br><br>"+
			"<input type='text' style='width:60%;' name='Servicios' placeholder='Servicios que ofrece' ><br><br>"+
			"<input type='text' style='width:60%;' name='Certificados' placeholder='Cantidad y tipo de Certificados' ><br><br>"+
			"<input type='text' style='width:60%;' name='telefono' placeholder='Telefonos de Contacto' ><br><br>"+
			"<input type='email' style='width:60%;' name='email' placeholder='Correo' ><br><br>"+
			"<textarea style='width:60%' rows='6' name='mensaje_adicional' placeholder='Mensaje Adicional'></textarea><br><br>"+
			"<input type='hidden'   name='tipo'value='Agente_Independiente' ><br><br>"+
			"<input type='submit'  value='Enviar Solicitud' id='boton_generico'><br><br>";
		}
	}







	function cambiar_formulario_en(varo)
	{

		

		if (varo=='Taller') {

			document.getElementById("formulario_especifico").innerHTML =
			"<br><br><input type='text' style='width:60%;' name='nombre_agencia' placeholder='Name of your Agency or Workshop' ><br><br>"+
			"<input type='text' style='width:60%;' name='nombre_representante' placeholder='Your name' ><br><br>"+
			"<input type='text' style='width:60%;' name='direccion' placeholder='Address' ><br><br>"+
			"<input type='text' style='width:60%;' name='years' placeholder='Years in the Market' ><br><br>"+
			"<input type='text' style='width:60%;' name='zip' placeholder='ZIP Code' ><br><br>"+
			"<input type='text' style='width:60%;' name='Servicios' placeholder='Services offered' ><br><br>"+
			"<input type='text' style='width:60%;' name='telefono' placeholder='Telephone contacts' ><br><br>"+
			"<input type='email' style='width:60%;' name='email' placeholder='E-Mail' ><br><br>"+
			"<textarea style='width:60%' name='mensaje_adicional' rows='6' placeholder='Additional Message'></textarea><br><br>"+
			"<input type='hidden'   name='tipo'value='Taller' ><br><br>"+
			"<input type='submit'  value='Send Request'  id='boton_generico'><br><br>";

		}

		else if (varo=='Agente_Independiente') {

			document.getElementById("formulario_especifico").innerHTML =
			
			"<br><br><input type='text' style='width:60%;' name='nombre_representante' placeholder='Your name' ><br><br>"+
			"<input type='text' style='width:60%;' name='direccion' placeholder='Address' ><br><br>"+
			"<input type='text' style='width:60%;' name='years' placeholder='Years in the Market' ><br><br>"+
			"<input type='text' style='width:60%;' name='zip' placeholder='ZIP Code' ><br><br>"+
			"<input type='text' style='width:60%;' name='Servicios' placeholder='Services offered' ><br><br>"+
			"<input type='text' style='width:60%;' name='Certificados' placeholder='Cantidad y tipo de Certificados' ><br><br>"+
			"<input type='text' style='width:60%;' name='telefono' placeholder='Telephone contacts' ><br><br>"+
			"<input type='email' style='width:60%;' name='email' placeholder='E-Mail' ><br><br>"+
			"<textarea style='width:60%' name='mensaje_adicional' rows='6' placeholder='Additional Message'></textarea><br><br>"+
			"<input type='hidden'   name='tipo'value='Agente_Independiente' ><br><br>"+
			"<input type='submit'  value='Send Request' id='boton_generico'><br><br>";
		}
	}


</script>



<br><br>
 
<center><fieldset style="width:90%"><br>

 			<?php 

 			if ($idioma == "es")

			{

				?>
				<h1>FORMA PARTE DE NUESTRO EQUIPO Y UNETE A LA COMUNIDAD DOJOCARS</h1>
				<?php

			}

			else if ($idioma == "en")

			{

				?>
				<h1>BE PART OF OUR TEAM AND JOIN THE DOJOCARS COMMUNITY</h1> 
				<?php

			}
			?>


 




<form id="form_perfil" name="form_perfil" action="php/funciones/subir_contactanos_mecanicos.php" method="GET" enctype="multipart/form-data">

			<select <?php if ($idioma=="es") { ?> onchange="cambiar_formulario_es(this.value)" <?php } else { ?> onchange="cambiar_formulario_en(this.value)" <?php  } ?>

			  style="width: 60%; padding: 1%" required name="tipo_solicitud">

				<option value=""><?php if ($idioma=="es") { echo "Seleccione la categoria que se ajuste a su perfil"; } else { echo "Select the category that fits your profile"; } ?></option>

				<option value="Taller"><?php if ($idioma=="es") { echo "Taller de mecánica automotriz"; } else { echo "Auto mechanics workshop"; } ?></option>

				<option value="Agente_Independiente"><?php if ($idioma=="es") { echo "Agente Independiente"; } else { echo "Independent Agent"; } ?></option>

			</select>

			<div style="width: 100%" id="formulario_especifico"></div><br><br>


			

			 <?php include("php/funciones/mensaje.php") ?>

			 </center>


			</form> 



</fieldset></center>