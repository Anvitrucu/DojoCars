<?php 
include ("conexion.php");

$id_preguntas = $_GET["id_preguntas"];

$respuesta = utf8_decode(addslashes($_POST["respuesta"]));



		$consulta_pregunta	 ="SELECT * FROM preguntas WHERE 	id_preguntas = '$id_preguntas'";
		 
		$ejecutar_consulta_pregunta = $conexion->query($consulta_pregunta) or die ("No se ejecuto query");
		 
		$registro_pregunta = $ejecutar_consulta_pregunta ->fetch_assoc();
		 
		$id_comprador =  $registro_pregunta['id_comprador'] ;

		$id_producto =  $registro_pregunta['id_producto'] ;






		$consulta_articulo	 ="SELECT * FROM productos WHERE id_productos = '$id_producto'";
		 
		$ejecutar_consulta_articulo = $conexion->query($consulta_articulo) or die ("No se ejecuto query");
		 
		$registro_articulo = $ejecutar_consulta_articulo ->fetch_assoc();
		 
		$nombre_producto = utf8_encode($registro_articulo['nombre_0']);





		$busqueda_vendedor ="SELECT * FROM usuario WHERE id_usuario='$id_comprador'";

		$ejecutar_consulta_vendedor = $conexion->query($busqueda_vendedor);

		$arreglo_vendedor= $ejecutar_consulta_vendedor->fetch_assoc();

		$vendedor = $arreglo_vendedor['usuario_nombre'];	

		$usuario_vendedor = $arreglo_vendedor['usuario'];	

		$correo_vendedor = $arreglo_vendedor['correo'];	







		 $insertar1= "UPDATE `preguntas` SET `respuesta` = '$respuesta' WHERE `id_preguntas` = $id_preguntas;";


 


		$ejecutar_consulta1 = $conexion->query($insertar1) or die ("no se subio");



 

				$destino = $correo_vendedor;

		$asunto = "Answer to your question";

		$comentario= "<html><center><img src='https://dojocars.com/img/DOJO_CARS_LOGO.png' style='width:15%;'></center> <center> Your question in Article <a target='_blank' href='https://dojocars.com/index.php?menu=servicios&id=".$id_producto."'>".$nombre_producto."</a> has been answered  <br><br>Answer:<b> ".$respuesta." </b><br><br></center>  <br><br><center>www.Dojocars.com</center>";

		$emaildelusuarioqueloenvia = "Dojocars.com";

		$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

		$header .= "Content-Type: text/html; charset=UTF-8\r\n";

		mail($destino,$asunto,$comentario,$header);



		 

 header("location: ../../tu_perfil.php?op=preguntas_recividas");
		
 


?>