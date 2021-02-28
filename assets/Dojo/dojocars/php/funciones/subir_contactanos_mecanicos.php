<?php 

$tipo = $_GET["tipo"];

$nombre_agencia = $_GET["nombre_agencia"];

$nombre_representante = $_GET["nombre_representante"];

$direccion = $_GET["direccion"];

$years = $_GET["years"];

$zip = $_GET["zip"];

$Servicios = $_GET["Servicios"];

$telefono = $_GET["telefono"];

$email = $_GET["email"];


$mensaje_adicional = $_GET["mensaje_adicional"];


 





$destino = "corporativo.ophyra@gmail.com";

$asunto = "Solicitud de Ingreso";

$comentario= "<html><center><img src='http://dojocars.com/img/DOJO_CARS_LOGO.png' style='width:30%;'></center>  <br><br>

<center>Solicitud de Ingreso al Sistema</center>

<br><br>

<b>Tipo de Solicitud </b>: ".$tipo."<br><br>
<b>Nombre de la Agencia </b>: ".$nombre_agencia."<br><br>
<b>Representante </b>: ".$nombre_representante."<br><br>
<b>Direccion </b>: ".$direccion."<br><br>
<b>Años de experiencia </b>: ".$years."<br><br>
<b>Codigo Postal </b>: ".$zip."<br><br>
<b>Servicios que ofrece </b>: ".$Servicios."<br><br>
<b>Telefono de Contacto </b>: ".$telefono."<br><br>
<b>Email </b>: ".$email."<br><br>
<b>Mensaje Adicional </b>: ".$mensaje_adicional."<br><br><br><br>

<center>WWW.DOJOCARS.COM</center>



";

 

$emaildelusuarioqueloenvia = "Dojocars.com";

$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

$header .= "Content-Type: text/html; charset=UTF-8\r\n";

 
 
mail($destino,$asunto,$comentario,$header);

 
 

$mensaje = "<p style='color:green'>Your message was successfully sent</p>";

			header("Location: ../../index.php?menu=mensaje_enviado&mensaje=$mensaje");



?>