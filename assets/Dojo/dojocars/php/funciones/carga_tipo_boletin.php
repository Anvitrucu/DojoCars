<?php 

session_start();


$boletin = $_POST["boletin"];

$id_representante = $_SESSION["id_representante"];

include("conexion.php");

if ($boletin==1) {
	
	$consulta ="SELECT * FROM usuario_asociado WHERE id_representante='$id_representante' ORDER BY nombre_cliente";

	$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");

	$num_regs =  $ejecutar_consulta->num_rows;

	?>

	 

		<center>

			<input type="submit" id="boton_generico" value="Enviar a usuarios seleccionados">

		<center><br><br>



		<input type="hidden" name="contador" value="<?php echo $num_regs ?>">

		<table style="width: 100%">

						<thead>
								<tr>

									
									
			<th style="width: 50%" class="titulos_perfil"> Detalles</th>
									 
			<th style="width: 40%" class="titulos_perfil"> Accion </th>


								</tr>

						</thead>


						<tbody>


								<?php

								$cont = 0;

								while ($registro = $ejecutar_consulta->fetch_assoc())

								{

									$nombre_cliente= utf8_encode($registro["nombre_cliente"]);

									$id_cliente=$registro["id_cliente"];

									$ficha_telefono=$registro["ficha_telefono"];

									$ficha_cedula=$registro["ficha_cedula"];

									$id_cliente=$registro["id_cliente"];


									$consulta_2 ="SELECT * FROM usuario WHERE id_usuario='$id_cliente'";

									$ejecutar_consulta_2 = $conexion->query($consulta_2) or die ("No se ejecuto query");

									$registro2 = $ejecutar_consulta_2->fetch_assoc();


									$correo = $registro2["correo"];

									 
									?>

									<tr>
										<td>

											** <b>Nombre del Suscriptor:</b> <?php echo $nombre_cliente  ?>.<br><br> 

											** <b>Correo:</b> <?php echo $correo  ?>.<br> <br>

											** <b>ID:</b> <?php echo $ficha_cedula  ?>.<br> 

										 
									</td>

										

										
									<td> 

										<center><input type="checkbox" name="<?php echo $cont ?>" value="<?php echo $id_cliente ?>"></center>

					 
									</td>
									



									</tr>
 
									<?php

									$cont = $cont+1;

								}




								?>



						</tbody>



				</table>


	<?php

		 

}

else if ($boletin==2) {

	?>

	<center>

		<input type="submit" id="boton_generico" value="Enviar a todos los usuarios">

	<center>

	<?php
	


}

else if ($boletin==3) {


		$consulta_2 ="SELECT * FROM productos WHERE cita_representante='$id_representante'";

		$ejecutar_consulta_2 = $conexion->query($consulta_2) or die ("No se ejecuto query");

		

		?>

		<select   name="id_productos" style="width: 60%; padding: 2%" required="">
			<option value="">Cursos Disponibles</option>

			 
			<?php 

			while ($registro2 = $ejecutar_consulta_2->fetch_assoc()) {
				
				?>

				<option value="<?php echo $registro2["id_productos"] ?>"><?php echo utf8_encode($registro2["nombre_0"]) ?></option>

				<?php


			}

			?>
		</select>

		<br><br>

		<center>

			<input type="submit" id="boton_generico" value="Enviar a usuarios del curso o servicio?>">

		<center>
	

		<?php

	


}


?>