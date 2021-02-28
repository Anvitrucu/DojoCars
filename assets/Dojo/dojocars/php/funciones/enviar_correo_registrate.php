<?php 


$nombre = $_GET["nombre"];

$email = $_GET["email"];

$contrasena = $_GET["contrasena"];

 


 

$asunto = "Registro Exitoso - Dojocars.com";

$comentario= "<html><center><img src='https://dojocars.com/img/DOJO_CARS_LOGO.png' style='width:15%;'></center>  <br><br>BIENVENIDOS A NUESTRO SISTEMA AUTOMATIZADO DE REGISTRO DE CITAS<br><br>*** Cliente: ".$nombre."<br><br>***Correo de Acceso: ".$email."<br><br>***Password: ".$contrasena."<br><br> <center> WWW.DOJOCARS.COM <br><br></center>";



$emaildelusuarioqueloenvia = "Dojocars.com";
 
// $destino = "yago_puentes_fernandez@hotmail.com";

$destino = $email;

$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

$header .= "Content-Type: text/html; charset=UTF-8\r\n";

 
 
mail($destino,$asunto,$comentario,$header);


$mensaje = "Valide sus datos para acceder al sistema";

header("Location: Location: ../../index.php?menu=inscribete_iniciar&mensaje=$mensaje");



?>