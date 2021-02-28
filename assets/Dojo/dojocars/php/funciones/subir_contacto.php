<?php 
 
include ("conexion.php");

$usuario = $_POST["usuario"];

$correo = $_POST["correo"];

$mensaje = $_POST["mensaje"];

 




 
$destino = $correo;

$asunto = "Su Pregunta está siendo Procesada";

$comentario= "<html><center><img src='http://ledmove.com/img/LOGO.png' style='width:15%;'></center> "."<br><br>"."<center>Su pregunta fue enviada con éxito<br><br>En poco tiempo, un operador estara comunicandose con usted por esta via.<br><br>WWW.LEDMOVE.COM<BR><BR></center>";

$emaildelusuarioqueloenvia = "Ledmove.com";


$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

$header .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($destino,$asunto,$comentario,$header);






 

 


$destino = "led.culture.venezuela@gmail.com";

$asunto = "Usuario Pregunta";

$comentario= "<html><center><img src='http://ledmove.com/img/LOGO.png' style='width:15%;'></center> "."<br><br>"."<center>El usuario".$usuario.", correo (" .$correo . ") preguna:<br><br> ".$mensaje."<br><br>WWW.LEDMOVE.COM</center>";

$emaildelusuarioqueloenvia = "Ledmove.com";


$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

$header .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($destino,$asunto,$comentario,$header);





$mensaje = "Su mensaje fué enviado con exito -- En Poco tiempo estaremos contactándolo";

header("Location: ../../index.php?menu=reclamos_y_denuncias&mensaje=$mensaje");
 
?>