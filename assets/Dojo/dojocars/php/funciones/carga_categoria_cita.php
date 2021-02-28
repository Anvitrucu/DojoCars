<?php 

$mes = $_POST["mes"];

if ($mes==1) { // TEMPORAL
	?>

	Fecha de Inicio: &nbsp;&nbsp;&nbsp; <input style="padding: 1%;  "   type="date" name="cita_fecha_inicio"><br><br>
	Fecha de Cierre: &nbsp;&nbsp;&nbsp; <input style="padding: 1%; "  type="date" name="cita_fecha_cierre"><br><br>


	Citas Simultaneas Permitidas: &nbsp;&nbsp;&nbsp; <input style="padding: 1%; width: 10%" type="number" id="cita_simultaneas" class="cambio"   name="cita_simultaneas" placeholder="Requerido // Required " title="Requerido // Required " maxlength="120" required/>  <br><br>


	Duracion de la Cita (Minutos): &nbsp;&nbsp;&nbsp; <input style="padding: 1%; width: 10%" type="number" id="cita_duracion" class="cambio"   name="cita_duracion" placeholder="Requerido // Required " title="Requerido // Required " maxlength="120" required/>  <br><br>



	<?php
}


else if ($mes==2) { // ILIMITADO
	
	?>

	Citas Simultaneas Permitidas: &nbsp;&nbsp;&nbsp; <input style="padding: 1%; width: 10%" type="number" id="cita_simultaneas" class="cambio"   name="cita_simultaneas" placeholder="Requerido // Required " title="Requerido // Required " maxlength="120" required/>  <br><br>

	Duracion de la Cita (Minutos): &nbsp;&nbsp;&nbsp; <input style="padding: 1%; width: 10%" type="number" id="cita_duracion" class="cambio"   name="cita_duracion" placeholder="Requerido // Required " title="Requerido // Required " maxlength="120" required/>  <br><br>

	<?php
}
?>