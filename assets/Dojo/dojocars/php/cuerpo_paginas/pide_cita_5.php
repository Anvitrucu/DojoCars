<?php 


 

if ($_GET["value"]=="on") {

	 
	$id_dat = $_SESSION["id_dat"] ;

	include("php/funciones/conexion.php");
 
	if ($_SESSION["numero_pago"] == "Pago_1") {
		$insertar2 ="UPDATE `tatu_cita` SET `status` = 'Pagado' WHERE id_tatu_cita='$id_dat'";
	}

	else if ($_SESSION["numero_pago"] == "Pago_2") {
		$insertar2 ="UPDATE `tatu_cita` SET `status` = 'Pagado_final' WHERE id_tatu_cita='$id_dat'";
	}

	


	

	$ejecutar_consulta = $conexion->query($insertar2);

 	 
 
	$_SESSION["numero_pago"] = 0;
	
	?>


	<h2><?php if ($idioma == "es")  { echo "SU PAGO HA SIDO PROCESADO CON EXITO!!!."; } else if ($idioma == "en")  { echo "Your payment has been processed successfully !!!"; }   ?>.</h2><br> 




	<h3>- <?php if ($idioma == "es")  { ?> Lo invitamos a visitar su <a href="tu_perfil.php?op=user_citas">Panel Administrativo</a> Para verificar los datos de su cita <?php } else if ($idioma == "en")  { ?>We invite you to visit your <a href="tu_perfil.php?op=user_citas">C-Panel</a> To verify your appointment information <?php }    ?> - </h3> 

	<?php
}

else 

{

 

	?>

	<h2><?php if ($idioma == "es")  { echo "HUBO UN PROBLEMA CON SU METODO DE PAGO"; } else if ($idioma == "en")  { echo "THERE WAS A PROBLEM WITH YOUR PAYMENT METHOD"; }   ?>.</h2><br> 




	<h3>- <?php if ($idioma == "es")  { ?> Intente nuevamente su pago <a href="https://dojocars.com/index.php?id_producto=1&menu=pide_cita_4&id_dat=<?php echo $_SESSION["id_dat"] ?>&pr=<?php echo $_SESSION["pago_total"] ?>">AQUI</a>   <?php } else if ($idioma == "en")  { ?> CLick<a href="https://dojocars.com/index.php?id_producto=1&menu=pide_cita_4&id_dat=<?php echo $_SESSION["id_dat"] ?>&pr=<?php echo $_SESSION["pago_total"] ?>">Here</a>  to try again<?php }    ?> - </h3> 

	<?php
}


?>






