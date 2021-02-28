<h2><?php if ($idioma == "es")  { echo "Para finalizar tu pedido, debes procesar tu pago por ".$_GET["monto_pag"]." USD"; } else if ($idioma == "en")  { echo "Para finalizar tu pedido, debes procesar tu pago por ".$_GET["monto_pag"]." USD"; }   ?>.</h2><br> 

 
 
<?php 

$pago_total = $_GET["monto_pag"];

$id_dat = $_GET["id_dat"];

$_SESSION["pago_total"] = $pago_total;

$_SESSION["id_dat"] = $id_dat;


include("php/funciones/boton_de_pago_2.php");



?>