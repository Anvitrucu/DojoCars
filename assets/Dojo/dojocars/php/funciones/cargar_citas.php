<?php 



include("conexion.php");

session_start();

$id_producto = $_SESSION["id_producto"];

 

$fecha_cita = $_POST["fecha_cita"];

$fecha_cita = date("Y-m-d", strtotime($fecha_cita));


$array_dias['Sunday'] = "Sunday";
$array_dias['Monday'] = "Monday";
$array_dias['Tuesday'] = "Tuesday";
$array_dias['Wednesday'] = "Wednesday";
$array_dias['Thursday'] = "Thursday";
$array_dias['Friday'] = "Friday";
$array_dias['Saturday'] = "Saturday";


$hoy_comp = date("Y-m-d");

$hoy_comp = strtotime ( '-2 day' , strtotime ( $hoy_comp ) ) ;

$fecha_cita_comp = strtotime(date($fecha_cita));

if ($hoy_comp>=$fecha_cita_comp) {

 

	?>

	<h3>Your appointment must be requested at least one day in advance.</h3>

	<?php
}
 

 else


 {


 		$dia_semana = $array_dias[date('l', strtotime($fecha_cita))];

 ?>

 <input type="hidden" name="dia_semana" value="<?php echo $dia_semana ?>">

 <?php


if ($dia_semana=="xx") {
	
	?>

	Nuestros Dias de Trabajo son de Lunes a Sabado, Por favor intente otra fecha

	<?php
}

else   {

	$i = 0; 
 

	if ($dia_semana=="Sunday") {
		$comparacion="7";
	}

	else if ($dia_semana=="Monday") {
		$comparacion="1";
	}

	else if ($dia_semana=="Tuesday") {
		$comparacion="2";
	}

	else if ($dia_semana=="Wednesday") {
		$comparacion="3";
	}

	else if ($dia_semana=="Thursday") {
		$comparacion="4";
	}

	else if ($dia_semana=="Friday") {
		$comparacion="5";
	}

	else if ($dia_semana=="Saturday") {
		$comparacion="6";
	}

	
 	 

	$busqueda_1 = "SELECT * FROM producto_cita_cesta WHERE  dia='$comparacion' AND  id_productos='$id_producto' ORDER BY inicio "; 

	$ejecutar_busqueda_1 = $conexion->query($busqueda_1);

	$total_1 = $ejecutar_busqueda_1->num_rows;



	if ($total_1 ==0) {
		
		echo "<h3>- Day not available - Check and try again - </h3>";
	}

	else {

		?>

		<h3>Select from the Available Times </h3>


	<table>
		<thead><tr><b><?php echo $dia_semana ?></b><br></tr></thead><br>
		<tbody>
			<tr>



				<?php 

					while ($arreglo = $ejecutar_busqueda_1->fetch_assoc()) 

					{
		
					$id_producto_cita_cesta = $arreglo["id_producto_cita_cesta"];

					$inicio = $arreglo["inicio"];

					?>

					<td onclick="fijar_hora($(this).data('id'))" data-id="<?php echo $inicio ?>" id="tabla_calendario_<?php echo $inicio  ?>" class="tabla_horas"><?php echo $inicio  ?> H.

						<input type="hidden" name="id_producto_cita_cesta" value="<?php echo $id_producto_cita_cesta ?>"></td>

					<?php					

					}
			
			?>

			
			

			 
				
			</tr>
		</tbody>
	</table>
 <br><br>

 <div id="hora_disponible_change"></div>





	  <center><input type="submit" id="boton_generico" value="CONTINUE >" width="7%"><br><br>


		<?php

	}


 
	?>

	
	<?php
}

 

 }

 