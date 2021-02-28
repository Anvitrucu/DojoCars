<?php 

$nombre = $_GET["nombre"];

$correo = $_GET["correo"];

$pais = $_GET["pais"];

$mensaje = $_GET["mensaje"];



$destino = $correo;




 

$asunto = "Contacto a Central - dojocars";

$comentario= "<html><center><img src='https://dojocars.com/img/DOJO_CARS_LOGO.png' style='width:15%;'></center>  <br><br>"."El usuario<b>  ".$nombre." envía el siguiente mensaje: <br><br> ".$mensaje."<br><br></center>Correo: ".$correo."<br><br><center> WWW.DOJOCARS.COM <br><br></center>";



 $emaildelusuarioqueloenvia = "Dojocars.com";
 

 $destino = "corporativo.ophyra@gmail.com";

  //$destino = "corporativo.ophyra@gmail.com";

$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

$header .= "Content-Type: text/html; charset=UTF-8\r\n";

 
 
mail($destino,$asunto,$comentario,$header);

header("Location: ../../index.php?menu=correo_enviado_exitosamente");



?>