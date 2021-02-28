<?php 


include ("conexion.php");

$correo = addslashes($_POST["correo"]);

$consulta = "SELECT * FROM usuario WHERE correo='$correo'";

$ejecutar_consulta = $conexion->query($consulta) or die ("No se ejecuto query");

$num_regs =  $ejecutar_consulta->num_rows;

$registro = $ejecutar_consulta->fetch_assoc();



$correo = $registro["correo"];

$contrasena = $registro["contrasena"];

$usuario_nombre = $registro["usuario_nombre"];

$usuario = $registro["usuario"];

if (!isset($correo))

		{

			

			$mensaje = "El correo seleccionado, no esta inscrito en el sistema";

			header("Location: ../../index.php?menu=olvido_contrasena&mensaje=$mensaje");
		}



else {


header("Location: http://ledculture.com/php/ruben/tatu/enviar_olvido_contrasena.php?nombre=$usuario_nombre&email=$correo&contrasena=$contrasena");

 }
?>