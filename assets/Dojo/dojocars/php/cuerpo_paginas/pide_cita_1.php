<?php 


$busqueda_11="SELECT * FROM precios WHERE id_precios='1'";

$ejecutar_consulta_11 = $conexion->query($busqueda_11);

$registro_11 = $ejecutar_consulta_11->fetch_assoc();  

 



if (isset($_SESSION["correo"])) {
	?>

	<h2><?php if ($idioma="es") {echo "BIENVENIDOS AL PANEL DE SOLICITUD DE CITA EN LINEA";} else {echo "WELCOME TO THE ONLINE APPOINTMENT APPLICATION PANEL";} ?></h2><br><br>




	<h3><?php if ($idioma="es") { ?> Antes de Iniciar tu Reserva te Invitamos a verificar nuestra <a href="img/precios/<?php echo $registro_11["archivo"] ?>">LISTA DE PRECIOS <?php } else {?> We invite you to check our <a href="img/precios/<?php echo $registro_11["archivo"] ?>">PRICE LIST <?php } ?></a>.

	 

	 <form id="form_perfil" name="form_perfil" action="index.php" method="GET" enctype="multipart/form-data" style="font-family:'Raleway'; color:#444444; font-size: 1.3rem; text-align: center;">

	 	<input type="hidden" name="menu" value="pide_cita_2">

                Paso 1. Seleccione El Tamaño de su Tatuaje<br><br>

		<select name="med" style="width: 50%; padding: 1%">
			<option value="1">De 5 a 15 Centímetros</option>

			<option value="2">Mas de 15 y hasta  30 Centímetros</option>

			<option value="3">Mayor a 30 Centímetros</option>
		</select><br><br>


               <center><input type="submit" id="boton_generico" value="CONTINUAR >" ><br><br>
			<center>  <?php include("php/funciones/mensaje.php") ?> </center>
	 </form>  
		
		
</h3> 
 

	<?php
}


else
{

	?>

	<h2><?php if ($idioma="es") {echo "BIENVENIDOS AL PANEL DE SOLICITUD DE CITA EN LINEA";} else {echo "WELCOME TO THE ONLINE APPOINTMENT APPLICATION PANEL";} ?> </h2><br><br>


	<h3>Debe <a href='index.php?menu=inscribete_iniciar'>

	<?php if ($idioma="es") {echo "INICIAR SESION O REGISTRARSE</a> para procesar su cita en el sistema";} else {echo "LOG IN OR SIGN UP </a> to process your appointment in the system";} ?></h3> 

	<?php

}
?>