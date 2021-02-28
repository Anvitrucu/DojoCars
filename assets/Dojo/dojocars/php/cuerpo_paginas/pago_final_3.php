<?php 


if ($_GET["value"]=="on") {

	 
	$id_dat = $_SESSION["id_dat"] ;

	include("php/funciones/conexion.php");

	$insertar2 ="UPDATE `tatu_cita` SET `status` = 'Pagado_final' WHERE id_tatu_cita='$id_dat'";

	$ejecutar_consulta = $conexion->query($insertar2);
	
	?>


	<h2><?php if ($idioma == "es")  { echo "SU CITA HA SIDO CREADA CON EXITO!!!."; } else if ($idioma == "en")  { echo "YOUR APPOINTMENT HAS BEEN CREATED SUCCESSFULLY !!!"; }   ?>.</h2><br> 




	<h3>- <?php if ($idioma == "es")  { ?> Lo invitamos a visitar su <a href="tu_perfil.php?op=user_historico_citas">Panel Administrativo</a> Para verificar los datos de su pago <?php } else if ($idioma == "en")  { ?>We invite you to visit your <a href="tu_perfil.php?op=user_citas">C-Panel</a> To verify your payment information <?php }    ?> - </h3> 

	<?php
}

else 

{

 
 
	?>

	<h2><?php if ($idioma == "es")  { echo "HUBO UN PROBLEMA CON SU METODO DE PAGO"; } else if ($idioma == "en")  { echo "THERE WAS A PROBLEM WITH YOUR PAYMENT METHOD"; }   ?>.</h2><br> 




	<h3>- <?php if ($idioma == "es")  { ?> Intente nuevamente su pago <a href="tu_perfil.php?op=pago_final_2&id_dat=<?php echo $_SESSION["id_dat"] ?>&pr=<?php echo $_SESSION["pago_total"] ?>">AQUI</a>   <?php } else if ($idioma == "en")  { ?> CLick<a href="https://dojocars.com/index.php?id_producto=1&menu=pide_cita_4&id_dat=<?php echo $_SESSION["id_dat"] ?>&pr=<?php echo $_SESSION["pago_total"] ?>">Here</a>  to try again<?php }    ?> - </h3> 

	<?php
}


?>






