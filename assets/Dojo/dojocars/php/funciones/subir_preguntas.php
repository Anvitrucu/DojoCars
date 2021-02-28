<?php 


 
		session_start();

		include ("conexion.php");

		include("cod_1.php");


 		$id_articulo = $_POST["id_producto"];

 		$correo_representante = $_POST["correo_representante"];

 		$id_cliente = $_POST["id_de_comprador"];

 		$id_vendedor = $_POST["id_de_vendedor"];
 

 		$pregunta  = utf8_decode(addslashes($_POST["pregunta"]));



$insertar1= "INSERT INTO `preguntas` (`id_preguntas`, `pregunta`, `id_comprador`, `id_vendedor`, `id_producto`) VALUES (NULL, '$pregunta', '$id_cliente', '$id_vendedor', '$id_articulo');";



		$ejecutar_consulta1 = $conexion->query($insertar1) or die ("no se subio");



		$consulta_articulo	 ="SELECT * FROM productos WHERE id_productos = '$id_articulo'";
		 
		$ejecutar_consulta_articulo = $conexion->query($consulta_articulo) or die ("No se ejecuto query");
		 
		$registro_articulo = $ejecutar_consulta_articulo ->fetch_assoc();
		 
	 
	 
		$nombre_producto = utf8_encode($registro_articulo["nombre_0"]);


 
 

		$destino = $correo_representante;

		$asunto = "Usted ha recibido una nueva pregunta";

		$comentario= "<html><center><img src='https://dojocars.com/img/DOJO_CARS_LOGO.png' style='width:15%;'></center> <center>Usted ha recibido una nueva pregunta en su artículo - <a target='_blank' href='https://dojocars.com/index.php?menu=servicios&id=".$id_articulo."'>".$nombre_producto." - </center><br><br>".$pregunta."<br><br>Lo invitamos a ponerse en contacto con su cliente y chequear los detalles en su panel administrativo  <br><br></center>  <br><br><center>Inicia sesion <a href='https://dojocars.com/tu_perfil.php?op=preguntas_recividas'>AQUI</a> para responder</center><br><br>www.dojocars.com";

		$emaildelusuarioqueloenvia = "Dojocars.com";

		$header = "FROM: ".$emaildelusuarioqueloenvia. "\r\n";

		$header .= "Content-Type: text/html; charset=UTF-8\r\n";

		mail($destino,$asunto,$comentario,$header);



 
 
	    header("location: ../../index.php?menu=servicios&id=$id_articulo");
		 

?>