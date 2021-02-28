<?php 

$nombre = $_GET["nombre"];

$correo = $_GET["correo"];

$pais = $_GET["pais"];

$mensaje = $_GET["mensaje"];



$destino = $correo;





$destino = "corporativo.ophyra@gmail.com";

$asunto = "Contacto de Usuario ";

$comentario= "<html><center><img src='http://dojocars.com/img/DOJO_CARS_LOGO.png' style='width:30%;'></center>  <br><br>"."El usuario<b>  ".$nombre." tiene la siguiente pregunta: <br><br> ".$pais.":<br><br></center>Mensaje:".$mensaje."<br><br>Correo: ".$correo." <br><br><center>www.dojocars.com <br><br></center>";
 

$emaildelusuarioqueloenvia = "Dojocars.com";

$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

$header .= "Content-Type: text/html; charset=UTF-8\r\n";

 
 
mail($destino,$asunto,$comentario,$header);

 
 
 


$mensaje = "<p style='color:green'>Your message was successfully sent</p>";

			header("Location: ../../index.php?menu=mensaje_enviado&mensaje=$mensaje");



?>