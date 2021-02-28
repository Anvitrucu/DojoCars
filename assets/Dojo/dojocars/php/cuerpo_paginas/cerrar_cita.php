<h2><?php if ($idioma == "es")  { echo "Para cerrar el pedido, debes redactar un breve resumen de los trabajos realizados junto con el precio final. "; } else if ($idioma == "en")  { echo "To close the order, you must write a brief summary of the work done together with the final price."; }  ?>.</h2>

	<h3><?php if ($idioma == "es")  { echo "En caso de que el cliente no haya asistido a la cita, el sistema le pagara a usted, unicamente el monto de la reservacion."; } else if ($idioma == "en")  { echo "In case the client has not attended the appointment, the system will pay you, only the amount of the reservation."; }   ?>.</h3>  


 


	 

	
	 <form id="form_perfil" name="form_perfil" action="php/funciones/subir_cerrar_pedido.php" method="GET" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">

	 	<center> <fieldset style="width: 80%;">


	 		<script type="text/javascript">
	 			

	 			function tipo_servicio (variable){

	 				if (variable=="SI") {
	 					document.getElementById("div_tipo_servicio").innerHTML="<textarea required style='width:80%;' name='informe_cierre' rows='5' placeholder='Resumen de los Servicios Realizados'></textarea><br><br><input required id='precio_final' name='precio_final' type='number' placeholder='Monto a Cobrar' step='any' style='width:30%; padding:2%'> $<br><br>"+

	 						"Datos del cliente para Facturacion:<br><br>"+

	 						"<input type='text' name='pais_facturacion'  placeholder='Pais' style='width:80%;'> "+

	 						"<input type='text' name='estado_facturacion'  placeholder='Estado' style='width:80%;'> "+

	 						"<input type='text' name='ciudad_facturacion'  placeholder='Ciudad' style='width:80%;'> "+

	 						"<input type='text' name='direccion_facturacion'  placeholder='Calle, Avenida, Casa, departamento' style='width:80%;'> "+

	 						"<input type='text' name='zip_facturacion' placeholder='ZIP Code' style='width:80%;'> <br><br>";
	 				}

	 				else {
	 					document.getElementById("div_tipo_servicio").innerHTML="El sistema le cargara a su cuenta, el porcentaje correspondiente a la reserva menos los gastos administrativos<br><br>";
	 				}

	 			}
	 		</script>

	 		<select required="" name="tipo" onchange="tipo_servicio(this.value)" style="width: 60%; padding: 1%">
	 			<option value=""> El cliente asistio a su cita ? </option>
	 			<option value="SI">SI</option>
	 			<option value="NO">NO</option>
	 		</select><br><br>

	 		<div id="div_tipo_servicio" style="width: 100%"></div>

 

	 	

	 	<input type="hidden" name="id_cita" value="<?php echo $_GET["id"] ?>">


	 	<input type="submit" value="Finalizar Pedido" id="boton_generico">

	 </fieldset>