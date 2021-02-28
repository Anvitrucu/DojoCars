<h2><?php if ($idioma == "es")  { echo "COMPLETA TU PAGO PARA ACTIVAR TU RESERVACION. <br>RECUERDA QUE PUEDES CANCELAR HASTA 1 HORA ANTES DE LA CITA SIN CARGO ADICIONAL."; } else if ($idioma == "en")  { echo "COMPLETE YOUR PAYMENT TO ACTIVATE YOUR RESERVATION. <br>REMEMBER THAT YOU CAN CANCEL UP TO 1 HOUR BEFORE THE APPOINTMENT WITHOUT ADDITIONAL CHARGE"; }   ?>.</h2><br> 

 
 
<?php 

$pago_total = $_GET["pr"];

$id_dat = $_GET["id_dat"];

$_SESSION["pago_total"] = $pago_total;

$_SESSION["id_dat"] = $id_dat;


include("php/funciones/boton_de_pago.php");

?>